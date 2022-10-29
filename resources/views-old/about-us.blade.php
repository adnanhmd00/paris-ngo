@extends('layouts.head')
@section('content')
<div class="container mt-5">
    <div class="text-center">
        <h3 style="color: #4479bd;" class="p-2">About Us</h3>
    </div>
    <div class="card rounded p-4">
        <div class="row container-fluid">
            <div class="col-md-6">
                <img src="{{ asset('assets/images/about-us.jpg') }}" class="img-fluid rounded" style="width: 100%" alt="">
            </div>
            <div class="col-md-6" id="vision">
                <p>We aim to empower  students to become life-  long learners who strive  for excellence and  actively participate in  and contribute to their  communities.</p>
            </div>
        </div>
    </div>
</div>
@endsection