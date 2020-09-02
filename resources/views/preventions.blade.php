@extends('layouts.app')

@section('content')

<div class="page-content">
	<div class="container">
		<div class="row service pt_0 pb_0">
			@foreach($preventions as $prevention)
				<div class="col-lg-4 col-md-6 col-sm-12">
                	<div class="service-item wow fadeInUp mb_30" style="visibility: visible; animation-name: fadeInUp;">
                    	<div class="photo">
                        	<a href=""><img src="/uploads/{{$prevention->photo}}" alt=""></a>
                    	</div>
                    	<div class="text">
                        	<h3><a href="">{{$prevention->name}}</a></h3>
							{{$prevention->short_description}}
                        	<div class="read-more">
                            	<a href="/prevention/wash-hands-regularly">Read More</a>
                        	</div>
                    	</div>
                	</div>
		    	</div>
			@endforeach
		</div>
	</div>
</div>
@endsection
