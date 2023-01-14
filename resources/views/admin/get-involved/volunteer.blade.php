@extends('admin.layouts.header')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Volunteer</h1>
        </div>
    </div>
    <div class="card p-3 m-3">
        <div class="table-responsive">
            <table class="table" id="dataTable">
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1 @endphp
                    @foreach ($volunteers as $volunteer)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $volunteer->first_name }} {{ $volunteer->second_name }}</td>
                            <td>{{ $volunteer->phone }}</td>
                            <td>{{ $volunteer->email }}</td>
                            <!-- <td><a href="{{ route('admin.edit-text', $volunteer->id) }}" class="btn btn-sm btn-primary"> <i class="fa fa-user"></i>&nbsp; Details</a></td> -->
                            <td><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal-{{ $volunteer->id }}"><i class="fa fa-user"></i>&nbsp;Details</button></td>
                        </tr>

                        
                        <!-- The Modal -->
                        <div class="modal fade" id="myModal-{{ $volunteer->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Details </h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                       <div class="row">
                                            <div class="col"><strong>Name</strong></div>
                                            <div class="col"><small>{{ $volunteer->first_name }} {{ $volunteer->second_name }}</small></div>
                                       </div>
                                       <div class="row">
                                            <div class="col"><strong>Days Available</strong></div>
                                            <div class="col"><small>{{ $volunteer->days_available }}</small></div>
                                       </div>
                                       <div class="row">
                                            <div class="col"><strong>Area Of interest</strong></div>
                                            <div class="col"><small>{{ $volunteer->area_of_interest }}</small></div>
                                       </div>
                                       <div class="row">
                                            <div class="col"><strong>Skills</strong></div>
                                            <div class="col"><small>{{ $volunteer->skills }}</small></div>
                                       </div>
                                       <div class="row">
                                            <div class="col"><strong>Mobile No</strong></div>
                                            <div class="col"><small>{{ $volunteer->phone }}</small></div>
                                       </div>
                                       <div class="row">
                                            <div class="col"><strong>Email Address</strong></div>
                                            <div class="col"><small>{{ $volunteer->email }}</small></div>
                                       </div>
                                       <div class="row">
                                            <div class="col"><strong>Mode Of Contact</strong></div>
                                            <div class="col"><small>{{ $volunteer->contact_by }}</small></div>
                                       </div>
                                       <div class="row">
                                            <div class="col"><strong>Student</strong></div>
                                            <div class="col"><small>{{ $volunteer->student }}</small></div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
