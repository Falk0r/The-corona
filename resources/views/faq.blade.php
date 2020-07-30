@extends('layouts.app')

@section('content')
<<<<<<< HEAD

=======
<div class="page-banner" style="background-image: url(/uploads/page-banner-3.jpg)">
	<div class="bg-page"></div>
	<div class="text">
		<h1>FAQ</h1>
		<nav aria-label="breadcrumb">
		  	<ol class="breadcrumb justify-content-center">
			    <li class="breadcrumb-item"><a href="/">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">FAQ</li>
		  	</ol>
		</nav>
	</div>
</div>
>>>>>>> 7c4e34496db0bfa5ea462f9f3231a0796f15c393
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 faq">
				<div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
<<<<<<< HEAD
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
=======
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading1">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse1" aria-expanded="false" aria-controls="collapse1">What is COVID-19?</a>
                            </h4>									
						</div>
                        <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1" style="">
                            <div class="panel-body">
                                <p>Severe Acute Respiratory Syndrome Coronavirus-2 (SARS-CoV-2) is the name given to the 2019 novel coronavirus. COVID-19 is the name given to the disease associated with the virus. SARS-CoV-2 is a new strain of coronavirus that has not been previously identified in humans.</p>
                            </div>
                        </div>
					</div>
					<div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading2">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    Where do coronaviruses come from?									</a>
                            </h4>									
                        </div>
                        <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                            <div class="panel-body">
                                <p>Bats are considered natural hosts of these viruses yet several other species of animals are also known to act as sources. For instance, Middle East Respiratory Syndrome Coronavirus (MERS-CoV) is transmitted to humans from camels, and Severe Acute Respiratory Syndrome Coronavirus-1 (SARS-CoV-1) is transmitted to humans from civet cats. More information on coronaviruses can be found in the ECDC factsheet.</p>
                            </div>
                        </div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading3">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Is this virus comparable to SARS or to the seasonal flu?									</a>
                            </h4>									
						</div>
						<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
							<div class="panel-body">
								<p>The novel coronavirus detected in China in 2019 is closely related genetically to the SARS-CoV-1 virus. SARS emerged at the end of 2002 in China, and it caused more than 8 000 cases in 33 countries over a period of eight months. Around one in ten of the people who developed SARS died.</p>

                                <p>As of 30 March 2020, the COVID-19 outbreak had caused over 700 000 cases worldwide since the first case was reported in China in January 2020. Of these, more than 30 000 are known to have died.</p>

                                <p>See the situation updates for the latest available information.</p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading4">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    What is the mode of transmission? How (easily) does it spread?									</a>
                            </h4>									
                        </div>
						<div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
							<div class="panel-body">
								<ol>
                                    <li>While animals are believed to be the original source, the virus spread is now from person to person (human-to-human transmission). There is not enough epidemiological information at this time to determine how easily this virus spreads between people, but it is currently estimated that, on average, one infected person will infect between two and three other people.</li>
                                    <li>The virus seems to be transmitted mainly via small respiratory droplets through sneezing, coughing, or when people interact with each other for some time in close proximity (usually less than one metre). These droplets can then be inhaled, or they can land on surfaces that others may come into contact with, who can then get infected when they touch their nose, mouth or eyes. The virus can survive on different surfaces from several hours (copper, cardboard) up to a few days (plastic and stainless steel). However, the amount of viable virus declines over time and may not always be present in sufficient numbers to cause infection.</li>
                                    <li>The incubation period for COVID-19 (i.e. the time between exposure to the virus and onset of symptoms) is currently estimated to bet between one and 14 days.</li>
                                    <li>We know that the virus can be transmitted when people who are infected show symptoms such as coughing. There is also some evidence suggesting that transmission can occur from a person that is infected even two days before showing symptoms; however, uncertainties remain about the effect of transmission by&nbsp; non-symptomatic persons.</li>
                                </ol>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="heading5">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    When is a person infectious?									</a>
                            </h4>									
						</div>
                        <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                            <div class="panel-body">
                                <p>The infectious period may begin one to two days before symptoms appear, but people are likely most infectious during the symptomatic period, even if symptoms are mild and very non-specific. The infectious period is now estimated to last for 7-12 days in moderate cases and up to two weeks on average in severe cases.</p>
                            </div>
                        </div>
					</div>
					<div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading6">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse6" aria-expanded="false" aria-controls="collapse6">How severe is COVID-19 infection?</a>
                            </h4>									
                        </div>
                        <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                            <div class="panel-body">
                                <p>Preliminary data from the EU/EEA (from the countries with available data) show that around 20-30% of diagnosed COVID-19 cases are hospitalised and 4% have severe illness. Hospitalisation rates are higher for those aged 60 years and above, and for those with other underlying health conditions.</p>
                            </div>
                        </div>
					</div>
				</div>
		    </div>
	    </div>
    </div>
</div>
@endsection
>>>>>>> 7c4e34496db0bfa5ea462f9f3231a0796f15c393
