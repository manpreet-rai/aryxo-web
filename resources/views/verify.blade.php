@extends('layout')

@section('custom-head')
    @include('scripts.custom-head')
@endsection

@section('content')
    <div class="min-h-80 max-w-7xl mx-auto px-4 md:px-6 lg:px-8 py-20">
        <div class="text-center py-12">
            <h1 class="text-site dark:text-white text-2xl sm:text-3xl lg:text-5xl dm-serif font-normal">Verify Certificate</h1>
            <form class="my-8" action="/certification/verify" method="POST">
                @csrf
                <div class="flex flex-col lg:flex-row items-center justify-center gap-y-8 gap-x-0 lg:gap-y-0 lg:gap-x-6">
                    <input class="w-full md:w-1/2 form-input text-site dark:text-white px-4 py-2 bg-transparent mt-1 rounded-lg border border-siteLite dark:border-gray-300 focus:outline-none focus:ring-0" type="text" name="certid" id="certid" placeholder="Enter Certificate ID (XXX-XXX-XXX-XXX)" required>
                    <input class="w-full md:w-auto px-4 py-2 text-white bg-gem hover:bg-green-500 rounded-lg font-semibold" type="submit" value="Search">
                </div>
            </form>

            @if(\Illuminate\Support\Facades\Session::has('failure'))
                <p class="text-lg font-semibold">{{ \Illuminate\Support\Facades\Session::get('failure') }}</p>
            @endif

            @if(\Illuminate\Support\Facades\Session::has('error'))
                <p class="text-red-700 text-lg font-semibold">{{ \Illuminate\Support\Facades\Session::get('error') }}</p>
            @endif
        </div>

        @if(\Illuminate\Support\Facades\Session::has('success'))
            <div class="py-12">
                @include('certificates.'.\Illuminate\Support\Facades\Session::get('success'))
            </div>
        @endif
    </div>
@endsection

@include('seo.index')
