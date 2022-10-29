@extends('admin.layouts.header')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">About Us</h1>
        </div>
    </div>
    <div class="card p-3 m-3">
        <form action="{{ route('admin.about-us') }}" method="POST">
            @csrf
            @if(!$about)
            <textarea name="about_us" id="editor" col="10"></textarea>
            @else
            <textarea name="about_us" id="editor" col="10">{{ $about->about_us }}</textarea>
            @endif
        <div class="text-right"><button class="btn btn-primary px-5 mt-2 ">Submit</button></div>
        </form>
    </div>
@endsection
