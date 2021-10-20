<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| C Course Routes
|--------------------------------------------------------------------------
|
| Here c course routes are defined.
|
*/

Route::get('c/introduction-to-c', function () {
    return view('courses.c.introduction-to-c');
});

Route::get('c/installation-process', function () {
    return view('courses.c.installation-process');
});

Route::get('c/running-c-code', function () {
    return view('courses.c.running-c-code');
});

Route::get('c/keywords-and-identifiers', function () {
    return view('courses.c.keywords-and-identifiers');
});

Route::get('c/variables-and-constants', function () {
    return view('courses.c.variables-and-constants');
});

Route::get('c/data-types', function () {
    return view('courses.c.data-types');
});

Route::get('c/operators', function () {
    return view('courses.c.operators');
});

Route::get('c/if-and-else', function () {
    return view('courses.c.if-and-else');
});

Route::get('c/switch-cases', function () {
    return view('courses.c.switch-cases');
});

Route::get('c/for-loop', function () {
    return view('courses.c.for-loop');
});

Route::get('c/while-loop', function () {
    return view('courses.c.while-loop');
});

Route::get('c/break-and-continue', function () {
    return view('courses.c.break-and-continue');
});

Route::get('c/goto', function () {
    return view('courses.c.goto');
});

Route::get('c/fruitless-functions', function () {
    return view('courses.c.fruitless-functions');
});

Route::get('c/function-arguments', function () {
    return view('courses.c.function-arguments');
});

Route::get('c/fruitful-functions', function () {
    return view('courses.c.fruitful-functions');
});

Route::get('c/recursion', function () {
    return view('courses.c.recursion');
});

Route::get('c/storage-class', function () {
    return view('courses.c.storage-class');
});

Route::get('c/single-dimensional-array', function () {
    return view('courses.c.single-dimensional-array');
});

Route::get('c/multi-dimensional-array', function () {
    return view('courses.c.multi-dimensional-array');
});

Route::get('c/array-and-functions', function () {
    return view('courses.c.array-and-functions');
});

Route::get('c/pointers', function () {
    return view('courses.c.pointers');
});

Route::get('c/functions-and-pointers', function () {
    return view('courses.c.functions-and-pointers');
});

Route::get('c/arrays-and-pointers', function () {
    return view('courses.c.arrays-and-pointers');
});

Route::get('c/memory-management-in-c', function () {
    return view('courses.c.memory-management-in-c');
});

Route::get('c/structs', function () {
    return view('courses.c.structs');
});

Route::get('c/structs-and-pointers', function () {
    return view('courses.c.structs-and-pointers');
});

Route::get('c/unions', function () {
    return view('courses.c.unions');
});

Route::get('c/unions-and-pointers', function () {
    return view('courses.c.unions-and-pointers');
});

Route::get('c/console-input-and-output', function () {
    return view('courses.c.console-input-and-output');
});

Route::get('c/file-handling', function () {
    return view('courses.c.file-handling');
});

Route::get('c/command-line-arguments', function () {
    return view('courses.c.command-line-arguments');
});

Route::get('c/preprocessor-directives', function () {
    return view('courses.c.preprocessor-directives');
});

Route::get('c/string-handling', function () {
    return view('courses.c.string-handling');
});

Route::get('c/math-operations', function () {
    return view('courses.c.math-operations');
});
