@extends('admin.layouts.header')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Sliders</h1>
            <a href="{{ route('admin.add-slider') }}" class="btn btn-primary">Add New Slider</a>
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
                    @foreach ($sliders as $slider)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td><img src="/storage/{{ $slider->image }}" style="width: 150px; height: 70px;" alt=""></td>
                        <td>@if($slider->status == 1) Active @elseif ($slider->status == 0) Disabled @endif</td>
                        <td><a href="{{ route('admin.edit-slider', $slider->id) }}" class="btn btn-sm btn-primary"> <i class="fa fa-pencil-alt"></i>&nbsp;  Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
