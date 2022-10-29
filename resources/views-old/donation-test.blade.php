<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel - Razorpay Payment Gateway Integration</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/slider/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/slider/css/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-3 col-md-offset-6">

                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Error!</strong> {{ $message }}
                            </div>
                        @endif

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade {{ Session::has('success') ? 'show' : 'in' }}"
                                role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Success!</strong> {{ $message }}
                            </div>
                        @endif

                        <div class="card card-default">
                            <div class="card-header">
                                Laravel - Razorpay Payment Gateway Integration
                            </div>

                            <a target="_blank" class="nav-link btn btn-sm btn-success" style="color: #fff !important;"
                                {{-- href="https://pages.razorpay.com/pl_KPHF6fNpLP5CYh/view" --}} href="javascript:void(0)" data-toggle="modal"
                                data-target="#rzp">Donate Us</a>

                            <div class="modal" id="rzp">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            {{-- <iframe id="videoContainer" width="800" height="685"
                                                src="https://pages.razorpay.com/pl_KPHF6fNpLP5CYh/view" frameborder="0"
                                                allowfullscreen></iframe> --}}
                                            <div class="text-center">
                                                <img src="{{ asset('assets/images/logo.png') }}" style="width: 100px;"
                                                    class="mb-5" alt="">
                                            </div>
                                            {{-- <form action="/pay/coffee"> --}}
                                                <input type="hidden" name="key" id="key" value="{{ env('RAZORPAY_KEY') }}">
                                                <input type="hidden" name="key" id="key" value="{{ csrf_token() }}">
                                            <input type="text" id="name" name="name" value="Adnan"
                                                placeholder="&nbsp;Name" class="form-control"
                                                style="border-radius: 50px;">
                                            <input type="text" id="email" name="email"
                                                value="adnanhmd000@gmail.com" placeholder="&nbsp;Email"
                                                class="form-control" style="border-radius: 50px;">
                                            <input type="text" id="phone" name="phone" value="7701853375"
                                                placeholder="&nbsp;Mobile No." class="form-control"
                                                style="border-radius: 50px;">
                                            <input type="text" id="amount" name="amount" value="100"
                                                placeholder="&nbsp;Amount" class=" form-control"
                                                style="border-radius: 50px;">
                                            <div class="text-center"><button id="donate" class="btn btn-success px-5"
                                                    style="border-radius: 50px;">Donate</button></div>
                                            {{-- </form> --}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>



    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js') }}"></script>
    <script src="{{ asset('assets/plugins/slider/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/razorpay.js') }}"></script>
    <script src="{{ asset('https://checkout.razorpay.com/v1/checkout.js') }}"></script>
</body>

</html>
