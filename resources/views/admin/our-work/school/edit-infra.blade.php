@extends('admin.layouts.header')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Infrastructure (School)</h1>
        </div>
    </div>
    <div class="card p-3 m-3">
        <div class="col-md-12">
            <h4>Infrastructure</h4>
            <form action="{{ route('admin.our-work.update-infra') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <textarea name="content" id="editor" cols="30" rows="10">{{ $infra->content }}</textarea>
                <div class="col-md-12 my-5">
                    <input type="file" name="image" class="form-control" id="">
                </div>
                <img src="/storage/{{ $infra->image }}" style="width: 100px;" alt="">
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
