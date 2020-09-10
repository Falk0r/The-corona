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
                                <a class="nav-link active" id="v-pills-tab-1" data-toggle="pill" href="#v-pills-t-1" role="tab" aria-controls="v-pills-t-1" aria-selected="true">Change Information</a>
                                <a class="nav-link" id="v-pills-tab-2" data-toggle="pill" href="#v-pills-t-2" role="tab" aria-controls="v-pills-t-2" aria-selected="false">Change Photo</a>
                            </div>
    
                            <div class="tab-content" id="v-pills-tabContent">
    
                                <div class="tab-pane fade show active" id="v-pills-t-1" role="tabpanel" aria-labelledby="v-pills-tab-1">
                                    
                                    <form action="" method="post">
                                        <div class="form-group d-none">
                                            @csrf
                                            <input name="id" value="{{ $prevention->id }}">
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">Name *</b></label>
                                            <input type="text" class="form-control" name="name" value="{{ $prevention->name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">Slug</b></label>
                                            <input type="text" class="form-control" name="slug" value="{{ $prevention->slug }}">
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">Short Description *</b></label>
                                            <textarea class="form-control h_100" name="short_description">{{ $prevention->short_description }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">Description *</b></label>
                                            <textarea class="form-control editor" name="description">{{ $prevention->description }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">Meta Title</b></label>
                                            <input type="text" class="form-control" name="meta_title" value="{{ $prevention->meta_title }}">
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">Meta Description</b></label>
                                            <textarea class="form-control h_100" name="meta_description">{{ $prevention->meta_description }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">Order</b></label>
                                            <input type="text" class="form-control" name="prevention_order" value="{{ $prevention->prevention_order }}">
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">Status</b></label>
                                            <div class="d-block">
                                                <select name="status" class="form-control select2">
                                                    <option value="Active" 
                                                        @if ($prevention->status == 'Active')
                                                            {{ 'selected' }}                                                    
                                                        @endif
                                                        >Active</option>
                                                    <option value="Inactive"
                                                        @if ($prevention->status == 'Inactive')
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
    
    
                                <div class="tab-pane fade" id="v-pills-t-2" role="tabpanel" aria-labelledby="v-pills-tab-2">
                                    <form action="/admin/preventions-edit-photo" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="current_photo" value="{{ $prevention->photo }}">
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">Existing Photo</b></label>
                                            <div class="d-block">
                                                <img src="../../uploads/{{ $prevention->photo }}" class="w_400">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b class="text-muted d-block">Change Photo</b></label>
                                            <div class="d-block">
                                                <input type="file" name="photo"><br>
                                                <span class="text-danger">(Only jpg, jpeg, gif and png are allowed)</span>
                                            </div>
                                        </div>
                                        <div class="form-group d-none">
                                            @csrf
                                            <input name="id" value="{{ $prevention->id }}">
                                            <input type="text" name="name" value="{{ $prevention->name }}">
                                            <input type="text" name="slug" value="{{ $prevention->slug }}">
                                            <textarea name="short_description">{{ $prevention->short_description }}</textarea>
                                            <textarea name="description">{{ $prevention->description }}</textarea>
                                            <input type="text" name="meta_title" value="{{ $prevention->meta_title }}">
                                            <textarea name="meta_description">{{ $prevention->meta_description }}</textarea>
                                            <input type="text" name="prevention_order" value="{{ $prevention->prevention_order }}">
                                            <input type="text" name="status" value="{{ $prevention->status }}">
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