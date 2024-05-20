<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserProfileRequest;
use App\Http\Resources\PostResource;
use App\Http\Resources\UserResource;
use App\Models\Post;
use App\Models\User;
use function Laravel\Prompts\error;


class controllerHome extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('pages.login');
    }

    public function register()
    {
        return view('pages.register');
    }

    public function home(UserProfileRequest $request)
    {
        $res = new UserResource($request->user());

        $posts = Post::all();

        $postRes = PostResource::collection($posts);

        return view('pages.home')->with('user', $res->toJson(JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT))
            ->with('posts', $postRes->toJson(JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
    }
}
