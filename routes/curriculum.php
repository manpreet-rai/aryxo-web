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
    $titles = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    return view('curriculum', ['course' => 'c', 'titles' => $titles, 'seo' => 'seo.c']);
});

Route::get('python', function () {
    $titles = json_decode(file_get_contents(resource_path('views/curriculums/python.json')), true);
    return view('curriculum', ['course' => 'python', 'titles' => $titles, 'seo' => 'seo.python']);
});

Route::get('html', function () {
    $titles = json_decode(file_get_contents(resource_path('views/curriculums/html.json')), true);
    return view('curriculum', ['course' => 'html', 'titles' => $titles, 'seo' => 'seo.html']);
});
