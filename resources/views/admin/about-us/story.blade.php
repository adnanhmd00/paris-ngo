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
        @if($story->count() > 0)

        <form action="{{ route('admin.about-us.update-story') }}" method="POST" enctype="multipart/form-data">
        @else
        <form action="{{ route('admin.about-us.add-story') }}" method="POST" enctype="multipart/form-data">
        @endif
            @csrf
            <div class="form-group">
                <div class="col-md-12">
                    <textarea name="story" id="editor" col="10">{{ $story->story }}</textarea>
                </div>
                <div class="col-md-12 mt-4">
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose an image</label>
                      </div>
                </div>
                <img src="/storage/{{ $story->image }}" alt="" style="width: 200px;" class="img-fluid p-2 border m-3">
                <div class="text-center mt-3">
                    <button class="btn btn-primary btn-sm">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
