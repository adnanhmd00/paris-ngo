@extends('layouts.head')
@section('content')
    <div class="container mt-5">
        <div class="text-center">
            <h3 style="color: #4479bd;" class="p-2">Alumni Program</h3>
        </div>
        @foreach($alumni as $al)
        <div class="card rounded p-4 my-2">
            <div class="row container-fluid">
                <div class="col-md-12">
                    @if($al != '')
                    <?php echo $al->text; ?>
                    @endif
                    <div class="text-center mt-2">
                        <img src="/storage/{{ $al->image }}" style=" width: 500px;" alt="">
                        {{-- <video width="100%" height="400" controls>
                            <source src="{{ asset('assets/images/alumni-video.mp4') }}" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">
                            Your browser does not support the video tag.
                        </video> --}}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
