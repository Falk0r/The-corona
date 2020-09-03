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
</div>
@endsection
