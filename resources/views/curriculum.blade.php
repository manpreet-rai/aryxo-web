@extends('layout')

@section('custom-head')
    <script>
        let localstorage = window.localStorage;
        window.onload = function () {
            let themeButton = document.getElementById('themeButton');
            let themeButtonMobile = document.getElementById('themeButtonMobile');
            if (localstorage.getItem('theme') === 'dark') {
                document.documentElement.className = "dark"
                themeButton.children[0].classList.remove('hidden');
                themeButtonMobile.children[0].classList.remove('hidden');
            } else {
                document.documentElement.className = "light"
                themeButton.children[1].classList.remove('hidden');
                themeButtonMobile.children[1].classList.remove('hidden');
            }
        }

        function toggleTheme() {
            let themeButton = document.getElementById('themeButton');
            let themeButtonMobile = document.getElementById('themeButtonMobile');
            if (localstorage.getItem('theme') === 'dark') {
                document.documentElement.className = "light"
                themeButton.children[0].classList.add('hidden');
                themeButtonMobile.children[0].classList.add('hidden');
                themeButton.children[1].classList.remove('hidden');
                themeButtonMobile.children[1].classList.remove('hidden');
                localstorage.setItem('theme', 'light');
            } else {
                document.documentElement.className = "dark"
                themeButton.children[0].classList.remove('hidden');
                themeButtonMobile.children[0].classList.remove('hidden');
                themeButton.children[1].classList.add('hidden');
                themeButtonMobile.children[1].classList.add('hidden');
                localstorage.setItem('theme', 'dark');
            }
        }
    </script>
@endsection

@section('content')

    <div class="py-20">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">

            <!-- Course Logo -->
            <div class="flex justify-center items-center pb-8">
                @include('logos.'.$course)
            </div>

            <!-- Course Contents -->
            @foreach($titles as $heading => $title)
                <div class="px-2 md:px-0 py-4 mt-4 md:mt-6">
                    <h1 class="text-site dark:text-white text-xl md:text-2xl font-semibold">Unit {{ $loop->iteration }}: {{ $heading }}</h1>

                    <ul class="text-siteLite dark:text-gray-300 text-md md:text-lg">
                        @foreach($title as $post)
                            <li><a class="hover:text-gem" href="{{ $course.'/'.Str::slug($post, '-') }}">{{ $post }}</a></li>
                        @endforeach
                    </ul>
                </div>
            @endforeach

        </div>
    </div>

@endsection

@include($seo)
