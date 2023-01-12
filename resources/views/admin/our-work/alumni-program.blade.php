@extends('admin.layouts.header')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Our Work (Alumni Program)</h1>
        </div>
    </div>
    <div class="card p-3 m-3">
        @if ($alumni != '')
            <form action="{{ route('admin.work-update-alumni') }}" method="POST" enctype="multipart/form-data">
        @else
            <form action="{{ route('admin.work-add-alumni') }}" method="POST" enctype="multipart/form-data">
        @endif
        @csrf
        <div class="form-group">
            <div class="col-md-12">
                <textarea name="text" id="editor" col="10">@if($alumni != ''){{ $alumni->text }} @endif</textarea>
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
            @foreach ($alumni_images as $image)
                <tr>
                    <td></td>
                    <td><img src="/storage/{{ $image->image }}" style="width: 100px;" alt=""></td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')" href="{{ route('admin.work-delete-sewing-image', $image->id) }}">Delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

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
          <form action="{{ route('admin.work-add-alumni-image') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12 mb-2">
                <input type="file" name="image" id="">
            </div>
            
            <div class="col-md-12 mt-2">
                <textarea name="text" id="editor2" cols="30" rows="10"></textarea>
            </div>
            <div class="text-center">
                <button class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
  
      </div>
    </div>
  </div>