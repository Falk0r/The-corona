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
                                    <th>Status</th>
                                    <th>Order</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($preventions as $key => $prevention)                                        
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                    <td><img src="{{ asset('uploads') }}/{{ $prevention->photo }}" class="w_150"></td>
                                        <td>{{ $prevention->name }}</td>    
                                        <td class="text-succes font-weight-bold">{{ $prevention->status }}</td>
                                        <td>{{ $prevention->prevention_order }}</td>
                                        <td>
                                            <a href="preventions-edit/{{ $prevention->id }}" class="btn btn-primary btn-xs">Edit</a>
                                            <a href="preventions-delete/{{ $prevention->id }}" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Delete</a>  
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
@endsection