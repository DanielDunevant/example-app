<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*This  file registers  every  route in your project*/

Route::get('/', [WelcomeController::class,'index']);
/*How to  pass a variable throught he view  function*/
Route::get('/home', function () {
    return view('home', ['name'=>"Daniel"]);
});

/*How to  pass a variable throught he view  function*/
Route::get('/home2', function () {
    return view('home', ['name'=>"Daniel"]);
});

/*How to  pass a variable throught he view  function*/
Route::get('/about-us', function () {
    return view('about', ['name'=>"Daniel"]);
});