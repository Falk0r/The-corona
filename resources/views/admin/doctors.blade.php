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
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Status</th>
                                    <th>Order</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($doctors as $key => $doctor)
                                    
                                
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><img src="{{asset('uploads')}}/{{ $doctor->photo }}" class="w_100"></td>
                                        <td>{{ $doctor->name }}</td>
                                        <td>{{ $doctor->designation }}</td>
                                        <td class="text-success font-weight-bold">{{ $doctor->status }}</td>
                                        <td>{{ $doctor->doctor_order }}</td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-xs" data-toggle="modal" data-target=".doc_modal{{ $key + 1}}">Details</a>
                                            <a href="doctors-edit/{{ $doctor->id }}" class="btn btn-primary btn-xs">Edit</a>
                                            <a href="doctors-delete/{{ $doctor->id }}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Delete</a>  
                                        </td>
                                    </tr>
                                    <div class="modal fade doc_modal{{ $key + 1 }} modal-arf">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Doctor Details</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="item">
                                                        <div class="item-value">
                                                            <img src="{{asset('uploads')}}/{{ $doctor->photo }}" class="w_200">
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-heading">Name:</div>
                                                        <div class="item-value">{{ $doctor->name }}</div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-heading">Designation:</div>
                                                        <div class="item-value">{{ $doctor->designation }}</div>
                                                    </div>
    
                                                    @if ($doctor->degree != '')
                                                        <div class="item">
                                                            <div class="item-heading">Degree:</div>
                                                            <div class="item-value">{{ $doctor->degree }}</div>
                                                        </div>
                                                    @endif
    
                                                    @if ($doctor->detail != '')
                                                        <div class="item">
                                                            <div class="item-heading">Detail:</div>
                                                            <div class="item-value">{{ $doctor->detail }}</div>
                                                        </div>
                                                    @endif
 
                                                    @if ($doctor->practice_location != '')
                                                        <div class="item">
                                                            <div class="item-heading">Practice Location:</div>
                                                            <div class="item-value">{{ $doctor->practice_location }}</div>
                                                        </div>
                                                    @endif
    
                                                    @if ($doctor->advice != '')
                                                        <div class="item">
                                                            <div class="item-heading">Advice:</div>
                                                            <div class="item-value">{{ $doctor->advice }}</div>
                                                        </div>
                                                    @endif

                                                    @if ($doctor->facebook != '')
                                                        <div class="item">
                                                            <div class="item-heading">Facebook:</div>
                                                            <div class="item-value">{{ $doctor->facebook }}</div>
                                                        </div>
                                                    @endif

                                                    @if ($doctor->twitter != '')
                                                        <div class="item">
                                                            <div class="item-heading">Twitter:</div>
                                                            <div class="item-value">{{ $doctor->twitter }}</div>
                                                        </div>
                                                    @endif

                                                    @if ($doctor->linkedin != '')
                                                        <div class="item">
                                                            <div class="item-heading">Linkedin:</div>
                                                            <div class="item-value">{{ $doctor->linkedin }}</div>
                                                        </div>
                                                    @endif

                                                    @if ($doctor->youtube != '')
                                                        <div class="item">
                                                            <div class="item-heading">Youtube:</div>
                                                            <div class="item-value">{{ $doctor->youtube }}</div>
                                                        </div>
                                                    @endif

                                                    @if ($doctor->instagram != '')
                                                    <div class="item">
                                                        <div class="item-heading">Instagram:</div>
                                                        <div class="item-value">{{ $doctor->instagram }}</div>
                                                    </div>
                                                    @endif

                                                    @if ($doctor->email != '')
                                                        <div class="item">
                                                            <div class="item-heading">Email:</div>
                                                            <div class="item-value">{{ $doctor->email }}</div>
                                                        </div>
                                                    @endif
    
                                                    @if ($doctor->phone != '')
                                                        <div class="item">
                                                            <div class="item-heading">Phone:</div>
                                                            <div class="item-value">{{ $doctor->phone }}</div>
                                                        </div>
                                                    @endif
    
                                                    @if ($doctor->website != '')
                                                        <div class="item">
                                                            <div class="item-heading">Website:</div>
                                                            <div class="item-value">{{ $doctor->website }}</div>
                                                        </div>
                                                    @endif

                                                    @if ($doctor->address != '')
                                                        <div class="item">
                                                            <div class="item-heading">Address:</div>
                                                            <div class="item-value">{{ $doctor->address }}</div>
                                                        </div>
                                                    @endif

                                                    @if ($doctor->video_youtube != '')
                                                        <div class="item">
                                                            <div class="item-heading">Video:</div>
                                                            <div class="item-value admin_iframe_view_1">
                                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $doctor->video_youtube }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                            </div>
                                                        </div>
                                                    @endif
    
                                                    <div class="item">
                                                        <div class="item-heading">Order:</div>
                                                        <div class="item-value">{{ $doctor->doctor_order }}</div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-heading">Status:</div>
                                                        <div class="item-value">{{ $doctor->status }}</div>
                                                    </div>

                                                    @if ($doctor->meta_title != '')
                                                        <div class="item">
                                                            <div class="item-heading">Meta Title:</div>
                                                            <div class="item-value">{{ $doctor->meta_title }}</div>
                                                        </div>
                                                    @endif
                                                    
                                                    @if ($doctor->meta_description != '')
                                                        <div class="item">
                                                            <div class="item-heading">Meta Description:</div>
                                                            <div class="item-value">{{ $doctor->meta_description }}</div>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection