<?php

namespace App\Http\Controllers;

use App\Models\TblCategory;
use App\Models\TblPage;
use App\Models\TblSettingHome;
use Illuminate\Http\Request;
use App\Models\TblDoctor;
use App\Models\TblNews;
use App\Models\TblProduct;
use App\Models\TblVideo;

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
        return view('home', ['homeDatas'=> TblSettingHome::giveData()]);
    }

    public function about()
    {
        return view('about', ['pageDatas'=> TblPage::choose('about')]);
    }

    public function preventions()
    {
        return view('preventions', ['pageDatas'=> TblPage::choose('preventions')]);
    }

    public function products()
    {
        return view('products', ['pageDatas'=> TblPage::choose('products'), 'products'=> TblProduct::getAll()]);
    }

// --------------------news functions-----------------------------------

    public function news()
    {
        return view('news', ['newses'=> TblNews::getAllTimePaginate(), 'pageDatas'=> TblPage::choose('news'), 'categories'=> TblCategory::getAll(), 'newsSide'=> TblNews::getAllTime()]);
    }

    public function searchArtcl(Request $request)
    {
        return view('news', ['searchTitle'=> TblNews::searchTitle($request), 'newses'=> TblNews::getBySearch($request), 'pageDatas'=> TblPage::choose('news'), 'categories'=> TblCategory::getAll(), 'newsSide'=> TblNews::getAllTime()]);
    }

    public function newsByCategory($cat_slug)
    {
        return view('news', ['newses'=> TblNews::getByCat($cat_slug), 'pageDatas'=> TblPage::choose('news'), 'categories'=> TblCategory::getAll(), 'newsSide'=> TblNews::getAllTime()]);
    }

// --------------------others functions-----------------------------------

    public function photoGallery()
    {
        return view('photo-gallery', ['pageDatas'=> TblPage::choose('photo-gallery')]);
    }

    public function videoGallery()
    {
        return view('video-gallery', ['pageDatas'=> TblPage::choose('video-gallery'), 'videos'=> TblVideo::getAll()]);
    }

    public function faq()
    {
        return view('faq', ['pageDatas'=> TblPage::choose('faq')]);
    }

    public function doctors()
    {
        return view('doctors', ['pageDatas'=> TblPage::choose('doctors'), 'doctors'=> TblDoctor::getAll()]);
    }

    public function whoWeAre()
    {
        return view('who-we-are', ['pageDatas'=> TblPage::choose('who-we-are')]);
    }

    public function whatWeDo()
    {
        return view('what-we-do', ['pageDatas'=> TblPage::choose('what-we-do')]);
    }

    public function contact()
    {
        return view('contact', ['pageDatas'=> TblPage::choose('contact')]);
    }

    public function privacyPolicy()
    {
        return view('privacy-policy', ['pageDatas'=> TblPage::choose('privacy-policy')]);
    }

    public function termsAndConditions()
    {
        return view('terms-and-conditions', ['pageDatas'=> TblPage::choose('terms-and-conditions')]);
    }

}
