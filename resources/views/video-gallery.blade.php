@extends('layouts.app')

@section('content')

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
