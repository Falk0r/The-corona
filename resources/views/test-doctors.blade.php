@extends('layouts.app')

@section('content')

{{-- {{dd($doctors)}} --}}

<div class="page-banner" style="background-image: url(/uploads/page-banner-4.jpg)">
	<div class="bg-page"></div>
	<div class="text">
		<h1>Doctors</h1>
		<nav aria-label="breadcrumb">
		  	<ol class="breadcrumb justify-content-center">
			    <li class="breadcrumb-item"><a href="/">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Doctors</li>
		  	</ol>
		</nav>
	</div>
</div>

<div class="page-content">
	<div class="container">
		<div class="row team pt_0 pb_40">
			@foreach ($doctors as $doctor)
				<div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
					<div class="team-item">
						<div class="team-photo">
							<a href="/doctor/brent-grundy" class="team-photo-anchor">
								<img src="/uploads/doctor-1.jpg" alt="Doctor Photo">
							</a>
						</div>
						<div class="team-text">
						<h4><a href="/doctor/brent-grundy">{{ $doctor->name }}</a></h4>
						<p>Chairman, AA Hospital</p>
							<div class="team-social">
								<ul>
									<li><a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li><a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li><a href="http://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="http://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i></a></li>
									<li><a href="http://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</div>	

@endsection
