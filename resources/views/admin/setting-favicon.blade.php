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
                                <label for=""><b class="text-muted d-block">Existing Photo</b></label>
                                <div class="d-block">
                                    <img src="{{ asset('uploads') }}/{{ $favicon->favicon }}" class="h_100">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for=""><b class="text-muted d-block">Change Photo</b></label>
                                <input type="file" name="photo" class="form-control">
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