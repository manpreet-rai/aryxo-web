@extends('layout')

@section('custom-head')
    @include('scripts.custom-head')

    <!-- ScrollMagic Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
@endsection

@section('content')
    <div class="flex relative max-w-7xl mx-auto px-4 md:px-6 lg:px-8 pt-12 gap-x-8">
        <nav class="hidden md:block max-w-sm whitespace-nowrap -mt-2">
            <ul>
                @foreach($curriculum as $unit => $chapters)
                    <li class="-mb-1 text-site dark:text-white font-semibold">{{ $unit }}</li>

                    <ul class="mb-4 -mt-2">
                        @foreach($chapters as $chapter)
                            <li class="pl-4 text-base @if(last(request()->segments()) === Str::slug($chapter)) font-medium px-2 py-1 text-white bg-gem rounded @else text-siteLite dark:text-gray-300 @endif">
                                <a class="@if(last(request()->segments()) !== Str::slug($chapter)) hover:text-gem @endif" href="{{ '/'.$course.'/'.Str::slug($chapter) }}">{{ $chapter }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endforeach
            </ul>
        </nav>

        @section('curriculum')
            <nav class="md:hidden max-w-sm pt-8 text-lg">
                <p class="px-4 text-siteLite dark:text-gray-400 font-semibold">Curriculum</p>
                <ul>
                    @foreach($curriculum as $unit => $chapters)
                        <li class="px-4 text-site dark:text-white font-semibold">{{ $unit }}</li>

                        <ul class="mb-4 -mt-2">
                            @foreach($chapters as $chapter)
                                <li class="px-8 @if(last(request()->segments()) === Str::slug($chapter)) font-medium px-2 py-1 text-white bg-gem rounded @else text-siteLite dark:text-gray-300 @endif">
                                    <a class="@if(last(request()->segments()) !== Str::slug($chapter)) hover:text-gem @endif" href="{{ '/'.$course.'/'.Str::slug($chapter) }}">{{ $chapter }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endforeach
                </ul>
            </nav>
        @endsection

        <article>
            @include($material)
        </article>

        <nav class="hidden md:flex flex-col flex-initial sticky top-16 overflow-y-auto h-80 min-w-min max-w-sm px-6 d-scrollbar scrollbar-thin scrollbar-thumb-rounded whitespace-nowrap">
            <p class="text-siteLite dark:text-gray-300 font-semibold -mb-1">On this page</p>
            <ul>
                @foreach($contents as $key => $values)
                    <li id="{{ Str::slug($key).'-link' }}" class="text-site dark:text-white font-medium"><a class="pl-4 hover:text-gem" href="#{{ Str::slug($key) }}">{{ $key }}</a></li>
                    @if(isset($values))
                        @foreach($values as $value)
                            <li id="{{ Str::slug($value).'-link' }}" class="text-base text-siteLite dark:text-gray-300"><a class="pl-8 hover:text-gem" href="#{{ Str::slug($value) }}">{{ $value }}</a></li>
                        @endforeach
                    @endif
                @endforeach
            </ul>
        </nav>

        @section('contents')
            <nav class="md:hidden max-w-sm pt-8 text-lg">
                <p class="px-4 text-siteLite dark:text-gray-400 font-semibold">On this page</p>
                <ul>
                    @foreach($contents as $key => $values)
                        <li class="text-site dark:text-white font-medium"><a class="pr-4 hover:text-gem" href="#{{ Str::slug($key) }}">{{ $key }}</a></li>
                        @if(isset($values))
                            @foreach($values as $value)
                                <li class="text-siteLite dark:text-gray-300"><a class="px-4 hover:text-gem" href="#{{ Str::slug($value) }}">{{ $value }}</a></li>
                            @endforeach
                        @endif
                    @endforeach
                </ul>
            </nav>
        @endsection
    </div>

    <!-- Navigation Buttons -->
    <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 py-8">
        <div class="flex gap-x-8 w-full justify-between pt-6 px-2 md:px-0 text-siteLite dark:text-gray-300 md:text-lg font-medium">
            <a href="@if($prev === '') {{ '/'.$course }} @else {{ Str::slug($prev) }} @endif" class="text-gray-500 dark:text-gray-400 w-2/5 hover:text-gem inline-flex justify-start items-center space-x-2">
                <span>
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 11V13H8L13.5 18.5L12.08 19.92L4.16 12L12.08 4.07996L13.5 5.49996L8 11H20Z" fill="currentColor"/>
                    </svg>
                </span>
                <span class="text-left">@if($prev === '') Curriculum @else {{ $prev }} @endif</span>
            </a>

            <a href="@if($next === '') {{ $course }} @else {{ Str::slug($next) }} @endif" class="w-2/5 hover:text-gem inline-flex justify-end items-center space-x-2">
                <span class="text-right">@if($next === '') Curriculum @else {{ $next }} @endif</span>
                <span>
                    <svg class="w-6 h-6" viewBox="0 0 24 24">
                        <path d="M4 11v2h12l-5.5 5.5l1.42 1.42L19.84 12l-7.92-7.92L10.5 5.5L16 11H4z" fill="currentColor" />
                    </svg>
                </span>
            </a>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/prism.js') }}"></script>

    <script>
        // Initialize ScrollMagic Controller
        let controller = new ScrollMagic.Controller({globalSceneOptions: {duration: "40%"}});

        // Build ScrollMagic Scenes
        @foreach($contents as $key => $values)
            new ScrollMagic.Scene({triggerElement: "#{{ Str::slug($key) }}", triggerHook: 0.3})
                .setClassToggle("#{{ Str::slug($key).'-link' }}", "active") // add class toggle
                .addTo(controller);
            @if(isset($values))
                @foreach($values as $value)
                    new ScrollMagic.Scene({triggerElement: "#{{ Str::slug($value) }}", triggerHook: 0.3})
                        .setClassToggle("#{{ Str::slug($value).'-link' }}", "active") // add class toggle
                        .addTo(controller);
                @endforeach
            @endif
        @endforeach
    </script>
@endsection
