@extends('layout')

@section('custom-head')
    @include('scripts.custom-head')
@endsection

@section('content')
    <div class="flex max-w-7xl mx-auto px-4 md:px-6 lg:px-8 pt-12 gap-x-8">
        <nav class="max-w-sm pt-6 whitespace-nowrap">
            <ul>
                @foreach($curriculum as $unit => $chapters)
                    <li class="text-site dark:text-white font-semibold">{{ $unit }}</li>

                    <ul class="mb-4">
                        @foreach($chapters as $chapter)
                            <li class="pl-4 @if(last(request()->segments()) === Str::slug($chapter)) font-medium px-2 py-1 text-white bg-gem rounded @else text-siteLite dark:text-gray-300 mt-1 @endif">
                                <a class="@if(last(request()->segments()) !== Str::slug($chapter)) hover:text-gem @endif" href="{{ '/'.$course.'/'.Str::slug($chapter) }}">{{ $chapter }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endforeach
            </ul>
        </nav>

        @include($material)

        <nav class="max-w-sm pt-6 whitespace-nowrap">
            <p class="text-site dark:text-white font-semibold">Table of Contents</p>
            <ul>
                @foreach($contents as $content)
                    @if(preg_match('/^\s*?\+\s*?([\D]+)\s*?$/', $content, $result))
                        <li class="text-site dark:text-white font-medium"><a class="pl-4 hover:text-gem" href="#{{ Str::slug($result[1]) }}">{{ $result[1] }}</a></li>
                    @elseif(preg_match('/^\s*?-\s*?([\D]+)\s*?$/', $content, $result))
                        <li class="text-siteLite dark:text-gray-300"><a class="pl-8 hover:text-gem" href="#{{ Str::slug($result[1]) }}">{{ $result[1] }}</a></li>
                    @endif
                @endforeach
            </ul>
        </nav>
    </div>

    <!-- Navigation Buttons -->
    <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 py-8">
        <div class="flex w-full justify-center md:justify-between pt-6 px-2 md:px-0 text-siteLite dark:text-gray-300 text-lg md:text-xl font-medium">
            <a href="@if($prev === '') {{ '/'.$course }} @else {{ Str::slug($prev) }} @endif" class="hover:text-gem inline-flex justify-between items-center space-x-2">
                <span>
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 11V13H8L13.5 18.5L12.08 19.92L4.16 12L12.08 4.07996L13.5 5.49996L8 11H20Z" fill="currentColor"/>
                    </svg>
                </span>
                <span>@if($prev === '') Curriculum @else {{ $prev }} @endif</span>
            </a>

            <a href="@if($next === '') {{ $course }} @else {{ Str::slug($next) }} @endif" class="hover:text-gem inline-flex justify-between items-center space-x-2">
                <span>@if($next === '') Curriculum @else {{ $next }} @endif</span>
                <span>
                    <svg class="w-6 h-6" viewBox="0 0 24 24">
                        <path d="M4 11v2h12l-5.5 5.5l1.42 1.42L19.84 12l-7.92-7.92L10.5 5.5L16 11H4z" fill="currentColor" />
                    </svg>
                </span>
            </a>
        </div>
    </div>
@endsection


