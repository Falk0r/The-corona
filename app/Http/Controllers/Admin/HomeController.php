<?php

//https://medium.com/@sagarmaheshwary31/laravel-multiple-guards-authentication-setup-and-login-2761564da986

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\TblSlider;
use App\Models\TblPrevention;
use App\Models\TblDoctor;
use App\Models\TblSettingLogo;
use App\Models\TblSettingFavicon;
use App\Models\TblSettingTopBar;
use App\Models\TblSettingHome;

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

            //Favicon
        public function settingFavicon()
        {
            return view('admin.setting-favicon', ['name' => 'Setting - Favicon', 'favicon' => TblSettingFavicon::getAll()]);
        }
        public function settingFaviconUpdate(Request $request)
        {
            
            $name = $request->photo->getClientOriginalName();
            $path = $request->photo->move('uploads', $name);

            $favicon = TblSettingFavicon::find(1);
            $favicon->favicon = $name;
            $favicon->save();
            return redirect('admin/setting-favicon');
        }

            //Top-Bar
        public function settingTopBar()
        {
            return view('admin.setting-top-bar', ['name' => 'Setting - Top Bar', 'topBar' => TblSettingTopBar::getAll()]);
        }
        public function settingTopBarUpdate(Request $request)
        {

            $topBar = TblSettingTopBar::find(1);
            $topBar->top_bar_email = $request->top_bar_email;
            $topBar->top_bar_phone = $request->top_bar_phone;
            $topBar->save();
            return redirect('admin/setting-top-bar');
        }
            //Home
        public function settingHome()
        {
            return view('admin.setting-home', ['name' => 'Setting - Home Page', 'home' => TblSettingHome::getAll()]);
        }
        public function settingHomeUpdate(Request $request)
        {
            $home = TblSettingHome::find(1);
            if ($request->form=='form_meta_information') {
                $home->meta_title = $request->meta_title;
                $home->meta_description = $request->meta_description;
            }
            if ($request->form=='form_header') {
                $home->header_type = $request->header_type;
                $home->header_type_image_heading = $request->header_type_image_heading;
                $home->header_type_image_content = $request->header_type_image_content;
                $home->header_type_image_btn_text = $request->header_type_image_btn_text;
                $home->header_type_image_btn_url = $request->header_type_image_btn_url;
                $home->header_type_video_heading = $request->header_type_video_heading;
                $home->header_type_video_content = $request->header_type_video_content;
                $home->header_type_video_btn_text = $request->header_type_video_btn_text;
                $home->header_type_video_btn_url = $request->header_type_video_btn_url;
                $home->header_type_video_yt_url = $request->header_type_video_yt_url;
                if (isset($request->header_type_image_photo)) {         
                    $name = $request->header_type_image_photo->getClientOriginalName();
                    $path = $request->header_type_image_photo->move('uploads', $name);
                    $home->header_type_image_photo = $name;
                }
            }
            if ($request->form=='form_outbreak') {
                $home->outbreak_title = $request->outbreak_title;
                $home->outbreak_subtitle = $request->outbreak_subtitle;
                $home->outbreak_status = $request->outbreak_status;
            }
            if ($request->form=='form_outbreak_icon1') {
                $name = $request->outbreak_icon1->getClientOriginalName();
                $path = $request->outbreak_icon1->move('uploads', $name);
                $home->outbreak_icon1 = $name;
            }
            if ($request->form=='form_outbreak_icon2') {
                $name = $request->outbreak_icon2->getClientOriginalName();
                $path = $request->outbreak_icon2->move('uploads', $name);
                $home->outbreak_icon2 = $name;
            }
            if ($request->form=='form_outbreak_icon3') {
                $name = $request->outbreak_icon3->getClientOriginalName();
                $path = $request->outbreak_icon3->move('uploads', $name);
                $home->outbreak_icon3 = $name;
            }
            if ($request->form=='form_countrywise') {
                $home->countrywise_title = $request->countrywise_title;
                $home->countrywise_subtitle = $request->countrywise_subtitle;
                $home->countrywise_status = $request->countrywise_status;
            }
            if ($request->form=='form_symptom') {
                $home->symptom_title = $request->symptom_title;
                $home->symptom_subtitle = $request->symptom_subtitle;
                $home->symptom_status = $request->symptom_status;
            }
            if ($request->form=='form_special') {
                $home->special_title = $request->special_title;
                $home->special_subtitle = $request->special_subtitle;
                $home->special_content = $request->special_content;
                $home->special_btn_text = $request->special_btn_text;
                $home->special_btn_url = $request->special_btn_url;
                $home->special_yt_video = $request->special_yt_video;
                $home->special_status = $request->special_status;
                if (isset($request->special_bg)) {         
                    $name = $request->special_bg->getClientOriginalName();
                    $path = $request->special_bg->move('uploads', $name);
                    $home->special_bg = $name;
                }
                if (isset($request->special_video_bg)) {         
                    $name = $request->special_video_bg->getClientOriginalName();
                    $path = $request->special_video_bg->move('uploads', $name);
                    $home->special_video_bg = $name;
                }
            }
            if ($request->form=='form_prevention') {
                $home->prevention_title = $request->prevention_title;
                $home->prevention_subtitle = $request->prevention_subtitle;
                $home->prevention_status = $request->prevention_status;
            }
            if ($request->form=='form_doctor') {
                $home->doctor_title = $request->doctor_title;
                $home->doctor_subtitle = $request->doctor_subtitle;
                $home->doctor_status = $request->doctor_status;
            }
            if ($request->form=='form_appointment') {
                $home->appointment_title = $request->appointment_title;
                $home->appointment_text = $request->appointment_text;
                $home->appointment_btn_text = $request->appointment_btn_text;
                $home->appointment_btn_url = $request->appointment_btn_url;
                $home->appointment_status = $request->appointment_status;
                if (isset($request->appointment_bg)) {         
                    $name = $request->appointment_bg->getClientOriginalName();
                    $path = $request->appointment_bg->move('uploads', $name);
                    $home->appointment_bg = $name;
                }
            }
            if ($request->form=='form_latest_news') {
                $home->latest_news_title = $request->latest_news_title;
                $home->latest_news_subtitle = $request->latest_news_subtitle;
                $home->latest_news_status = $request->latest_news_status;
            }
            if ($request->form=='form_newsletter') {
                $home->newsletter_title = $request->newsletter_title;
                $home->newsletter_text = $request->newsletter_text;
                $home->newsletter_status = $request->newsletter_status;
                if (isset($request->newsletter_bg)) {         
                    $name = $request->newsletter_bg->getClientOriginalName();
                    $path = $request->newsletter_bg->move('uploads', $name);
                    $home->newsletter_bg = $name;
                }
            }
            $home->save();
            return redirect('admin/setting-home');
        }

        // <-- End Web Settings -->
}