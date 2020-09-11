@extends('admin.layouts.app')


@section('content')

    @include('admin.layouts.header')
    @include('admin.layouts.page-title')

<div class="main-content-inner">
    <div class="row">

        
        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-body">

                    <div class="d-md-flex arf-vertical-tab">

                        <div class="nav flex-column nav-pills mr-4 mb-3 mb-sm-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            
                            <a class="nav-link active" id="v-pills-tab-0" data-toggle="pill" href="#v-pills-t-0" role="tab" aria-controls="v-pills-t-0" aria-selected="true">
                                Meta Information
                            </a>

                            <a class="nav-link" id="v-pills-tab-1" data-toggle="pill" href="#v-pills-t-1" role="tab" aria-controls="v-pills-t-1" aria-selected="false">
                                Header Section
                            </a>

                            <a class="nav-link" id="v-pills-tab-11" data-toggle="pill" href="#v-pills-t-11" role="tab" aria-controls="v-pills-t-11" aria-selected="false">
                                Outbreak Statistics
                            </a>

                            <a class="nav-link" id="v-pills-tab-12" data-toggle="pill" href="#v-pills-t-12" role="tab" aria-controls="v-pills-t-12" aria-selected="false">
                                Countrywise Statistics
                            </a>

                            <a class="nav-link" id="v-pills-tab-2" data-toggle="pill" href="#v-pills-t-2" role="tab" aria-controls="v-pills-t-2" aria-selected="false">
                                Symptom Section
                            </a>

                            <a class="nav-link" id="v-pills-tab-3" data-toggle="pill" href="#v-pills-t-3" role="tab" aria-controls="v-pills-t-3" aria-selected="false">
                                Special Section
                            </a>

                            <a class="nav-link" id="v-pills-tab-4" data-toggle="pill" href="#v-pills-t-4" role="tab" aria-controls="v-pills-t-4" aria-selected="false">
                                Prevention Section
                            </a>

                            <a class="nav-link" id="v-pills-tab-5" data-toggle="pill" href="#v-pills-t-5" role="tab" aria-controls="v-pills-t-5" aria-selected="false">
                                Doctor Section
                            </a>

                            <a class="nav-link" id="v-pills-tab-6" data-toggle="pill" href="#v-pills-t-6" role="tab" aria-controls="v-pills-t-6" aria-selected="false">
                                Appointment Section
                            </a>

                            <a class="nav-link" id="v-pills-tab-7" data-toggle="pill" href="#v-pills-t-7" role="tab" aria-controls="v-pills-t-7" aria-selected="false">
                                Latest News Section
                            </a>

                            <a class="nav-link" id="v-pills-tab-8" data-toggle="pill" href="#v-pills-t-8" role="tab" aria-controls="v-pills-t-8" aria-selected="false">
                                Newsletter Section
                            </a>

                        </div>

                        <div class="tab-content" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-t-0" role="tabpanel" aria-labelledby="v-pills-tab-0">
                                <form action="" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Meta Title</b></label>
                                        <input type="text" name="meta_title" class="form-control" value="{{ $home->meta_title }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Subtitle</b></label>
                                        <textarea name="meta_description" class="form-control h_100" cols="30" rows="10">{{ $home->meta_description }}</textarea>
                                    </div>
                                    <div class="d-block mt-2">
                                        <button type="submit" class="btn btn-primary mt-2 pr-4 pl-4" name="form" value="form_meta_information">Update</button>
                                    </div>
                                </form>
                            </div>


                            <div class="tab-pane fade" id="v-pills-t-1" role="tabpanel" aria-labelledby="v-pills-tab-1">
                                <form action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="current_header_image" value="{{ $home->header_type_image_photo }}">
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Header Type</b></label>
                                        <div class="d-block">
                                            <select name="header_type" class="form-control select2" onChange="showContent(this)">
                                                <option value="Slider" <?php if($home->header_type=='Slider') {echo 'selected';} ?>>Slider</option>
                                                <option value="Image" <?php if($home->header_type=='Image') {echo 'selected';} ?>>Image</option>
                                                <option value="Video" <?php if($home->header_type=='Video') {echo 'selected';} ?>>Video</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div id="showImageContent">
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">Heading</b></label>
                                            <input type="text" name="header_type_image_heading" class="form-control" value="{{ $home->header_type_image_heading }}">
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">Content</b></label>
                                            <textarea name="header_type_image_content" class="form-control h_100" cols="30" rows="10">{{ $home->header_type_image_content }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">Button Text</b></label>
                                            <input type="text" name="header_type_image_btn_text" class="form-control" value="{{ $home->header_type_image_btn_text }}">
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">Button URL</b></label>
                                            <input type="text" name="header_type_image_btn_url" class="form-control" value="{{ $home->header_type_image_btn_url }}">
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">Existing Photo</b></label>
                                            <div class="d-block">
                                                <img src="{{ asset('uploads')}}/{{ $home->header_type_image_photo }}" class="w_300">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">Change Photo</b></label>
                                            <div class="d-block">
                                                <input type="file" name="header_type_image_photo">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="showVideoContent">
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">Heading</b></label>
                                            <input type="text" name="header_type_video_heading" class="form-control" value="{{ $home->header_type_video_heading }}">
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">Content</b></label>
                                            <textarea name="header_type_video_content" class="form-control h_100" cols="30" rows="10">{{ $home->header_type_video_content }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">Button Text</b></label>
                                            <input type="text" name="header_type_video_btn_text" class="form-control" value="{{ $home->header_type_video_btn_text }}">
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">Button URL</b></label>
                                            <input type="text" name="header_type_video_btn_url" class="form-control" value="{{ $home->header_type_video_btn_url }}">
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">YouTube Video URL</b></label>
                                            <input type="text" name="header_type_video_yt_url" class="form-control" value="{{ $home->header_type_video_yt_url }}">
                                        </div>
                                    </div>

                                    <div class="d-block mt-2">
                                        <button type="submit" class="btn btn-primary mt-2 pr-4 pl-4" name="form" value="form_header">Update</button>
                                    </div>
                                </form>
                            </div>



                            <div class="tab-pane fade" id="v-pills-t-11" role="tabpanel" aria-labelledby="v-pills-tab-11">
                                
                                <form action="" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Title</b></label>
                                        <input type="text" name="outbreak_title" class="form-control" value="{{ $home->outbreak_title }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Subtitle</b></label>
                                        <input type="text" name="outbreak_subtitle" class="form-control" value="{{ $home->outbreak_subtitle }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Show or Hide?</b></label>
                                        <div class="d-block">
                                            <select name="outbreak_status" class="form-control select2">
                                                <option value="Show" <?php if($home->outbreak_status=='Show') {echo 'selected';} ?>>Show</option>
                                                <option value="Hide" <?php if($home->outbreak_status=='Hide') {echo 'selected';} ?>>Hide</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-block mt-2">
                                        <button type="submit" class="btn btn-primary mt-2 pr-4 pl-4" name="form" value="form_outbreak">Update</button>
                                    </div>
                                </form>
                                
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3 class="hline">Outbreak Icon 1</h3>
                                        <form action="" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="current_outbreak_icon1" value="{{ $home->outbreak_icon1 }}">
                                            <div class="form-group">
                                                <label for=""><b class="text-muted d-block">Existing Icon</b></label>
                                                <div class="d-block">
                                                    <img src="{{ asset('uploads')}}/{{ $home->outbreak_icon1 }}" class="w_100">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for=""><b class="text-muted d-block">Change Icon</b></label>
                                                <div class="d-block">
                                                    <input type="file" name="outbreak_icon1">
                                                </div>
                                            </div>
                                            <div class="d-block mt-2">
                                                <button type="submit" class="btn btn-primary mt-2 pr-4 pl-4" name="form" value="form_outbreak_icon1">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-4">
                                        <h3 class="hline">Outbreak Icon 2</h3>
                                        <form action="" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="current_outbreak_icon2" value="{{ $home->outbreak_icon2 }}">
                                            <div class="form-group">
                                                <label for=""><b class="text-muted d-block">Existing Icon</b></label>
                                                <div class="d-block">
                                                    <img src="{{ asset('uploads')}}/{{ $home->outbreak_icon2 }}" class="w_100">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for=""><b class="text-muted d-block">Change Icon</b></label>
                                                <div class="d-block">
                                                    <input type="file" name="outbreak_icon2">
                                                </div>
                                            </div>
                                            <div class="d-block mt-2">
                                                <button type="submit" class="btn btn-primary mt-2 pr-4 pl-4" name="form" value="form_outbreak_icon2">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-4">
                                        <h3 class="hline">Outbreak Icon 3</h3>
                                        <form action="" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="current_outbreak_icon3" value="{{ $home->outbreak_icon3 }}">
                                            <div class="form-group">
                                                <label for=""><b class="text-muted d-block">Existing Icon</b></label>
                                                <div class="d-block">
                                                    <img src="{{ asset('uploads') }}/{{ $home->outbreak_icon3 }}" class="w_100">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for=""><b class="text-muted d-block">Change Icon</b></label>
                                                <div class="d-block">
                                                    <input type="file" name="outbreak_icon3">
                                                </div>
                                            </div>
                                            <div class="d-block mt-2">
                                                <button type="submit" class="btn btn-primary mt-2 pr-4 pl-4" name="form" value="form_outbreak_icon3">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>                         
                            </div>
                            <div class="tab-pane fade" id="v-pills-t-12" role="tabpanel" aria-labelledby="v-pills-tab-12">
                                <form action="" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Title</b></label>
                                        <input type="text" name="countrywise_title" class="form-control" value="{{ $home->countrywise_title }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Subtitle</b></label>
                                        <input type="text" name="countrywise_subtitle" class="form-control" value="{{ $home->countrywise_subtitle }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Show or Hide?</b></label>
                                        <div class="d-block">
                                            <select name="countrywise_status" class="form-control select2">
                                                <option value="Show" <?php if($home->countrywise_status=='Show') {echo 'selected';} ?>>Show</option>
                                                <option value="Hide" <?php if($home->countrywise_status=='Hide') {echo 'selected';} ?>>Hide</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-block mt-2">
                                        <button type="submit" class="btn btn-primary mt-2 pr-4 pl-4" name="form" value="form_countrywise">Update</button>
                                    </div>
                                </form>
                            </div>





                            <div class="tab-pane fade" id="v-pills-t-2" role="tabpanel" aria-labelledby="v-pills-tab-2">
                                <form action="" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Title</b></label>
                                        <input type="text" name="symptom_title" class="form-control" value="{{ $home->symptom_title }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Subtitle</b></label>
                                        <input type="text" name="symptom_subtitle" class="form-control" value="{{ $home->symptom_subtitle }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Show or Hide?</b></label>
                                        <div class="d-block">
                                            <select name="symptom_status" class="form-control select2">
                                                <option value="Show" <?php if($home->symptom_status=='Show') {echo 'selected';} ?>>Show</option>
                                                <option value="Hide" <?php if($home->symptom_status=='Hide') {echo 'selected';} ?>>Hide</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-block mt-2">
                                        <button type="submit" class="btn btn-primary mt-2 pr-4 pl-4" name="form" value="form_symptom">Update</button>
                                    </div>
                                </form>
                            </div>



                            <div class="tab-pane fade" id="v-pills-t-3" role="tabpanel" aria-labelledby="v-pills-tab-3">
                                <form action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="current_special_bg" value="{{ $home->special_bg }}$special_bg); ?>">
                                    <input type="hidden" name="current_special_video_bg" value="{{ $home->special_video_bg }}">
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Title</b></label>
                                        <input type="text" name="special_title" class="form-control" value="{{ $home->special_title }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Subtitle</b></label>
                                        <input type="text" name="special_subtitle" class="form-control" value="{{ $home->special_subtitle }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Content</b></label>
                                        <textarea name="special_content" class="form-control h_200" cols="30" rows="10">{{ $home->special_content }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Button Text</b></label>
                                        <input type="text" name="special_btn_text" class="form-control" value="{{ $home->special_btn_text }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Button URL</b></label>
                                        <input type="text" name="special_btn_url" class="form-control" value="{{ $home->special_btn_url }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">YouTube Video</b></label>
                                        <input type="text" name="special_yt_video" class="form-control" value="{{ $home->special_yt_video }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Existing Background</b></label>
                                        <div class="d-block">
                                            <img src="{{ asset('uploads')}}/{{ $home->special_bg }}" class="w_300">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Change Background</b></label>
                                        <div class="d-block">
                                            <input type="file" name="special_bg">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Existing Video Background</b></label>
                                        <div class="d-block">
                                            <img src="{{ asset('uploads')}}/{{ $home->special_video_bg }}" class="w_300">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Change Video Background</b></label>
                                        <div class="d-block">
                                            <input type="file" name="special_video_bg">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Show or Hide?</b></label>
                                        <div class="d-block">
                                            <select name="special_status" class="form-control select2">
                                                <option value="Show" <?php if($home->special_status=='Show') {echo 'selected';} ?>>Show</option>
                                                <option value="Hide" <?php if($home->special_status=='Hide') {echo 'selected';} ?>>Hide</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-block mt-2">
                                        <button type="submit" class="btn btn-primary mt-2 pr-4 pl-4" name="form" value="form_special">Update</button>
                                    </div>
                                </form>
                            </div>



                            <div class="tab-pane fade" id="v-pills-t-4" role="tabpanel" aria-labelledby="v-pills-tab-4">
                                <form action="" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Title</b></label>
                                        <input type="text" name="prevention_title" class="form-control" value="{{ $home->prevention_title }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Subtitle</b></label>
                                        <input type="text" name="prevention_subtitle" class="form-control" value="{{ $home->prevention_subtitle }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Show or Hide?</b></label>
                                        <div class="d-block">
                                            <select name="prevention_status" class="form-control select2">
                                                <option value="Show" <?php if($home->prevention_status=='Show') {echo 'selected';} ?>>Show</option>
                                                <option value="Hide" <?php if($home->prevention_status=='Hide') {echo 'selected';} ?>>Hide</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-block mt-2">
                                        <button type="submit" class="btn btn-primary mt-2 pr-4 pl-4" name="form" value="form_prevention">Update</button>
                                    </div>
                                </form>
                            </div>



                            <div class="tab-pane fade" id="v-pills-t-5" role="tabpanel" aria-labelledby="v-pills-tab-5">
                                <form action="" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Title</b></label>
                                        <input type="text" name="doctor_title" class="form-control" value="{{ $home->doctor_title }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Subtitle</b></label>
                                        <input type="text" name="doctor_subtitle" class="form-control" value="{{ $home->doctor_subtitle }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Show or Hide?</b></label>
                                        <div class="d-block">
                                            <select name="doctor_status" class="form-control select2">
                                                <option value="Show" <?php if($home->doctor_status=='Show') {echo 'selected';} ?>>Show</option>
                                                <option value="Hide" <?php if($home->doctor_status=='Hide') {echo 'selected';} ?>>Hide</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-block mt-2">
                                        <button type="submit" class="btn btn-primary mt-2 pr-4 pl-4" name="form" value="form_doctor">Update</button>
                                    </div>
                                </form>
                            </div>




                            <div class="tab-pane fade" id="v-pills-t-6" role="tabpanel" aria-labelledby="v-pills-tab-6">
                                <form action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="current_appointment_bg" value="{{ $home->appointment_bg }}">
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Title</b></label>
                                        <input type="text" name="appointment_title" class="form-control" value="{{ $home->appointment_title }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Text</b></label>
                                        <textarea name="appointment_text" class="form-control h_100" cols="30" rows="10">{{ $home->appointment_text }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Button Text</b></label>
                                        <input type="text" name="appointment_btn_text" class="form-control" value="{{ $home->appointment_btn_text }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Button URL</b></label>
                                        <input type="text" name="appointment_btn_url" class="form-control" value="{{ $home->appointment_btn_url }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Existing Background</b></label>
                                        <div class="d-block">
                                            <img src="{{ asset('uploads')}}/{{ $home->appointment_bg }}" class="w_300">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Change Background</b></label>
                                        <div class="d-block">
                                            <input type="file" name="appointment_bg">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Show or Hide?</b></label>
                                        <div class="d-block">
                                            <select name="appointment_status" class="form-control select2">
                                                <option value="Show" <?php if($home->appointment_status=='Show') {echo 'selected';} ?>>Show</option>
                                                <option value="Hide" <?php if($home->appointment_status=='Hide') {echo 'selected';} ?>>Hide</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-block mt-2">
                                        <button type="submit" class="btn btn-primary mt-2 pr-4 pl-4" name="form" value="form_appointment">Update</button>
                                    </div>
                                </form>
                            </div>



                            <div class="tab-pane fade" id="v-pills-t-7" role="tabpanel" aria-labelledby="v-pills-tab-7">
                                <form action="" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Title</b></label>
                                        <input type="text" name="latest_news_title" class="form-control" value="{{ $home->latest_news_title }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Subtitle</b></label>
                                        <input type="text" name="latest_news_subtitle" class="form-control" value="{{ $home->latest_news_subtitle }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Show or Hide?</b></label>
                                        <div class="d-block">
                                            <select name="latest_news_status" class="form-control select2">
                                                <option value="Show" <?php if($home->latest_news_status=='Show') {echo 'selected';} ?>>Show</option>
                                                <option value="Hide" <?php if($home->latest_news_status=='Hide') {echo 'selected';} ?>>Hide</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-block mt-2">
                                        <button type="submit" class="btn btn-primary mt-2 pr-4 pl-4" name="form" value="form_latest_news">Update</button>
                                    </div>
                                </form>
                            </div>


                            <div class="tab-pane fade" id="v-pills-t-8" role="tabpanel" aria-labelledby="v-pills-tab-8">
                                <form action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="current_newsletter_bg" value="{{ $home->newsletter_bg }}">
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Title</b></label>
                                        <input type="text" name="newsletter_title" class="form-control" value="{{ $home->newsletter_title }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Text</b></label>
                                        <textarea name="newsletter_text" class="form-control h_100" cols="30" rows="10">{{ $home->newsletter_text }}</textarea>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Existing Background</b></label>
                                        <div class="d-block">
                                            <img src="{{ asset('uploads')}}/{{ $home->newsletter_bg }}" class="w_300">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Change Background</b></label>
                                        <div class="d-block">
                                            <input type="file" name="newsletter_bg">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Show or Hide?</b></label>
                                        <div class="d-block">
                                            <select name="newsletter_status" class="form-control select2">
                                                <option value="Show" <?php if($home->newsletter_status=='Show') {echo 'selected';} ?>>Show</option>
                                                <option value="Hide" <?php if($home->newsletter_status=='Hide') {echo 'selected';} ?>>Hide</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-block mt-2">
                                        <button type="submit" class="btn btn-primary mt-2 pr-4 pl-4" name="form" value="form_newsletter">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection