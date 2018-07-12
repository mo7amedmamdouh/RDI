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
Route::get('/e-learning' , 'ViewsController@e_learning')->name('e_learning.e-learning');
Route::get('/e-learning-special-needs' , 'ViewsController@e_learning_special_needs')->name('e_learning.special_needs');
Route::get('/e-training' , 'ViewsController@e_training')->name('e_learning.e_training');
Route::get('/languages-learning' , 'ViewsController@languages_learning')->name('e_learning.languages_learning');
Route::get('/mobile-applications' , 'ViewsController@mobile_applications')->name('e_learning.mobile_applications');
Route::get('/e-publishing' , 'ViewsController@e_publishing')->name('e_learning.e_publishing');
Route::get('/animation' , 'ViewsController@animation')->name('e_learning.animation');
Route::get('/typeWritten' , 'ViewsController@typeWritten')->name('typeWritten');
Route::get('/handWritten' , 'ViewsController@handWritten')->name('handWritten');
Route::get('/sentimentAnalysis' , 'ViewsController@sentimentAnalysis')->name('sentimentAnalysis');
Route::get('/arabicTextDiacritizer' , 'ViewsController@arabicTextDiacritizer')->name('arabicTextDiacritizer');
Route::get('/nlpToolKit' , 'ViewsController@nlpToolKit')->name('nlpToolKit');
Route::get('/industries' , 'ViewsController@industries')->name('industries');

Route::get('/about-us' , 'ViewsController@about_us')->name('about_us');
Route::get('/projects' , 'ViewsController@projects')->name('projects');


Route::get('/scientific-publishers' , 'ViewsController@scientific_publishers')->name('scientific_publishers');

Route::get('/awards' , 'ViewsController@awards')->name('awards');
Route::get('/structure' , 'ViewsController@structure')->name('structure');
Route::get('/news' , 'ViewsController@news')->name('news');
Route::get('/jobs' , 'ViewsController@jobs')->name('jobs');
Route::get('/contact-us' , 'ViewsController@contact_us')->name('contact_us');
