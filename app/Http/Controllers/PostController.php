<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResource;
use App\Http\Resources\UserResource;
use App\Models\Post;
use App\Models\User;
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
        if($request->file('header')) {
            $image_path = 'public/images/post/' . $request->user()->email . '/';
            Storage::disk('local')->put($image_path, $request->file('header'));

            $post = new Post();
            $post->user_id = $request->user()->id;
            $post->header_url = $image_path . $request->file('header')->hashName();
            $post->title = $request->title;
            $post->content = $request->desc;

            $post->save();

            return new PostResource($post);
        }

        return response('not ok', 400);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::query()->where('id', $id)->first();

        if($post) {
            return new PostResource($post);
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
            if($request->has('title')) $post->title = $request->title;
            if($request->has('desc')) $post->content = $request->desc;

            $post->save();
            return new PostResource($post);
        }

        return response('post id not found', 400);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::query()->where('id', $id)->first();

        if($post) {
            $post->delete();

            return response('ok', 200);
        }

        return response('post id not found', 400);
    }
}
