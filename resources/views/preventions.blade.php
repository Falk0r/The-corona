@extends('layouts.app')

@section('content')
<div class="section">
    @if (isset($pageDatas))
    <div class="page-banner" style="background-image: url(/uploads/{{ $pageDatas->banner }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ $pageDatas->page_name }}</h1>
            <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $pageDatas->page_name }}</li>
                  </ol>
            </nav>
        </div>
    </div>
    @endif
	<div class="page-content">
		<div class="container">
			<div class="row service pt_0 pb_0">
				@foreach($preventions as $prevention)
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="service-item wow fadeInUp mb_30" style="visibility: visible; animation-name: fadeInUp;">
							<div class="photo">
								<a href="/preventionsdetail/{{$prevention->slug}}"><img src="/uploads/{{$prevention->photo}}" alt=""></a>
							</div>
							<div class="text">
								<h3><a href="/preventionsdetail/{{$prevention->slug}}">{{$prevention->name}}</a></h3>
								{{$prevention->short_description}}
								<div class="read-more">
									<a href="/preventionsdetail/{{$prevention->slug}}">Read More</a>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection
