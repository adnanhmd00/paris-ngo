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
                    
                    @if($al->file_type == 'youtube')
                        <div class="container text-center mt-3">
                                <iframe width="320" height="240" src="{{ $al->image }}"></iframe>
                        </div>
                    @elseif($al->file_type == 'facebook')
                        <div class="container text-center mt-3">
                                <iframe src="{{ $al->image }}" width="320" height="240" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>
                    @elseif($al->file_type == 'image')
                        <div class="container text-center mt-3">
                            <img src="/storage/{{ $al->image }}" alt="" width="320" height="240">
                        </div>
                    @elseif($al->file_type == 'video')
                        <div class="container text-center mt-3">
                        <video width="320" height="240" controls>
                                <source src="/storage/{{ $al->image }}" type="video/mp4">
                                <source src="movie.ogg" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
