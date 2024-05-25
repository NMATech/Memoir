@extends('pages.template.template')

@section('content')
    {{-- uncomment to see what key value i included --}}
    {{-- <p>{{ var_dump($data) }}</p> <br> --}}
    {{-- <p>{{ var_dump($avatar_url) }}</p> <br> --}}
    {{-- to access it --}}
    {{-- <p>{{ json_decode($data)->user_id }}</p> --}}

    {{-- access avatar image --}}

    <div class="">
        <div class="p-2">
            <div class="flex p-3">
                <img src="{{ asset('src/img/akbar.jpeg') }}" class="w-[220px] h-[220px] rounded-full object-cover ml-[100px]">
                <div class="w-[50%] flex flex-col justify-center items-center gap-[10px] ml-[150px]">
                    <div class="w-full flex justify-center items-center h-[25%]">
                        <h1 class="text-3xl">iniakbar</h1>
                    </div>
                    <div class="w-full flex justify-around items-center w-[50%] h-[25%]">
                        <div class="w-[25%] text-center">
                            <h1 class="text-2xl font-bold">01</h1>
                            <h1 class="text-lg">Post</h1>
                        </div>
                        <div class="w-[25%] text-center">
                            <h1 class="text-2xl font-bold">6,969</h1>
                            <h1 class="text-lg">Followers</h1>
                        </div>
                        <div class="w-[25%] text-center">
                            <h1 class="text-2xl font-bold">1,945</h1>
                            <h1 class="text-lg">Following</h1>
                        </div>
                    </div>
                    <div class="w-[80%] p-2 mx-auto mt-3">
                        <h1 class="text-xl">Rifky Akbar</h1>
                        <h1 class="text-lg">Karena aku adalah yin</h1>

                        <div class="flex justify-end">
                            <button
                                class="bg-[#193969]/50 px-[16px] py-[12px] rounded-tl-xl rounded-br-xl text-black text-md hover:text-white hover:bg-[#193969] shadow-xl">
                                Follow
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
@endsection
