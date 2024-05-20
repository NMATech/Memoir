@extends('pages.template.template')

@section('content')
{{--    uncomment to see all included data--}}
{{--    <pre>$posts: {{ var_dump($posts) }}</pre>--}}

{{--    example --}}
{{--@foreach(json_decode($posts) as $post)--}}
{{--    <p>Post title: {{ $post->title }}</p>--}}
{{--    @foreach($post->comments as $comment)--}}
{{--        <p>Comment: {{ $comment->comment_message }}</p>--}}
{{--    @endforeach--}}
{{--@endforeach--}}


@php($user = json_decode($user))

<div class="mt-4">
        <h1 class="font-bold text-2xl">Stories</h1>
    </div>
    <div class="flex gap-3">
        {{-- Stories --}}
        <div class="pt-2">
            <div class="flex relative w-[150px] h-[200px] bg-gray-500 border border-black rounded-lg">
                <div
                    class="flex h-full justify-center items-center bg-white items-center gap-[3px] p-2 absolute bottom-0 w-[100%]">
                    <div class="w-[50px] h-[50px] rounded-full">
                        <img src="{{ asset('src/img/adam.jpeg') }}" alt=""
                            class="w-[100%] h-[100%] object-cover rounded-full">
                    </div>
                    <div
                        class="bg-gray-600 flex opacity-[5px] justify-center items-center absolute w-[50px] h-[50px] rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-7 h-7 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-2">
            <div class="flex relative w-[150px] h-[200px]">
                <img src="{{ asset('src/img/womanImage.jpg') }}" alt=""
                    class="w-[100%] h-[100%] object-cover rounded-lg">
                <div class="flex justify-center items-center gap-[3px] p-2 absolute bottom-0 w-[100%]">
                    <div class="w-[30px] h-[30px] rounded-full">
                        <img src="{{ asset('src/img/adam.jpeg') }}" alt=""
                            class="w-[100%] h-[100%] object-cover rounded-full">
                    </div>
                    <div class="bg-white/50 backdrop-blur-sm p-1 rounded-full">
                        <h1 class="font-bold text-md">adamNgawir</h1>
                    </div>
                </div>
            </div>
        </div>
        {{-- Stories End --}}
    </div>

    {{-- Post --}}
    <div>
        <div class="mt-3">
            <h1 class="font-bold text-2xl">Recent Post</h1>
        </div>
        <div class="pt-2">
            <div class="w-[620px] shadow-2xl">
                <div class="flex items-stretch">
                    <img src="{{ asset('src/img/womanImage.jpg') }}" alt=""
                        class="rounded-tl-2xl w-[573px] h-[300px] object-cover">
                    <div class="flex flex-col justify-center items-center gap-[20px] p-2">
                        <div class="flex flex-col justify-center items-center">
                            <button class="hover:cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-8 h-8 hover:fill-current hover:text-rose-600 text-2xl">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                </svg>
                            </button>
                            <p class="font-semibold text-xs">10</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                        </svg>
                    </div>
                </div>
                <div class="flex justify-around w-[573px]">
                    <div class="flex w-[15%] justify-center rounded-full pt-3">
                        <img src="{{ asset('src/img/cancan.jpeg') }}" alt=""
                            class="w-[60px] h-[60px] object-cover rounded-full">
                    </div>
                    <div class="w-[85%] p-2">
                        <h1 class="text-xl">bocahSunda</h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat aliquid fugit enim
                            commodi accusamus eius sunt voluptates perferendis earum molestias? At ut, dolor
                            beatae assumenda totam obcaecati expedita provident cupiditate!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Post End --}}

    {{-- Card friend --}}
    <div class="w-[400px] absolute right-0 p-3 shadow-xl">
        <div class="mt-3 p-2">
            <h1 class="font-bold text-xl">Friends</h1>
        </div>
        <div class="flex p-2">
            <div>
                <img src="{{ asset('src/img/hanip.jpeg') }}" alt=""
                    class="w-[50px] h-[50px] object-cover rounded-full">
            </div>
            <div class="ml-5 w-[70%]">
                <h4 class="text-xl">hanipp</h4>
                <h4 class="text-md">Current Active</h4>
            </div>
            <div class="flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                </svg>
            </div>
        </div>
        <div class="flex p-2">
            <div>
                <img src="{{ asset('src/img/cancan.jpeg') }}" alt=""
                    class="w-[50px] h-[50px] object-cover rounded-full">
            </div>
            <div class="ml-5 w-[70%]">
                <h4 class="text-xl">bocahSunda</h4>
                <h4 class="text-md">Current Active</h4>
            </div>
            <div class="flex justify-center items-center">
                <button id="btnDm" onclick="showCard('dm')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="flex p-2">
            <div>
                <img src="{{ asset('src/img/adam.jpeg') }}" alt=""
                    class="w-[50px] h-[50px] object-cover rounded-full">
            </div>
            <div class="ml-5 w-[70%]">
                <h4 class="text-xl">adamNgawir</h4>
                <h4 class="text-md">Current Active</h4>
            </div>
            <div class="flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                </svg>
            </div>
        </div>
        <div class="flex p-2">
            <div>
                <img src="{{ asset('src/img/akbar.jpeg') }}" alt=""
                    class="w-[50px] h-[50px] object-cover rounded-full">
            </div>
            <div class="ml-5 w-[70%]">
                <h4 class="text-xl">iniakbar</h4>
                <h4 class="text-md">Current Active</h4>
            </div>
            <div class="flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                </svg>
            </div>
        </div>
    </div>
    {{-- Card friend end --}}

    {{-- Container dm --}}
    <div class="w-[390px] h-[540px] flex-col fixed bottom-[10px] right-[50px] shadow-xl bg-white" id="containerDm"
        style="display: none; transition: transform 1s ease-out;">
        <div class="flex w-[100%] border border-end">
            <div class="w-[70%] flex justify-start items-center p-3">
                <img src="{{ asset('src/img/cancan.jpeg') }}" alt=""
                    class="w-[50px] h-[50px] object-cover rounded-full mr-2">
                <div>
                    <h1 class="text-xl">bocahSunda</h1>
                    <h1 class="text-md">Recent Active</h1>
                </div>
            </div>
            <div class="flex justify-around items-center p-2">
                <button class="ms-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 fill-current text-[#193969]">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                    </svg>
                </button>
                <button class="ms-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 fill-current text-[#193969]">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>
                </button>
                <button class="ms-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 fill-current text-[#193969]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                    </svg>
                </button>
                <button class="ms-5" onclick="closeCard('dm')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 fill-current text-[#193969]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="h-[80%] mt-5">
            <div class="bg-[#D9D9D9] rounded-xl p-2 w-max m-3 ms-4">
                <h1 class="">Din, papkeun tugas</h1>
            </div>
            <div class="bg-[#89b5fa] rounded-xl p-2 w-max m-3 ms-[17em]">
                <h1>Tf heula 10k</h1>
            </div>
        </div>
        <div class="flex justify-around items-center p-2">
            <input type="file" id="fileUpload" style="display:none;" />
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-7 h-7 text-[#193969]">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-7 h-7 text-[#193969]">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Zm3.75 11.625a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                </svg>
            </button>
            <button onclick="closedm()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-7 h-7 text-[#193969]">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                </svg>
            </button>
            <input type="text" class="bg-[#dedede] rounded-full" placeholder=". . .">
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-7 h-7 text-[#193969]">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                </svg>
            </button>
        </div>
    </div>
    {{-- Container dm end --}}
@endsection
