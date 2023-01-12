@extends('admin.layouts.header')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">About Us (Our Team)</h1>
        </div>
    </div>
    <div class="card p-3 m-3">
        <h4>Board Of Directors</h4>
        <div class="form-group">
            <div class="text-right mb-2">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add-directors">Add New
                    Director</button>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($directors as $director)
                        <tr>
                            <td>{{ $director->name }}</td>
                            <td>{{ $director->position }}</td>
                            <td><button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                    data-target="#update-director-{{ $director->id }}">Edit</button>
                                    <a  class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')" href="{{ route('admin.about-us.team-delete', $director->id) }}" >Delete</a>


                                <!-- Edit Director Modal -->
                                <div class="modal fade" id="update-director-{{ $director->id }}" role="dialog"
                                    aria-labelledby="update-director-label-{{ $director->id }}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="update-director-label-{{ $director->id }}">
                                                    Update Director</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('admin.update-team-director', $director->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control"
                                                            placeholder="Name Of director" value="{{ $director->name }}">
                                                        <input type="text" name="position" class="form-control my-3"
                                                            placeholder="Position" value="{{ $director->position }}">
                                                        <button type="submit"
                                                            class="btn btn-primary btn-sm">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <div class="card p-3 m-3">
        <h4>Teachers</h4>
        <div class="text-right mb-2">
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add-teachers">Add New Teacher</button>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($teachers as $teacher)
                        <tr>
                            <td>{{ $teacher->name }}</td>
                            <td><button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                    data-target="#update-teacher-{{ $teacher->id }}">Edit</button>
                                    <a  class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')" href="{{ route('admin.about-us.team-delete', $teacher->id) }}" >Delete</a>

                                <!-- Edit Teacher Modal -->
                                <div class="modal fade" id="update-teacher-{{ $teacher->id }}" role="dialog"
                                    aria-labelledby="update-teacher-label-{{ $teacher->id }}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="update-teacher-label-{{ $teacher->id }}">
                                                    Update Teacher</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('admin.update-team-teacher', $teacher->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control my-3"
                                                            placeholder="Name Of teacher" value="{{ $teacher->name }}">
                                                        <button type="submit"
                                                            class="btn btn-primary btn-sm">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <div class="card p-3 m-3">
        <h4>Headmistresses</h4>
        <div class="text-right mb-2">
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add-headmistress">Add New HeadMistress</button>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($headmistresses as $headmistress)
                        <tr>
                            <td>{{ $headmistress->name }}</td>
                            <td><button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                    data-target="#update-headmistress-{{ $headmistress->id }}">Edit</button>
                                    <a  class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')" href="{{ route('admin.about-us.team-delete', $headmistress->id) }}" >Delete</a>
                                <!-- Edit Teacher Modal -->
                                <div class="modal fade" id="update-headmistress-{{ $headmistress->id }}" role="dialog"
                                    aria-labelledby="update-headmistress-label-{{ $headmistress->id }}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="update-headmistress-label-{{ $headmistress->id }}">
                                                    Update Headmistress</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('admin.update-team-headmistress', $headmistress->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control my-3"
                                                            placeholder="Name Of Headmistress" value="{{ $headmistress->name }}">
                                                        <button type="submit"
                                                            class="btn btn-primary btn-sm">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <div class="card p-3 m-3">
        <h4>Stiching Classes</h4>
        <div class="text-right mb-2">
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add-stiching">Add New Stiching
                Teacher</button>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($stichings as $stiching)
                        <tr>
                            <td>{{ $stiching->name }}</td>
                            <td><button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                    data-target="#update-teacher-{{ $stiching->id }}">Edit</button>
                                    <a  class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')" href="{{ route('admin.about-us.team-delete', $stiching->id) }}" >Delete</a>

                                <!-- Edit Teacher Modal -->
                                <div class="modal fade" id="update-teacher-{{ $stiching->id }}" role="dialog"
                                    aria-labelledby="update-teacher-label-{{ $stiching->id }}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="update-teacher-label-{{ $stiching->id }}">
                                                    Update Stiching</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('admin.update-team-teacher', $stiching->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control my-3"
                                                            placeholder="Name Of teacher" value="{{ $stiching->name }}">
                                                        <button type="submit"
                                                            class="btn btn-primary btn-sm">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>


    <div class="card p-3 m-3">
        <h4>Helpers</h4>
        <div class="text-right mb-2">
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add-helpers">Add New Helper</button>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($helpers as $helper)
                        <tr>
                            <td>{{ $helper->name }}</td>
                            <td><button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                    data-target="#update-teacher-{{ $helper->id }}">Edit</button>
                                    <a  class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')" href="{{ route('admin.about-us.team-delete', $helper->id) }}" >Delete</a>
                                <!-- Edit Teacher Modal -->
                                <div class="modal fade" id="update-teacher-{{ $helper->id }}" role="dialog"
                                    aria-labelledby="update-teacher-label-{{ $helper->id }}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="update-teacher-label-{{ $helper->id }}">
                                                    Update Stiching</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('admin.update-team-teacher', $helper->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control my-3"
                                                            placeholder="Name Of teacher" value="{{ $helper->name }}">
                                                        <button type="submit"
                                                            class="btn btn-primary btn-sm">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    {{-- <div class="card p-3 m-3">
        <h4>Gardener</h4>
        <div class="text-right mb-2">
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add-gardener">Add New
                Gardener</button>
        </div>
            <div class="form-group">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($gardeners as $gardener)
                        <tr>
                            <td>{{ $gardener->name }}</td>
                            <td><button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                    data-target="#update-teacher-{{ $gardener->id }}">Edit</button>
                                    <a  class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')" href="{{ route('admin.about-us.team-delete', $gardener->id) }}" >Delete</a>
                                <!-- Edit Teacher Modal -->
                                <div class="modal fade" id="update-teacher-{{ $gardener->id }}" role="dialog"
                                    aria-labelledby="update-teacher-label-{{ $gardener->id }}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="update-teacher-label-{{ $gardener->id }}">
                                                    Update Gardener</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('admin.update-team-gardener', $gardener->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control my-3"
                                                            placeholder="Name Of teacher" value="{{ $gardener->name }}">
                                                        <button type="submit"
                                                            class="btn btn-primary btn-sm">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
    </div> --}}
@endsection


<!-- Add Director Modal -->
<div class="modal fade" id="add-directors" tabindex="-1" role="dialog" aria-labelledby="gardenerModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="gardenerModalLabel">Add New Director</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.add-team-director') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name Of director">
                        <input type="text" name="position" class="form-control my-3" placeholder="Position">
                        <input type="hidden" name="type" value="director">
                        <button class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Add New Teacher Modal -->
<div class="modal fade" id="add-teachers" tabindex="-1" role="dialog" aria-labelledby="teacherModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="teacherModalLabel">Add New Teacher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.add-team-teacher') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control my-3"
                            placeholder="Name Of Teacher">
                        <input type="hidden" name="type" value="director">
                        <button class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Add New Teacher Modal -->
<div class="modal fade" id="add-headmistress" tabindex="-1" role="dialog" aria-labelledby="headmistressModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="headmistressModalLabel">Add New Headmistress</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.add-team-headmistress') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control my-3"
                            placeholder="Name Of Headmistress">
                        <input type="hidden" name="type" value="headmistress">
                        <button class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Add New Stiching Modal -->
<div class="modal fade" id="add-stiching" tabindex="-1" role="dialog" aria-labelledby="stichingModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="stichingModalLabel">Add New Stiching</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.add-team-stiching') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control my-3"
                            placeholder="Name Of Stiching">
                        <button class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Add New Helper Modal -->
<div class="modal fade" id="add-helpers" tabindex="-1" role="dialog" aria-labelledby="helperModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="helperModalLabel">Add New Helper</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.add-team-helper') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control my-3"
                            placeholder="Name Of Helper">
                        <button class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Add New Gardener Modal -->
{{-- <div class="modal fade" id="add-gardener" tabindex="-1" role="dialog" aria-labelledby="gardenerModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="gardenerModalLabel">Add New Gardener</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.add-team-gardener') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control my-3"
                            placeholder="Name Of Gardener">
                        <button class="btn btn-primary btn-sm">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
</div>
