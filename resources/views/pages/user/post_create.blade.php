@extends('pages.template.template')

@section('content')
    <form action="post" method="post" enctype="multipart/form-data">
        @csrf

        <label for="title">Title</label>
        <input type="text" name="title" id="title"> <br>

        <label for="desc">Content</label>
        <input type="text" name="desc" id="desc"> <br>

        <label for="header">Image</label>
        <input type="file" name="header" id="header"> <br><br>

        @php($err = (array($errors->post->all())[0]))
        @if(count($err) > 0)
            <p id="textError" class="text-red-600 font-bold">{{ $err[0] }}</p>
        @endif

        <button type="submit">Submit</button>
    </form>
@endsection
