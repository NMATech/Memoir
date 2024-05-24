@extends('pages.template.template')


@section('content')

    @php($user = json_decode($user))
    @if(isset($search))
        @php($search = json_decode($search))
        @foreach($search as $obj)
            <br><br>
            <pre>{{ var_dump($obj) }}</pre>
            <br><br>
        @endforeach
    @endif

@endsection
