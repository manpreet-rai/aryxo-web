@props(['error'])

@extends('layout')

@section('custom-head')
    @include('scripts.custom-head')
@endsection

@section('content')

    <div class="flex py-36 md:py-48 lg:py-56 items-center">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">

            <!-- Error Code -->
            <div class="flex justify-center items-center pb-2">
                <h1 class="text-9xl text-gray-800 dark:text-gray-50 font-bold">{{ $error['code'] }}</h1>
            </div>

            <!-- Error Description -->
            <div class="px-8 py-4">
                <h1 class="text-gray-800 dark:text-gray-50 text-lg md:text-xl font-semibold text-center">{{ $error['description'] }}</h1>
            </div>

            <div class="px-8 py-4 mt-12">
                <h1 class="text-gray-600 dark:text-gray-400 text-lg md:text-xl dm-serif text-center">{{ \Illuminate\Foundation\Inspiring::quote() }}</h1>
            </div>
        </div>
    </div>

@endsection
