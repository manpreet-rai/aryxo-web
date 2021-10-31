@extends('layout')

@section('custom-head')
    @include('scripts.custom-head')

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection

@section('content')
    <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 py-20">
        <div class="text-center py-12">
            <h1 class="text-site dark:text-white text-2xl sm:text-3xl lg:text-5xl dm-serif font-normal">Contact Us</h1>
            <p class="text-siteLite dark:text-gray-300 text-base sm:text-lg lg:text-xl py-6">
                Have something to discuss? Or perhaps a feedback about our work, may be some improvement or suggestion. Let us know.
            </p>
        </div>

        <form action="/contact" method="POST">
            @csrf
            <div class="flex flex-col lg:flex-row items-center justify-center gap-y-8 gap-x-0 lg:gap-y-0 lg:gap-x-8">
                <div class="flex flex-col w-full lg:w-1/2">
                    <label class="text-sm lg:text-base" for="name">Name</label>
                    <input class="form-input text-site dark:text-white px-4 py-2 bg-transparent mt-1 rounded-lg border border-siteLite dark:border-gray-300 focus:outline-none focus:ring-0" type="text" name="name" id="name" placeholder="Enter Your Name" required>
                </div>

                <div class="flex flex-col w-full lg:w-1/2">
                    <label class="text-sm lg:text-base" for="email">Email</label>
                    <input class="form-input text-site dark:text-white px-4 py-2 bg-transparent mt-1 rounded-lg border border-siteLite dark:border-gray-300 focus:outline-none focus:ring-0" type="email" name="email" id="email" placeholder="Enter Email Address" required>
                </div>
            </div>

            <div class="flex flex-col mt-8">
                <label class="text-sm lg:text-base" for="type">Query for:</label>
                <select class="form-select text-site dark:text-white px-4 py-2 bg-transparent mt-1 rounded-lg border border-siteLite dark:border-gray-300 focus:outline-none focus:ring-0" name="type" id="type" required>
                    <option class="bg-transparent dark:bg-siteLite" selected disabled hidden value="">Select One</option>
                    <option class="bg-transparent dark:bg-siteLite" value="feedback">Feedback</option>
                    <option class="bg-transparent dark:bg-siteLite" value="error">Error</option>
                    <option class="bg-transparent dark:bg-siteLite" value="suggestion">Suggestion</option>
                    <option class="bg-transparent dark:bg-siteLite" value="other">Other</option>
                </select>
            </div>

            <div class="flex flex-col mt-8">
                <label class="text-sm lg:text-base" for="message">Message</label>
                <textarea class="w-full resize-none form-textarea text-site dark:text-white px-4 py-2 bg-transparent mt-1 rounded-lg border border-siteLite dark:border-gray-300 focus:outline-none focus:ring-0" name="message" id="message" rows="5" placeholder="Enter Message"></textarea>
            </div>

            <div class="g-recaptcha my-12" data-sitekey="6LeGFQYdAAAAANyXSgcbFSWE6vd9sbew_8UAT4JK"></div>

            <input class="w-full md:w-auto px-4 py-2 text-white bg-gem hover:bg-green-500 rounded-lg font-semibold" type="submit" value="Submit">

        </form>
    </div>
@endsection

@include('seo.index')
