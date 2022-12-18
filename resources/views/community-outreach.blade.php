@extends('layouts.head')
@section('content')
    <div class="container mt-5">
        <div class="text-center">
            <h3 style="color: #4479bd;" class="p-2">Mahila Mandal</h3>
        </div>
        <div class="card rounded p-4">
            <div class="container-fluid">
                @foreach ($community as $comm)
                    <div class="card p-3 my-2">
                        <div class="row">
                            <div class="col-md-6">
                                @if ($comm != '')
                                    <?php echo $comm->text; ?>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <div class="text-center">
                                    <img src="/storage/{{ $comm->image }}" class="img-fluid border p-1" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection


Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse iure cumque vel illum eius minus unde velit debitis, deleniti, hic consequuntur corrupti! Ad quod odio quas molestiae vel ducimus sunt?