@extends('layouts.app')

@section('content')

<<<<<<< HEAD
<div class="page-content">
	<div class="container">
		<div class="row service pt_0 pb_0">
			@foreach($preventions as $prevention)
				<div class="col-lg-4 col-md-6 col-sm-12">
                	<div class="service-item wow fadeInUp mb_30" style="visibility: visible; animation-name: fadeInUp;">
                    	<div class="photo">
                        	<a href=""><img src="/uploads/{{$prevention->photo}}" alt=""></a>
                    	</div>
                    	<div class="text">
                        	<h3><a href="">{{$prevention->name}}</a></h3>
							{{$prevention->short_description}}
                        	<div class="read-more">
                            	<a href="/prevention/wash-hands-regularly">Read More</a>
                        	</div>
                    	</div>
                	</div>
		    	</div>
			@endforeach
		</div>
	</div>
</div>

=======
<div class="page-banner" style="background-image: url(/uploads/page-banner-2.jpg)">
	<div class="bg-page"></div>
	<div class="text">
		<h1>Prevention</h1>
		<nav aria-label="breadcrumb">
		  	<ol class="breadcrumb justify-content-center">
			    <li class="breadcrumb-item"><a href="/">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Prevention</li>
		  	</ol>
		</nav>
	</div>
</div>
<div class="page-content">
	<div class="container">
		<div class="row service pt_0 pb_0">
			<div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-item wow fadeInUp mb_30" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="photo">
                        <a href="/prevention/wash-hands-regularly"><img src="/uploads/prevention-1.png" alt=""></a>
                    </div>
                    <div class="text">
                        <h3><a href="/prevention/wash-hands-regularly">Wash Hands Regularly</a></h3>
                        Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.
                        <div class="read-more">
                            <a href="/prevention/wash-hands-regularly">Read More</a>
                        </div>
                    </div>
                </div>
		    </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-item wow fadeInUp mb_30" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="photo">
                        <a href="/prevention/avoid-close-contact"><img src="/uploads/prevention-2.png" alt=""></a>
                    </div>
                    <div class="text">
                        <h3><a href="/prevention/avoid-close-contact">Avoid close contact</a></h3>
                        Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.
                        <div class="read-more">
                            <a href="/prevention/avoid-close-contact">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-item wow fadeInUp mb_30" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="photo">
                        <a href="/prevention/stay-home-and-self-isolate"><img src="/uploads/prevention-8.jpg" alt=""></a>
                    </div>
                    <div class="text">
                        <h3><a href="/prevention/stay-home-and-self-isolate">Stay home and self-isolate</a></h3>
                        Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.
                        <div class="read-more">
                            <a href="/prevention/stay-home-and-self-isolate">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-item wow fadeInUp mb_30" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="photo">
                        <a href="/prevention/touch-mouth-eye-nose"><img src="/uploads/prevention-9.jpg" alt=""></a>
                    </div>
                    <div class="text">
                        <h3><a href="/prevention/touch-mouth-eye-nose">Touch mouth, eye &amp; nose</a></h3>
                        Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.
                        <div class="read-more">
                            <a href="/prevention/touch-mouth-eye-nose">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-item wow fadeInUp mb_30" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="photo">
                        <a href="/prevention/use-mask-when-outside"><img src="/uploads/prevention-12.jpg" alt=""></a>
                    </div>
                    <div class="text">
                        <h3><a href="/prevention/use-mask-when-outside">Use Mask When Outside</a></h3>
                        Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.
                        <div class="read-more">
                            <a href="/prevention/use-mask-when-outside">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-item wow fadeInUp mb_30" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="photo">
                        <a href="/prevention/keep-home-yard-clean"><img src="/uploads/prevention-13.jpg" alt=""></a>
                    </div>
                    <div class="text">
                        <h3><a href="/prevention/keep-home-yard-clean">Keep Home Yard Clean</a></h3>
                        Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.
                        <div class="read-more">
                            <a href="/prevention/keep-home-yard-clean">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>
>>>>>>> 7c4e34496db0bfa5ea462f9f3231a0796f15c393
@endsection
