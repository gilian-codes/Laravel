<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;  //added this myself

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    // return view('home');
    echo" This is the home page";
});


Route::get('/about', function () {
    return view('about');
});  //->middleware('check')  //adding the middleware to the about page

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/contact', [ContactController::class, 'index']);

   //In the case where the url is long
   Route::get('/contactasd-asdf-asdfsad', [ContactController::class, 'index']) ->name('con');

