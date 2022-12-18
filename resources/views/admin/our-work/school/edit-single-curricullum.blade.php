@extends('admin.layouts.header')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Curricullum (School)</h1>
        </div>
    </div>
    <div class="card p-3 m-3">
        <div class="col-md-12">
            <h4>Curricullum Images</h4>
            <form action="{{ route('admin.our-work.update-curricullum', $curricullum->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 my-3">
                    <textarea name="content" id="editor" cols="30" rows="10">{{ $content->content }}</textarea>
                </div>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <input type="file" name="image" id="">
                        <img src="/storage/{{ $curricullum->image }}" style="width: 100px;" alt="">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="image_first_text" value="{{ $curricullum->image_first_text }}" placeholder="Image Text 1" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="file" name="second_image" id="">
                        <img src="/storage/{{ $curricullum->second_image }}" style="width: 100px;" alt="">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="image_second_text" value="{{ $curricullum->image_second_text }}" placeholder="Image Text 2" class="form-control">
                    </div>
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
