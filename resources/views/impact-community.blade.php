@extends('layouts.head')
@section('content')
    <div class="container mt-5">
        <div class="text-center">
            <h3 style="color: #4479bd;" class="p-2">Community</h3>
        </div>
        <div class="card rounded p-4">
            <div class="row container-fluid">
                <div class="col-md-12">
                    @if($community != '')
                    <?php echo $community->text; ?>
                    <div class="text-center">
                        <img src="/storage/{{ $community->image }}" style="width: 500px;" class="img-fluid" alt="">
                    </div>
                    @endif
                </div>
                {{-- Pls put lots of photos of children playing, mahila mandal, dental camp, annual day, Taekwando etc --}}
            </div>
        </div>
    </div>
@endsection
