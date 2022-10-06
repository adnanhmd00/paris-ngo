@extends('admin.layouts.header')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
            <a href="{{ route('admin.add-gallery') }}" class="btn btn-primary">Add New Image</a>
        </div>
    </div>
    <div class="card p-3 m-3">
        <div class="table-responsive">
            <table class="table" id="dataTable" >
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1 @endphp
                    @foreach ($images as $gallery)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td><img src="/storage/{{ $gallery->image }}" style="width: 150px; height: 70px;" alt=""></td>
                        <td>@if($gallery->status == 1) Active @elseif ($gallery->status == 0) Disabled @endif</td>
                        <td><a onclick="return confirm('Are you sure you want to delete?');" href="{{ route('admin.delete-gallery', $gallery->id) }}" class="btn btn-sm btn-primary"> <i class="fa fa-trash"></i>&nbsp;  Delete</a>
                        @if($gallery->status == 0)
                        <a onclick="return confirm('This will change the status to active. Are you sure?');" href="{{ route('admin.gallery-status', $gallery->id) }}" class="btn btn-sm btn-primary">  Set Active</a>
                        @elseif($gallery->status == 1)
                        <a onclick="return confirm('This will change the status to disabled. Are you sure?');" href="{{ route('admin.gallery-status', $gallery->id) }}" class="btn btn-sm btn-primary">  Disable Now</a></td>

                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
