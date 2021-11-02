<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Yaml\Yaml;

/*
|--------------------------------------------------------------------------
| C Course Routes
|--------------------------------------------------------------------------
|
| Here C course routes are defined.
|
*/

Route::get('c/introduction-to-c', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/introduction-to-c.yml')));
    return view('chapter', [
        'material' => 'courses.c.introduction-to-c',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => '',
        'next' => 'Installation process']);
});

Route::get('c/installation-process', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/installation-process.yml')));
    return view('chapter', [
        'material' => 'courses.c.installation-process',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Introduction to C',
        'next' => 'Running C code']);
});

Route::get('c/running-c-code', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/running-c-code.yml')));
    return view('chapter', [
        'material' => 'courses.c.running-c-code',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Installation process',
        'next' => 'Keywords and Identifiers']);
});

Route::get('c/keywords-and-identifiers', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/keywords-and-identifiers.yml')));
    return view('chapter', [
        'material' => 'courses.c.keywords-and-identifiers',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Running C code',
        'next' => 'Variables and Constants']);
});

Route::get('c/variables-and-constants', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/variables-and-constants.yml')));
    return view('chapter', [
        'material' => 'courses.c.variables-and-constants',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Keywords and Identifiers',
        'next' => 'Data Types']);
});

Route::get('c/data-types', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/data-types.yml')));
    return view('chapter', [
        'material' => 'courses.c.data-types',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Variables and Constants',
        'next' => 'Operators']);
});

Route::get('c/operators', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/operators.yml')));
    return view('chapter', [
        'material' => 'courses.c.operators',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Data Types',
        'next' => 'If and Else']);
});

Route::get('c/if-and-else', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/if-and-else.yml')));
    return view('chapter', [
        'material' => 'courses.c.if-and-else',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Operators',
        'next' => 'Switch Cases']);
});

Route::get('c/switch-cases', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/switch-cases.yml')));
    return view('chapter', [
        'material' => 'courses.c.switch-cases',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'If and Else',
        'next' => 'For Loop']);
});

Route::get('c/for-loop', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/for-loop.yml')));
    return view('chapter', [
        'material' => 'courses.c.for-loop',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Switch Cases',
        'next' => 'While Loop']);
});

Route::get('c/while-loop', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/while-loop.yml')));
    return view('chapter', [
        'material' => 'courses.c.while-loop',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'For Loop',
        'next' => 'Break and Continue']);
});

Route::get('c/break-and-continue', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/break-and-continue.yml')));
    return view('chapter', [
        'material' => 'courses.c.break-and-continue',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'While Loop',
        'next' => 'Goto']);
});

Route::get('c/goto', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/goto.yml')));
    return view('chapter', [
        'material' => 'courses.c.goto',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Break and Continue',
        'next' => 'Fruitless Functions']);
});

Route::get('c/fruitless-functions', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/fruitless-functions.yml')));
    return view('chapter', [
        'material' => 'courses.c.fruitless-functions',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Goto',
        'next' => 'Function Arguments']);
});

Route::get('c/function-arguments', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/function-arguments.yml')));
    return view('chapter', [
        'material' => 'courses.c.function-arguments',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Fruitless Functions',
        'next' => 'Fruitful Functions']);
});

Route::get('c/fruitful-functions', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/fruitful-functions.yml')));
    return view('chapter', [
        'material' => 'courses.c.fruitful-functions',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Function Arguments',
        'next' => 'Recursion, Storage Class']);
});

Route::get('c/recursion-storage-class', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/recursion-storage-class.yml')));
    return view('chapter', [
        'material' => 'courses.c.recursion-storage-class',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Fruitful Functions',
        'next' => 'Single Dimensional Array']);
});

Route::get('c/single-dimensional-array', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/single-dimensional-array.yml')));
    return view('chapter', [
        'material' => 'courses.c.single-dimensional-array',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Recursion, Storage Class',
        'next' => 'Multi Dimensional Array']);
});

Route::get('c/multi-dimensional-array', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/multi-dimensional-array.yml')));
    return view('chapter', [
        'material' => 'courses.c.multi-dimensional-array',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Single Dimensional Array',
        'next' => 'Array and Functions']);
});

Route::get('c/array-and-functions', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/array-and-functions.yml')));
    return view('chapter', [
        'material' => 'courses.c.array-and-functions',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Multi Dimensional Array',
        'next' => 'Pointers']);
});

Route::get('c/pointers', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/pointers.yml')));
    return view('chapter', [
        'material' => 'courses.c.pointers',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Array and Functions',
        'next' => 'Functions and Pointers']);
});

Route::get('c/functions-and-pointers', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/functions-and-pointers.yml')));
    return view('chapter', [
        'material' => 'courses.c.functions-and-pointers',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Pointers',
        'next' => 'Arrays and Pointers']);
});

Route::get('c/arrays-and-pointers', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/arrays-and-pointers.yml')));
    return view('chapter', [
        'material' => 'courses.c.arrays-and-pointers',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Functions and Pointers',
        'next' => 'Memory Management in C']);
});

Route::get('c/memory-management-in-c', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/memory-management-in-c.yml')));
    return view('chapter', [
        'material' => 'courses.c.memory-management-in-c',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Arrays and Pointers',
        'next' => 'Structs']);
});

Route::get('c/structs', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/structs.yml')));
    return view('chapter', [
        'material' => 'courses.c.structs',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Memory Management in C',
        'next' => 'Structs and Pointers']);
});

Route::get('c/structs-and-pointers', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/structs-and-pointers.yml')));
    return view('chapter', [
        'material' => 'courses.c.structs-and-pointers',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Structs',
        'next' => 'Unions']);
});

Route::get('c/unions', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/unions.yml')));
    return view('chapter', [
        'material' => 'courses.c.unions',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Structs and Pointers',
        'next' => 'Unions and Pointers']);
});

Route::get('c/unions-and-pointers', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/unions-and-pointers.yml')));
    return view('chapter', [
        'material' => 'courses.c.unions-and-pointers',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Unions',
        'next' => 'Console Input and Output']);
});

Route::get('c/console-input-and-output', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/console-input-and-output.yml')));
    return view('chapter', [
        'material' => 'courses.c.console-input-and-output',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Unions and Pointers',
        'next' => 'File Handling']);
});

Route::get('c/file-handling', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/file-handling.yml')));
    return view('chapter', [
        'material' => 'courses.c.file-handling',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Console Input and Output',
        'next' => 'Command Line Arguments']);
});

Route::get('c/command-line-arguments', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/command-line-arguments.yml')));
    return view('chapter', [
        'material' => 'courses.c.command-line-arguments',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'File Handling',
        'next' => 'Preprocessor Directives']);
});

Route::get('c/preprocessor-directives', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/preprocessor-directives.yml')));
    return view('chapter', [
        'material' => 'courses.c.preprocessor-directives',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Command Line Arguments',
        'next' => 'String Handling']);
});

Route::get('c/string-handling', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/string-handling.yml')));
    return view('chapter', [
        'material' => 'courses.c.string-handling',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'Preprocessor Directives',
        'next' => 'Math Operations']);
});

Route::get('c/math-operations', function () {
    $curriculum = json_decode(file_get_contents(resource_path('views/curriculums/c.json')), true);
    $contents = Yaml::parse(file_get_contents(resource_path('views/contents/c/math-operations.yml')));
    return view('chapter', [
        'material' => 'courses.c.math-operations',
        'course' => 'c',
        'curriculum' => $curriculum,
        'contents' => $contents,
        'prev' => 'String Handling',
        'next' => '']);
});
