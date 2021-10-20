@extends('layout')

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

@include('sitemap.sitemap-contents')
