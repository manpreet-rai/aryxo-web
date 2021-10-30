<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use Illuminate\Support\Str;

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

// Newsletter
Route::post('/newsletter', function (Request $request){
    if (!Subscriber::where('email', $request['email'])->exists()){
        Subscriber::create(['email'=>$request['email'], 'token'=>Str::random(60)]);
    }

    return redirect('/')->with('status', 'You have been added to our subscription list. Thank you!');
});

// Curriculum routes
@include "curriculum.php";

// Courses routes
@include "courses/c.php";
@include "courses/python.php";
@include "courses/html.php";
