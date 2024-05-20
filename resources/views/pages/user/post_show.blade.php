@extends('pages.template.template')

@section('content')

@php
    $user = json_decode($user);
    $post = json_decode($post);
@endphp


<div>
    @if(isset($post->header_url))
        <img src="{{$post->header_url}}">
    @endif
    <h4>{{ $post->title }}</h4>
    <p>{{ $post->content }}</p>

        <div style="border-style: solid; border-width: 2px">
    <h5>Comments: </h5>
    @foreach($post->comments as $comment)
{{--        see 'CommentResource'--}}
        <p>from: {{ $comment->owner->user_name }}</p>
        <p>{{ $comment->comment_message }}</p>
    @endforeach
        </div>
    <br>
    <form action="/comment" method="post">
        @csrf
        <input type="hidden" name="post_id" value="{{ $post->id }}">

        <label for="message">Comment: </label>
        <input type="text" name="message" id="message">

        <button type="submit">Send</button>
    </form>
</div>
@endsection
