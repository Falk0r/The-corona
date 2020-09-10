@extends('admin.layouts.app')


@section('content')

    @include('admin.layouts.header')
    @include('admin.layouts.page-title')

    <div class="main-content-inner">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex arf-vertical-tab">
                            <div class="nav flex-column nav-pills mr-4 mb-3 mb-sm-0" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-info-tab" data-toggle="pill" href="#v-pills-info" role="tab" aria-controls="v-pills-info" aria-selected="true">Change Information</a>
                                <a class="nav-link" id="v-pills-password-tab" data-toggle="pill" href="#v-pills-password" role="tab" aria-controls="v-pills-password" aria-selected="false">Change Photo</a>
                            </div>
    
                            <div class="tab-content" id="v-pills-tabContent">
    
                                <div class="tab-pane fade show active" id="v-pills-info" role="tabpanel" aria-labelledby="v-pills-info-tab">
                                    
                                <form action="/admin/doctors-edit/{{ $doctor->id}}" method="post">
                                    @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""><b class="text-muted d-block">Name *</b></label>
                                                <input type="text" class="form-control" name="name" value="{{ $doctor->name }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""><b class="text-muted d-block">Slug</b></label>
                                                    <input type="text" class="form-control" name="slug" value="{{ $doctor->slug }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">Designation *</b></label>
                                            <input type="text" class="form-control" name="designation" value="{{ $doctor->designation }}">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""><b class="text-muted d-block">Degree</b></label>
                                                    <textarea class="form-control editor" name="degree">{{ $doctor->degree }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""><b class="text-muted d-block">Detail</b></label>
                                                    <textarea class="form-control editor" name="detail">{{ $doctor->detail }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""><b class="text-muted d-block">Practice Location</b></label>
                                                    <textarea class="form-control editor" name="practice_location">{{ $doctor->practice_location }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""><b class="text-muted d-block">Advice</b></label>
                                                    <textarea class="form-control editor" name="advice">{{ $doctor->advice }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""><b class="text-muted d-block">Facebook</b></label>
                                                    <input type="text" class="form-control" name="facebook" value="{{ $doctor->facebook }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""><b class="text-muted d-block">Twitter</b></label>
                                                    <input type="text" class="form-control" name="twitter" value="{{ $doctor->twitter }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""><b class="text-muted d-block">Linkedin</b></label>
                                                    <input type="text" class="form-control" name="linkedin" value="{{ $doctor->linkedin }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""><b class="text-muted d-block">YouTube</b></label>
                                                    <input type="text" class="form-control" name="youtube" value="{{ $doctor->youtube }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""><b class="text-muted d-block">Instagram</b></label>
                                                    <input type="text" class="form-control" name="instagram" value="{{ $doctor->instagram }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""><b class="text-muted d-block">Email Address</b></label>
                                                    <input type="text" class="form-control" name="email" value="{{ $doctor->email }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""><b class="text-muted d-block">Phone</b></label>
                                                    <input type="text" class="form-control" name="phone" value="{{ $doctor->phone }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""><b class="text-muted d-block">Website</b></label>
                                                    <input type="text" class="form-control" name="website" value="{{ $doctor->website }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">Existing Video Preview</b></label>
                                            <div class="d-block admin_iframe_view_1">
                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $doctor->video_youtube }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""><b class="text-muted d-block">Video (Youtube ID)</b></label>
                                                    <input type="text" class="form-control" name="video_youtube" value="{{ $doctor->video_youtube }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for=""><b class="text-muted d-block">Address</b></label>
                                                    <textarea class="form-control h_100" name="address">{{ $doctor->address }}</textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""><b class="text-muted d-block">Order</b></label>
                                                    <input type="text" class="form-control" name="doctor_order" value="{{ $doctor->doctor_order }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""><b class="text-muted d-block">Status</b></label>
                                                    <select name="status" class="form-control select2">
                                                        <option value="Active" 
                                                            @if ($doctor->status == 'Active')
                                                                {{ 'selected' }}                                                    
                                                            @endif
                                                            >Active</option>
                                                        <option value="Inactive"
                                                            @if ($doctor->status == 'Inactive')
                                                                {{ 'selected' }}   
                                                            @endif
                                                        >Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">Meta Title</b></label>
                                            <input type="text" class="form-control" name="meta_title" value="{{ $doctor->meta_title }}">
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">Meta Description</b></label>
                                            <textarea class="form-control h_100" name="meta_description">{{ $doctor->meta_description }}</textarea>
                                        </div>
                                        <div class="d-block mt-2">
                                            <button type="submit" class="btn btn-primary mt-2 pr-4 pl-4" name="form1">Update</button>
                                        </div>
                                    </form>
                                        
                                </div>
    
                                <div class="tab-pane fade" id="v-pills-password" role="tabpanel" aria-labelledby="v-pills-password-tab">
                                    
                                    <form action="/admin/doctors-edit-photo" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="current_photo" value="{{ $doctor->photo }}">
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">Existing Photo</b></label>
                                            <div class="d-block">
                                                <img src="{{ asset('uploads') }}/{{ $doctor->photo }}" class="w_300">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">Photo</b></label>
                                            <div class="d-block">
                                                <input type="file" name="photo"><br>
                                                <span class="text-danger">(Only jpg, jpeg, gif and png are allowed)</span>
                                            </div>
                                        </div>
                                        <div class="form-group d-none">
                                            @csrf
                                            <input type="number" class="form-control" name="id" value="{{ $doctor->id }}">
                                            <input type="text" class="form-control" name="name" value="{{ $doctor->name }}">
                                            <input type="text" class="form-control" name="slug" value="{{ $doctor->slug }}">
                                            <input type="text" class="form-control" name="designation" value="{{ $doctor->designation }}">
                                            <textarea name="degree">{{ $doctor->degree }}</textarea>
                                            <textarea name="detail">{{ $doctor->detail }}</textarea>
                                            <textarea name="practice_location">{{ $doctor->practice_location }}</textarea>
                                            <textarea name="advice">{{ $doctor->advice }}</textarea>
                                            <input type="text" class="form-control" name="facebook" value="{{ $doctor->facebook }}">
                                            <input type="text" class="form-control" name="twitter" value="{{ $doctor->twitter }}">
                                            <input type="text" class="form-control" name="linkedin" value="{{ $doctor->linkedin }}">
                                            <input type="text" class="form-control" name="youtube" value="{{ $doctor->youtube }}">
                                            <input type="text" class="form-control" name="instagram" value="{{ $doctor->instagram }}">
                                            <input type="text" class="form-control" name="email" value="{{ $doctor->email }}">
                                            <input type="text" class="form-control" name="phone" value="{{ $doctor->phone }}">
                                            <input type="text" class="form-control" name="website" value="{{ $doctor->website }}">
                                            <input type="text" class="form-control" name="video_youtube" value="{{ $doctor->video_youtube }}">
                                            <textarea class="form-control h_100" name="address">{{ $doctor->address }}</textarea>
                                            <input type="text" class="form-control" name="doctor_order" value="{{ $doctor->doctor_order }}">
                                            <input type="text" class="form-control" name="status" value="{{ $doctor->status }}">
                                            <input type="text" class="form-control" name="meta_title" value="{{ $doctor->meta_title }}">
                                            <textarea class="form-control h_100" name="meta_description">{{ $doctor->meta_description }}</textarea>
                                        </div>                                       
                                        <div class="d-block mt-2">
                                            <button type="submit" class="btn btn-primary mt-2 pr-4 pl-4" name="form2">Update</button>
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