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
    <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 py-20">

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

        <!-- Navigation Buttons -->
        <div class="flex w-full justify-center md:justify-end pt-6 px-2 md:px-0 text-siteLite dark:text-gray-300 text-lg md:text-xl font-medium">
            <a href="{{ $course.'/'.Str::slug($chapters[0], '-') }}" class="hover:text-gem inline-flex justify-between items-center space-x-2">
                <span>{{ $chapters[0] }}</span>
                <span>
                    <svg class="w-6 h-6" viewBox="0 0 24 24">
                        <path d="M4 11v2h12l-5.5 5.5l1.42 1.42L19.84 12l-7.92-7.92L10.5 5.5L16 11H4z" fill="currentColor" />
                    </svg>
                </span>
            </a>
        </div>

    </div>
@endsection

@include($seo)
