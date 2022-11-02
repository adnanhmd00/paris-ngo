@extends('admin.layouts.header')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">About Us (Our Story)</h1>
        </div>
    </div>
    <div class="card p-3 m-3">
        <h4>Board Of Directors</h4>
        <form action="{{ route('admin.save-text') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="text-right mb-2">
                    <button class="btn btn-primary btn-sm">Add New Director</button>
                </div>
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>Air Marshal Sethi</td>
                            <td>President</td>
                            <td><a href="" class="btn btn-sm btn-primary">Edit</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>
    </div>

    <div class="card p-3 m-3">
        <h4>Teachers</h4>
        <div class="text-right mb-2">
            <button class="btn btn-primary btn-sm">Add New Teacher</button>
        </div>
        <form action="{{ route('admin.save-text') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>Air Marshal Sethi</td>
                            <td><a href="" class="btn btn-sm btn-primary">Edit</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>
    </div>

    <div class="card p-3 m-3">
        <h4>Stiching Classes</h4>
        <div class="text-right mb-2">
            <button class="btn btn-primary btn-sm">Add New Stiching Teacher</button>
        </div>
        <form action="{{ route('admin.save-text') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>Air Marshal Sethi</td>
                            <td><a href="" class="btn btn-sm btn-primary">Edit</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>
    </div>


    <div class="card p-3 m-3">
        <h4>Helpers</h4>
        <div class="text-right mb-2">
            <button class="btn btn-primary btn-sm">Add New Helper</button>
        </div>
        <form action="{{ route('admin.save-text') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>Air Marshal Sethi</td>
                            <td><a href="" class="btn btn-sm btn-primary">Edit</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>
    </div>

    <div class="card p-3 m-3">
        <h4>Gardener</h4>
        <div class="text-right mb-2">
            <button class="btn btn-primary btn-sm">Add New Gardener</button>
        </div>
        <form action="{{ route('admin.save-text') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>Air Marshal Sethi</td>
                            <td><a href="" class="btn btn-sm btn-primary">Edit</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>
    </div>
@endsection
