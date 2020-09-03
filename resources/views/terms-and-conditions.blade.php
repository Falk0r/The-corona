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
    <h1>terms and conditions</h1>
</div>
@endsection