@extends('layout')

@section('title')
    <title>Aryxo</title>
@endsection

@section('styles')
    <link id="prismjs" rel="stylesheet">
@endsection

@section('script')
    <script>
        let localstorage = window.localStorage;
        window.onload = function () {
            let themeButton = document.getElementById('themeButton');
            if (localstorage.getItem('theme') === 'dark') {
                document.body.classList.add('dark');
                document.getElementById('hero').src = "{{ asset('./assets/hero_dark.svg') }}";
                document.getElementById('prismjs').href = "{{ asset('./css/prism-dark.css') }}";
                themeButton.children[1].classList.add('hidden');
                themeButton.children[2].classList.remove('hidden');
            } else {
                document.body.classList.remove('dark');
                document.getElementById('hero').src = "{{ asset('./assets/hero.svg') }}";
                document.getElementById('prismjs').href = "{{ asset('./css/prism.css') }}";
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
                document.getElementById('hero').src = "{{ asset('./assets/hero.svg') }}";
                document.getElementById('prismjs').href = "{{ asset('./css/prism.css') }}";
            } else {
                document.body.classList.add('dark');
                themeButton.children[1].classList.add('hidden');
                themeButton.children[2].classList.remove('hidden');
                localstorage.setItem('theme', 'dark');
                document.getElementById('hero').src = "{{ asset('./assets/hero_dark.svg') }}";
                document.getElementById('prismjs').href = "{{ asset('./css/prism-dark.css') }}";
            }
        }
    </script>
@endsection

