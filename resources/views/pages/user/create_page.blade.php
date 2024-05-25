@extends('pages.template.template')

@section('content')
    <div class="bg-gray-100 w-full p-5">
        <h1 class="font-bold text-2xl mb-2">Create</h1>
        <div class="bg-white flex p-[50px] justify-center items-center">
            <a href="/create_post" class="mr-[20px]">
                <div
                    class="bg-gradient-to-bl from-[#193969] to-[#3170CF] w-[350px] h-[500px] rounded-2xl flex justify-center items-center">
                    <div class="flex flex-col p-[20px] justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-20 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                        <h1 class="text-white">Add Post</h1>
                    </div>
                </div>
            </a>
            <a href="">
                <div
                    class="bg-gradient-to-bl from-[#FF0000] to-[#990000] w-[350px] h-[500px] rounded-2xl flex justify-center items-center">
                    <div class="flex flex-col p-[20px] justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-20 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                        <h1 class="text-white">Add Reels</h1>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
