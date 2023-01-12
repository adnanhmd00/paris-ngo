@extends('admin.layouts.header')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Logo Settings</h1>
        </div>
    </div>
    <div class="card m-3 p-3">
        @if (!$logo)
            <form action="{{ route('admin.add-logo') }}" method="POST" enctype="multipart/form-data">
            @else
            <form action="{{ route('admin.update-logo', $logo->id) }}" method="POST" enctype="multipart/form-data">
        @endif
        @csrf
        <div class="row">
            <div class="col-md-6 border-right">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="logo" class="custom-file-input" id="customFile"
                                aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-secondary text-center">Uploaded Logo</div>
                <div class="text-center">
                    @if (!$logo)
                        <div class="text-secondary normal-font">No Logo Uploaded Yet!</div>
                            <img src="https://cdn3.iconfinder.com/data/icons/design-n-code/100/272127c4-8d19-4bd3-bd22-2b75ce94ccb4-512.png" id="thumb" style="width: 200px; height: 200px;" alt="">
                            {{-- <img class="img-fluid border p-3" id="thumb" style="width: 150px;" src="" alt=""> --}}
                    @else
                        <div class="p-3">
                            <img src="{{ asset('storage/' . $logo->logo) }}" id="thumb" style="width: 200px; height: 200px;" class="img-fluid" alt="Logo">
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @error('logo') <div class="text-danger small-font">{{ $message }}</div>@enderror

        @if (!$logo)
            <button class="btn btn-primary">Add Logo</button>
        @else
            <button class="btn btn-primary">Update Logo</button>
        @endif
        </form>
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
    <script>
        // $('#thumb').hide();
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