@section('content')
    <div class="bg-gray-50 dark:bg-gray-800 select-none py-20">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 text-center">
            <p class="text-yellow-900 dark:text-gray-300 text-4xl sm:text-5xl lg:text-7xl saira-condensed font-normal">Learn what's best for you. Free.</p>
            <p class="text-gray-800 dark:text-gray-400 text-lg sm:text-xl lg:text-2xl py-4">No hidden costs. It's just a love affair with programming.</p>
        </div>

        <div class="py-10">
            <img id="hero" src="{{ asset('./assets/hero.svg') }}" alt="Aryxo Campus" />
        </div>
    </div>

    <div class="bg-yellow-900 dark:bg-gray-700 select-none py-20">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 text-center">
            <h1 class="text-gray-50 dark:text-gray-300 text-2xl sm:text-3xl lg:text-5xl saira-condensed font-normal">How it works?</h1>
            <p class="text-md sm:text-lg lg:text-xl text-gray-200 dark:text-gray-400 py-6">
                We started this project as a way to provide free education for those who are willing to learn but could not afford expensive courses.
                This initiative targets to add more courses as time progresses, and focuses on clearing doubts about programming languages in general.
            </p>

            <div class="flex flex-col md:flex-row space-x-0 space-y-6 md:space-x-10 md:space-y-0 py-10">
                <div class="p-12 bg-gray-50 dark:bg-gray-800 flex flex-1 flex-col space-y-6 rounded-lg justify-center items-center">
                    <svg class="h-48 w-auto" viewBox="0 0 330 606.22" xmlns="http://www.w3.org/2000/svg">
                        <polygon class="text-yellow-900 dark:text-gray-700 fill-current" points="90 0 90 415.69 330 554.26 330 138.56 90 0"/>
                        <polygon class="text-yellow-900 dark:text-gray-700 fill-current" points="0 51.96 0 467.65 240 606.22 240 190.53 0 51.96"/>
                        <polygon class="text-yellow-900 dark:text-gray-700 fill-current" points="0 51.96 90 0 90 103.92 0 51.96"/>
                        <polygon class="text-white dark:text-gray-400 fill-current" points="242 189.37 34 69.28 90 36.95 298 157.04 298 535.78 242 568.11 242 189.37"/>
                        <path class="text-yellow-900 dark:text-gray-700 fill-current" d="M90,39.26,296,158.19V534.63l-52,30V188.22l-2-1.16L38,69.28l52-30m0-4.62L30,69.28,240,190.53V571.58l60-34.64V155.88L90,34.64Z"/>
                        <path class="text-white dark:text-gray-400 fill-current" d="M80.49,329.44,49.15,296.12v-6.91L80.49,292v6.31l-25.58-2.34,25.58,27.19Zm23.72,32.77,16.58-70.36,5.68,3.28-16.59,70.35Zm46,7.5V363.4l25.57,2.35-25.57-27.19v-6.31l31.42,33.47v6.91Z"/>
                    </svg>
                    <h2 class="text-md sm:text-lg lg:text-2xl font-semibold text-yellow-900 dark:text-gray-400">Learn</h2>
                    <p class="text-md lg:text-lg text-gray-800 dark:text-gray-400">
                        We provide in-depth course contents for various programming languages in curriculum fashion to begin with.
                    </p>
                </div>

                <div class="p-12 bg-gray-50 dark:bg-gray-800 flex flex-1 flex-col space-y-6 rounded-lg justify-center items-center">
                    <svg class="h-48 w-auto" viewBox="0 0 510.02 744.78" xmlns="http://www.w3.org/2000/svg">
                        <polygon class="text-white dark:text-gray-400 fill-current" points="2.02 466.5 2 20.79 478.02 295.6 478.02 741.32 2.02 466.5"/>
                        <path class="text-yellow-900 dark:text-gray-700 fill-current" d="M4,24.26l472,272.5V737.85L4,465.34,4,24.26M0,17.33,0,467.65,480,744.78V294.45L0,17.33Z"/>
                        <polygon class="text-yellow-900 dark:text-gray-700 fill-current" points="0 17.33 30.02 0 510.02 277.13 510.02 727.46 480.02 744.78 480.02 294.45 0 17.33"/>
                        <polygon class="text-yellow-900 dark:text-gray-700 fill-current" points="30.02 277.13 30.02 450.33 450.02 692.82 450.02 519.62 30.02 277.13"/>
                        <polygon class="text-white dark:text-gray-400 fill-current" points="60.02 329.09 60.02 363.73 90.02 381.05 90.02 346.41 60.02 329.09"/>
                        <polygon class="text-white dark:text-gray-400 fill-current" points="120.02 363.73 120.02 398.37 150.02 415.69 150.02 381.05 120.02 363.73"/>
                        <polygon class="text-white dark:text-gray-400 fill-current" points="180.03 398.44 180.03 433.08 210.03 450.4 210.03 415.76 180.03 398.44"/>
                        <polygon class="text-white dark:text-gray-400 fill-current" points="240.03 433.08 240.03 467.72 270.03 485.04 270.03 450.4 240.03 433.08"/>
                        <polygon class="text-white dark:text-gray-400 fill-current" points="299.89 467.52 299.89 502.16 329.89 519.48 329.89 484.84 299.89 467.52"/>
                        <polygon class="text-white dark:text-gray-400 fill-current" points="359.89 502.16 359.89 536.8 390.02 554.26 390.02 623.54 420.02 640.86 420.02 571.58 420.02 536.94 359.89 502.16"/>
                        <polygon class="text-white dark:text-gray-400 fill-current" points="59.99 398.31 59.99 432.95 89.99 450.27 89.99 415.63 59.99 398.31"/>
                        <polygon class="text-white dark:text-gray-400 fill-current" points="119.99 432.95 119.99 467.59 149.99 484.91 149.99 450.27 119.99 432.95"/>
                        <polygon class="text-white dark:text-gray-400 fill-current" points="180 467.66 180 502.3 240.02 536.94 240.02 502.3 180 467.66"/>
                        <polygon class="text-white dark:text-gray-400 fill-current" points="269.9 519.64 269.9 554.28 299.9 571.6 299.9 536.96 269.9 519.64"/>
                        <polygon class="text-white dark:text-gray-400 fill-current" points="330.2 554.15 330.2 588.79 360.2 606.11 360.2 571.47 330.2 554.15"/>
                        <polygon class="text-yellow-900 dark:text-gray-700 fill-current" points="30.02 69.28 30.02 103.92 450.02 346.41 450.02 311.77 30.02 69.28"/>
                        <polygon class="text-yellow-900 dark:text-gray-700 fill-current" points="30.02 138.56 30.02 173.21 450.02 415.69 450.02 381.05 30.02 138.56"/>
                        <polygon class="text-yellow-900 dark:text-gray-700 fill-current" points="30.03 207.7 30.03 242.34 450.03 484.83 450.03 450.19 30.03 207.7"/>
                    </svg>
                    <h2 class="text-md sm:text-lg lg:text-2xl font-semibold text-yellow-900 dark:text-gray-400">Practice</h2>
                    <p class="text-md lg:text-lg text-gray-800 dark:text-gray-400">
                        Our approach involves learn-by-doing. Practice the examples, quizzes and solve the demos to become expert.
                    </p>
                </div>

                <div class="p-12 bg-gray-50 dark:bg-gray-800 flex flex-1 flex-col space-y-6 rounded-lg justify-center items-center">
                    <svg class="h-48 w-auto" viewBox="0 0 509.62 743.85" xmlns="http://www.w3.org/2000/svg">
                        <polygon class="text-white dark:text-gray-400 fill-current" points="2.02 449.17 2 3.46 507.62 294.67 507.62 740.39 2.02 449.17"/>
                        <path class="text-yellow-900 dark:text-gray-700 fill-current" d="M4,6.92,505.62,295.83v441.1L4,448,4,6.92M0,0,0,450.33l509.6,293.52V293.51L0,0Z"/>
                        <ellipse class="text-yellow-900 dark:text-gray-700 fill-current" cx="243.01" cy="381.02" rx="72.58" ry="125.71" transform="translate(-159.08 174.74) rotate(-30.31)"/>
                        <path class="text-white dark:text-gray-400 fill-current" d="M243,304.51,258,366l48.44,28-39.19,10,15,61.51L243,410.24l-39.19,10,15-44.22-39.19-55.3,48.44,28Z"/>
                        <path class="text-yellow-900 dark:text-gray-700 fill-current" d="M133.23,165.89a31.28,31.28,0,0,1-3.59-1.46,38.72,38.72,0,0,1-3.92-2,29.19,29.19,0,0,1-8.78-7.13,21.82,21.82,0,0,1-3.72-9.62,126.76,126.76,0,0,1-.93-17.86q0-11.74.93-16.62c.66-3.28,1.91-5.08,3.72-5.4s4.79.62,8.78,2.93a42.72,42.72,0,0,1,3.92,2.57,37.3,37.3,0,0,1,3.39,2.72v4.65a61.85,61.85,0,0,0-6.25-4.29q-4.59-2.65-6.45-2.35t-2.46,4.22a130.55,130.55,0,0,0-.53,14.49,150.08,150.08,0,0,0,.53,15.11,14.77,14.77,0,0,0,2.46,7.06,21.89,21.89,0,0,0,6.45,5.1,39.46,39.46,0,0,0,6.45,3Zm6.81,4.23V117.64l21.6,12.48v5L145,125.56v18.38l14.43,8.33v5L145,149v19l16.62,9.59v5Zm49,28.28L183.29,174l-.93-.54-8.58-5v21.13l-5-2.88V134.25l14,8.06a21.39,21.39,0,0,1,7.05,6.05,17.6,17.6,0,0,1,3,7,46.39,46.39,0,0,1,.73,8.89,28.64,28.64,0,0,1-1.06,8.84c-.66,2.06-2.13,2.95-4.39,2.66l6.18,25.69ZM181.49,168c2.08,1.2,3.64,1.72,4.65,1.54a2.38,2.38,0,0,0,1.93-2.16,28,28,0,0,0,.47-6,35.82,35.82,0,0,0-.47-6.52,10,10,0,0,0-1.86-4.36,15,15,0,0,0-4.65-3.83l-7.78-4.49v21.36Zm26,41.11V161.79l-10.17-5.87v-5.19l25.33,14.62v5.19l-10.17-5.87V212Zm21.08,12.17V168.77l5,2.88v52.48ZM243,229.57V177.09L263.6,189v5L248,185v19.61l13.9,8v5l-13.9-8v22.89Zm27.33,15.78V192.87l5,2.88v52.48Zm34.22,19.45a29.55,29.55,0,0,1-3.59-1.46,36.74,36.74,0,0,1-3.92-2,29.19,29.19,0,0,1-8.78-7.13,21.82,21.82,0,0,1-3.72-9.62,126.69,126.69,0,0,1-.93-17.85q0-11.76.93-16.63c.66-3.28,1.91-5.08,3.72-5.4s4.79.63,8.78,2.93a44.91,44.91,0,0,1,3.92,2.57,37.3,37.3,0,0,1,3.39,2.72v4.65a61.85,61.85,0,0,0-6.25-4.29q-4.59-2.66-6.45-2.35c-1.24.2-2.06,1.6-2.46,4.22a130.68,130.68,0,0,0-.53,14.49,149.94,149.94,0,0,0,.53,15.11,14.73,14.73,0,0,0,2.46,7.06,21.89,21.89,0,0,0,6.45,5.1,40.4,40.4,0,0,0,6.45,3Zm28.68,16.86L330,265.25l-14-8.1-3.13,12.77-5-2.88,12-45.57,6.52,3.76,12,59.39Zm-10-51.33-.33-.19-5.65,22.67,11.63,6.72Zm24.15,59.48V242.52l-10.17-5.87v-5.19l25.33,14.62v5.19l-10.17-5.87v47.29Zm20.88,12.06V249.39l21.61,12.47v5l-16.62-9.6v18.39L387.64,284v5l-14.43-8.33v19l16.62,9.6v5Z"/>
                        <polygon class="text-yellow-900 dark:text-gray-700 fill-current" points="29.62 397.44 29.62 432.08 479.62 691.89 479.62 657.25 29.62 397.44"/>
                    </svg>
                    <h2 class="text-md sm:text-lg lg:text-2xl font-semibold text-yellow-900 dark:text-gray-400">Certify</h2>
                    <p class="text-md lg:text-lg text-gray-800 dark:text-gray-400">
                        Although optional, but earning a certificate means a lot. So we recommend that you get certified by us.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- C -->
    <div class="bg-gray-50 dark:bg-gray-900 select-none py-24 md:py-32">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 select-none flex flex-col md:flex-row justify-center items-center space-x-0 space-y-6 md:space-x-6 md:space-y-0">
            <div class="flex flex-1 flex-col space-y-4 justify-center self-stretch items-center">
                <h1 class="font-bold saira-condensed text-gray-900 dark:text-gray-300 text-4xl sm:text-6xl lg:text-8xl">Learn C</h1>
                <p class="text-md md:text-lg font-medium text-gray-800 dark:text-gray-400">The language for performance computing</p>
                <div class="flex flex-col self-stretch justify-center md:flex-row space-x-0 space-y-4 md:space-x-4 md:space-y-0 text-sm md:text-lg">
                    <a href="/c" class="bg-gray-200 dark:bg-gray-800 text-black text-lg dark:text-gray-300 hover:bg-gray-300 dark:hover:bg-gray-700 px-6 py-2 rounded-md font-semibold">View Curriculum</a>
                    <a href="/c/intro" class="bg-yellow-800 dark:bg-gray-700 text-white text-lg dark:text-gray-300 hover:bg-yellow-900 dark:hover:bg-gray-600 px-6 py-2 rounded-md font-semibold">Start Learning</a>
                </div>
            </div>

            <div class="flex flex-1 flex-col self-stretch justify-center items-center rounded-lg shadow-xl select-text">
                <h4 class="self-stretch bg-gray-300 dark:bg-gray-500 font-medium text-gray-900 dark:text-white px-4 py-2 flex items-center rounded-t-lg">hello.c</h4>

                <div class="self-stretch h-full bg-white dark:bg-gray-800 rounded-b-lg">
                    <pre><code class="language-c code">#include&lt;stdio.h&gt;

