@extends('admin.layouts.header')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">About Us (Gallery)</h1>
            <a href="" class="btn btn-primary">Add New Image</a>
        </div>
    </div>
    <div class="card p-3 m-3">
        <div class="table-responsive">
            <table class="table" id="dataTable">
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><img src="" alt=""></td>
                        <td>
                            <a href="" class="btn btn-sm btn-primary"> <i
                                    class="fa fa-pencil-alt"></i>&nbsp; Inactive</a>
                            <a href="" class="btn btn-sm btn-primary"> <i
                                    class="fa fa-trash-alt"></i>&nbsp; Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
