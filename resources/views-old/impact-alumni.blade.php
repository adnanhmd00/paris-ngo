@extends('layouts.head')
@section('content')
    <div class="container mt-5">
        <div class="text-center">
            <h3 style="color: #4479bd;" class="p-2">Alumni Program</h3>
        </div>
        <div class="card rounded p-4">
            <div class="row container-fluid">
                <div class="col-md-12">
                    It is heartening to see the alumni return to their alma mater to share their countless stories with
                    their teachers and once again be a part of a place they call home. It is indeed humbling to see children
                    take wings and pursue their dreams.
                    <div class="text-center mt-2 shadow">
                        <video width="100%" height="400" controls>
                            <source src="{{ asset('assets/images/alumni-video.mp4') }}" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
