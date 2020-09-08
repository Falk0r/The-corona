@extends('layouts.app')

@section('content')
<div class="section">
    @if (isset($pageDatas))
    <div class="page-banner" style="background-image: url(/uploads/{{ $pageDatas->banner }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ $prevention->name}}</h1>
    {{--        <h1>{{$urlRelatif = Route::getCurrentRoute()->uri()}}</h1>  --}}
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="/preventions">{{ $pageDatas->page_name }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $prevention->name}}</li>
                </ol>
            </nav>
        </div>
    </div>
    @endif
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
				    <div class="single-section">
                        <div class="featured-photo">
                           <img src="/uploads/{{$prevention->photo}}">
                        </div>
                        <div class="text">
                            <h2>{{$prevention->meta_title}}</h2>
                            {!!$prevention->description!!}
                        </div>
				    </div>
			    </div>
                {{-- ---------------------aside--------------------------------}}
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="widget">
                            <h3>All Prevention Steps</h3>
                            <div class="type-2">
                                <ul>
                                    @foreach ($preventions as $prev)
                                        <li>
                                            <img src="/uploads/{{$prev->photo}}">
                                            <a href="/preventionsdetail/{{$prev->slug}}"> {{ $prev->meta_title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- -------------------end-aside----------------------------------- --}}
            </div>
        </div>
    </div>
</div>
@endsection
