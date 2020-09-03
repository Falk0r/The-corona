<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('/', 'NavController@index')->name('home');
Route::get('/about', 'NavController@about')->name('about');
Route::get('/preventions', 'NavController@preventions')->name('preventions');
Route::get('/products', 'NavController@products')->name('products');
Route::get('/contact', 'NavController@contact')->name('contact');


Route::get('/photo-gallery', 'NavController@photoGallery')->name('photo-gallery');
Route::get('/video-gallery', 'NavController@videoGallery')->name('video-gallery');
Route::get('/faq', 'NavController@faq')->name('faq');
Route::get('/doctors', 'NavController@doctors')->name('doctors');
Route::get('/who-we-are', 'NavController@whoWeAre')->name('who-we-are');
Route::get('/what-we-do', 'NavController@whatWeDo')->name('what-we-do');

Route::get('/privacy-policy', 'NavController@privacyPolicy')->name('privacy-policy');
Route::get('/terms-and-conditions', 'NavController@termsAndConditions')->name('terms-and-conditions');

//----News Routes--------------------------------------------------------------------
Route::get('/news', 'NavController@news')->name('news');
Route::get('/category/{cat_slug}', 'NavController@newsByCategory')->name('category');
Route::get('/news/{news_slug}', 'NavController@newsByOne')->name('article');
Route::post('/search', 'NavController@searchArtcl')->name('search');

Auth::routes();

//Routes Customers
Route::view('/registration', 'auth.register');
Route::get('/customer-dashboard', 'NavController@customerDashboard')->middleware('auth')->name('Dashboard');
Route::get('/customer-order', 'NavController@customerOrder')->middleware('auth')->name('Orders');
Route::get('/customer-delivery-track', 'NavController@customerDeliveryTrack')->middleware('auth')->name('Delivery Track');
Route::get('/customer-edit-profile', 'NavController@customerEditProfile')->middleware('auth')->name('Edit Profile');
Route::get('/customer-edit-password', 'NavController@customerEditPassword')->middleware('auth')->name('Edit Password');
