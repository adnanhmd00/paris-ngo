@extends('admin.layouts.header')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Curricullum (School)</h1>
            <a href="{{ route('admin.our-work.add-curricullum') }}" class="btn btn-primary">Add New Curricullum</a>
        </div>
    </div>

    <div class="card p-3 m-3">
        <table class="table">
            <tr>
                <th>#</th>
                <th>Image 1</th>
                <th>Image 2</th>
                <th>Image Text 1</th>
                <th>Image Text 2</th>
                <th>Action</th>
            </tr>
            @php $i = 1 @endphp
            @foreach ($curricullums as $curricullum)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td><img src="/storage/{{ $curricullum->image }}" style="width: 100px;" alt=""></td>
                    <td><img src="/storage/{{ $curricullum->second_image }}" style="width: 100px;" alt=""></td>
                    <td>{{ $curricullum->image_first_text }}</td>
                    <td>{{ $curricullum->image_second_text }}</td>
                    <td><a href="{{ route('admin.our-work.edit-single-curricullum', $curricullum->id) }}" class="btn btn-primary btn-sm">Edit </a></td>
                </tr>
            @endforeach
        </table>
    </div>
    {{-- <div class="card p-3 m-3">
        <div class="col-md-12">
            <h4>Curricullum Images</h4>
            <form action="{{ route('admin.our-work.add-curricullum') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-4">
                    <div class="col-md-6">
                        <input type="file" name="image" id="">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="image_first_text" placeholder="Image Text 1" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="file" name="second_image" id="">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="image_second_text" placeholder="Image Text 2" class="form-control">
                    </div>
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div> --}}
@endsection
