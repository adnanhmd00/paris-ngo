@extends('admin.layouts.header')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Our Work (School)</h1>
        </div>
    </div>
    <div class="card p-3 m-3">
        <div class="col-md-12">
            <h4>Graph</h4>
            <form action="{{ route('admin.our-work.update-graph') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image" id="">
                <button class="btn btn-primary">Submit</button>
            </form>
            <img src="/storage/{{ $graph->image }}" alt="" style="width: 240px;">
        </div>
    </div>
@endsection
