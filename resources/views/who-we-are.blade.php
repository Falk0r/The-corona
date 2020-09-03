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
			<div class="row">
				<div class="col-md-12">
					{!!$pageDatas->page_content!!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
