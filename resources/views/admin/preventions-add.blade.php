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
                            <div class="form-group">
                                <label for=""><b class="text-muted d-block">Name *</b></label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for=""><b class="text-muted d-block">Slug</b></label>
                                <input type="text" class="form-control" name="slug">
                            </div>
                            <div class="form-group">
                                <label for=""><b class="text-muted d-block">Short Description *</b></label>
                                <textarea class="form-control h_100" name="short_description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for=""><b class="text-muted d-block">Description *</b></label>
                                <textarea class="form-control editor" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for=""><b class="text-muted d-block">Meta Title</b></label>
                                <input type="text" class="form-control" name="meta_title">
                            </div>
                            <div class="form-group">
                                <label for=""><b class="text-muted d-block">Meta Description</b></label>
                                <textarea class="form-control h_100" name="meta_description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for=""><b class="text-muted d-block">Photo *</b></label>
                                <div class="d-block">
                                    <input type="file" name="photo"><br>
                                    <span class="text-danger">(Only jpg, jpeg, gif and png are allowed)</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for=""><b class="text-muted d-block">Order</b></label>
                                <input type="text" class="form-control" name="prevention_order">
                            </div>
                            <div class="form-group">
                                <label for=""><b class="text-muted d-block">Status</b></label>
                                <div class="d-block">
                                    <select name="status" class="form-control select2">
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            @csrf
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