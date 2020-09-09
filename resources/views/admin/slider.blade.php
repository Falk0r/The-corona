@extends('admin.layouts.app')


@section('content')

    @include('admin.layouts.header')
    @include('admin.layouts.page-title')

    <div class="main-content-inner">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <table id="d_table" class="text-left table w_100_p">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>SL</th>
                                    <th>Photo</th>
                                    <th>Heading</th>
                                    <th>Button Text</th>
                                    <th>Button URL</th>
                                    <th>Status</th>
                                    <th>Order</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $key => $slider)
                                <tr role="row" class="odd">
                                <td class="sorting_1">{{ $key + 1 }}</td>
                                    <td>
                                    <img src="{{ asset('uploads')}}/{{ $slider->photo }}" alt="Help to prevent the Covid-19 Corona Virus" class="w_200">
                                    </td>
                                    <td>{{ $slider->heading}}</td>
                                    <td>{{ $slider->button_text}}</td>
                                    <td>{{ $slider->button_url}}</td>
                                    <td class="text-success font-weight-bold">{{ $slider->status}}</td>
                                    <td>{{ $slider->slide_order}}</td>
                                    <td>
                                    <a href="slider-edit/{{ $slider->id }}" class="btn btn-primary btn-xs btn-block">Edit</a>
                                    <a href="slider-delete/{{ $slider->id }}" class="btn btn-danger btn-xs btn-block" onclick="return confirm('Are you sure?');">Delete</a>  
                                    </td>
                                </tr>   
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection