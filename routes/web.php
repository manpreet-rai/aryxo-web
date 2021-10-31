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

// Contact routes
Route::get('contact', function (){
    return view('contact');
});
Route::post('contact', function (Request $request){
    $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        'secret' => '6LeGFQYdAAAAAEVlZjan0KsY9BHLBldssnaThffA',
        'response' => $request['g-recaptcha-response'],
    ])->json('success');

    if ($response){
        Feedback::create(['name' => $request['name'], 'email'=>$request['email'], 'type'=>$request['type'], 'message'=>$request['message']]);
        return redirect('/')->with('status', 'Your feedback has reached us. Thank you!');
    } else {
        return redirect('/')->with('failure', 'Failed to send feedback. Please retry.');
    }
});

// Certification routes
Route::get('certification', function (){
   return redirect('certification/verify');
});
Route::get('certification/verify', function (){
   return view('verify');
});
Route::post('certification/verify', function (Request $request){
    $pattern = '/\d{3}-\d{3}-\d{3}-\d{3}/';
    if (preg_match($pattern, $request['certid'])) {
        $certificates = ["202-110-001-001", "202-110-002-001", "202-110-002-002", "202-110-002-003", "202-110-003-001", "202-110-004-001", "202-110-004-002", "202-110-005-001", "202-110-005-002"];
        if (in_array($request['certid'], $certificates, true)){
            return \redirect()->back()->with('success', $request['certid']);
        } else {
            return \redirect()->back()->with('failure', 'No certificate found for "'.$request['certid'].'"');
        }
    } else {
        return \redirect()->back()->with('error', 'Invalid Certificate ID');
    }
});

// Newsletter routes
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
