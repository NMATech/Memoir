<?php

namespace App\Http\Controllers;

use App\Enums\Relationship;
use App\Models\User;
use App\Models\UserRelationship;
use Illuminate\Http\Request;

class UserRelationshipController extends Controller
{
//    public function indexFriend(Request $request)
//    {
//        $friends = UserRelationship::query()->where('status', Relationship::FRIEND->name)
//            ->where('from', $request->user()->id)
//            ->get();
//        $users = User::query()->where('id', $friends->to)->get();
//
//        return UserResource::collection($users);
//    }
//
    public function followUser(Request $request, $id)
    {
        $user = User::getEntryById($id);

        //  toggle
        $query = UserRelationship::query()->where('from', $request->user()->id)
            ->where('to', $user->id)->first();
        if($query){
            if($query->status == Relationship::FOLLOWING->value || $query->status == Relationship::FRIEND->value){
                UserRelationship::unfollow($request->user()->id, $user->id);
            }
            return response()->redirectTo('/user_profile/' . $id);
        }

        if($user && $user->id != $request->user()->id) {
            $friend = new UserRelationship();
            $friend->from = $request->user()->id;
            $friend->to = $id;
            $friend->status = Relationship::FOLLOWING;

            $friendInv = UserRelationship::query()->where('from', $id)
                ->where('to', $request->user()->id)->where('status', Relationship::FOLLOWING)->first();
            if($friendInv) {
                $friend->status = Relationship::FRIEND;
                $friendInv->status = Relationship::FRIEND;
                $friendInv->save();
            }

            $friend->save();

            return response()->redirectTo('/user_profile/' . $id);
        }else{
            return response()->redirectToRoute('home');
        }
    }

    public function blockUser(Request $request, $id)
    {
        $user = User::getEntryById($id);

        //  toggle
        $query = UserRelationship::query()->where('from', $request->user()->id)
            ->where('to', $user->id)->first();
        if($query){
            if($query->status == Relationship::BLOCKED->value){
                UserRelationship::unfollow($request->user()->id, $user->id);
            }
            return response()->redirectTo('/user_profile/' . $id);
        }

        if($user && $user->id != $request->user()->id) {
            $friend = new UserRelationship();
            $friend->from = $request->user()->id;
            $friend->to = $id;
            $friend->status = Relationship::BLOCKED;
            $friend->save();

            return response()->redirectTo('/user_profile/' . $id);
        }else{
            return response()->redirectToRoute('home');
        }
    }
}
