<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth;

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


// Route::get('/', function () {
//     return view('welcome');
// });

//Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/preventions', 'HomeController@preventions')->name('preventions');
Route::get('/products', 'HomeController@products')->name('products');
Route::get('/news', 'HomeController@news')->name('news');
Route::get('/contact', 'HomeController@contact')->name('contact');

//Route::get('/jsbazar', 'HomeController@news')->name('pages');

Route::get('/photo-gallery', 'HomeController@photoGallery')->name('photo-gallery');
Route::get('/video-gallery', 'HomeController@videoGallery')->name('video-gallery');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/doctors', 'HomeController@doctors')->name('doctors');
Route::get('/who-we-are', 'HomeController@whoWeAre')->name('who-we-are');
Route::get('/what-we-do', 'HomeController@whatWeDo')->name('what-we-do');

Route::get('/privacy-policy', 'HomeController@privacyPolicy')->name('privacy-policy');
Route::get('/terms-and-conditions', 'HomeController@termsAndConditions')->name('terms-and-conditions');



