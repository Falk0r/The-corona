<?php

//https://medium.com/@sagarmaheshwary31/laravel-multiple-guards-authentication-setup-and-login-2761564da986

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\TblSlider;
use App\Models\TblPrevention;
use App\Models\TblDoctor;
use App\Models\TblSettingLogo;

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

        // <-- Start Doctors -->
        public function doctors()
        {
            return view('admin.doctors', ['name' => 'Doctors', 'button' => 'Add Doctor', 'link' => 'admin.doctors-add' ,'doctors' => TblDoctor::getAll()]);
        }
        public function doctorsEdit($id)
        {        
            return view('admin.doctors-edit', ['name' => 'Doctors', 'button' => 'View Doctors', 'link' => 'admin.doctors','doctor' => tblDoctor::find($id)]);
        }
        public function doctorsEditOne(Request $request)
        {
            TblDoctor::updateOne($request);
            return redirect('admin/doctors');
        }
        public function doctorsPhotoUpdate(Request $request)
        {
            $name = $request->photo->getClientOriginalName();
            $path = $request->photo->move('uploads', $name);
    
            $doctor = TblDoctor::find($request->id);
            $doctor->name = $request->name;
            $doctor->slug = $request->slug;
            $doctor->designation = $request->designation;
            $doctor->degree = $request->degree;
            $doctor->detail = $request->detail;
            $doctor->practice_location = $request->practice_location;
            $doctor->advice = $request->advice;
            $doctor->facebook = $request->facebook;
            $doctor->twitter = $request->twitter;
            $doctor->linkedin = $request->linkedin;
            $doctor->youtube = $request->youtube;
            $doctor->instagram = $request->instagram;
            $doctor->email = $request->email;
            $doctor->phone = $request->phone;
            $doctor->website = $request->website;
            $doctor->address = $request->address;
            $doctor->video_youtube = $request->video_youtube;
            $doctor->doctor_order = $request->doctor_order;
            $doctor->status = $request->status;
            $doctor->meta_title = $request->meta_title;
            $doctor->meta_description = $request->meta_description;
            $doctor->photo = $name;
            $doctor->save();
    
            return redirect('admin/doctors');
        }
        public function doctorsDelete($id)
        {
            TblDoctor::deleteDoctor($id);
            return redirect('admin/doctors');
        }
        public function doctorsAdd()
        {
            return view('admin.doctors-add', ['name' => 'Add Doctor', 'button' => 'View doctors', 'link' => 'admin.doctors']);
        }
        public function doctorsAddOne(Request $request)
        {
            TblDoctor::addOne($request);
            return redirect('admin/doctors');
        }
    
        // <-- End Doctors -->

        // <-- Start Web Settings -->

            //Logo
        public function settingLogo()
        {
            return view('admin.setting-logo', ['name' => 'Setting - Logo', 'logos' => TblSettingLogo::getAll()]);
        }
        public function settingLogoUpdate(Request $request)
        {
            
            $name = $request->photo->getClientOriginalName();
            $path = $request->photo->move('uploads', $name);

            $logo = TblSettingLogo::find(1);
            if ($request->name == 'logo') {
                $logo->logo = $name;
            } elseif ($request->name == 'logo_admin') {
                $logo->logo_admin = $name;
            }
            $logo->save();
            return redirect('admin/setting-logo');
        }

        // <-- End Web Settings -->
}