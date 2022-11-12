@extends('admin.layouts.header')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">About Us (Gallery)</h1>
            <button data-toggle="modal" data-target="#add-gallery-image" class="btn btn-primary">Add New Image</button>
        </div>
    </div>
    <div class="card p-3 m-3">
        <div class="table-responsive">
            <table class="table" id="dataTable">
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($galleries as $gallery)
                        <tr>
                            <td>1</td>
                            <td><img src="/storage/{{ $gallery->image }}" alt="" style="height: 80px;"></td>
                            <td>

                                @if ($gallery->status == 1)
                                    <div class="text-success">Active</div>
                                @endif
                                @if ($gallery->status == 0)
                                    <div class="text-danger">Inactive</div>
                                @endif
                            </td>
                            <td>
                                @if ($gallery->status == 1)
                                    <a href="{{ route('admin.update-gallery', $gallery->id) }}"
                                        class="btn btn-sm btn-primary"> <i class="fa fa-pencil-alt"></i>&nbsp;
                                        Inactive</a>
                                @endif
                                @if ($gallery->status == 0)
                                    <a href="{{ route('admin.update-gallery', $gallery->id) }}"
                                        class="btn btn-sm btn-primary"> <i class="fa fa-pencil-alt"></i>&nbsp;
                                        Active</a>
                                @endif
                                <a href="{{ route('admin.delete-gallery', $gallery->id) }}" class="btn btn-sm btn-primary">
                                    <i class="fa fa-trash-alt"></i>&nbsp;
                                    Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <!-- Add New Teacher Modal -->
    <div class="modal fade" id="add-gallery-image" tabindex="-1" role="dialog" aria-labelledby="teacherModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="teacherModalLabel">Add New Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.add-gallery-image') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="file" name="image" id="">
                            <button class="btn btn-primary btn-sm">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
