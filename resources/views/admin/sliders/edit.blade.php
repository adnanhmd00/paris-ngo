@extends('admin.layouts.header')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <a href="{{ route('admin.slider-settings') }}" class="btn btn-sm btn-primary mr-5"><i class="fa fa-arrow-left"></i> &nbsp; Go Back</a>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> Slider Settings</h1>
        </div>
    </div>
    <div class="card p-3 m-3">
        <form action="{{ route('admin.update-slider', $slider->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="text">Slider Text</label>
                        <input type="text" value="{{ $slider->text }}" class="form-control" name="text">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="text">Slider Sub Text</label>
                        <input type="text" value="{{ $slider->sub_text }}" class="form-control" name="sub_text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
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
                    <img src="/storage/{{ $slider->image }}" id="thumb" style="width: 200px; height: 100px;" class="img-fluid mt-2 border p-2" alt="Image">
                    <input type="hidden" name="prev_image" value="{{ $slider->image }}">
                </div>
                <div class="col-md-6">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="">Select</option>
                        <option @if($slider->status == 1) selected @endif value="1">Active</option>
                        <option @if($slider->status == 0) selected @endif value="0">Disable</option>
                    </select>
                </div>
            </div>
            <div class="text-right">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <script>
        customFile.onchange = evt => {
            $('#sample-text').text('Uploaded Image');
            $('#thumb').show();
            const [file] = customFile.files
            if (file) {
                thumb.src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection
