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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/action',function(){
    return view('pages.action');
});
Route::get('/about', function(){
    return view('pages.about_us');
});
Route::get('/join', function(){
    return view('pages.join_us');
});
Route::get('/news', function(){
    return view('pages.news');
});
Route::get('/contact', function(){
    return view('pages.contact_us');
});

