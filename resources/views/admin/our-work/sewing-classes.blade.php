@extends('admin.layouts.header')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Sewing Classes</h1>
        </div>
    </div>
    <div class="card p-3 m-3">
        @if ($sewings == '')
            <form action="{{ route('admin.work-add-sewing') }}" method="POST" enctype="multipart/form-data">
            @else
                <form action="{{ route('admin.work-update-sewing') }}" method="POST" enctype="multipart/form-data">
        @endif
        @csrf
        <div class="form-group">
            <div class="col-md-12">
                <textarea name="text" id="editor" col="10">@if ($sewings != ''){{ $sewings->text }}@endif</textarea>
            </div>
            <div class="text-center mt-3">
                <button class="btn btn-primary btn-sm">Submit</button>
            </div>
        </div>
        </form>
    </div>

    <div class="card p-3 m-3">
        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New Image</button>
        <table class="table">
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            @foreach ($sewing_images as $image)
                <tr>
                    <td></td>
                    <td><img src="/storage/{{ $image->image }}" style="width: 100px;" alt=""></td>
                    <td><a class="btn btn-danger" href="{{ route('admin.work-delete-sewing-image', $image->id) }}">Delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>


<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add New Image</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
          <form action="{{ route('admin.work-add-sewing-image') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image" id="">
            <button class="btn btn-primary">Submit</button>
          </form>
        </div>
  
      </div>
    </div>
  </div>
@endsection
