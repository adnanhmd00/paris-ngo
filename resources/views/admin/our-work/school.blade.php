@extends('admin.layouts.header')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Our Work (School)</h1>
            @if ($principle == '' || $graph == '' || $infra == '' || $curricullum == '')
                <button href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New</button>
            @endif
        </div>
    </div>
    <div class="container-fluid">
        <div class="card mt-3 p-3">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        {{-- <th>Content</th> --}}
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1 @endphp
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $data->title }}</td>
                            {{-- <td>{{ $data->content }}</td> --}}
                            @if ($data->type == 'principles')
                                <td><a href="{{ route('admin.our-work.edit-school-principles') }}" class="btn btn-primary btn-sm">Edit</a></td>
                            @endif
                            @if ($data->type == 'graph')
                                <td><a href="{{ route('admin.our-work.edit-graph') }}" class="btn btn-primary btn-sm">Edit</a></td>
                            @endif
                            @if ($data->type == 'infra')
                                <td><a href="{{ route('admin.our-work.edit-infra') }}" class="btn btn-primary btn-sm">Edit</a></td>
                            @endif
                            @if ($data->type == 'curricullum')
                                <td><a href="{{ route('admin.our-work.edit-curricullum') }}" class="btn btn-primary btn-sm">Edit</a></td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    @if ($principle == '')
                        <a href="{{ route('admin.our-work.add-school-principles') }}" class="btn btn-primary">Principles</a>
                    @endif
                    @if ($graph == '')
                        <a href="{{ route('admin.our-work.add-graph') }}" class="btn btn-primary">Graph</a>
                    @endif
                    @if ($infra == '')
                        <a href="{{ route('admin.our-work.add-infra') }}" class="btn btn-primary">School Infrastructure</a>
                    @endif
                    @if ($curricullum == '')
                        <a href="{{ route('admin.our-work.add-curricullum') }}" class="btn btn-primary">Curriculum</a>
                    @endif
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
@endsection
