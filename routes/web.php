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

Route::post('/send-comment', 'DbController@addComment')->name('comment');

Auth::routes();

//Routes Customers
Route::view('/registration', 'auth.register');
Route::get('/customer-dashboard', 'NavController@customerDashboard')->middleware('auth')->name('Dashboard');
Route::get('/customer-order', 'NavController@customerOrder')->middleware('auth')->name('Orders');
Route::get('/customer-delivery-track', 'NavController@customerDeliveryTrack')->middleware('auth')->name('Delivery Track');
Route::get('/customer-edit-profile', 'NavController@customerEditProfile')->middleware('auth')->name('Edit Profile');
Route::get('/customer-edit-password', 'NavController@customerEditPassword')->middleware('auth')->name('Edit Password');


Route::get('/preventionsdetail/{preventions_slug}', 'NavController@preventionsDetail')->name('preventionsdetail');

/* ----------------------- Admin Routes START -------------------------------- */

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){

    /**
     * Admin Auth Route(s)
     */
    Route::namespace('Auth')->group(function(){

        //Login Routes
        Route::get('/login','LoginController@showLoginForm')->name('login');
        Route::post('/login','LoginController@login');
        Route::post('/logout','LoginController@logout')->name('logout');

        //Register Routes
        // Route::get('/register','RegisterController@showRegistrationForm')->name('register');
        // Route::post('/register','RegisterController@register');

        //Forgot Password Routes
        Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        //Reset Password Routes
        Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');

        // Email Verification Route(s)
        Route::get('email/verify','VerificationController@show')->name('verification.notice');
        Route::get('email/verify/{id}','VerificationController@verify')->name('verification.verify');
        Route::get('email/resend','VerificationController@resend')->name('verification.resend');

    });

    Route::get('/index','HomeController@index')->name('home');
    //Slider
        //CREATE
    Route::get('/slider-add', 'HomeController@sliderAdd')->name('slider-add');
    Route::post('/slider-add', 'HomeController@sliderAddOne');
        //READ
    Route::get('/slider', 'HomeController@slider')->name('slider');
        //UPDATE
    Route::get('/slider-edit/{id}', 'HomeController@sliderEdit')->name('slider-edit');
    Route::post('/slider-edit/{id}', 'HomeController@sliderEditOne');
    Route::post('/slider-edit-photo', 'HomeController@sliderPhotoUpdate');
        //DELETE
    Route::get('/slider-delete/{id}', 'HomeController@sliderDelete')->name('slider-delete');
    
    //Preventions
        //CREATE
    Route::get('/preventions-add', 'HomeController@preventionsAdd')->name('preventions-add');
    Route::post('/preventions-add', 'HomeController@preventionsAddOne');
        //READ
    Route::get('/preventions', 'HomeController@preventions')->name('preventions');
        //UPDATE    
    Route::get('/preventions-edit/{id}', 'HomeController@preventionsEdit')->name('preventions-edit');
    Route::post('/preventions-edit/{id}', 'HomeController@preventionsEditOne');
    Route::post('/preventions-edit-photo', 'HomeController@preventionsPhotoUpdate');
        //DELETE
    Route::get('/preventions-delete/{id}', 'HomeController@preventionsDelete')->name('preventions-delete');

    //Doctors
        //CREATE
    Route::get('/doctors-add', 'HomeController@doctorsAdd')->name('doctors-add');
    Route::post('/doctors-add', 'HomeController@doctorsAddOne');
        //READ
    Route::get('/doctors', 'HomeController@doctors')->name('doctors');
        //UPDATE    
    Route::get('/doctors-edit/{id}', 'HomeController@doctorsEdit')->name('doctors-edit');
    Route::post('/doctors-edit/{id}', 'HomeController@doctorsEditOne');
    Route::post('/doctors-edit-photo', 'HomeController@doctorsPhotoUpdate');
        //DELETE
    Route::get('/doctors-delete/{id}', 'HomeController@doctorsDelete')->name('doctors-delete');

    //Website Settings
        //Logo
        Route::get('/setting-logo', 'HomeController@settingLogo')->name('setting-logo');
        Route::post('/setting-logo', 'HomeController@settingLogoUpdate');

        //Favicon
        Route::get('/setting-favicon', 'HomeController@settingFavicon')->name('setting-favicon');
        Route::post('/setting-favicon', 'HomeController@settingFaviconUpdate');




});

/* ----------------------- Admin Routes END -------------------------------- */
