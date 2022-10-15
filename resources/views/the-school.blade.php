@extends('layouts.head')
@section('content')
<div class="container mt-5">
    <div class="text-center">
        <h3 style="color: #4479bd;" class="p-2">About Us</h3>
    </div>
    <div class="card rounded p-4">
        <div class="row container-fluid">
            <div class="col-md-7" id="vision">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, id velit sint optio dolorem esse porro quibusdam reiciendis aliquid aut, a ad quo, eveniet neque beatae eum fugit dolore cupiditate voluptatem eligendi? Velit, dolor veritatis excepturi voluptatem nihil inventore adipisci!</p>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('assets/images/events/image_01.jpg') }}" class="img-fluid rounded" alt="">
            </div>
        </div>
    </div>

    <div class="card rounded p-4 mt-4">
        <div class="row container-fluid">
            <div class="col-md-5">
                <img src="{{ asset('assets/images/events/image_01.jpg') }}" class="img-fluid rounded" alt="">
            </div>
            <div class="col-md-7" id="board-of-directory">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, id velit sint optio dolorem esse porro quibusdam reiciendis aliquid aut, a ad quo, eveniet neque beatae eum fugit dolore cupiditate voluptatem eligendi? Velit, dolor veritatis excepturi voluptatem nihil inventore adipisci!</p>
            </div>
        </div>
    </div>
</div>
@endsection