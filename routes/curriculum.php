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

$courses = json_decode(file_get_contents(resource_path('views/list_courses.json')), true);
$logos = json_decode(file_get_contents(resource_path('views/list_logos.json')), true);

Route::get('{id}', function ($id) use ($courses, $logos) {
    $existing_courses = array('c', 'cpp', 'java', 'python', 'html', 'csstyles', 'javascript');
    if (in_array($id, $existing_courses)) {
        $course = $id;
        $logo = $logos[$id];
        $titles = $courses[$id];

        return view('curriculum', ['course' => $course, 'logo' => $logo, 'titles' => $titles]);
    } else abort(404);
});

Route::get('{id}/{slug}', function ($id, $slug) use ($courses, $logos) {
    $existing_courses = array('c', 'cpp', 'java', 'python', 'html', 'csstyles', 'javascript');
    if (in_array($id, $existing_courses)) {
        return 'Hello '.$slug;
    } else abort(404);
});
