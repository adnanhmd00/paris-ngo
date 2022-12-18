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
            <h4>Principles</h4>
            <form action="{{ route('admin.our-work.add-school-principles') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <textarea name="content" id="editor" col="10"></textarea>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
