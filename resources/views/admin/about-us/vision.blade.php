@extends('admin.layouts.header')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">About Us (Vision)</h1>
        </div>
    </div>
    <div class="card p-3 m-3">
        @if($vision->count() > 0)

        <form action="{{ route('admin.about-us.update-vision') }}" method="POST" enctype="multipart/form-data">
        @else
        <form action="{{ route('admin.about-us.add-vision') }}" method="POST" enctype="multipart/form-data">
        @endif
            @csrf
            <div class="col-md-12">
                <label for="image">Image</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="customFile"
                            aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                @if($vision->count() > 0)
                <div class="m-3">
                    <img src="/storage/{{ $vision->image }}" alt="" style="width: 200px" class="p-3 border ">
                </div>
                @else
                <img src="https://cdn3.iconfinder.com/data/icons/design-n-code/100/272127c4-8d19-4bd3-bd22-2b75ce94ccb4-512.png" id="thumb" style="width: 200px; height: 200px;" class="img-fluid" alt="Image">
                @endif
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <textarea name="text" id="editor" col="10">{{ $vision->text }}</textarea>
                </div>
                <div class="text-center mt-3">
                    <button class="btn btn-primary btn-sm">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
