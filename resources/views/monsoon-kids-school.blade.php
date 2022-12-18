{{-- Can be created with excel for the bar graph --}}
@extends('layouts.head')
@section('content')
    <div class="container mt-5">
        <div class="text-center">
            <h3 style="color: #4479bd;" class="p-2">Monsoon Kids School</h3>
        </div>
        <div class="card rounded p-4">
            <div class="row container-fluid">
                <div class="col-md-12">
                    <div class="text-center">
                        <h5>School Principles</h5>
                    </div>
                    <div>
                       <?php echo $principle->content; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-3 rounded p-4">
            <div class="row container-fluid">
                <div class="col-md-12">
                    <div class="text-center">
                        <h5>Graph Representation of Students Data</h5>
                        @if($graph != '')
                        <img src="/storage/{{ $graph->image }}" class="img-fluid" alt="">
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-3 rounded p-4">
            <div class="row container-fluid">
                <div class="col-md-12">
                    <div class="text-center">
                        <h5>School Infrastructure</h5>
                    </div>
                    <div>
                        <?php echo $infra->content; ?>
                    </div>
                    <div class="row text-center mt-2">
                        <div class="col-md-12">
                            <div class="text-center">
                                @if($infra != '')
                                <img src="/storage/{{ $infra->image }}" alt="">
                                @endif
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <img src="{{ asset('assets/images/school-1.jpg') }}" class="img-fluid" style="height: 450px; width: 400px;" alt="Old School Image">
                            <p>Before</p>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('assets/images/school-2.jpg') }}" class="img-fluid" style="height: 450px; width: 400px;" alt="New School Image">
                            <p>After</p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-3 rounded p-4">
            <div class="row container-fluid">
                <div class="col-md-12">
                    <div class="text-center">
                        <h5>Curriculum</h5>
                    </div>
                    <div>
                        <?php echo $curricullum_text->content; ?>
                    </div>
                    @foreach($curricullum as $curr)

                    <div class="row text-center mt-2">
                        <div class="col-md-6 col-lg-4">
                            <img src="/storage/{{ $curr->image }}" class="img-fluid" style="height: 450px; width: 100%;" alt="Old School Image">
                            <p><small>{{ $curr->image_first_text }}</small></p>
                        </div>
                        <div class="col-md-6 col-lg-8">
                            <img src="/storage/{{ $curr->second_image }}" class="img-fluid" style="height: 450px; width: 100%;" alt="New School Image">
                            <p><small>{{ $curr->image_second_text }}</small></p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
