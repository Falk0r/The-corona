<?php

//https://medium.com/@sagarmaheshwary31/laravel-multiple-guards-authentication-setup-and-login-2761564da986

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\TblSlider;

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
}