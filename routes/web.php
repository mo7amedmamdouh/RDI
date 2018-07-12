<?php

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


Route::get('/','ViewsController@homePage')->name('home-page');
Route::get('/textToSpeech' , 'ViewsController@textToSpeechPage')->name('textToSpeechPage');
Route::get('/speechRecognation' , 'ViewsController@speechRecognation')->name('speechRecognation');
Route::get('/hafss' , 'ViewsController@hafss')->name('hafss');