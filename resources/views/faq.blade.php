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
				<div class="col-md-12 faq">
					<div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
						@foreach($faq as $faqs)
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="heading{{$faqs->faq_id}}">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse{{$faqs->faq_id}}" aria-expanded="false" aria-controls="collapse{{$faqs->faq_id}}">{{$faqs->faq_title}}</a>
									</h4>
								</div>
								<div id="collapse{{$faqs->faq_id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$faqs->faq_id}}">
									<div class="panel-body">
										<p>{!!$faqs->faq_content!!}</p>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
