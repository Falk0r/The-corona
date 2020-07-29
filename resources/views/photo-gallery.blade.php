@extends('layouts.app')

@section('content')

<div class="page-content mt_30">
    <div class="container">
        <div class="row">
            @foreach ($photos as $photo)
    			<div class="col-lg-4 col-md-6 col-sm-12">
    				<div class="gallery-photo">
                        <a href="/uploads/{{$photo->photo_name}}" class="magnific" title="{{$photo->photo_caption}}">
    		                <div class="gallery-photo-bg"></div>
    		            	   <img src="/uploads/{{$photo->photo_name}}">
    		            	<div class="plus-icon">
    		            		<i class="fa fa-search-plus"></i>
    	            	    </div>
                        </a>
    	            </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