int main(int argc, char **argv) {
    printf("Hello World\n");
    return 0;
}</code></pre>
                </div>
            </div>
        </div>
    </div>

    <!-- C++ -->
    <div class="bg-gray-200 dark:bg-gray-800 select-none py-24 md:py-32">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 select-none flex flex-col md:flex-row justify-center items-center space-x-0 space-y-6 md:space-x-6 md:space-y-0">
            <div class="flex flex-1 flex-col space-y-4 justify-center self-stretch items-center">
                <h1 class="font-bold saira-condensed text-gray-900 dark:text-gray-300 text-4xl sm:text-6xl lg:text-8xl">Learn C++</h1>
                <p class="text-md md:text-lg font-medium text-gray-800 dark:text-gray-400">The language for gaming and software</p>
                <div class="flex flex-col self-stretch justify-center md:flex-row space-x-0 space-y-4 md:space-x-4 md:space-y-0 text-sm md:text-lg">
                    <a href="/cpp" class="bg-gray-100 dark:bg-gray-900 text-black text-lg dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 px-6 py-2 rounded-md font-semibold">View Curriculum</a>
                    <a href="/cpp/intro" class="bg-yellow-800 dark:bg-gray-700 text-white text-lg dark:text-gray-300 hover:bg-yellow-900 dark:hover:bg-gray-600 px-6 py-2 rounded-md font-semibold">Start Learning</a>
                </div>
            </div>

            <div class="flex flex-1 flex-col self-stretch justify-center items-center rounded-lg shadow-xl select-text">
                <h4 class="self-stretch bg-gray-300 dark:bg-gray-500 font-medium text-gray-900 dark:text-white px-4 py-2 flex items-center rounded-t-lg">hello.cpp</h4>

                <div class="self-stretch h-full bg-white dark:bg-gray-900 rounded-b-lg">
                    <pre><code class="language-cpp code">#include&lt;iostream&gt;

