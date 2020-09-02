@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-banner" style="background-image: url(/uploads/banner_login.jpg)">
        <div class="bg-page"></div>
        <div class="text">
            <h1>Login</h1>
            <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Login</li>
                  </ol>
            </nav>
        </div>
    </div>
    <div class="page-content pt_50 pb_60">
        <div class="container">
            <div class="row cart">
    
                <div class="col-md-12">				
                    <div class="reg-login-form">
                        <div class="inner">
                            <form action="{{ route('login') }}" method="post" data-bitwarden-watching="1">
                                @csrf
                                <div class="form-group">
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary" name="form_login">{{ __('Login') }}</button>
                                <a href="{{ route('password.request') }}" class="btn btn-warning">{{ __('Forgot Your Password?') }}</a>
                                <div class="new-user">
                                    <a href="/registration">New User? Make Registration</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
</div>
@endsection
