@extends('admin.layouts.header')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Our Impact (Student)</h1>
        </div>
    </div>
    <div class="card p-3 m-3">
        <form action="{{ route('admin.update-impact.students', $student->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="name" class="small">Name</label>
                        <input type="text" name="name" value="{{ $student->name }}" class="form-control">
                    </div>
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
                    <img src="/storage/{{ $student->image }}" alt="" style="height: 100px;" class="img-fluid mt-2 p-2 border">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label for="about" class="small">About</label>
                    <textarea name="text" id="editor" col="10">{{ $student->text }}</textarea>
                </div>
                <div class="text-center mt-3">
                    <button class="btn btn-primary btn-sm">Submit</button>
                </div>
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