using namespace std;

int main(int argc, char **argv) {
    cout&lt;&lt;"Hello World"&lt;&lt;endl;
}</code></pre>
                </div>
            </div>
        </div>
    </div>

    <!-- Java -->
    <div class="bg-gray-50 dark:bg-gray-900 select-none py-24 md:py-32">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 select-none flex flex-col md:flex-row justify-center items-center space-x-0 space-y-6 md:space-x-6 md:space-y-0">
            <div class="flex flex-1 flex-col space-y-4 justify-center self-stretch items-center">
                <h1 class="font-bold saira-condensed text-gray-900 dark:text-gray-300 text-4xl sm:text-6xl lg:text-8xl">Learn Java</h1>
                <p class="text-md md:text-lg font-medium text-gray-800 dark:text-gray-400">The language for enterprise grade software</p>
                <div class="flex flex-col self-stretch justify-center md:flex-row space-x-0 space-y-4 md:space-x-4 md:space-y-0 text-sm md:text-lg">
                    <a href="/java" class="bg-gray-200 dark:bg-gray-800 text-black text-lg dark:text-gray-300 hover:bg-gray-300 dark:hover:bg-gray-700 px-6 py-2 rounded-md font-semibold">View Curriculum</a>
                    <a href="/java/intro" class="bg-yellow-800 dark:bg-gray-700 text-white text-lg dark:text-gray-300 hover:bg-yellow-900 dark:hover:bg-gray-600 px-6 py-2 rounded-md font-semibold">Start Learning</a>
                </div>
            </div>

            <div class="flex flex-1 flex-col self-stretch justify-center items-center rounded-lg shadow-xl select-text">
                <h4 class="self-stretch bg-gray-300 dark:bg-gray-500 font-medium text-gray-900 dark:text-white px-4 py-2 flex items-center rounded-t-lg">Hello.java</h4>

                <div class="self-stretch h-full bg-white dark:bg-gray-800 rounded-b-lg">
                    <pre><code class="language-java code">public class Hello {
    public static void main (String[] args){
        System.out.println("Hello World");
    }
}</code></pre>
                </div>
            </div>
        </div>
    </div>

    <!-- Python -->
    <div class="bg-gray-200 dark:bg-gray-800 select-none py-24 md:py-32">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 select-none flex flex-col md:flex-row justify-center items-center space-x-0 space-y-6 md:space-x-6 md:space-y-0">
            <div class="flex flex-1 flex-col space-y-4 justify-center self-stretch items-center">
                <h1 class="font-bold saira-condensed text-gray-900 dark:text-gray-300 text-4xl sm:text-6xl lg:text-8xl">Learn Python</h1>
                <p class="text-md md:text-lg font-medium text-gray-800 dark:text-gray-400">The language for AI and everything</p>
                <div class="flex flex-col self-stretch justify-center md:flex-row space-x-0 space-y-4 md:space-x-4 md:space-y-0 text-sm md:text-lg">
                    <a href="/python" class="bg-gray-100 dark:bg-gray-900 text-black text-lg dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 px-6 py-2 rounded-md font-semibold">View Curriculum</a>
                    <a href="/python/intro" class="bg-yellow-800 dark:bg-gray-700 text-white text-lg dark:text-gray-300 hover:bg-yellow-900 dark:hover:bg-gray-600 px-6 py-2 rounded-md font-semibold">Start Learning</a>
                </div>
            </div>

            <div class="flex flex-1 flex-col self-stretch justify-center items-center rounded-lg shadow-xl select-text">
                <h4 class="self-stretch bg-gray-300 dark:bg-gray-500 font-medium text-gray-900 dark:text-white px-4 py-2 flex items-center rounded-t-lg">hello.py</h4>

                <div class="self-stretch h-full bg-white dark:bg-gray-900 rounded-b-lg">
                    <pre><code class="language-python code">print('Hello World')</code></pre>
                </div>
            </div>
        </div>
    </div>

    <!-- HTML -->
    <div class="bg-gray-50 dark:bg-gray-900 select-none py-24 md:py-32">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 select-none flex flex-col md:flex-row justify-center items-center space-x-0 space-y-6 md:space-x-6 md:space-y-0">
            <div class="flex flex-1 flex-col space-y-4 justify-center self-stretch items-center">
                <h1 class="font-bold saira-condensed text-gray-900 dark:text-gray-300 text-4xl sm:text-6xl lg:text-8xl">Learn HTML</h1>
                <p class="text-md md:text-lg font-medium text-gray-800 dark:text-gray-400">The language for creating websites</p>
                <div class="flex flex-col self-stretch justify-center md:flex-row space-x-0 space-y-4 md:space-x-4 md:space-y-0 text-sm md:text-lg">
                    <a href="/html" class="bg-gray-200 dark:bg-gray-800 text-black text-lg dark:text-gray-300 hover:bg-gray-300 dark:hover:bg-gray-700 px-6 py-2 rounded-md font-semibold">View Curriculum</a>
                    <a href="/html/intro" class="bg-yellow-800 dark:bg-gray-700 text-white text-lg dark:text-gray-300 hover:bg-yellow-900 dark:hover:bg-gray-600 px-6 py-2 rounded-md font-semibold">Start Learning</a>
                </div>
            </div>

            <div class="flex flex-1 flex-col self-stretch justify-center items-center rounded-lg shadow-xl select-text">
                <h4 class="self-stretch bg-gray-300 dark:bg-gray-500 font-medium text-gray-900 dark:text-white px-4 py-2 flex items-center rounded-t-lg">index.html</h4>

                <div class="self-stretch h-full bg-white dark:bg-gray-800 rounded-b-lg">
                    <pre><code class="language-html code">&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Website&lt;/title&gt;
    &lt;link href="app.css" rel="stylesheet"&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1 class="greeting"&gt;Hello World&lt;/h1&gt;
    &lt;script src="app.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
                </div>
            </div>
        </div>
    </div>

    <!-- CSS -->
    <div class="bg-gray-200 dark:bg-gray-800 select-none py-24 md:py-32">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 select-none flex flex-col md:flex-row justify-center items-center space-x-0 space-y-6 md:space-x-6 md:space-y-0">
            <div class="flex flex-1 flex-col space-y-4 justify-center self-stretch items-center">
                <h1 class="font-bold saira-condensed text-gray-900 dark:text-gray-300 text-4xl sm:text-6xl lg:text-8xl">Learn CSS</h1>
                <p class="text-md md:text-lg font-medium text-gray-800 dark:text-gray-400">The language for styling websites</p>
                <div class="flex flex-col self-stretch justify-center md:flex-row space-x-0 space-y-4 md:space-x-4 md:space-y-0 text-sm md:text-lg">
                    <a href="/css" class="bg-gray-100 dark:bg-gray-900 text-black text-lg dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 px-6 py-2 rounded-md font-semibold">View Curriculum</a>
                    <a href="/css/intro" class="bg-yellow-800 dark:bg-gray-700 text-white text-lg dark:text-gray-300 hover:bg-yellow-900 dark:hover:bg-gray-600 px-6 py-2 rounded-md font-semibold">Start Learning</a>
                </div>
            </div>

            <div class="flex flex-1 flex-col self-stretch justify-center items-center rounded-lg shadow-xl select-text">
                <h4 class="self-stretch bg-gray-300 dark:bg-gray-500 font-medium text-gray-900 dark:text-white px-4 py-2 flex items-center rounded-t-lg">app.css</h4>

                <div class="self-stretch h-full bg-white dark:bg-gray-900 rounded-b-lg">
                    <pre><code class="language-css code">.greeting {
    color: crimson;
    text-align: center;
    font-family: sans-serif;
    font-size: 64px;
}</code></pre>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <div class="bg-gray-50 dark:bg-gray-900 select-none py-24 md:py-32">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 select-none flex flex-col md:flex-row justify-center items-center space-x-0 space-y-6 md:space-x-6 md:space-y-0">
            <div class="flex flex-1 flex-col space-y-4 justify-center self-stretch items-center">
                <h1 class="font-bold saira-condensed text-gray-900 dark:text-gray-300 text-4xl sm:text-6xl lg:text-8xl">Learn JS</h1>
                <p class="text-md md:text-lg font-medium text-gray-800 dark:text-gray-400">The language for controlling websites</p>
                <div class="flex flex-col self-stretch justify-center md:flex-row space-x-0 space-y-4 md:space-x-4 md:space-y-0 text-sm md:text-lg">
                    <a href="/javascript" class="bg-gray-200 dark:bg-gray-800 text-black text-lg dark:text-gray-300 hover:bg-gray-300 dark:hover:bg-gray-700 px-6 py-2 rounded-md font-semibold">View Curriculum</a>
                    <a href="/javascript/intro" class="bg-yellow-800 dark:bg-gray-700 text-white text-lg dark:text-gray-300 hover:bg-yellow-900 dark:hover:bg-gray-600 px-6 py-2 rounded-md font-semibold">Start Learning</a>
                </div>
            </div>

            <div class="flex flex-1 flex-col self-stretch justify-center items-center rounded-lg shadow-xl select-text">
                <h4 class="self-stretch bg-gray-300 dark:bg-gray-500 font-medium text-gray-900 dark:text-white px-4 py-2 flex items-center rounded-t-lg">app.js</h4>

                <div class="self-stretch h-full bg-white dark:bg-gray-800 rounded-b-lg">
                    <pre><code class="language-js code">console.log('Hello World');</code></pre>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->
    <div class="bg-gray-50 dark:bg-gray-900 select-none py-12">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 py-4 select-none">
            <div class="bg-gray-800 rounded-lg p-8 flex flex-col items-center space-y-4 space-x-0 md:flex-row md:space-y-0 md:space-x-4">
                <div class="flex w-full justify-center items-center">
                    <span class="text-gray-50 text-2xl md:text-4xl font-medium saira-condensed">Subscribe to our newsletter</span>
                </div>

                <form class="flex w-full flex-col justify-center items-center space-y-4 space-x-0 md:flex-row md:space-y-0 md:space-x-4" method="POST" action="/newsletter">
                    <input class="w-full md:w-auto px-4 py-2 rounded-lg bg-gray-300 text-sm hover:bg-gray-50 focus:bg-gray-50 font-semibold border border-transparent focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-gray-50 focus:outline-none" type="email" placeholder="Email" spellcheck="false">
                    <input class="w-full md:w-auto px-4 py-2 rounded-lg bg-gray-300 text-sm hover:bg-gray-50 font-semibold" type="submit" value="Subscribe">
                </form>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/prism.js') }}"></script>
@endsection
