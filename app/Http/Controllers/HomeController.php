<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

//A remplacer dans NavController
use App\Models\TblCategory;
use App\Models\TblPage;
use App\Models\TblSettingHome;
use Illuminate\Http\Request;
use App\Models\TblDoctor;
use App\Models\TblNews;
use App\Models\TblProduct;
use App\Models\TblVideo;
use App\Models\TblPhoto;
use App\Models\TblSettingContact;
use App\Models\TblPrevention;
use App\Models\TblFaq;
//Fin de remplacer

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');
    }
  
    // Fonction à rebasculer dans NavController

    public function preventions()
    {
        return view('preventions', ['pageDatas'=> TblPage::choose('preventions'), 'preventions'=> TblPrevention::getAll()]);
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



    public function faq()
    {
        return view('faq', ['pageDatas'=> TblPage::choose('faq'), 'faq'=> TblFaq::getAll()]);
    }


    public function contact()
    {
        return view('contact', ['pageDatas'=> TblPage::choose('contact'), 'contact'=> TblSettingContact::getAll()]);
    }

}
