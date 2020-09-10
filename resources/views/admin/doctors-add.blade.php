@extends('admin.layouts.app')


@section('content')

    @include('admin.layouts.header')
    @include('admin.layouts.page-title')

    <div class="main-content-inner">
        <div class="row">
    
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Name *</b></label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Slug</b></label>
                                        <input type="text" class="form-control" name="slug">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for=""><b class="text-muted d-block">Designation *</b></label>
                                <input type="text" class="form-control" name="designation">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Degree</b></label>
                                        <textarea class="form-control editor" name="degree"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Detail</b></label>
                                        <textarea class="form-control editor" name="detail"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Practice Location</b></label>
                                        <textarea class="form-control editor" name="practice_location"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Advice</b></label>
                                        <textarea class="form-control editor" name="advice"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Facebook</b></label>
                                        <input type="text" class="form-control" name="facebook">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Twitter</b></label>
                                        <input type="text" class="form-control" name="twitter">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Linkedin</b></label>
                                        <input type="text" class="form-control" name="linkedin">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">YouTube</b></label>
                                        <input type="text" class="form-control" name="youtube">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Instagram</b></label>
                                        <input type="text" class="form-control" name="instagram">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Email Address</b></label>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Phone</b></label>
                                        <input type="text" class="form-control" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Website</b></label>
                                        <input type="text" class="form-control" name="website">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Video (Youtube ID)</b></label>
                                        <input type="text" class="form-control" name="video_youtube">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Address</b></label>
                                        <textarea class="form-control h_100" name="address"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for=""><b class="text-muted d-block">Photo *</b></label>
                                <input type="file" name="photo" class="form-control">
                            </div>
                                
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Order</b></label>
                                        <input type="text" class="form-control" name="doctor_order">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Status</b></label>
                                        <select name="status" class="form-control select2">
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for=""><b class="text-muted d-block">Meta Title</b></label>
                                <input type="text" class="form-control" name="meta_title">
                            </div>
                            <div class="form-group">
                                <label for=""><b class="text-muted d-block">Meta Description</b></label>
                                <textarea class="form-control h_100" name="meta_description"></textarea>
                            </div>
                            <div class="d-block mt-2">
                                <button type="submit" class="btn btn-primary mt-2 pr-4 pl-4" name="form1">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection