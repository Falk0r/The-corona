@extends('admin.layouts.app')


@section('content')

    @include('admin.layouts.header')
    @include('admin.layouts.page-title')

    <div class="main-content-inner">
        <div class="row">
    
            <div class="col-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Front End Logo</h4>
    
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for=""><b class="text-muted d-block">Existing Photo</b></label>
                                <div class="d-block">
                                    <img src="{{ asset('uploads') }}/{{ $logos[0]->logo }}" class="h_100 bg_f3f3f3 p-2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for=""><b class="text-muted d-block">Change Photo</b></label>
                                <input type="file" name="photo" class="form-control">
                            </div>
                            <div class="form-group d-none">
                                <input type="text" name="name" value="logo">
                            </div>
                            <div class="d-block mt-2">
                                <button type="submit" class="btn btn-primary mt-2 pr-4 pl-4">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    
    
            <div class="col-6 mt-5">
                <div class="card">
                    <div class="card-body">
    
                        <h4 class="header-title">Admin Logo</h4>
    
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for=""><b class="text-muted d-block">Existing Photo</b></label>
                                <div class="d-block">
                                    <img src="{{ asset('uploads') }}/{{ $logos[0]->logo_admin }}" class="h_100 bg_f3f3f3 p-2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for=""><b class="text-muted d-block">Change Photo</b></label>
                                <input type="file" name="photo" class="form-control">
                            </div>
                            <div class="form-group d-none">
                                <input type="text" name="name" value="logo_admin">
                            </div>
                            <div class="d-block mt-2">
                                <button type="submit" class="btn btn-primary mt-2 pr-4 pl-4">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    
    
    
        </div>
    </div>

@endsection