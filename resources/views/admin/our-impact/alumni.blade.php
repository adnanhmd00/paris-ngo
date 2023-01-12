@extends('admin.layouts.header')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Alumni</h1>
            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New</button>
        </div>
    </div>
    <div class="card p-3 m-3">
        <table class="table">
            <tr>
                <th>#</th>
                <th>Text</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
            @foreach ($alumnis as $alumni)
                <tr>
                    <td>#</td>
                    <td>{{ substr($alumni->text, 0, 20 ) }}</td>
                    <td>{{ Str::title($alumni->file_type) }}</td>
                    <!-- <td><img src="/storage/{{ $alumni->image }}" style="width: 100px;" alt=""></td> -->
                    <td><a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal-{{ $alumni->id }}">Edit</a></td>
                    <td><a  class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')" href="{{ route('admin.delete-impact.alumni', $alumni->id) }}" >Delete</a></td>
                </tr>

                
    <!-- The Modal -->
    <div class="modal fade" id="myModal-{{ $alumni->id }}">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Alumni </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">

                    <form action="{{ route('admin.update-impact.alumni', $alumni->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea name="text" id="editor2" col="10">{{ $alumni->text }}</textarea>
                            </div>
                            <select name="file_type" id="edit_file_type" class="form-control mt-3">
                                <option value="">Select</option>
                                <option value="youtube">Youtube</option>
                                <option value="facebook">Facebook</option>
                                <option value="image">Image</option>
                                <option value="video">Video</option>
                            </select>

                            <div class="col-md-12 mt-3">
                                <input type="text" id="youtube-edit" name="youtube" placeholder="Youtube Link" class="form-control" id="" style="display: none">
                            </div>
                            
                            <div class="col-md-12 mt-3">
                                <input type="text" id="facebook-edit" name="facebook" placeholder="Facebook Link" class="form-control" id="" style="display: none">
                            </div>
                            
                            <div class="col-md-12 mt-3">
                                <input type="file" id="image-edit" name="image" class="form-control" label="Choose Image" style="display: none">
                            </div>
                            
                            <div class="col-md-12 mt-3">
                                <input type="file" id="video-edit" name="video" class="form-control" label="Choose Video" style="display: none">
                            </div>

                            @if($alumni->file_type == 'youtube')
                                <div class="container text-center mt-3">
                                        <iframe width="240" height="140" src="{{ $alumni->image }}"></iframe>
                                </div>
                            @elseif($alumni->file_type == 'facebook')
                                <div class="container text-center mt-3">
                                        <iframe src="{{ $alumni->image }}" width="240" height="140" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                </div>
                            @elseif($alumni->file_type == 'image')
                                <div class="container text-center mt-3">
                                    <img src="/storage/{{ $alumni->image }}" alt="" width="240" height="140">
                                </div>
                            @elseif($alumni->file_type == 'video')
                                <div class="container text-center mt-3">
                                <video width="240" height="140" controls>
                                        <source src="/storage/{{ $alumni->image }}" type="video/mp4">
                                        <source src="movie.ogg" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            @endif
                            <div class="text-center mt-3">
                                <button class="btn btn-primary btn-sm">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
            @endforeach
        </table>
    </div>


    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add New Alumni </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">

                    <form action="{{ route('admin.add-impact.alumni') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea name="text" id="editor" col="10"></textarea>
                            </div>
                            <select name="file_type" id="file_type" class="form-control mt-3" required>
                                <option value="">Select</option>
                                <option value="youtube">Youtube</option>
                                <option value="facebook">Facebook</option>
                                <option value="image">Image</option>
                                <option value="video">Video</option>
                            </select>
                            <div class="col-md-12 mt-3">
                                <input type="text" id="youtube" name="youtube" placeholder="Youtube Link" class="form-control" id="" style="display: none">
                            </div>
                            
                            <div class="col-md-12 mt-3">
                                <input type="text" id="facebook" name="facebook" placeholder="Facebook Link" class="form-control" id="" style="display: none">
                            </div>
                            
                            <div class="col-md-12 mt-3">
                                <input type="file" id="image" name="image" class="form-control" label="Choose Image" style="display: none">
                            </div>
                            
                            <div class="col-md-12 mt-3">
                                <input type="file" id="video" name="video" class="form-control" label="Choose Video" style="display: none">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {   
            $('body').on('change','#file_type', function() {
                var file_type = $(this).val();
                if(file_type == 'youtube') {
                    $('#youtube').show();
                    $('#facebook').hide();
                    $('#image').hide();
                    $('#video').hide();
                }
                if(file_type == 'facebook') {
                    $('#facebook').show();
                    $('#youtube').hide();
                    $('#image').hide();
                    $('#video').hide();
                }
                if(file_type == 'image') {
                    $('#image').show();
                    $('#facebook').hide();
                    $('#youtube').hide();
                    $('#video').hide();
                }
                if(file_type == 'video') {
                    $('#video').show();
                    $('#image').hide();
                    $('#facebook').hide();
                    $('#youtube').hide();
                }                
                if(file_type == '') {
                    $('#video').hide();
                    $('#image').hide();
                    $('#facebook').hide();
                    $('#youtube').hide();
                }

            });

            
            $('body').on('change','#edit_file_type', function() {
                var file_type = $(this).val();
                if(file_type == 'youtube') {
                    $('#youtube-edit').show();
                    $('#facebook-edit').hide();
                    $('#image-edit').hide();
                    $('#video-edit').hide();
                }
                if(file_type == 'facebook') {
                    $('#facebook-edit').show();
                    $('#youtube-edit').hide();
                    $('#image-edit').hide();
                    $('#video-edit').hide();
                }
                if(file_type == 'image') {
                    $('#image-edit').show();
                    $('#facebook-edit').hide();
                    $('#youtube-edit').hide();
                    $('#video-edit').hide();
                }
                if(file_type == 'video') {
                    $('#video-edit').show();
                    $('#image-edit').hide();
                    $('#facebook-edit').hide();
                    $('#youtube-edit').hide();
                }                
                if(file_type == '') {
                    $('#video-edit').hide();
                    $('#image-edit').hide();
                    $('#facebook-edit').hide();
                    $('#youtube-edit').hide();
                }

            });
        }); 
    </script>
@endsection
