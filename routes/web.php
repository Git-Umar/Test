<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

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
Route::get('/',function(){
    return view('welcome');
});

Route::get('/captcha', 'MyController@captcha');

Route::get('/test','MyController@tv');

Route::get('/home',function(){
    $tt = "test";
    return view('home',compact('tt'));
});

Route::get('/login',function(){
    return view('login');
});

Route::get('/form-submit','MyController@test');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/check-captcha','Mycontroller@check_captcha');