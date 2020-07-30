@extends('layouts.app')

@section('content')

<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 faq">
				<div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
					@foreach($faq as $faqs)
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading1">
	                        	<h4 class="panel-title">
	                            	<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse1" aria-expanded="false" aria-controls="collapse1">{{$faqs->faq_title}}</a>
	                        	</h4>
							</div>
	                    	<div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1" style="">
	                        	<div class="panel-body">
	                            	<p>{{$faqs->faq_content}}</p>
	                        	</div>
	                    	</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
