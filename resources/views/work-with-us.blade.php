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
            <h3 style="color: #4479bd;" class="p-2">Work With Us</h3>
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
            <form action="{{ route('store.work-with-us') }}" method="post">
                @csrf
                <div class="container-fluid">
                    <div class="form-group mb-0 pb-0">
                        <div class="row mb-1">
                            <div class="col-md-6 mb-0 pb-0">
                                <strong class="small"><label for="name">Full Name</label></strong>
                                <input type="text" name="name" placeholder="Enter your full name" value="{{ old('name') }}" class="form-control form-control-sm">
                            </div>
                            <div class="col-md-6">
                                <strong class="small mb-0 pb-0"><label for="name">Mobile</label></strong>
                                <input type="text" name="phone" placeholder="Enter your mobile number" value="{{ old('phone') }}" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 pb-0">
                        <div class="row mb-1">
                            <div class="col-md-6">
                                <strong class="small mb-0 pb-0"><label for="name">Email</label></strong>
                                <input type="text" name="email" placeholder="Enter your email address" value="{{ old('email') }}" class="form-control form-control-sm">
                            </div>
                            <div class="col-md-6 mb-0 pb-0">
                                <strong class="small"><label for="name">Qualification</label></strong>
                                <input type="text" name="qualification" placeholder="Enter your qualification" value="{{ old('qualification') }}" class="form-control form-control-sm">
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
