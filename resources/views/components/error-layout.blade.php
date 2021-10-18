@props(['error'])

@extends('layout')

@section('title')
    <title>Aryxo | {{ $error['title'] }}</title>
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

    <div class="bg-gray-50 dark:bg-gray-900 py-48 h-screen">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">

            <!-- Error Code -->
            <div class="flex justify-center items-center pb-8">
                <h1 class="text-9xl text-gray-800 dark:text-gray-50 font-bold">{{ $error['code'] }}</h1>
            </div>

            <!-- Error Description -->
            <div class="bg-gray-100 dark:bg-gray-800 shadow-md px-8 py-4 rounded-xl mt-12">
                <h1 class="text-gray-800 dark:text-gray-50 text-lg md:text-xl font-semibold text-center">{{ $error['description'] }}</h1>
            </div>

            <div class="px-8 py-4 mt-12">
                <h1 class="text-gray-600 dark:text-gray-400 text-lg md:text-xl dm-serif text-center">{{ \Illuminate\Foundation\Inspiring::quote() }}</h1>
            </div>
        </div>
    </div>

@endsection
