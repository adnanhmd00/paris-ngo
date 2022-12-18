@extends('layouts.head')
@section('content')
    <div class="container mt-5">
        <div class="text-center">
            <h3 style="color: #4479bd;" class="p-2">Our Team</h3>
        </div>
        <div class="card rounded p-1">
            <div class="row container-fluid">
                <div class="col-md-12">
                    <div class="text-center">
                        <h5>Board Of Directors</h5>
                    </div>
                    <div class="">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                @foreach ($directors as $director)
                                    <tr>
                                        <td>{{ $director->name }}</td>
                                        <td><b>{{ $director->position }}</b></td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card rounded p-1 mt-2">
            <div class="row container-fluid">
                <div class="col-md-12">
                    <div class="text-center">
                        <h5>Teachers</h5>
                    </div>
                    <div class="">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                @foreach ($teachers as $teacher)
                                    <tr>
                                        <td>{{ $teacher->name }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card rounded p-1 mt-2">
            <div class="row container-fluid">
                <div class="col-md-12">
                    <div class="text-center">
                        <h5>Headmistress</h5>
                    </div>
                    <div class="">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                @foreach ($headmistresses as $headmistress)
                                    <tr>
                                        <td>{{ $headmistress->name }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card rounded p-1 mt-2">
            <div class="row container-fluid">
                <div class="col-md-12">
                    <div class="text-center">
                        <h5>Stiching Classes</h5>
                    </div>
                    <div class="">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                @foreach ($stiching as $stich)
                                    <tr>
                                        <td>{{ $stich->name }}</td>
                                        {{-- <td><b>President</b></td> --}}
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card rounded p-1 mt-2">
            <div class="row container-fluid">
                <div class="col-md-12">
                    <div class="text-center">
                        <h5>Support Staff</h5>
                    </div>
                    <div class="">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                @foreach ($helpers as $helper)
                                    <tr>
                                        <td>{{ $helper->name }}</td>
                                        {{-- <td><b>President</b></td> --}}
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
