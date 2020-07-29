<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblDoctor;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function about()
    {
        return view('about');
    }

    public function preventions()
    {
        return view('preventions');
    }

    public function products()
    {
        return view('products');
    }

    public function news()
    {
        return view('news');
    }

    public function photoGallery()
    {
        return view('photo-gallery');
    }

    public function videoGallery()
    {
        return view('video-gallery');
    }

    public function faq()
    {
        return view('faq');
    }

    public function doctors()
    {
    return view('doctors', ['doctors'=> TblDoctor::getAll()]);
    }

    public function whoWeAre()
    {
        return view('who-we-are');
    }

    public function whatWeDo()
    {
        return view('what-we-do');
    }

    public function contact()
    {
        return view('contact');
    }

    public function privacyPolicy()
    {
        return view('privacy-policy');
    }

    public function termsAndConditions()
    {
        return view('terms-and-conditions');
    }

}
