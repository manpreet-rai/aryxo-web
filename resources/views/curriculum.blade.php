@extends('layout')

@section('title')
    <title>Aryxo | {{ Str::upper($course) }}</title>
@endsection

@section('script')
    <script>
        let localstorage = window.localStorage;
        window.onload = function () {
            let themeButton = document.getElementById('themeButton');
            if (localstorage.getItem('theme') === 'dark') {
                document.body.classList.add('dark');
                themeButton.children[1].classList.add('hidden');
                themeButton.children[2].classList.remove('hidden');
            } else {
                document.body.classList.remove('dark');
                themeButton.children[1].classList.remove('hidden');
                themeButton.children[2].classList.add('hidden');
            }
        }

        function toggleTheme() {
            let themeButton = document.getElementById('themeButton');
            if (localstorage.getItem('theme') === 'dark') {
                document.body.classList.remove('dark');
                themeButton.children[1].classList.remove('hidden');
                themeButton.children[2].classList.add('hidden');
                localstorage.setItem('theme', 'light');
            } else {
                document.body.classList.add('dark');
                themeButton.children[1].classList.add('hidden');
                themeButton.children[2].classList.remove('hidden');
                localstorage.setItem('theme', 'dark');
            }
        }
    </script>
@endsection

@section('content')

    <div class="bg-gray-50 dark:bg-gray-900 py-20">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">

            <!-- Course Logo -->
            <div class="flex justify-center items-center pb-8">
                <div class="bg-gray-100 dark:bg-gray-800 shadow-md p-8 rounded-full">
                    {!! $logo !!}
                </div>
            </div>

            <!-- Course Contents -->
            @foreach($titles as $heading => $title)
                <div class="bg-gray-100 dark:bg-gray-800 shadow-md px-8 py-4 rounded-xl mt-12">
                    <h1 class="text-gray-800 dark:text-gray-50 text-lg md:text-xl font-semibold">Unit {{ $loop->iteration }}: {{ $heading }}</h1>

                    <ul class="list-disc list-inside text-gray-600 dark:text-gray-300">
                        @foreach($title as $post)
                            <li><a class="hover:underline" href="{{ $course.'/'.Str::slug($post, '-') }}">{{ $post }}</a></li>
                        @endforeach
                    </ul>
                </div>
            @endforeach

            <div class="flex mt-12">
                <a class="bg-gray-100 dark:bg-gray-800 shadow-md px-8 py-4 rounded-xl" href="{{ $course.'/'.Str::slug($titles['Introduction'][0], '-') }}">
                    <span class="text-gray-700 dark:text-gray-200 ">Next &gt;</span><br>
                    <span class="text-gray-600 dark:text-gray-300 text-lg">{{ $titles['Introduction'][0] }}</span>
                </a>
            </div>

            <div class="flex bg-gray-100 dark:bg-gray-800 shadow-md px-8 py-4 rounded-xl mt-12">
                <a class="flex flex-col" href="">

                </a>
            </div>
        </div>
    </div>

@endsection
