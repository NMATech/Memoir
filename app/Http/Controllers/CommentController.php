<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Http\Resources\CommentResource;
use App\Http\Resources\PostResource;
use App\Http\Resources\UserResource;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($post_id)
    {
        $comments = Post::query()->find($post_id)->comment()->get();
        return CommentResource::collection($comments);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentRequest $request, $post_id)
    {
        $comment = new Comment();
        $comment->post_id = $request->post_id;
        $comment->message = $request->message;
        $comment->save();

        return new CommentResource($comment);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comment = Comment::query()->find($id);

        return new CommentResource($comment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CommentRequest $request, string $id)
    {
        $comment = Comment::query()->find($id);

        if($comment) {
            $owner = new UserResource((new PostResource($comment->post))->user);

            if ($owner->id == $request->user()->id) {
                $comment->message = $request->message;
                $comment->save();
                return new CommentResource($comment);
            } else {
                return response('unauthorized', 200);
            }
        }
        return response('not exist', 400);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CommentRequest $request, string $id)
    {
        $comment = Comment::query()->find($id);

        if($comment) {
            $owner = new UserResource((new PostResource($comment->post))->user);

            if ($owner->id == $request->user()->id) {
                $comment->delete();
                return response('ok', 200);
            } else {
                return response('unauthorized', 200);
            }
        }

        return response('not exist', 400);
    }
}
