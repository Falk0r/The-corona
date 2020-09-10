<?php

//https://medium.com/@sagarmaheshwary31/laravel-multiple-guards-authentication-setup-and-login-2761564da986

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\TblSlider;
use App\Models\TblPrevention;

class HomeController extends Controller
{
    /**
     * Only Authenticated users for "admin" guard 
     * are allowed.
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show Admin Dashboard.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('admin.dashboard', ['name' => 'Dashboard']);
    }
    
    // <-- Start Slider -->
    public function slider()
    {
        return view('admin.slider', ['name' => 'Sliders', 'button' => 'Add Slider', 'link' => 'admin.slider-add' ,'sliders' => TblSlider::getAll()]);
    }
    public function sliderEdit($id)
    {        
        return view('admin.slider-edit', ['name' => 'Sliders', 'button' => 'View Sliders', 'link' => 'admin.slider','slide' => tblSlider::find($id)]);
    }
    public function sliderEditOne(Request $request)
    {
        TblSlider::updateOne($request);
        return redirect('admin/slider');
    }
    public function sliderPhotoUpdate(Request $request)
    {
        $name = $request->photo->getClientOriginalName();
        $path = $request->photo->move('uploads', $name);

        $slide = TblSlider::find($request->id);
		$slide->heading = $request->heading;
		$slide->content = $request->content;
		$slide->button_text = $request->button_text;
		$slide->button_url = $request->button_url;
		$slide->slide_order = $request->slide_order;
        $slide->status = $request->status;
        $slide->photo = $name;
		$slide->save();

        return redirect('admin/slider');
    }
    public function sliderDelete($id)
    {
        TblSlider::deleteSlide($id);
        return redirect('admin/slider');
    }
    public function sliderAdd()
    {
        return view('admin.slider-add', ['name' => 'Sliders', 'button' => 'View Sliders', 'link' => 'admin.slider']);
    }
    public function sliderAddOne(Request $request)
    {
        TblSlider::addOne($request);
        return redirect('admin/slider');
    }

    // <-- End Slider -->

    // <-- Start Preventions -->
    public function preventions()
    {
        return view('admin.preventions', ['name' => 'Preventions', 'button' => 'Add Preventions', 'link' => 'admin.preventions-add' ,'preventions' => TblPrevention::getAll()]);
    }
    public function preventionsEdit($id)
    {        
        return view('admin.preventions-edit', ['name' => 'Preventions', 'button' => 'View Preventions', 'link' => 'admin.preventions','prevention' => tblPrevention::find($id)]);
    }
    public function preventionsEditOne(Request $request)
    {
        TblPrevention::updateOne($request);
        return redirect('admin/preventions');
    }
    public function preventionsPhotoUpdate(Request $request)
    {
        $name = $request->photo->getClientOriginalName();
        $path = $request->photo->move('uploads', $name);

        $prevention = TblPrevention::find($request->id);
		$prevention->name = $request->name;
		$prevention->slug = $request->slug;
		$prevention->description = $request->description;
		$prevention->short_description = $request->short_description;
		$prevention->prevention_order = $request->prevention_order;
		$prevention->meta_title = $request->meta_title;
		$prevention->meta_description = $request->meta_description;
		$prevention->prevention_order = $request->prevention_order;
		$prevention->status = $request->status;
        $prevention->photo = $name;
		$prevention->save();

        return redirect('admin/preventions');
    }
    public function preventionsDelete($id)
    {
        TblPrevention::deletePrevention($id);
        return redirect('admin/preventions');
    }
    public function preventionsAdd()
    {
        return view('admin.preventions-add', ['name' => 'Add Prevention', 'button' => 'View Preventions', 'link' => 'admin.preventions']);
    }
    public function preventionsAddOne(Request $request)
    {
        TblPrevention::addOne($request);
        return redirect('admin/preventions');
    }


    // <-- End Preventions -->
}