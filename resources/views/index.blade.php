@extends('layout')

@section('custom-head')
    <link rel="stylesheet" href="{{ asset('css/prism-dark.css') }}">
@endsection

@section('content')
    <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 text-center py-20 lg:h-screen50 flex flex-col items-center justify-center">
        <p class="text-4xl sm:text-5xl lg:text-7xl dm-serif font-normal">Learn what's best for you. Free.</p>
        <p class="text-lg sm:text-xl lg:text-2xl py-4">No hidden costs. It's just a love affair with programming.</p>
    </div>

    <div class="pb-10 lg:pb-0">
        <img class="w-full h-auto" id="hero" src="{{ asset('./assets/hero_dark.svg') }}" alt="Aryxo Campus" />
    </div>

    <svg class="w-full h-auto" viewBox="0 0 1440 250" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_2:848)">
            <rect class="text-gray-50 fill-current" x="-14" y="-21" width="1477" height="291" />
            <path class="text-gray-50 dark:text-siteLite fill-current" d="M188.857 204.044L192.759 208.018L204.021 215.864C208.25 218.81 213.83 219.618 218.759 218.33C228.21 215.861 242.78 212.453 243.758 212.984C244.355 213.309 245.988 214.95 247.932 216.902C250.572 219.554 253.784 222.781 255.748 224.065L267.419 229.987C270.803 231.489 274.718 230.697 277.324 227.985L277.97 227.312L282.398 222.44L290.201 220.868C290.984 220.71 291.707 220.321 292.286 219.747L296.5 215.564C298.342 213.736 301.197 213.637 303.151 215.333L303.741 215.845C305.071 216.999 306.942 217.178 308.449 216.295L314.101 212.984L323.214 208.018H324.734C328.731 208.018 332.519 206.145 335.059 202.914L336.004 201.713H343.358C347.315 201.713 351.18 202.966 354.445 205.307L357.227 207.301C357.877 207.768 358.648 208.018 359.437 208.018H367.499C368.51 208.018 369.466 207.539 370.1 206.716L376.611 198.275L383.325 201.713L395.635 198.275H408.745L426.983 193.638L446.954 204.197H461.662L476.21 201.713L486.593 212.478C486.906 212.802 487.328 212.984 487.769 212.984H497.793L508.664 220.626L522.413 224.065L534.083 232.47L552.149 240.494C557.552 243.077 563.879 242.296 568.561 238.47L568.985 238.124L599.151 220.626L610.821 212.984L629.52 209.98L640.668 212.984L641.654 214.095C642.913 215.515 645.035 215.593 646.387 214.269L650.348 210.389L657.847 209.98L660.116 211.949C664.73 215.952 670.535 218.143 676.528 218.143L683.562 220.626L698.43 229.605H710.421L729.126 224.065L735.52 218.143L751.667 215.659L755.984 208.018H782.842L792.612 212.285L806.048 226.571C807.828 228.464 810.4 229.29 812.888 228.767L823.122 224.065L835.425 218.143L842.474 226.548L846.623 230.207C848.038 231.456 850.154 231.262 851.341 229.776L855.903 224.065L859.74 215.659L869.534 210.94C871.062 210.204 872.513 209.303 873.862 208.253L879.564 203.815L885.438 205.512C890.884 207.085 896.72 205.818 901.119 202.107L902.266 201.14H907.526C908.972 201.14 910.414 201.031 911.842 200.814L924.042 207.045L924.483 207.368C929.349 210.934 935.706 211.369 940.973 208.495L958.615 199.498L969.852 190.468L983.411 186.285L993.888 178.061L1003.9 177.515C1004.34 177.491 1004.75 177.286 1005.05 176.945L1009.07 172.314L1026.96 167.02L1029.53 167.316L1044.22 166.515L1059.42 157.409L1066.23 155.393L1082.08 158.518L1095.18 157.804L1107.64 160.567L1114.17 156.767L1121.1 164.843C1121.77 165.63 1122.75 166.056 1123.76 166.001L1131.81 165.561C1132.6 165.518 1133.35 165.227 1133.98 164.725L1136.66 162.582C1139.8 160.066 1143.6 158.605 1147.55 158.389L1154.9 157.989L1155.9 159.137C1158.6 162.225 1162.47 163.888 1166.46 163.67L1167.98 163.587L1177.33 168.051L1183.14 171.049C1184.69 171.849 1186.55 171.568 1187.82 170.343L1188.38 169.799C1190.25 168 1193.11 167.943 1195.04 169.668L1199.45 173.615C1200.06 174.157 1200.8 174.506 1201.59 174.621L1209.46 175.767L1214.12 180.391L1214.8 181.027C1217.54 183.594 1221.49 184.171 1224.79 182.486L1236.15 175.936C1238.05 174.547 1241.1 171.15 1243.6 168.358C1245.45 166.302 1247 164.574 1247.58 164.218C1248.53 163.634 1263.25 166.243 1272.81 168.194C1277.8 169.211 1283.33 168.101 1287.4 164.928L1298.26 156.478L1301.96 152.298C1304.39 149.552 1307.38 147.414 1310.71 146.043L1318.43 141.07L1322.55 138.41H1331.08L1337.84 141.07H1346.9L1373.67 166.921C1375.77 168.949 1379.15 168.754 1381 166.498L1392.67 152.298L1403.79 148.913L1412.06 141.07L1421.24 132.085L1427.16 125.354L1433.58 121.027L1440 117.181V72H568.257L360.207 82.234L192.759 81.741L0 82.25V143.619L7.27319 140.528L18.0016 143.607L25.9486 149.231H30.7908L37.5493 152.875L41.3892 156.307L48.2002 159.23L56.942 152.009L61.9646 156.307L66.7109 158.084L73.084 164.397L77.6041 171.089L85.9484 176.912L94.6902 184.4L111.379 198.275L131.736 184.4L163.888 189.184L179.811 198.275C183.201 199.463 186.293 201.434 188.857 204.044V204.044Z" />
            <path class="text-white dark:text-site fill-current" d="M448.758 141H509.319L541.852 135.754C546.69 134.678 557.968 132.404 564.375 131.92C570.781 131.436 606.083 131.718 622.934 131.92C633.111 128.826 655.767 122.114 664.976 120.015C674.185 117.917 701.513 122.235 714.025 124.656L742.758 119.233H777.269L801.614 120.015L840.29 115.864H848.293L907.721 120.015L936.75 114.163H1067.87L1107.38 104.075L1170.4 96.689L1229.92 104.075L1267.93 96.689L1314.95 104.075H1443.5V-11H1327.5H1186H1042H936.75H300H-5V131.92H5.01136L48.5259 120.015L95.5416 131.92H167.566L230.587 124.656H313.614L371.634 131.92L448.758 141Z" />
        </g>
        <defs>
            <clipPath id="clip0_2:848">
                <rect width="1440" height="250" fill="white" transform="matrix(1 0 0 -1 0 250)"/>
            </clipPath>
        </defs>
    </svg>

    <div class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 text-center">
            <h1 class="text-site text-2xl sm:text-3xl lg:text-5xl dm-serif font-normal">How it works?</h1>
            <p class="text-siteLite text-md sm:text-lg lg:text-xl py-6">
                We started this project as a way to provide free education for those who are willing to learn but could not afford expensive courses.
                This initiative targets to add more courses as time progresses, and focuses on clearing doubts about programming languages in general.
            </p>

            <div class="flex flex-col md:flex-row space-x-0 md:space-x-10 pt-10">
                <div class="p-12 hover:bg-green-50 flex flex-1 flex-col space-y-6 rounded-2xl justify-center items-center">
                    <svg class="h-48 w-auto" viewBox="0 0 330 606.22" xmlns="http://www.w3.org/2000/svg">
                        <polygon class="text-gem fill-current" points="90 0 90 415.69 330 554.26 330 138.56 90 0"/>
                        <polygon class="text-gem fill-current" points="0 51.96 0 467.65 240 606.22 240 190.53 0 51.96"/>
                        <polygon class="text-gem fill-current" points="0 51.96 90 0 90 103.92 0 51.96"/>
                        <polygon class="text-white fill-current" points="242 189.37 34 69.28 90 36.95 298 157.04 298 535.78 242 568.11 242 189.37"/>
                        <path class="text-gem fill-current" d="M90,39.26,296,158.19V534.63l-52,30V188.22l-2-1.16L38,69.28l52-30m0-4.62L30,69.28,240,190.53V571.58l60-34.64V155.88L90,34.64Z"/>
                        <path class="text-white fill-current" d="M80.49,329.44,49.15,296.12v-6.91L80.49,292v6.31l-25.58-2.34,25.58,27.19Zm23.72,32.77,16.58-70.36,5.68,3.28-16.59,70.35Zm46,7.5V363.4l25.57,2.35-25.57-27.19v-6.31l31.42,33.47v6.91Z"/>
                    </svg>
                    <h2 class="text-md sm:text-lg lg:text-2xl font-semibold text-site">Learn</h2>
                    <p class="text-md lg:text-lg text-siteLite">
                        We provide in-depth course contents for various programming languages in curriculum fashion to begin with.
                    </p>
                </div>

                <div class="p-12 hover:bg-green-50 flex flex-1 flex-col space-y-6 rounded-2xl justify-center items-center">
                    <svg class="h-48 w-auto" viewBox="0 0 510.02 744.78" xmlns="http://www.w3.org/2000/svg">
                        <polygon class="text-white fill-current" points="2.02 466.5 2 20.79 478.02 295.6 478.02 741.32 2.02 466.5"/>
                        <path class="text-gem fill-current" d="M4,24.26l472,272.5V737.85L4,465.34,4,24.26M0,17.33,0,467.65,480,744.78V294.45L0,17.33Z"/>
                        <polygon class="text-gem fill-current" points="0 17.33 30.02 0 510.02 277.13 510.02 727.46 480.02 744.78 480.02 294.45 0 17.33"/>
                        <polygon class="text-gem fill-current" points="30.02 277.13 30.02 450.33 450.02 692.82 450.02 519.62 30.02 277.13"/>
                        <polygon class="text-white fill-current" points="60.02 329.09 60.02 363.73 90.02 381.05 90.02 346.41 60.02 329.09"/>
                        <polygon class="text-white fill-current" points="120.02 363.73 120.02 398.37 150.02 415.69 150.02 381.05 120.02 363.73"/>
                        <polygon class="text-white fill-current" points="180.03 398.44 180.03 433.08 210.03 450.4 210.03 415.76 180.03 398.44"/>
                        <polygon class="text-white fill-current" points="240.03 433.08 240.03 467.72 270.03 485.04 270.03 450.4 240.03 433.08"/>
                        <polygon class="text-white fill-current" points="299.89 467.52 299.89 502.16 329.89 519.48 329.89 484.84 299.89 467.52"/>
                        <polygon class="text-white fill-current" points="359.89 502.16 359.89 536.8 390.02 554.26 390.02 623.54 420.02 640.86 420.02 571.58 420.02 536.94 359.89 502.16"/>
                        <polygon class="text-white fill-current" points="59.99 398.31 59.99 432.95 89.99 450.27 89.99 415.63 59.99 398.31"/>
                        <polygon class="text-white fill-current" points="119.99 432.95 119.99 467.59 149.99 484.91 149.99 450.27 119.99 432.95"/>
                        <polygon class="text-white fill-current" points="180 467.66 180 502.3 240.02 536.94 240.02 502.3 180 467.66"/>
                        <polygon class="text-white fill-current" points="269.9 519.64 269.9 554.28 299.9 571.6 299.9 536.96 269.9 519.64"/>
                        <polygon class="text-white fill-current" points="330.2 554.15 330.2 588.79 360.2 606.11 360.2 571.47 330.2 554.15"/>
                        <polygon class="text-gem fill-current" points="30.02 69.28 30.02 103.92 450.02 346.41 450.02 311.77 30.02 69.28"/>
                        <polygon class="text-gem fill-current" points="30.02 138.56 30.02 173.21 450.02 415.69 450.02 381.05 30.02 138.56"/>
                        <polygon class="text-gem fill-current" points="30.03 207.7 30.03 242.34 450.03 484.83 450.03 450.19 30.03 207.7"/>
                    </svg>
                    <h2 class="text-md sm:text-lg lg:text-2xl font-semibold text-site">Practice</h2>
                    <p class="text-md lg:text-lg text-siteLite">
                        Our approach involves learn-by-doing. Practice the examples, quizzes and solve the demos to become expert.
                    </p>
                </div>

                <div class="p-12 hover:bg-green-50 flex flex-1 flex-col space-y-6 rounded-2xl justify-center items-center">
                    <svg class="h-48 w-auto" viewBox="0 0 509.62 743.85" xmlns="http://www.w3.org/2000/svg">
                        <polygon class="text-white fill-current" points="2.02 449.17 2 3.46 507.62 294.67 507.62 740.39 2.02 449.17"/>
                        <path class="text-gem fill-current" d="M4,6.92,505.62,295.83v441.1L4,448,4,6.92M0,0,0,450.33l509.6,293.52V293.51L0,0Z"/>
                        <ellipse class="text-gem fill-current" cx="243.01" cy="381.02" rx="72.58" ry="125.71" transform="translate(-159.08 174.74) rotate(-30.31)"/>
                        <path class="text-white fill-current" d="M243,304.51,258,366l48.44,28-39.19,10,15,61.51L243,410.24l-39.19,10,15-44.22-39.19-55.3,48.44,28Z"/>
                        <path class="text-gem fill-current" d="M133.23,165.89a31.28,31.28,0,0,1-3.59-1.46,38.72,38.72,0,0,1-3.92-2,29.19,29.19,0,0,1-8.78-7.13,21.82,21.82,0,0,1-3.72-9.62,126.76,126.76,0,0,1-.93-17.86q0-11.74.93-16.62c.66-3.28,1.91-5.08,3.72-5.4s4.79.62,8.78,2.93a42.72,42.72,0,0,1,3.92,2.57,37.3,37.3,0,0,1,3.39,2.72v4.65a61.85,61.85,0,0,0-6.25-4.29q-4.59-2.65-6.45-2.35t-2.46,4.22a130.55,130.55,0,0,0-.53,14.49,150.08,150.08,0,0,0,.53,15.11,14.77,14.77,0,0,0,2.46,7.06,21.89,21.89,0,0,0,6.45,5.1,39.46,39.46,0,0,0,6.45,3Zm6.81,4.23V117.64l21.6,12.48v5L145,125.56v18.38l14.43,8.33v5L145,149v19l16.62,9.59v5Zm49,28.28L183.29,174l-.93-.54-8.58-5v21.13l-5-2.88V134.25l14,8.06a21.39,21.39,0,0,1,7.05,6.05,17.6,17.6,0,0,1,3,7,46.39,46.39,0,0,1,.73,8.89,28.64,28.64,0,0,1-1.06,8.84c-.66,2.06-2.13,2.95-4.39,2.66l6.18,25.69ZM181.49,168c2.08,1.2,3.64,1.72,4.65,1.54a2.38,2.38,0,0,0,1.93-2.16,28,28,0,0,0,.47-6,35.82,35.82,0,0,0-.47-6.52,10,10,0,0,0-1.86-4.36,15,15,0,0,0-4.65-3.83l-7.78-4.49v21.36Zm26,41.11V161.79l-10.17-5.87v-5.19l25.33,14.62v5.19l-10.17-5.87V212Zm21.08,12.17V168.77l5,2.88v52.48ZM243,229.57V177.09L263.6,189v5L248,185v19.61l13.9,8v5l-13.9-8v22.89Zm27.33,15.78V192.87l5,2.88v52.48Zm34.22,19.45a29.55,29.55,0,0,1-3.59-1.46,36.74,36.74,0,0,1-3.92-2,29.19,29.19,0,0,1-8.78-7.13,21.82,21.82,0,0,1-3.72-9.62,126.69,126.69,0,0,1-.93-17.85q0-11.76.93-16.63c.66-3.28,1.91-5.08,3.72-5.4s4.79.63,8.78,2.93a44.91,44.91,0,0,1,3.92,2.57,37.3,37.3,0,0,1,3.39,2.72v4.65a61.85,61.85,0,0,0-6.25-4.29q-4.59-2.66-6.45-2.35c-1.24.2-2.06,1.6-2.46,4.22a130.68,130.68,0,0,0-.53,14.49,149.94,149.94,0,0,0,.53,15.11,14.73,14.73,0,0,0,2.46,7.06,21.89,21.89,0,0,0,6.45,5.1,40.4,40.4,0,0,0,6.45,3Zm28.68,16.86L330,265.25l-14-8.1-3.13,12.77-5-2.88,12-45.57,6.52,3.76,12,59.39Zm-10-51.33-.33-.19-5.65,22.67,11.63,6.72Zm24.15,59.48V242.52l-10.17-5.87v-5.19l25.33,14.62v5.19l-10.17-5.87v47.29Zm20.88,12.06V249.39l21.61,12.47v5l-16.62-9.6v18.39L387.64,284v5l-14.43-8.33v19l16.62,9.6v5Z"/>
                        <polygon class="text-gem fill-current" points="29.62 397.44 29.62 432.08 479.62 691.89 479.62 657.25 29.62 397.44"/>
                    </svg>
                    <h2 class="text-md sm:text-lg lg:text-2xl font-semibold text-site">Certify</h2>
                    <p class="text-md lg:text-lg text-siteLite">
                        Although optional, but earning a certificate means a lot. So we recommend that you get certified by us.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <svg class="w-full h-auto" viewBox="0 0 1438 246" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_5:856)">
            <rect class="text-gray-50 fill-current" x="-1" y="-71" width="1440" height="317" />
            <path class="text-siteLite fill-current" d="M-0.684788 189.007C6.9534 183.043 22.8359 171.416 29.3831 170.598C32.4469 170.215 37.919 170.118 43.8676 170.014C53.8093 169.839 65.0816 169.64 68.6658 168.041C73.2487 165.997 83.1239 164.123 87.4886 163.442C94.5813 160.035 110.076 153.119 115.314 152.71C117.625 152.529 120.447 150.947 123.924 148.997C130.292 145.425 138.857 140.622 150.504 140.952C161.573 141.267 172.951 145.638 181.596 148.96C187.013 151.041 191.357 152.71 193.879 152.71C197.056 152.71 206.208 149.941 215.629 147.091C225.621 144.067 235.917 140.952 239.708 140.952C243.229 140.952 249.366 137.916 255.887 134.69C263.01 131.167 270.59 127.417 275.717 127.15C279.599 126.948 282.457 123.872 285.758 120.32C290.81 114.883 296.897 108.332 309.271 109.26C320.152 110.075 328.486 111.759 334.644 113.002C340.065 114.097 343.799 114.851 346.098 114.373C347.643 114.051 349.591 113.426 351.792 112.721C356.59 111.182 362.585 109.26 368.195 109.26C371.887 109.26 379.577 105.827 387.808 102.152C397.821 97.682 408.634 92.854 414.024 93.415C418.87 93.92 425.508 90.194 432.464 86.288C439.608 82.278 447.088 78.08 453.307 78.08C455.935 78.08 459.163 78.314 462.854 78.582C476.407 79.565 496.208 81.001 515.504 72.967C526.294 68.474 542.301 58.55 557.758 48.967C577.471 36.746 596.29 25.0793 602.253 25.9388C610.764 27.1655 645.398 46.064 661.651 55.36C665.882 54.858 676.065 54.888 682.947 59.022C686.713 61.283 693.97 66.837 701.219 72.385C710.531 79.511 719.83 86.628 721.701 86.745L721.848 86.754C725.26 86.966 733.187 87.458 744.993 93.603C750.851 96.652 755.981 100.451 760.1 103.502C764.405 106.691 767.605 109.062 769.379 108.903C770.599 108.795 773.717 107.423 777.658 105.691C784.93 102.493 795.003 98.064 801.112 98.064C810.533 98.064 821.442 96.825 832.35 90.012C833.846 89.078 835.36 88.109 836.873 87.14C846.391 81.046 855.838 74.998 860.117 78.08C865.075 81.651 874 86.745 877.471 86.745C877.689 86.745 877.963 86.743 878.284 86.742C883.068 86.72 898.452 86.647 900.775 90.012C901.972 91.746 905.598 93.25 909.865 94.725C921.434 95.559 933.239 97.113 945.358 98.739C946.144 98.695 946.887 98.639 947.583 98.573L953.245 92.334C953.484 92.072 953.88 91.892 954.316 91.846C954.751 91.8 955.176 91.894 955.464 92.1L960.192 95.5L968.286 86.581C968.522 86.316 968.918 86.134 969.356 86.087C969.793 86.041 970.219 86.138 970.505 86.347L979.795 93.014C998.989 88.426 1016.82 82.047 1033.98 75.906L1033.99 75.904C1057.29 67.569 1079.36 59.674 1101.93 57.294C1123.16 55.072 1153.15 60.891 1184.32 66.94C1218.08 73.492 1252.75 83.515 1279.66 80.679C1301.13 78.394 1329.34 76.54 1350.99 66.683C1377.62 62.929 1408.9 46.245 1427.11 44.325C1429.28 44.097 1425.16 44.671 1427.11 44.325C1431.06 43.625 1420.94 44.126 1427.11 44.325L1438.71 184.617V245.993H1398.44C1371.3 245.993 1341.27 245.993 1312.6 245.993H1113.61C1087.67 245.993 1071.8 245.993 1065.14 245.993H953.529C933.562 245.993 910.352 245.993 885.265 245.993H717.337C691.055 245.993 676.89 245.993 661.872 245.993C650.438 245.993 614.088 245.993 598.046 245.993H536.95H464.757C452.176 245.993 441.722 245.993 432.464 245.993C414.929 245.993 377.331 245.993 351.792 245.993H179.455C153.727 245.993 144.791 245.993 131.312 245.993C122.242 245.993 104.422 245.993 90.8589 245.993H43.8676C43.1713 245.993 22.241 245.993 19.4733 245.993H4.78062C4.316 245.993 1.1063 245.993 -0.684878 245.993C-0.684878 242.518 -0.684878 240.255 -0.684878 240.255C-0.804995 239.115 -0.474852 237.976 -0.684878 235.984C-0.926041 233.697 -0.684878 231.858 -0.684788 230.242C-0.684878 228.094 -0.684878 225.706 -0.684772 223.534C-0.684878 219.843 -0.684878 218.685 -0.684878 217.382L-0.684788 213.98C-0.684788 213.98 -0.425876 209.27 -0.684788 206.813V199.937C-0.684788 199.937 -1.39402 189.561 -0.684788 189.007Z" />
            <path class="text-site fill-current" d="M-0.556641 207.546H40.9243L60.4153 217.434H84.4043L107.893 207.546L130.883 201.687L174.363 195.094L212.345 201.687L268.32 198.391L319.796 195.094H349.782L384.766 186.671L420.25 181.91L445.238 169.459L474.225 164.698L496.215 154.077H516.206L542.194 144.189L555.542 138.901C558.94 137.556 562.562 136.864 566.216 136.864H578.915C582.068 136.864 585.202 137.362 588.2 138.338L601.789 142.764C604.688 143.708 607.717 144.189 610.765 144.189H618.635C620.961 144.189 623.265 143.738 625.419 142.861L635.799 138.635C638.672 137.466 641.743 136.864 644.844 136.864H652.89C656.365 136.864 659.816 137.449 663.098 138.594L675.498 142.921C677.86 143.746 680.422 143.81 682.823 143.107L700.402 137.954C702.867 137.231 705.423 136.864 707.993 136.864H732.682C733.612 136.864 734.524 137.124 735.315 137.615L739.236 140.045C740.089 140.575 741.151 140.641 742.064 140.223L762.411 130.905C763.848 130.247 765.409 129.906 766.989 129.906H793.078L840.556 132.836L867.044 124.779L904.505 111.053C912.101 108.27 920.189 107.08 928.266 107.556L990.487 111.228L995.84 111.042C1001.52 107.824 1008.47 103.725 1015.2 99.756C1026.99 92.803 1038.09 86.254 1040.46 85.566C1040.88 85.443 1041.41 85.281 1042.03 85.087C1048.93 82.94 1067.99 77.004 1095.24 80.591C1100.59 81.296 1105.47 81.931 1109.91 82.49L1122.93 75.338H1157.41L1173.64 79.388C1176.19 79.09 1178.85 77.356 1180.16 77.053C1180.48 76.979 1181.02 76.843 1181.75 76.661C1187.6 75.2 1205.25 70.788 1213.64 71.84C1219.69 72.599 1226.04 71.949 1230.59 71.484C1233.14 71.223 1235.12 71.02 1236.17 71.155C1236.73 71.227 1237.94 71.41 1239.55 71.655C1246.34 72.687 1260.25 74.801 1262.39 74.137C1263.16 73.896 1264.61 73.093 1266.57 72.01C1271.29 69.399 1278.95 65.162 1287.15 63.268C1290.77 63.55 1298.73 63.933 1301.53 63.203C1301.93 63.098 1302.39 62.972 1302.89 62.833C1306.81 61.755 1313.58 59.891 1318.51 61.171C1324.08 62.617 1334.76 64.459 1338.93 63.602C1342.09 62.951 1350.59 63.342 1355.06 63.658L1355.98 63.638C1357.27 63.242 1359.04 62.77 1361.06 62.333L1438.78 38.79V246H-0.556641V207.546Z" />
            <path class="text-siteLite fill-current" d="M1427.8 83.099C1424.59 83.206 1379.52 71.286 1355.81 63.656C1357.3 63.239 1358.8 62.595 1360.79 62.299C1362.63 62.024 1387.7 53.248 1393.08 52.643C1395.63 52.357 1435.13 38.497 1438.87 38.916C1440.83 39.135 1419.86 56.999 1420.33 58.092C1423.15 64.685 1429.1 83.056 1427.8 83.099Z" />
            <path class="text-siteLite fill-current" d="M1323.2 83.764C1320 83.871 1306.13 72.258 1282.42 64.627C1284.05 63.702 1285.8 63.333 1288.05 63.334C1290.75 63.478 1295.37 63.94 1300.74 63.335C1303.29 63.048 1308.07 60.526 1311.81 60.945C1313.76 61.164 1316.3 65.376 1316.76 66.469C1319.58 73.062 1324.5 83.721 1323.2 83.764Z" />
            <path class="text-siteLite fill-current" d="M1238.85 83.875C1238.36 80.368 1236.84 75.988 1235.9 71.177C1237.36 71.246 1255.92 74.17 1262.14 74.17C1262.14 74.17 1263.34 74.246 1258.17 87.703C1253.01 101.16 1246.07 101.051 1243.08 101.051C1240.74 96.151 1238.85 91.6 1238.85 83.875Z" />
        </g>
        <defs>
            <clipPath id="clip0_5:856">
                <rect width="1438" height="246" fill="white"/>
            </clipPath>
        </defs>
    </svg>

    <!-- C -->
    <div class="bg-site py-12 sm:py-24 py-32">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 flex flex-col md:flex-row justify-center items-center space-x-0 space-y-6 md:space-x-6 md:space-y-0">
            <div class="flex flex-1 flex-col space-y-4 justify-center self-stretch items-center">
                <h1 class="dm-serif text-gray-200 text-4xl sm:text-6xl lg:text-8xl">Learn C</h1>
                <p class="text-md md:text-lg font-medium text-white">The language for performance computing</p>
                <div class="flex flex-col self-stretch justify-center md:flex-row space-x-0 space-y-4 md:space-x-4 md:space-y-0 text-sm md:text-lg">
                    <a href="/c" class="text-white hover:text-green-500 text-lg px-6 py-2 rounded-2xl font-semibold">View Curriculum</a>
                    <a href="/c/intro" class="bg-gem hover:bg-green-500 text-white text-lg px-6 py-2 rounded-2xl font-semibold">Start Learning</a>
                </div>
            </div>

            <div class="flex flex-1 flex-col self-stretch justify-center items-center rounded-2xl shadow-xl select-text">
                <h4 class="self-stretch bg-siteLite bg-opacity-50 font-medium text-white px-4 py-2 flex items-center rounded-t-2xl">hello.c</h4>

                <div class="self-stretch h-full bg-siteLite rounded-b-2xl">
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
    <div class="bg-site py-12 sm:py-24 lg:py-32">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 flex flex-col md:flex-row justify-center items-center space-x-0 space-y-6 md:space-x-6 md:space-y-0">
            <div class="flex flex-1 flex-col space-y-4 justify-center self-stretch items-center">
                <h1 class="dm-serif text-gray-200 text-4xl sm:text-6xl lg:text-8xl">Learn C++</h1>
                <p class="text-md md:text-lg font-medium text-white">The language for gaming and software</p>
                <div class="flex flex-col self-stretch justify-center md:flex-row space-x-0 space-y-4 md:space-x-4 md:space-y-0 text-sm md:text-lg">
                    <a href="/cpp" class="text-white hover:text-green-500 text-lg px-6 py-2 rounded-2xl font-semibold">View Curriculum</a>
                    <a href="/cpp/intro" class="bg-gem hover:bg-green-500 text-white text-lg px-6 py-2 rounded-2xl font-semibold">Start Learning</a>
                </div>
            </div>

            <div class="flex flex-1 flex-col self-stretch justify-center items-center rounded-2xl shadow-xl select-text">
                <h4 class="self-stretch bg-siteLite bg-opacity-50 font-medium text-white px-4 py-2 flex items-center rounded-t-2xl">hello.cpp</h4>

                <div class="self-stretch h-full bg-siteLite rounded-b-2xl">
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
    <div class="bg-site py-12 sm:py-24 lg:py-32">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 flex flex-col md:flex-row justify-center items-center space-x-0 space-y-6 md:space-x-6 md:space-y-0">
            <div class="flex flex-1 flex-col space-y-4 justify-center self-stretch items-center">
                <h1 class="dm-serif text-gray-200 text-4xl sm:text-6xl lg:text-8xl">Learn Java</h1>
                <p class="text-md md:text-lg font-medium text-white">The language for enterprise grade software</p>
                <div class="flex flex-col self-stretch justify-center md:flex-row space-x-0 space-y-4 md:space-x-4 md:space-y-0 text-sm md:text-lg">
                    <a href="/java" class="text-white hover:text-green-500 text-lg px-6 py-2 rounded-2xl font-semibold">View Curriculum</a>
                    <a href="/java/intro" class="bg-gem hover:bg-green-500 text-white text-lg px-6 py-2 rounded-2xl font-semibold">Start Learning</a>
                </div>
            </div>

            <div class="flex flex-1 flex-col self-stretch justify-center items-center rounded-2xl shadow-xl select-text">
                <h4 class="self-stretch bg-siteLite bg-opacity-50 font-medium text-white px-4 py-2 flex items-center rounded-t-2xl">Hello.java</h4>

                <div class="self-stretch h-full bg-siteLite rounded-b-2xl">
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
    <div class="bg-site py-12 sm:py-24 lg:py-32">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 flex flex-col md:flex-row justify-center items-center space-x-0 space-y-6 md:space-x-6 md:space-y-0">
            <div class="flex flex-1 flex-col space-y-4 justify-center self-stretch items-center">
                <h1 class="dm-serif text-gray-200 text-4xl sm:text-6xl lg:text-8xl">Learn Python</h1>
                <p class="text-md md:text-lg font-medium text-white">The language for AI and everything</p>
                <div class="flex flex-col self-stretch justify-center md:flex-row space-x-0 space-y-4 md:space-x-4 md:space-y-0 text-sm md:text-lg">
                    <a href="/python" class="text-white hover:text-green-500 text-lg px-6 py-2 rounded-2xl font-semibold">View Curriculum</a>
                    <a href="/python/intro" class="bg-gem hover:bg-green-500 text-white text-lg px-6 py-2 rounded-2xl font-semibold">Start Learning</a>
                </div>
            </div>

            <div class="flex flex-1 flex-col self-stretch justify-center items-center rounded-2xl shadow-xl select-text">
                <h4 class="self-stretch bg-siteLite bg-opacity-50 font-medium text-white px-4 py-2 flex items-center rounded-t-2xl">hello.py</h4>

                <div class="self-stretch h-full bg-siteLite rounded-b-2xl">
                    <pre><code class="language-python code">print('Hello World')</code></pre>
                </div>
            </div>
        </div>
    </div>

    <!-- HTML -->
    <div class="bg-site py-12 sm:py-24 lg:py-32">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 flex flex-col md:flex-row justify-center items-center space-x-0 space-y-6 md:space-x-6 md:space-y-0">
            <div class="flex flex-1 flex-col space-y-4 justify-center self-stretch items-center">
                <h1 class="dm-serif text-gray-200 text-4xl sm:text-6xl lg:text-8xl">Learn HTML</h1>
                <p class="text-md md:text-lg font-medium text-white">The language for creating websites</p>
                <div class="flex flex-col self-stretch justify-center md:flex-row space-x-0 space-y-4 md:space-x-4 md:space-y-0 text-sm md:text-lg">
                    <a href="/html" class="text-white hover:text-green-500 text-lg px-6 py-2 rounded-2xl font-semibold">View Curriculum</a>
                    <a href="/html/intro" class="bg-gem hover:bg-green-500 text-white text-lg px-6 py-2 rounded-2xl font-semibold">Start Learning</a>
                </div>
            </div>

            <div class="flex flex-1 flex-col self-stretch justify-center items-center rounded-2xl shadow-xl select-text">
                <h4 class="self-stretch bg-siteLite bg-opacity-50 font-medium text-white px-4 py-2 flex items-center rounded-t-2xl">index.html</h4>

                <div class="self-stretch h-full bg-siteLite rounded-b-2xl">
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
    <div class="bg-site py-12 sm:py-24 lg:py-32">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 flex flex-col md:flex-row justify-center items-center space-x-0 space-y-6 md:space-x-6 md:space-y-0">
            <div class="flex flex-1 flex-col space-y-4 justify-center self-stretch items-center">
                <h1 class="dm-serif text-gray-200 text-4xl sm:text-6xl lg:text-8xl">Learn CSS</h1>
                <p class="text-md md:text-lg font-medium text-white">The language for styling websites</p>
                <div class="flex flex-col self-stretch justify-center md:flex-row space-x-0 space-y-4 md:space-x-4 md:space-y-0 text-sm md:text-lg">
                    <a href="/css" class="text-white hover:text-green-500 text-lg px-6 py-2 rounded-2xl font-semibold">View Curriculum</a>
                    <a href="/css/intro" class="bg-gem hover:bg-green-500 text-white text-lg px-6 py-2 rounded-2xl font-semibold">Start Learning</a>
                </div>
            </div>

            <div class="flex flex-1 flex-col self-stretch justify-center items-center rounded-2xl shadow-xl select-text">
                <h4 class="self-stretch bg-siteLite bg-opacity-50 font-medium text-white px-4 py-2 flex items-center rounded-t-2xl">app.css</h4>

                <div class="self-stretch h-full bg-siteLite rounded-b-2xl">
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
    <div class="bg-site py-12 sm:py-24 py-32">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 flex flex-col md:flex-row justify-center items-center space-x-0 space-y-6 md:space-x-6 md:space-y-0">
            <div class="flex flex-1 flex-col space-y-4 justify-center self-stretch items-center">
                <h1 class="dm-serif text-gray-200 text-4xl sm:text-6xl lg:text-8xl">Learn JS</h1>
                <p class="text-md md:text-lg font-medium text-white">The language for controlling websites</p>
                <div class="flex flex-col self-stretch justify-center md:flex-row space-x-0 space-y-4 md:space-x-4 md:space-y-0 text-sm md:text-lg">
                    <a href="/javascript" class="text-white hover:text-green-500 text-lg px-6 py-2 rounded-2xl font-semibold">View Curriculum</a>
                    <a href="/javascript/intro" class="bg-gem hover:bg-green-500 text-white text-lg px-6 py-2 rounded-2xl font-semibold">Start Learning</a>
                </div>
            </div>

            <div class="flex flex-1 flex-col self-stretch justify-center items-center rounded-2xl shadow-xl select-text">
                <h4 class="self-stretch bg-siteLite bg-opacity-50 font-medium text-white px-4 py-2 flex items-center rounded-t-2xl">app.js</h4>

                <div class="self-stretch h-full bg-siteLite rounded-b-2xl">
                    <pre><code class="language-js code">console.log('Hello World');</code></pre>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->
    <div class="bg-site select-none">
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8 py-12 select-none">
            <div class="bg-siteLite rounded-2xl p-8 flex flex-col items-center space-y-4 space-x-0 md:flex-row md:space-y-0 md:space-x-4">
                <div class="flex w-full justify-center items-center">
                    <span class="text-gray-50 text-2xl md:text-4xl font-medium dm-serif">Subscribe to our newsletter</span>
                </div>

                <form class="flex w-full flex-col justify-center items-center space-y-4 space-x-0 md:flex-row md:space-y-0 md:space-x-4" method="POST" action="/newsletter">
                    @csrf
                    <input class="text-site placeholder-siteLite w-full md:w-auto px-4 py-2 rounded-2xl bg-gray-300 text-sm hover:bg-gray-50 focus:bg-gray-50 font-semibold border border-transparent focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-gray-50 focus:outline-none" type="email" placeholder="Email" spellcheck="false">
                    <input class="w-full md:w-auto px-4 py-2 rounded-2xl text-white text-sm bg-gem hover:bg-green-500 font-semibold" type="submit" value="Subscribe">
                </form>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/prism.js') }}"></script>
@endsection

@include('seo.index')
