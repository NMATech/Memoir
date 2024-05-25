@extends('pages.template.template')

@section('content')
    <div class="bg-gray-100 w-full p-5">
        <h1 class="font-bold text-2xl mb-2">Create</h1>
        <div class="bg-white flex p-[50px] justify-center items-center">
            <div class="bg-white rounded-2xl shadow-2xl">
                <div class="w-full flex justify-center border border-black rounded-tl-2xl rounded-tr-2xl items-center">
                    <h1 class="text-center">Create New Post</h1>
                    <h1 class="text-[#193969] ml-[50px] font-bold">Share</h1>
                </div>
                <div class="flex">
                    <div class="mt-[50px] mb-[50px]">
                        <img src="{{ asset('src/img/womanImage.jpg') }}" alt="" class="h-[300px] object-cover">
                    </div>
                    <div class="bg-gray-100 w-[350px] p-5">
                        <div class="flex p-2 justify-start items-center gap-2">
                            <img src="{{ $avatar_url }}" alt="" srcset=""
                                class="w-[30px] h-[30px] rounded-full object-cover">
                            <h1 class="font-bold">{{ json_decode($data)->user_name }}</h1>
                        </div>
                        <input type="text" class="w-full bg-gray-100 border-none mt-2" placeholder="write a caption ...">
                        <div class="mt-[150px]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.182 15.182a4.5 4.5 0 0 1-6.364 0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />
                            </svg>
                        </div>
                        <div class="border-t border-b border-black mt-[10px]">
                            <h1>Add Location</h1>
                        </div>
                        <div class="border-b border-black">
                            <h1>Add Filter</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
