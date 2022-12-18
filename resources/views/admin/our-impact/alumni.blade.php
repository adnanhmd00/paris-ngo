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
                <th>Image</th>
                <th>Action</th>
            </tr>
            @foreach ($alumnis as $alumni)
                <tr>
                    <td>#</td>
                    <td>{{ substr($alumni->text, 0, 20 ) }}</td>
                    <td><img src="/storage/{{ $alumni->image }}" style="width: 100px;" alt=""></td>
                    <td><a href="" class="btn btn-primary">Edit</a></td>
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
