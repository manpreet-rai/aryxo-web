<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// General routes
Route::view('/', 'index');
Route::view('sitemap', 'sitemap.sitemap');

// Curriculum routes
@include "curriculum.php";

// Courses routes
@include "courses/c.php";
@include "courses/python.php";
