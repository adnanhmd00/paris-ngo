@extends('admin.layouts.header')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Box Text</h1>
            @if (count($texts) < 3)
                <a href="{{ route('admin.add-text') }}" class="btn btn-primary">Add New Text</a>
            @endif
        </div>
    </div>
    <div class="card p-3 m-3">
        <div class="table-responsive">
            <table class="table" id="dataTable">
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Text</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1 @endphp
                    @foreach ($texts as $txt)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $txt->text }}</td>
                            <td><a href="{{ route('admin.edit-text', $txt->id) }}" class="btn btn-sm btn-primary"> <i
                                        class="fa fa-pencil-alt"></i>&nbsp; Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
