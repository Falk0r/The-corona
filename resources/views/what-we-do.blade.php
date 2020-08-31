@extends('layouts.app')

@section('content')
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                        {!! $pageDatas->page_content !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection