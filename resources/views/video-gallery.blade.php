@extends('layouts.app')

@section('content')

<div class="page-banner" style="background-image: url(/uploads/page-banner-10.jpg)">
    <div class="bg-page"></div>
    <div class="text">
    	<h1>Video Gallery</h1>
    	<nav aria-label="breadcrumb">
    		  <ol class="breadcrumb justify-content-center">
    			   <li class="breadcrumb-item"><a href="/">Home</a></li>
    			   <li class="breadcrumb-item active" aria-current="page">Video Gallery</li>
    		  </ol>
    	</nav>
    </div>
</div>


<div class="page-content mt_30">
    <div class="container">
    	<div class="row">
            @foreach ($videos as $video)
                <div class="col-md-6">
    			    <div class="video-item">
    				    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$video->video_youtube}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
    		            <div class="video-caption">
    		            	{{$video->video_caption}}
                        </div>
    	            </div>
    	        </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
