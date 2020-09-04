@extends('admin.layouts.app')

@section('content')
<div class="main-content" style="min-height: 905px;">

    @include('admin.layouts.header')
    @include('admin.layouts.page-title')


<div class="main-content-inner">
<div class="row">

<div class="col-lg-12">
    <div class="row">
        <div class="col-md-4 mt-5">
            <div class="card">
                <div class="seo-fact sbg1">
                    <div class="p_50 d-flex justify-content-between align-items-center">
                        <div class="seofct-icon"><i class="ti-user"></i> Doctors</div>
                        <h2>4</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5">
            <div class="card">
                <div class="seo-fact sbg2">
                    <div class="p_50 d-flex justify-content-between align-items-center">
                        <div class="seofct-icon"><i class="ti-view-grid"></i> Preventions</div>
                        <h2>6</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-5">
            <div class="card">
                <div class="seo-fact sbg3">
                    <div class="p_50 d-flex justify-content-between align-items-center">
                        <div class="seofct-icon"><i class="ti-sharethis"></i> Symptoms</div>
                        <h2>6</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="card">
                <div class="seo-fact sbg1">
                    <div class="p_50 d-flex justify-content-between align-items-center">
                        <div class="seofct-icon"><i class="ti-layers"></i> FAQs</div>
                        <h2>6</h2>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="card">
                <div class="seo-fact sbg2">
                    <div class="p_50 d-flex justify-content-between align-items-center">
                        <div class="seofct-icon"><i class="ti-layers"></i> News</div>
                        <h2>7</h2>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="card">
                <div class="seo-fact sbg3">
                    <div class="p_50 d-flex justify-content-between align-items-center">
                        <div class="seofct-icon"><i class="ti-receipt"></i> Pages</div>
                        <h2>13</h2>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>

</div>
    
@endsection