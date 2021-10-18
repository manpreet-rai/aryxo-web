<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- SEO Head -->
        @yield('seo-head')

        <!-- Favicons -->
        <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="/icon180.png">
        <link rel="icon" type="image/png" sizes="196x196" href="/icon196.png">
        <link rel="shortcut icon" href="/favicon.ico">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <!-- Styles -->
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Custom Head -->
        @yield('custom-head')

        <style>
            body {
                font-family: 'DM Sans', sans-serif;
            }
        </style>

    </head>

    <body class="antialiased relative d-body-bg d-body-text-color root-text d-scrollbar scrollbar-thin scrollbar-thumb-rounded">
        <!-- Navbar -->
        <nav class="sticky top-0 d-header z-50 backdrop-filter backdrop-blur-md text-gray-800 dark:text-gray-200">
            <div class="flex items-center max-w-7xl mx-auto px-2 md:px-6 lg:px-8 h-16">
                <div class="flex justify-between md:hidden w-full">
                    <button id="menuButton" aria-label="menuButton" class="h-12 w-12 flex justify-center items-center">
                        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                            <path d="M4 6H20M4 12H20M4 18C5.36683 18 6.13317 18 7.5 18C8.86683 18 11 18 11 18" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>

                    <a href="/" class="h-12 w-12 flex justify-center items-center">
                        <svg class="h-8 w-8" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-width="6" stroke="#CF0000" fill-rule="evenodd" clip-rule="evenodd" d="M0 512V0H512V512H306.809L279.45 408.82H205.191L175.878 512H101.618L209.099 124.593H273.588L365.435 447.756H445.556V68.1367H66.4429V512H0ZM216.916 340.684H265.771L240.367 262.814L216.916 340.684Z" fill="#AE0000"/>
                        </svg>
                    </a>

                    <button id="searchButton" aria-label="searchButton" class="h-12 w-12 flex justify-center items-center">
                        <svg class="h-5 w-5" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="28.5" cy="28.5" r="25.5" stroke="currentColor" stroke-width="6"/>
                            <path d="M45 45L62 62" stroke="currentColor" stroke-width="6"/>
                        </svg>
                    </button>
                </div>

                <div class="hidden md:flex justify-between w-full">
                    <a href="/" class="h-12 w-auto flex justify-center items-center">
                        <svg class="h-10 w-auto" viewBox="0 0 438 227" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="text-gray-800 dark:text-gray-200 fill-current" d="M168.168 165.152C162.12 165.152 157.752 163.424 155.064 159.968C152.472 156.512 151.176 150.944 151.176 143.264C151.176 137.6 151.752 133.136 152.904 129.872C154.056 126.608 155.928 124.256 158.52 122.816C161.208 121.376 164.904 120.656 169.608 120.656C173.256 120.656 178.344 120.848 184.872 121.232V117.632C184.872 112.928 184.488 109.568 183.72 107.552C183.048 105.536 181.8 104.24 179.976 103.664C178.248 103.088 175.32 102.8 171.192 102.8C167.064 102.8 161.544 103.184 154.632 103.952V91.712C161.352 90.176 168.36 89.408 175.656 89.408C182.568 89.408 187.752 90.32 191.208 92.144C194.76 93.968 197.16 96.944 198.408 101.072C199.752 105.104 200.424 110.912 200.424 118.496V164H186.024L185.448 154.928H184.584C182.28 161.744 176.808 165.152 168.168 165.152ZM174.936 151.04C176.76 151.04 178.296 150.848 179.544 150.464C180.792 150.08 181.896 149.312 182.856 148.16C184.2 146.336 184.872 142.304 184.872 136.064V132.176H174.072C171.96 132.176 170.376 132.416 169.32 132.896C168.36 133.376 167.64 134.288 167.16 135.632C166.776 136.976 166.584 139.04 166.584 141.824C166.584 145.568 167.112 148.064 168.168 149.312C169.224 150.464 171.48 151.04 174.936 151.04ZM215.382 90.56H229.638L230.214 103.088H231.222C232.662 97.904 234.774 94.352 237.558 92.432C240.438 90.416 244.182 89.408 248.79 89.408V105.968C244.374 105.968 240.87 106.736 238.278 108.272C235.686 109.808 233.814 112.304 232.662 115.76C231.51 119.216 230.934 124.016 230.934 130.16V164H215.382V90.56ZM281.587 192.8C278.131 192.8 274.579 192.656 270.931 192.368C267.379 192.08 264.451 191.744 262.147 191.36V178.832C267.907 179.024 273.235 179.12 278.131 179.12C282.835 179.12 286.147 178.64 288.067 177.68C290.083 176.72 291.331 174.944 291.811 172.352C292.387 169.856 292.675 165.536 292.675 159.392V154.64H291.667C289.651 161.072 284.371 164.288 275.827 164.288C270.643 164.288 266.803 163.232 264.307 161.12C261.907 159.008 260.323 155.84 259.555 151.616C258.883 147.392 258.547 141.248 258.547 133.184V90.56H274.099V130.448C274.099 137.072 274.243 141.68 274.531 144.272C274.915 146.768 275.683 148.4 276.835 149.168C277.987 149.84 280.003 150.176 282.883 150.176C285.955 150.176 288.163 149.552 289.507 148.304C290.947 147.056 291.811 145.04 292.099 142.256C292.483 139.472 292.675 134.864 292.675 128.432V90.56H308.227V154.784C308.227 164.768 307.651 172.304 306.499 177.392C305.443 182.48 303.043 186.32 299.299 188.912C295.555 191.504 289.651 192.8 281.587 192.8ZM357.651 164L346.419 138.656H345.411L333.891 164H317.907L336.051 126.704L318.339 90.56H335.043L345.987 114.608H346.851L357.651 90.56H373.779L356.211 126.704L374.355 164H357.651ZM406.061 165.152C398.093 165.152 392.333 164.096 388.781 161.984C385.229 159.872 382.925 156.32 381.869 151.328C380.909 146.336 380.429 138.32 380.429 127.28C380.429 116.144 380.909 108.08 381.869 103.088C382.925 98.096 385.229 94.592 388.781 92.576C392.333 90.464 398.093 89.408 406.061 89.408C414.029 89.408 419.789 90.464 423.341 92.576C426.893 94.592 429.149 98.096 430.109 103.088C431.165 108.08 431.693 116.144 431.693 127.28C431.693 138.32 431.165 146.336 430.109 151.328C429.149 156.32 426.893 159.872 423.341 161.984C419.789 164.096 414.029 165.152 406.061 165.152ZM406.061 151.76C409.517 151.76 411.869 151.28 413.117 150.32C414.461 149.264 415.277 147.2 415.565 144.128C415.949 141.056 416.141 135.44 416.141 127.28C416.141 119.024 415.949 113.408 415.565 110.432C415.277 107.36 414.461 105.344 413.117 104.384C411.869 103.328 409.517 102.8 406.061 102.8C402.605 102.8 400.205 103.328 398.861 104.384C397.613 105.344 396.797 107.36 396.413 110.432C396.125 113.408 395.98 119.024 395.98 127.28C395.98 135.44 396.125 141.056 396.413 144.128C396.797 147.2 397.613 149.264 398.861 150.32C400.205 151.28 402.605 151.76 406.061 151.76Z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 164V32H132V164H79.0992L72.0458 137.399H52.9008L45.3435 164H26.1985L53.9084 64.1217H70.5343L94.2137 147.437H114.87V49.5665H17.1298V164H0ZM55.9237 119.833H68.5191L61.9695 99.7567L55.9237 119.833Z" fill="#AE0000"/>
                        </svg>
                    </a>

                    <div class="flex justify-center items-center">
                        <a class="flex font-medium group whitespace-nowrap px-4 py-2 hover:text-gray-700 text-gray-800 dark:text-gray-200 dark:hover:text-gray-300" href="/c">C</a>
                        <a class="flex font-medium group whitespace-nowrap px-4 py-2 hover:text-gray-700 text-gray-800 dark:text-gray-200 dark:hover:text-gray-300" href="/cpp">C++</a>
                        <a class="flex font-medium group whitespace-nowrap px-4 py-2 hover:text-gray-700 text-gray-800 dark:text-gray-200 dark:hover:text-gray-300" href="/java">Java</a>
                        <a class="flex font-medium group whitespace-nowrap px-4 py-2 hover:text-gray-700 text-gray-800 dark:text-gray-200 dark:hover:text-gray-300" href="/python">Python</a>
                        <a class="flex font-medium group whitespace-nowrap px-4 py-2 hover:text-gray-700 text-gray-800 dark:text-gray-200 dark:hover:text-gray-300" href="/html">HTML</a>
                        <a class="flex font-medium group whitespace-nowrap px-4 py-2 hover:text-gray-700 text-gray-800 dark:text-gray-200 dark:hover:text-gray-300" href="/csstyles">CSS</a>
                        <a class="flex font-medium group whitespace-nowrap px-4 py-2 hover:text-gray-700 text-gray-800 dark:text-gray-200 dark:hover:text-gray-300" href="/javascript">JS</a>
                    </div>

                    <button id="searchButton" aria-label="searchButton" class="h-12 w-12 flex justify-center items-center">
                        <svg class="h-5 w-5" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="28.5" cy="28.5" r="25.5" stroke="currentColor" stroke-width="5"/>
                            <path d="M45 45L62 62" stroke="currentColor" stroke-width="5"/>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Contents -->
        @yield('content')

        <!-- SEO Body -->
        @yield('seo-body')

        <!-- Footer -->
        <div class="bg-site select-none lg:py-4 source-sans">
            <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 py-4 select-none border-t border-siteLite flex gap-y-2 md:gap-y-0 flex-col-reverse md:flex-row md:justify-between">
                <div class="flex justify-center md:justify-start">
                    <span class="text-xs md:text-sm text-white">Copyright © {{ date('Y') }} Aryxo. All rights reserved.</span>
                </div>

                <div class="flex flex-1 justify-center md:justify-start divide-x divide-gray-500 dark:divide-gray-400 md:ml-6">
                    <a href="/about-us" class="text-xs md:text-sm text-white px-2 hover:underline">About Us</a>
                    <a href="/privacy-policy" class="text-xs md:text-sm text-white px-2 hover:underline">Privacy Policy</a>
                    <a href="/terms-of-use" class="text-xs md:text-sm text-white px-2 hover:underline">Terms of Use</a>
                    <a href="/legal" class="text-xs md:text-sm text-white px-2 hover:underline">Legal</a>
                    <a href="/sitemap" class="text-xs md:text-sm text-white px-2 hover:underline">Site Map</a>
                </div>

                <div class="flex gap-x-3 justify-center md:justify-start items-center">

                    <!-- Facebook Handle -->
                    <a href="https://www.facebook.com/aryxo.official" target="_blank">
                        <svg class="h-5 w-5 md:w-6 md:h-6 text-white hover:text-green-500 fill-current" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 8C16 3.6 12.4 0 8 0C3.6 0 0 3.6 0 8C0 12 2.9 15.3 6.7 15.9V10.3H4.7V8H6.7V6.2C6.7 4.2 7.9 3.1 9.7 3.1C10.6 3.1 11.5 3.3 11.5 3.3V5.3H10.5C9.5 5.3 9.2 5.9 9.2 6.5V8H11.4L11 10.3H9.1V16C13.1 15.4 16 12 16 8Z" />
                        </svg>
                    </a>

                    <!-- Twitter Handle -->
                    <a href="https://twitter.com/aryxo_in" target="_blank">
                        <svg class="w-5 md:w-6 h-auto text-white hover:text-green-500 fill-current" viewBox="0 0 16 13" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 1.5C15.4 1.8 14.8 1.9 14.1 2C14.8 1.6 15.3 1 15.5 0.2C14.9 0.6 14.2 0.8 13.4 1C12.8 0.4 11.9 0 11 0C8.9 0 7.3 2 7.8 4C5.1 3.9 2.7 2.6 1 0.6C0.1 2.1 0.6 4 2 5C1.5 5 1 4.8 0.5 4.6C0.5 6.1 1.6 7.5 3.1 7.9C2.6 8 2.1 8.1 1.6 8C2 9.3 3.2 10.3 4.7 10.3C3.5 11.2 1.7 11.7 0 11.5C1.5 12.4 3.2 13 5 13C11.1 13 14.5 7.9 14.3 3.2C15 2.8 15.6 2.2 16 1.5Z" />
                        </svg>
                    </a>

                    <!-- Instagram Handle -->
                    <a href="https://www.instagram.com/aryxo.in/" target="_blank">
                        <svg class="h-5 w-5 md:w-6 md:h-6 text-white hover:text-green-500 fill-current" viewBox="0 0 17 17" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.3 1.5C10.5 1.5 10.8 1.5 11.7 1.5C12.5 1.5 12.9 1.7 13.2 1.8C13.6 2 13.9 2.1 14.2 2.4C14.5 2.7 14.7 3 14.8 3.4C14.9 3.7 15 4.1 15.1 4.9C15.1 5.8 15.1 6 15.1 8.3C15.1 10.6 15.1 10.8 15.1 11.7C15.1 12.5 14.9 12.9 14.8 13.2C14.6 13.6 14.5 13.9 14.2 14.2C13.9 14.5 13.6 14.7 13.2 14.8C12.9 14.9 12.5 15 11.7 15.1C10.8 15.1 10.6 15.1 8.3 15.1C6 15.1 5.8 15.1 4.9 15.1C4.1 15.1 3.7 14.9 3.4 14.8C3 14.6 2.7 14.5 2.4 14.2C2.1 13.9 1.9 13.6 1.8 13.2C1.7 12.9 1.6 12.5 1.5 11.7C1.5 10.8 1.5 10.6 1.5 8.3C1.5 6 1.5 5.8 1.5 4.9C1.5 4.1 1.7 3.7 1.8 3.4C2 3 2.1 2.7 2.4 2.4C2.7 2.1 3 1.9 3.4 1.8C3.7 1.7 4.1 1.6 4.9 1.5C5.8 1.5 6.1 1.5 8.3 1.5ZM8.3 0C6 0 5.8 0 4.9 0C4 0 3.4 0.200001 2.9 0.400001C2.4 0.600001 1.9 0.900001 1.4 1.4C0.900001 1.9 0.700001 2.3 0.400001 2.9C0.200001 3.4 0.1 4 0 4.9C0 5.8 0 6.1 0 8.3C0 10.6 0 10.8 0 11.7C0 12.6 0.200001 13.2 0.400001 13.7C0.600001 14.2 0.900001 14.7 1.4 15.2C1.9 15.7 2.3 15.9 2.9 16.2C3.4 16.4 4 16.5 4.9 16.6C5.8 16.6 6.1 16.6 8.3 16.6C10.5 16.6 10.8 16.6 11.7 16.6C12.6 16.6 13.2 16.4 13.7 16.2C14.2 16 14.7 15.7 15.2 15.2C15.7 14.7 15.9 14.3 16.2 13.7C16.4 13.2 16.5 12.6 16.6 11.7C16.6 10.8 16.6 10.5 16.6 8.3C16.6 6.1 16.6 5.8 16.6 4.9C16.6 4 16.4 3.4 16.2 2.9C16 2.4 15.7 1.9 15.2 1.4C14.7 0.900001 14.3 0.700001 13.7 0.400001C13.2 0.200001 12.6 0.1 11.7 0C10.8 0 10.6 0 8.3 0Z" />
                            <path d="M8.3 4C5.9 4 4 5.9 4 8.3C4 10.7 5.9 12.6 8.3 12.6C10.7 12.6 12.6 10.7 12.6 8.3C12.6 5.9 10.7 4 8.3 4ZM8.3 11.1C6.8 11.1 5.5 9.9 5.5 8.3C5.5 6.8 6.7 5.5 8.3 5.5C9.8 5.5 11.1 6.7 11.1 8.3C11.1 9.8 9.8 11.1 8.3 11.1Z" />
                            <path d="M12.7 4.9C13.2523 4.9 13.7 4.45229 13.7 3.9C13.7 3.34772 13.2523 2.9 12.7 2.9C12.1477 2.9 11.7 3.34772 11.7 3.9C11.7 4.45229 12.1477 4.9 12.7 4.9Z" />
                        </svg>
                    </a>

                    <!-- Pinterest Handle -->
                    <a href="https://www.pinterest.com/aryxo_in" target="_blank">
                        <svg class="h-5 w-5 md:w-6 md:h-6 text-white hover:text-green-500 fill-current" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 0C3.6 0 0 3.6 0 8C0 11.3 2 14.1 4.8 15.3C4.8 14.7 4.79999 14.1 4.89999 13.5C5.09999 12.8 5.89999 9.1 5.89999 9.1C5.89999 9.1 5.60001 8.6 5.60001 7.8C5.60001 6.6 6.30001 5.7 7.10001 5.7C7.80001 5.7 8.2 6.2 8.2 6.9C8.2 7.6 7.7 8.7 7.5 9.7C7.3 10.5 7.9 11.2 8.8 11.2C10.3 11.2 11.3 9.3 11.3 6.9C11.3 5.1 10.1 3.8 8 3.8C5.6 3.8 4.10001 5.6 4.10001 7.6C4.10001 8.3 4.30001 8.8 4.60001 9.2C4.70001 9.4 4.8 9.4 4.7 9.6C4.7 9.7 4.6 10.1 4.5 10.2C4.4 10.4 4.30001 10.5 4.10001 10.4C3.00001 9.9 2.5 8.7 2.5 7.3C2.5 5 4.4 2.3 8.2 2.3C11.3 2.3 13.3 4.5 13.3 6.9C13.3 10 11.6 12.4 9 12.4C8.1 12.4 7.3 11.9 7 11.4C7 11.4 6.49999 13.2 6.39999 13.6C6.19999 14.2 5.90001 14.8 5.60001 15.3C6.30001 15.5 7.09999 15.6 7.89999 15.6C12.3 15.6 15.9 12 15.9 7.6C16 3.6 12.4 0 8 0Z" />
                        </svg>
                    </a>

                    <!-- Github Handle -->
                    <a href="https://github.com/aryxo-in" target="_blank">
                        <svg class="h-5 w-5 md:w-6 md:h-6 text-white hover:text-green-500 fill-current" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.97553 0C3.57186 0 0 3.57187 0 7.97553C0 11.4985 2.29969 14.4832 5.43119 15.5596C5.82263 15.6086 5.96942 15.3639 5.96942 15.1682C5.96942 14.9725 5.96942 14.4832 5.96942 13.7982C3.76758 14.2875 3.27829 12.7217 3.27829 12.7217C2.93578 11.792 2.39755 11.5474 2.39755 11.5474C1.66361 11.0581 2.44648 11.0581 2.44648 11.0581C3.22936 11.107 3.66972 11.8899 3.66972 11.8899C4.40367 13.1131 5.52905 12.7706 5.96942 12.5749C6.01835 12.0367 6.263 11.6942 6.45872 11.4985C4.69725 11.3028 2.83792 10.6177 2.83792 7.53517C2.83792 6.65443 3.1315 5.96942 3.66972 5.38226C3.62079 5.23547 3.32722 4.40367 3.76758 3.32722C3.76758 3.32722 4.4526 3.1315 5.96942 4.15902C6.6055 3.9633 7.29052 3.91437 7.97553 3.91437C8.66055 3.91437 9.34557 4.01223 9.98165 4.15902C11.4985 3.1315 12.1835 3.32722 12.1835 3.32722C12.6239 4.40367 12.3303 5.23547 12.2813 5.43119C12.7706 5.96942 13.1131 6.70336 13.1131 7.5841C13.1131 10.6667 11.2538 11.3028 9.49235 11.4985C9.78593 11.7431 10.0306 12.2324 10.0306 12.9664C10.0306 14.0428 10.0306 14.8746 10.0306 15.1682C10.0306 15.3639 10.1774 15.6086 10.5688 15.5596C13.7492 14.4832 16 11.4985 16 7.97553C15.9511 3.57187 12.3792 0 7.97553 0Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

    </body>
</html>
