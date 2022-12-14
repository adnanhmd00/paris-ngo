@extends('admin.layouts.header')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Box Text</h1>
        </div>
    </div>
    <div class="card p-3 m-3">
        <form action="{{ route('admin.save-text') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="col-md-12">
                    <textarea name="text" id="editor" col="10"></textarea>
                </div>
                <div class="text-center mt-3">
                    <button class="btn btn-primary btn-sm">Add Text</button>
                </div>
            </div>
        </form>
    </div>
@endsection
