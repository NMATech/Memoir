<?php

namespace App\Http\Controllers;

use App\Enums\Relationship;
use App\Http\Requests\UserProfileRequest;
use App\Http\Resources\PostResource;
use App\Http\Resources\UserProfileResource;
use App\Http\Resources\UserResource;
use App\Models\Post;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\UserRelationship;
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
        if($request->has('header')){
            $image_path = 'public/images/avatar/';
            $file = $request->file('avatar_url');
            $file->storeAs($image_path, $request->user()->id . '.jpg');
            $image_path = 'img/avatar/' . $request->user()->id . '.jpg';
        }

        $profile = UserProfile::getEntryByUserId($request->user()->id);
        if($profile){
            if($request->has('full_name')) $profile->full_name = $request->full_name;
            if($request->has('bio')) $profile->bio = $request->bio;
            if($request->has('avatar_url')) $profile->avatar_url = '/' . $image_path;


            $profile->save();
        }

        return response()->redirectToRoute('user.profile');
    }

    public function view(UserProfileRequest $request)
    {
        $user = User::getEntryById($request->user()->id);
        $res = new UserResource($user);
        $posts = Post::query()->where('user_id', $request->id)->get();
        $postRes = PostResource::collection($posts);

        return view('pages.user.user_profile')->with('user', $res->toJson(JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT))
            ->with('posts', $postRes->toJson(JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT));
    }

    public function show(UserProfileRequest $request, $id)
    {
        $user = User::getEntryById($id);
        $res = new UserResource($user);
        $posts = Post::query()->where('user_id', $id)->get();
        $postRes = PostResource::collection($posts);

        $relationship = UserRelationship::query()->where('from', $request->user()->id)
            ->where('to', $id)->first();
        $isBlocked = false;
        $isFollowed = false;
        if($relationship){
            switch ($relationship->status){
                case Relationship::FRIEND->value:
                case Relationship::FOLLOWING->value:
                    $isFollowed = true;
                    break;
                case Relationship::BLOCKED->value:
                    $isBlocked = true;
                    break;
                default:
                    break;
            }
        }

        return view('pages.user.user_profile')->with('user', $res->toJson(JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT))
            ->with('posts', $postRes->toJson(JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT))
            ->with('blocked', $isBlocked)
            ->with('followed', $isFollowed);
    }
}
