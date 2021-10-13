<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Curriculum Routes
|--------------------------------------------------------------------------
|
| Here curriculum routes are defined.
|
*/

Route::get('c', function () {
    $logo = "<svg class=\"h-24 w-auto text-gray-800 dark:text-gray-50 fill-current\" viewBox=\"0 0 338 370\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M239.623 141.586C239.623 141.586 234.177 90.81 183.797 89.4C133.417 87.99 107.543 127.482 107.543 183.899C107.543 240.316 136.138 285.452 185.157 285.452C234.177 285.452 239.623 229.035 239.623 229.035L333.576 234.676C333.576 234.676 339.108 285.63 299.792 324.505C260.475 363.377 212.217 369.728 178.516 369.464C144.815 369.195 98.089 369.992 52.903 323.712C7.71695 277.432 0.0489502 232.473 0.0489502 188.309C0.0489502 144.143 8.61795 85.636 62.345 41.269C98.859 11.121 135.874 0.0130005 172.895 0.0130005C327.446 0.0130005 337.826 142.557 337.826 142.557L239.623 141.586Z\"/>
             </svg>";

    $titles = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    return view('curriculum', ['course' => 'c', 'logo' => $logo, 'titles' => $titles, 'seo' => 'seo.c']);
});

Route::get('python', function () {
    $logo = "<svg class=\"h-24 w-auto text-gray-800 dark:text-gray-50 fill-current\" viewBox=\"0 0 1034 1037\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M265 231H514.5V269H138C92 269.833 0 322.3 0 525.5C0 728.7 92 770.833 138 766.5H229V631C233.833 585.833 266.8 495.5 360 495.5H635.5C677.167 493.333 760.5 464.9 760.5 368.5V123C761.667 82 714.1 0 514.5 0C314.9 0 265 69.3333 265 104V231ZM380 184C408.167 184 431 161.167 431 133C431 104.833 408.167 82 380 82C351.833 82 329 104.833 329 133C329 161.167 351.833 184 380 184Z\"/>
                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M768.521 805.792H519.021V767.792H895.521C941.521 766.959 1033.52 714.492 1033.52 511.292C1033.52 308.092 941.521 265.959 895.521 270.292H804.521V405.792C799.687 450.959 766.721 541.292 673.521 541.292H398.021C356.354 543.459 273.021 571.892 273.021 668.292V913.792C271.854 954.792 319.421 1036.79 519.021 1036.79C718.621 1036.79 768.521 967.459 768.521 932.792V805.792ZM653.521 852.792C625.354 852.792 602.521 875.626 602.521 903.792C602.521 931.959 625.354 954.792 653.521 954.792C681.687 954.792 704.521 931.959 704.521 903.792C704.521 875.626 681.687 852.792 653.521 852.792Z\"/>
             </svg>";

    $titles = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    return view('curriculum', ['course' => 'python', 'logo' => $logo, 'titles' => $titles, 'seo' => 'seo.python']);
});
