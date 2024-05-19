<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserProfileRequest;
use App\Http\Resources\UserProfileResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function Laravel\Prompts\error;
use function MongoDB\BSON\toJSON;

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
        $user = User::getEntryById($request->user()->id);
        $res = new UserResource($user);

        return view('pages.home')->with('data', $res->toJson())->with('avatar_url', $res->user_profile->avatar_url);
    }
}