<?php

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

Route::get('/', function () {
    return view('welcome');
});
/*How to  pass a variable throught he view  function*/
Route::get('/home', function () {
    return view('home', ['name'=>"Daniel"]);
});