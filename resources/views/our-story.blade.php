@extends('layouts.head')
@section('content')
    <div class="container mt-5">
        <div class="text-center">
            <h3 style="color: #4479bd;" class="p-2">Our Story</h3>
        </div>
        <div class="card rounded p-4">
            <div class="row container-fluid">
                <div class="col-md-12">
                    <?php echo $story->story; ?>
                </div>
                <div class="text-center">
                    <img src="/storage/{{ $story->image }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
