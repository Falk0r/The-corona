@extends('layouts.app')

@section('content')
<div class="page-banner" style="background-image: url(/uploads/banner_registration.jpg)">
	<div class="bg-page"></div>
	<div class="text">
		<h1>Registration</h1>
		<nav aria-label="breadcrumb">
		  	<ol class="breadcrumb justify-content-center">
			    <li class="breadcrumb-item"><a href="/">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Registration</li>
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
                        <form action="{{ route('register') }}" method="post">
                            @csrf
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">{{ __('Name') }}</label>
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">{{ __('E-Mail Address') }}</label>
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Phone *</label>
										<input type="text" class="form-control" value="" name="phone">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Country *</label>
										<select name="country_id" class="form-control select2">
												<option value="73">France</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Address *</label>
										<input type="text" class="form-control" value="" name="adress">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">State *</label>
										<input type="text" class="form-control" value="" name="state">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">City *</label>
										<input type="text" class="form-control" value="" name="city">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Zip Code *</label>
										<input type="text" class="form-control" value="" name="zip">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">{{ __('Confirm Password') }}</label>
										<input id="password-confirm" type="password" class="form-control" value="" name="password_confirmation">
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary" name="form_registration">{{ __('Register') }}</button>
							<div class="new-user">
								<a href="/login">Existing User? Go to Login Page</a>
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection
