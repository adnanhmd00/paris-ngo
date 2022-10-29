@extends('layouts.head')
@section('content')
<div class="container-fluid mt-5">
    <div class="text-center">
        <h3 style="color: #4479bd;" class="p-2">Contact Us</h3>
    </div>
    <div class="card rounded">
        <div class="row m-5 d-flex justify-content-center">
            <div class="col-md-4 text-center border p-1 small rounded shadow" style="color: #4479bd;">
                <div class="d-flex flex-column">
                    <i class="fa fa-envelope fa-2x p-2"></i> Email
                </div>
                
                <div class="mt-2">urvashi.sethisodhi@gmail.com</div>
            </div>
            <div class="col-md-3 m-1 text-center border p-1 small rounded " style="color: #4479bd;">
                <div class="d-flex flex-column">
                    <i class="fa fa-phone fa-2x p-2"></i> Phone 
                </div>
                
                <div class="mt-2">+91 9930203871</div>
            </div>
            <div class="col-md-4 text-center border p-1 small rounded shadow" style="color: #4479bd;">
                <div class="d-flex flex-column">
                    <i class="fa fa-envelope fa-2x p-2"></i> Address 
                </div>
                
                <div class="mt-2">C356,
                    Defence Colony
                    New Delhi, India</div>
            </div>
        </div>

        <form class="container border rounded shadow p-4 mb-3" action="">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" id="name" name="name" value="" placeholder="&nbsp;Name" class="form-control p-1 m-2" style="border-radius: 10px;" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" id="email" name="email" value="" placeholder="&nbsp;Email    " class="form-control p-1 m-2" style="border-radius: 10px;" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="phone" name="phone" value="" placeholder="&nbsp;Phone" class="form-control p-1 m-2" style="border-radius: 10px;" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <textarea name="message" class="form-control" id="" cols="30" rows="3" placeholder="Message"></textarea>
            </div>
            <div class="text-center m-2">
                <button id="donate" class="btn btn-success px-5" style="background: #4479bd; padding: 10px 20px; border-radius: 20px;">Send A Message</button>
            </div>
        </form>
    </div>
</div>
@endsection