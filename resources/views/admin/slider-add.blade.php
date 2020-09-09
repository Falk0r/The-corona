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
                        <div class="form-group">
                            <label for=""><b class="text-muted d-block">Photo</b></label>
                            <div class="d-block">
                                <input type="file" name="photo"><br>
                                <span class="text-danger">(Only jpg, jpeg, gif and png are allowed)</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for=""><b class="text-muted d-block">Heading</b></label>
                            <input type="text" class="form-control" name="heading">
                        </div>
                        <div class="form-group">
                            <label for=""><b class="text-muted d-block">Content</b></label>
                            <textarea class="form-control h_100" name="content"></textarea>
                        </div>
                        <div class="form-group">
                            <label for=""><b class="text-muted d-block">Button Text</b></label>
                            <input type="text" class="form-control" name="button_text">
                        </div>
                        <div class="form-group">
                            <label for=""><b class="text-muted d-block">Button URL</b></label>
                            <input type="text" class="form-control" name="button_url">
                        </div>
                        <div class="form-group">
                            <label for=""><b class="text-muted d-block">Order</b></label>
                            <input type="text" class="form-control" name="slide_order">
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