@extends('admin.layouts.header')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">About Us Testimonials</h1>
            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New</button>
        </div>
    </div>
    <div class="card p-3 m-3">
        <table class="table">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Text</th>
                <th>Status</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            @foreach ($testimonials as $testimonial)
                <tr>
                    <td>#</td>
                    <td>{{ $testimonial->name }}</td>
                    <td>{{ substr($testimonial->text, 0, 20 ) }}</td>
                    <td>@if($testimonial->status == 1) Active @else  Inactive @endif</td>
                    <td><img src="/storage/{{ $testimonial->image }}" style="width: 100px;" alt=""></td>
                    <td>
                       <!-- The UPdate Modal -->
                        <div class="modal fade" id="myModal-{{ $testimonial->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Update Testimonial </h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form action="{{ route('admin.about-us.update-testimonials', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" placeholder="Add A Name" name="name" value="{{ $testimonial->name }}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <textarea name="text" id="editor" col="10">{{ $testimonial->text }}</textarea>
                                                </div>
                                                
                                                <div class="col-md-12 mt-3">
                                                    <select name="status" class="form-control" id="">
                                                        <option value="">Select</option>
                                                        <option value="1" @if($testimonial->status == 1) selected @endif>Active</option>
                                                        <option value="0" @if($testimonial->status == 0) selected @endif>InActive</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12 mt-3">
                                                    <input type="file" name="image" class="form-control" id="">
                                                </div>
                                                <div class="text-center">
                                                    <img style="width: 80px; height: 80px;" src="/storage/{{ $testimonial->image }}" alt="Testimonial Image">
                                                </div>
                                                <div class="text-center mt-3">
                                                    <button class="btn btn-primary btn-sm">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal-{{ $testimonial->id }}">Edit</a>
                        <a  class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')" href="{{ route('admin.about-us.delete-testimonial', $testimonial->id) }}" >Delete</a>
                </td>
                    
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
                    <h4 class="modal-title">Add New Testimonial </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{ route('admin.about-us.add-testimonials') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" placeholder="Add A Name" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea name="text" id="editor" col="10"></textarea>
                            </div>
                            <div class="col-md-12 mt-3">
                                <input type="file" name="image" class="form-control" id="">
                            </div>
                            <div class="text-center mt-3">
                                <button class="btn btn-primary btn-sm">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
