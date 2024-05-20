<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResource;
use App\Http\Resources\UserResource;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //TODO scramble egg
        $posts = Post::all();

        return PostResource::collection($posts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $post = new Post();

        if($request->file('header')) {
            $image_path = 'public/images/post/' . $request->user()->email . '/';
            Storage::disk('local')->put($image_path, $request->file('header'));
            $post->header_url = '/' . $image_path . $request->file('header')->hashName();
        }else{
            $post->header_url = null;
        }

        $post->user_id = $request->user()->id;
        $post->title = $request->title;
        $post->content = $request->desc;

        $post->save();

        return response()->redirectToRoute('user.profile');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $post = Post::query()->where('id', $id)->first();
        $user = $request->user();
        if($post) {
            return view('pages.user.post_show')->with('post', (new PostResource($post))->toJson(JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT))
                ->with('user', (new UserResource($user))->toJson(JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
            $user = User::getEntryById($request->user()->id);
            $postRes = PostResource::collection($posts);

            return view('pages.user.user_profile')->with('user', $res->toJson(JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT))->with('avatar_url', $res->user_profile->avatar_url)
                ->with('posts', $postRes->toJson(JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
        }

        return response('post id not found', 400);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, string $id)
    {
        $post = Post::query()->where('id', $id)->first();
        if($post) {
            if($request->user()->id == $post->user_id) {
                if ($request->has('title')) $post->title = $request->title;
                if ($request->has('desc')) $post->content = $request->desc;

                $post->save();
                return new PostResource($post);
            }
        }

        return response('post id not found', 400);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $post = Post::query()->where('id', $id)->first();

        if($post) {
            if($request->user() == $post->user_id) {
                $post->delete();

                return response('ok', 200);
            }
        }

        return response('post id not found', 400);
    }

    public function view(Request $request)
    {
        $userRes = new UserResource($request->user());

        return view('pages.user.post_create')->with('user', $userRes);
    }
}
