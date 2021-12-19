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

Route::get('/master', function(){
    return view('layout.master');
});

Route::get('/index', function(){
    return view('index');
});

Route::get('/bookdetail',function(){
    return view('bookdetail');
});

Route::get('/register',function(){
    return view('register');
});
