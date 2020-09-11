@extends('admin.layouts.app')


@section('content')

    @include('admin.layouts.header')
    @include('admin.layouts.page-title')

    <div class="main-content-inner">
        <div class="row">

            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="form-group">
                                <label for=""><b class="text-muted d-block">Email address</b></label>
                                <input type="text" class="form-control" name="top_bar_email" value="{{ $topBar->top_bar_email }}">
                            </div>
                            <div class="form-group">
                                <label for=""><b class="text-muted d-block">Phone Number</b></label>
                                <input type="text" class="form-control" name="top_bar_phone" value="{{ $topBar->top_bar_phone }}">
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