@extends('layouts.head')
@section('content')
    <div class="container mt-5">
        <div class="text-center">
            <h3 style="color: #4479bd;" class="p-2">Alumni Program</h3>
        </div>
        <div class="card rounded p-4">
            <div class="row container-fluid">
                <div class="col-md-12">
                    @if ($alumni != '')
                        <?php echo $alumni->text; ?>
                    @endif
                </div>
            </div>
            <div class="text-center">
                <div class="row my-2">
                    @foreach($alumni_image as $image)
                    <div class="col-md-4 my-2">
                        <img src="/storage/{{ $image->image }}" class="img-fluid" style="height:300px" alt="">
                        <p><?php echo $image->text ?></p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
