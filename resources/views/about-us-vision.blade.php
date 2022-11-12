@extends('layouts.head')
@section('content')
<div class="container mt-5">
    <div class="text-center">
        <h3 style="color: #4479bd;" class="p-2">Vision</h3>
    </div>
    <div class="card rounded p-4">
        <div class="row container-fluid">
            <div class="col-md-6">
                <img src="{{ '/storage/'.$vision->image }}" class="img-fluid rounded" style="width: 100%" alt="">
            </div>
            <div class="col-md-6" id="vision">
                <?php echo $vision->text; ?>
            </div>
        </div>
    </div>
</div>
@endsection