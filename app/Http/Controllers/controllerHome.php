<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserProfileRequest;
use App\Http\Resources\UserResource;
use App\Models\User;


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

    public function createPage(UserProfileRequest $request)
    {
        $user = User::getEntryById($request->user()->id);
        $res = new UserResource($user);

        return view('pages.user.create_page')->with('data', $res->toJson())->with('avatar_url', $res->user_profile->avatar_url);
    }

    public function createPost(UserProfileRequest $request)
    {
        $user = User::getEntryById($request->user()->id);
        $res = new UserResource($user);

        return view('pages.user.create.create_post')->with('data', $res->toJson())->with('avatar_url', $res->user_profile->avatar_url)->with('user_name', $res->user_name);
    }

    public function otherProfile(UserProfileRequest $request)
    {
        $user = User::getEntryById($request->user()->id);
        $res = new UserResource($user);

        return view('pages.user.other_user_profile')->with('data', $res->toJson())->with('avatar_url', $res->user_profile->avatar_url);
    }

    public function home(UserProfileRequest $request)
    {
        $user = User::getEntryById($request->user()->id);
        $res = new UserResource($user);

        return view('pages.home')->with('data', $res->toJson())->with('avatar_url', $res->user_profile->avatar_url);
    }
}
