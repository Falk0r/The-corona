@extends('layouts.app')

@section('content')
<div class="page-banner" style="background-image: url(/uploads/page-banner-6.jpg)">
	<div class="bg-page"></div>
	<div class="text">
		<h1>Contact</h1>
		<nav aria-label="breadcrumb">
		  	<ol class="breadcrumb justify-content-center">
			    <li class="breadcrumb-item"><a href="/">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Contact</li>
		  	</ol>
		</nav>
	</div>
</div>
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="contact-item flex">
                    <div class="contact-icon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="contact-text">
                        <h4>Address</h4>
                        <p>
                            3153 Foley Street<br>
Miami, FL 33176                        </p>
                    </div>
                </div>
			</div>
			<div class="col-md-4">
				<div class="contact-item flex">
                    <div class="contact-icon">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                    </div>
                    <div class="contact-text">
                        <h4>Phone Number</h4>
                        <p>
                           	Office 1: 954-648-1802<br>
Office 2: 963-612-1782                        </p>
                    </div>
                </div>
			</div>
			<div class="col-md-4">
				<div class="contact-item flex">
                    <div class="contact-icon">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>
                    <div class="contact-text">
                        <h4>Email Address</h4>
                        <p>
                            sales@yourwebsite.com<br>
                            support@yourwebsite.com
                        </p>
                    </div>
                </div>
			</div>
		</div>
		<div class="row contact-form">
			<div class="col-md-12">
				<h4 class="contact-form-title mt_50 mb_20">Contact Form</h4>
				<form action="" method="post">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Name (Required)</label>
								<input type="text" class="form-control" name="visitor_name">
							</div>		
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Email Address (Required)</label>
								<input type="email" class="form-control" name="visitor_email">
							</div>		
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" name="visitor_phone">
							</div>		
						</div>
					</div>
					<div class="form-group">
						<label>Message (Required)</label>
						<textarea name="visitor_message" class="form-control h-200" cols="30" rows="10"></textarea>
					</div>
					<button type="submit" class="btn btn-primary mt_10" name="form_contact">Send Message</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection