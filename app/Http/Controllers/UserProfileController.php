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

class UserProfileController extends Controller
{
    public function update(UserProfileRequest $request)
    {
        $request->validate([
            'full_name' => ['string'],
            'bio' => ['string'],
            'avatar_url' => ['image', 'max:2048']
        ]);
        if($request->has('avatar_url')){
            $image_path = 'public/images/avatar/';
            $file = $request->file('avatar_url');
            $file->storeAs($image_path, $request->user()->id . '.jpg');
            $image_path = 'img/avatar/' . $request->user()->id . '.jpg';
        }

        $profile = UserProfile::getEntryByUserId($request->user()->id);
        if($profile){
            if($request->has('full_name')) $profile->full_name = $request->full_name;
            if($request->has('bio')) $profile->bio = $request->bio;
            if($request->has('avatar_url')) $profile->avatar_url = $image_path;


            $profile->save();
        }

        return response()->redirectToRoute('user.profile');
    }

    public function show(UserProfileRequest $request)
    {
        $user = User::getEntryById($request->user()->id);
        $res = new UserResource($user);

//        return response()->json([
//            'data' => $res,
//        ]);

        return view('pages.user.user_profile')->with('data', $res->toJson())->with('avatar_url', $res->user_profile->avatar_url);
    }
}
