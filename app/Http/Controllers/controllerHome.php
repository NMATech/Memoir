<?php

namespace App\Http\Controllers;

use App\Enums\Relationship;
use App\Http\Requests\UserProfileRequest;
use App\Http\Resources\PostResource;
use App\Http\Resources\UserRelationshipResource;
use App\Http\Resources\UserResource;
use App\Models\Post;
use App\Models\User;
use App\Models\UserRelationship;
use Illuminate\Database\Eloquent\Collection;
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

        $friends = UserRelationship::query()->where('status', Relationship::FRIEND->value)
            ->where('from', $request->user()->id)
            ->get();
        $friendsRes = UserRelationshipResource::collection($friends);

        return view('pages.home')->with('user', $res->toJson(JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT))
            ->with('posts', $postRes->toJson(JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT))
            ->with('friends', $friendsRes->toJson(JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
    }
}
