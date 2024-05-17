<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
</head>
<body>
{{--uncomment to see what key value i included--}}
{{--    <p>{{ var_dump($data) }}</p>--}}
{{--    <p>{{ var_dump($avatar_url) }}</p>--}}
{{--to access it--}}
{{--    <p>{{ (json_decode($data))->user_id }}</p>--}}

{{--access avatar image--}}
<img src="{{ $avatar_url }}">
<h1>User Profile</h1>
<form action="/user_profile" method="post" enctype="multipart/form-data">
    @csrf
    {{--    full name; TODO change default value--}}
    <input type="text" id="full_name" name="full_name">
    <br>
    {{--    bio; TODO change default value--}}
    <input type="text" id="bio" name="bio">
    <br>
    {{--    avatar (user icon); TODO change default value--}}
    <input type="file" id="avatar_url" name="avatar_url">
    <br>
    <button type="submit">Submit</button>
</form>
</body>
</html>
