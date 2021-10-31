<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Models\Feedback;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

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

// Contact
Route::get('contact', function (){
    return view('contact');
});
Route::post('contact', function (Request $request){
    $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        'secret' => '6LeGFQYdAAAAAEVlZjan0KsY9BHLBldssnaThffA',
        'response' => $request['g-recaptcha-response'],
    ])->json('success');

    if ($response){
        Feedback::create(['name' => $request['name'], 'email'=>$request['email'], 'type'=>$request['type'], 'message'=>$request['message'], 'g-recaptcha-response'=>$request['g-recaptcha-response']]);
        return redirect('/')->with('status', 'Your feedback has reached us. Thank you!');
    } else {
        return redirect('/')->with('failure', 'Failed to send feedback. Please retry.');
    }
});

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
