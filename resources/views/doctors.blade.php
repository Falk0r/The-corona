@extends('layouts.app')

@section('content')
<div class="section">
    @if (isset($pageDatas))
    <div class="page-banner" style="background-image: url(/uploads/{{ $pageDatas->banner }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{$urlRelatif = Route::getCurrentRoute()->uri()}}</h1>
            <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$urlRelatif = Route::getCurrentRoute()->uri()}}</li>
                  </ol>
            </nav>
        </div>
    </div>
    @endif
	<div class="page-content">
		<div class="container">
			<div class="row team pt_0 pb_40">
				@foreach ($doctors as $doctor)
					<div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
						<div class="team-item">
							<div class="team-photo">
								<a href="" class="team-photo-anchor">
									<img src="/uploads/{{$doctor->photo}}" alt="Doctor Photo">
								</a>
							</div>
							<div class="team-text">
							<h4><a href="">{{$doctor->name}}</a></h4>
							<p>{{$doctor->designation}}</p>
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
</div>

@endsection
