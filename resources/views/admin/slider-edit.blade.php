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
                                <form action="" method="post">
                                    <div class="form-group d-none">
                                        @csrf
                                        <input name="id" value="{{ $slide->id }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Heading</b></label>
                                        <input type="text" class="form-control" name="heading" value="{{ $slide->heading }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Content</b></label>
                                        <textarea class="form-control h_100" name="content">{{ $slide->content }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Button Text</b></label>
                                        <input type="text" class="form-control" name="button_text" value="{{ $slide->button_text }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Button URL</b></label>
                                        <input type="text" class="form-control" name="button_url" value="{{ $slide->button_url }}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Order</b></label>
                                        <input type="text" class="form-control" name="slide_order" value="{{ $slide->slide_order}}">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Status</b></label>
                                        <div class="d-block">
                                            <select name="status" class="form-control select2">
                                                <option value="Active" 
                                                    @if ($slide->status == 'Active')
                                                        {{ 'selected' }}                                                    
                                                    @endif
                                                    >Active</option>
                                                <option value="Inactive"
                                                    @if ($slide->status == 'Inactive')
                                                        {{ 'selected' }}   
                                                    @endif
                                                >Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-block mt-2">
                                        <button type="submit" class="btn btn-primary mt-2 pr-4 pl-4" name="form1">Update</button>
                                    </div>
                                </form>
                                    
                            </div>

                            <div class="tab-pane fade" id="v-pills-password" role="tabpanel" aria-labelledby="v-pills-password-tab">
                                
                                <form action="/admin/slider-edit-photo" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="current_photo" value="{{ $slide->photo}}">
                                    <div class="form-group">
                                        <label for=""><b class="text-muted d-block">Existing Photo</b></label>
                                        <div class="d-block">
                                            <img src="../../uploads/{{ $slide->photo}}" class="w_400">
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
                                        <input name="id" value="{{ $slide->id }}">
                                        <input type="text" name="heading" value="{{ $slide->heading }}">
                                        <textarea name="content">{{ $slide->content }}</textarea>
                                        <input type="text" name="button_text" value="{{ $slide->button_text }}">
                                        <input type="text" name="button_url" value="{{ $slide->button_url }}">
                                        <input type="text" name="slide_order" value="{{ $slide->slide_order}}">
                                        <input type="text" name="status" value="{{ $slide->status}}">
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