@extends('admin.layouts.header')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Our Impact (Students)</h1>
            <a href="{{ route('admin.add-impact.students') }}" class="btn btn-primary">Add New Student</a>
        </div>
    </div>
    <div class="card p-3 m-3">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $i = 1; @endphp
                @foreach($students as $student)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $student->name }}</td>
                    <td><img src="/storage/{{ $student->image }}" alt="" style="height: 80px;"></td>
                    <td><a href="{{ route('admin.edit-impact.students', $student->id) }}" class="btn btn-primary btn-sm">Edit</a></td>
                    <td><a href="{{ route('admin.delete-impact.student', $student->id) }}" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
