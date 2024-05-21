@extends('pages.template.template')

@section('content')
    {{-- uncomment to see what key value i included --}}
    {{-- <pre>{{ var_dump($user) }}</pre> <br> --}}
{{--     <pre>$posts: {{ var_dump($posts) }}</pre>--}}

{{--    decode--}}
@php
    $user = json_decode($user);
    $posts = json_decode($posts);
@endphp

{{--    Logout--}}
    <form action="/user/logout" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>

    <div class="">
        <div class="p-2">
            <div class="flex p-3">
                <img src="{{ $user->user_profile->avatar_url }}" class="w-[220px] h-[220px] rounded-full object-cover ml-[100px]">
                <div class="w-[50%] flex flex-col justify-center items-center gap-[10px] ml-[150px]">
                    <div class="w-full flex justify-center items-center h-[25%]">
                        <h1 class="text-3xl">{{ $user->user_name }}</h1>
                    </div>
                    <div class="w-full flex justify-around items-center w-[50%] h-[25%]">
                        <div class="w-[25%] text-center">
                            <h1 class="text-2xl font-bold">01</h1>
                            <h1 class="text-lg">Post</h1>
                        </div>
                        <div class="w-[25%] text-center">
                            <h1 class="text-2xl font-bold">351</h1>
                            <h1 class="text-lg">Followers</h1>
                        </div>
                        <div class="w-[25%] text-center">
                            <h1 class="text-2xl font-bold">1,945</h1>
                            <h1 class="text-lg">Following</h1>
                        </div>
                    </div>
                    <div class="w-[80%] p-2 mx-auto mt-3">
                        <h1 class="text-xl">{{ $user->user_profile->full_name }}</h1>
                        <h1 class="text-lg">{{ $user->user_profile->bio }}</h1>

                        <div class="flex justify-end">
                            <button
                                class="bg-[#193969]/50 px-[16px] py-[12px] rounded-tl-xl rounded-br-xl text-black text-md hover:text-white hover:bg-[#193969] shadow-xl"
                                onclick="showCard('edit_profile')">
                                Edit profile
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-[70%] mx-auto mt-3 p-2">
                <div class="bg-[#193969]/20 w-max rounded-full border border-black">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-[80px] h-[80px]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap gap-[10px] justify-start items-center w-[90%] mx-auto p-3">
            {{-- Looping here for image post --}}
            <div>
                <img src="{{ asset('src/img/womanImage.jpg') }}" alt=""
                    class="w-[211px] h-[211px] object-cover rounded-xl">
            </div>
            {{-- Looping end --}}
        </div>

    </div>
    <div class="bg-[#dedede] absolute w-[40%] right-0 shadow-2xl rounded-xl" id="containerEditProfile"
        style="display: none;">
        <div class="p-5">
            <div class="flex justify-between items-center">
                <h1 class="font-bold text-xl">Edit Profile</h1>
                <button onclick="closeCard('edit_profile')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 fill-current text-[#193969]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <form action="/user_profile" method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex justify-between items-center mt-3 p-2 border border-black rounded-2xl">
                    <img src="{{ $user->user_profile->avatar_url }}" alt="" class="w-[70px] h-[70px] object-cover rounded-full">
                    <div class="flex justify-center items-center">
                        <label for="avatar_url"
                            class="bg-[#193969]/50 hover:bg-[#193969] w-max py-[5px] px-[10px] text-black hover:text-white cursor-pointer rounded-xl">
                            Change Photo
                        </label>
                        <input type="file" id="avatar_url" name="avatar_url" class="hidden">
                    </div>
                </div>
                <span id="file-chosen" class="ml-3 text-black"></span>
                <h1 class="font-bold text-lg mt-3">Email</h1>
                <div class="flex mt-3">
                    <input type="email" value="{{ $user->user_email }}"
                        class="bg-[#dedede] border border-black rounded-2xl w-full p-2" disabled>
                </div>
                <h1 class="font-bold text-lg mt-3">Fullname</h1>
                <div class="flex mt-3">
                    <input type="text" value="{{ $user->user_profile->full_name }}"
                        class="bg-[#dedede] border border-black focus:border-[#193969] focus:bg-[#cecece] rounded-2xl w-full p-2"
                        id="full_name" name="full_name">
                </div>
                <h1 class="font-bold text-lg mt-3">Bio</h1>
                <div class="flex mt-3">
                    <input type="text" value="{{ $user->user_profile->bio }}"
                        class="bg-[#dedede] border border-black focus:border-[#193969] focus:bg-[#cecece] rounded-2xl w-full p-2"
                        id="bio" name="bio">
                </div>
                <div class="w-full flex justify-center items-center p-2 mt-3">
                    <button type="submit"
                        class="bg-[#193969]/50 hover:bg-[#193969] w-max py-[5px] px-[10px] text-black hover:text-white cursor-pointer rounded-xl">Save
                        Changes</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('avatar_url').addEventListener('change', function() {
            var fileName = this.files[0].name;
            document.getElementById('file-chosen').textContent = fileName;
        });
    </script>
@endsection
