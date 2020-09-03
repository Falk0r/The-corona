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
</div>
@endsection
