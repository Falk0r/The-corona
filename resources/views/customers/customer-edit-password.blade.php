@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url(/uploads/banner_customer_panel.jpg)">
        <div class="bg-page"></div>
        <div class="text">
            <h1>Edit Password</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Password</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('layouts.customer-navbar')
                </div>
                <div class="col-md-9">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" name="customer_password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Retype New Password</label>
                                    <input type="password" class="form-control" name="customer_re_password">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="form1">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection