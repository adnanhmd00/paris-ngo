@extends('admin.layouts.header')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Our Impact (Community)</h1>
        </div>
    </div>
    <div class="card p-3 m-3">
        @if($community != '')
        <form action="{{ route('admin.update-impact.community') }}" method="POST" enctype="multipart/form-data">
            @else
        <form action="{{ route('admin.add-impact.community') }}" method="POST" enctype="multipart/form-data">
        @endif
            @csrf
            <div class="form-group">
                <div class="col-md-12">
                    <textarea name="text" id="editor" col="10">@if($community != ''){{ $community->text }}@endif</textarea>
                </div>
                <div class="row">
                    <div class="col-md-8 mt-4">
                        <input type="file" name="image" class="form-control" id="">
                    </div>
                    @if($community != '')
                    
                    <div class="col-md-4 mt-2">
                        <img src="/storage/{{ $community->image }}" style="width: 200px;" alt="" class="border p-3">
                    </div>
                    @endif
                </div>
                <div class="text-center mt-3">
                    <button class="btn btn-primary btn-sm">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
