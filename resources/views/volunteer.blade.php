@extends('layouts.head')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569006288/BBBootstrap/choices.min.css?version=7.0.0">
<style>
    
#css-dropdown
{
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    width: 300px;
    height: 42px;
    margin: 100px auto 0 auto;
}


</style>
    <div class="container mt-5">
        <div class="text-center">
            <h3 style="color: #4479bd;" class="p-2">Volunteer</h3>
        </div>
        @if(Session::get('success'))
           <div class="alert alert-success dismiss">
               {{session::get('success')}}
           </div>
        @endif
        
        @if(Session::get('error'))
           <div class="alert alert-danger dismiss">
               {{session::get('error')}}
           </div>
        @endif
        <div class="card rounded p-4">
            <form action="{{ route('store-volunteer') }}" method="post">
                @csrf
                <div class="container-fluid">
                    <div class="form-group mb-0 pb-0">
                        <div class="row mb-1">
                            <div class="col-md-6 mb-0 pb-0">
                                <strong class="small"><label for="name">First Name</label></strong>
                                <input type="text" name="first_name" placeholder="Enter your first name" class="form-control form-control-sm">
                            </div>
                            <div class="col-md-6">
                                <strong class="small mb-0 pb-0"><label for="name">Second Name</label></strong>
                                <input type="text" name="second_name" placeholder="Enter your second name" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 pb-0">
                        <div class="row mb-1">
                            <div class="col-md-6 mb-0 pb-0">
                                <strong class="small"><label for="name">Days Available</label></strong>
                                <select name="days_available[]" id="choices-multiple-remove-button" placeholder="Days Available" class="form-control form-control-sm" multiple required>
                                    <option value="sunday">Sunday</option>
                                    <option value="monday">Monday</option>
                                    <option value="tuesday">Tuesday</option>
                                    <option value="wednesday">Wednesday</option>
                                    <option value="thursday">Thursday</option>
                                    <option value="friday">Friday</option>
                                    <option value="saturday">Saturday</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <strong class="small mb-0 pb-0"><label for="name">Skill set/ Area of interest</label></strong>
                                <input type="text" name="area_of_interest" placeholder="Enter your area of interest" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 pb-0">
                        <div class="row mb-1">
                            <div class="col-md-12 mb-0 pb-0">
                                <strong class="small mblabel for="name">Skills</label></strong>
                                    <select name="skills[]" id="choices-multiple-remove-button" class="form-control form-control-sm" placeholder="Select Your Skills Set" multiple>
                                        <option value="Art & Craft">Art & Craft</option>
                                        <option value="Sports">Sports</option>
                                        <option value="Music">Music</option>
                                        <option value="Fund Raising">Fund Raising</option>
                                        <option value="Organising Outings">Organising Outings</option>
                                        <option value="organizing Music/Math/Art/Science Club">Organizing Music/Math/Art/Science Club</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 pb-0">
                        <div class="row mb-1">
                            <div class="col-md-6 mb-0 pb-0">
                                <strong class="small"><label for="phone">Phone Number</label></strong>
                                <input type="text" name="phone" placeholder="Enter your phone number" class="form-control form-control-sm">
                            </div>
                            <div class="col-md-6">
                                <strong class="small mb-0 pb-0"><label for="email">Email Address</label></strong>
                                <input type="text" name="email" placeholder="Enter your email address" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 pb-0">
                        <div class="row mb-1">
                            <div class="col-md-6 mb-0 pb-0">
                                <strong class="small"><label for="contact_by">How would you like us to contact you?</label></strong>
                                <input type="text" name="contact_by" placeholder="Enter mode of contact" class="form-control form-control-sm">
                            </div>
                            <div class="col-md-6">
                                <strong class="small mb-0 pb-0"><label for="student">Are you a sutdent?</label></strong>
                                <select name="student" id="" class="form-control form-control-sm">
                                    <option value="">Select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button class="btn btn-primary btn-sm px-5">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"></script>
    <script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569006273/BBBootstrap/choices.min.js?version=7.0.0"></script>
    <script></script>
    <script>
         $(document).ready(function(){
            var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
            removeItemButton: true,
            // maxItemCount:3,
            searchResultLimit:5,
            renderChoiceLimit:5
            });

            });
    </script>
@endsection
