<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Romil Sewa Sanstha</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/slider/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/slider/css/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />

    <style>
        
    </style>
</head>

<body>
    <header class="continer-fluid ">
        {{-- <div class="header-top">
            <div class="container">
                <div class="row col-det">
                    <div class="col-lg-6 d-none d-lg-block">
                        <ul class="ulleft">
                            <li>
                                <i class="far fa-envelope"></i>
                                sales@smarteyeapps.com
                                <span>|</span>
                            </li>
                            <li>
                                <i class="fas fa-phone-volume"></i>
                                +876 987 666 5433
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 folouws">

                        <ul class="ulright">
                            <li> <small>Folow Us </small>:</li>
                            <li>
                                <i class="fab fa-facebook-square"></i>
                            </li>
                            <li>
                                <i class="fab fa-twitter-square"></i>
                            </li>
                            <li>
                                <i class="fab fa-instagram"></i>
                            </li>
                            <li>
                                <i class="fab fa-linkedin"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 d-none d-md-block col-md-6 btn-bhed">
                        <button class="btn btn-sm btn-success">Join Us</button>
                        <button class="btn btn-sm btn-default">Donate</button>
                    </div>
                </div>
            </div>
        </div> --}}
        <div id="menu-jk" class="header-bottom">
            <div class="container">
                <div class="row nav-row">
                    <div class="col-lg-3 col-md-12 logo">
                        <a href="/">
                            <?php $logo = DB::table('logos')->first(); ?>
                            @if (!empty($logo))
                                <img src="storage/{{ $logo->logo }}" style="width: 80px;" alt="">
                            @else
                                <img src="{{ asset('assets/images/logo.png') }}" style="width: 80px;" alt="">
                            @endif
                            <a data-toggle="collapse" data-target="#menu" href="#menu"><i
                                    class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
                        </a>
                    </div>
                    <div id="menu" class="mainnav col-lg-9 col-md-12 d-none d-lg-block nav-col">
                        <ul class="navbad">
                            <li class="hasDD">
                                <a class="nav-link" href="javascript::void(0)">About Us</a>
                                <ul class="submenu" style="background-color: #fff">
                                    <li class="submenu-nav"><a class="link" href="{{ route('about-us-vision') }}">Vision</a></li>
                                    <li class="submenu-nav"><a class="link" href="{{ route('board-of-directors') }}">Board of directors/advisors</a></li>
                                </ul>
                            </li>
                            <li class="hasDD"><a href="javascript::void(0)">The School </a>
                                <ul class="submenu" style="background-color: #fff">
                                    {{-- <li class="hasDD"><a href="#">Second Level </a>
                                        <ul>
                                            <li><a href="#">Illustration</a></li>
                                            <li class="hasDD"><a href="#">Third level </a>
                                                <ul>
                                                    <li><a href="#">jQuery</a></li>
                                                    <li><a href="#">Vanilla JavaScript</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> --}}
                                    <li class="submenu-nav"><a class="link" href="{{ route('school-history') }}">History</a></li>
                                    <li class="submenu-nav"><a class="link" href="{{ route('school') }}">School</a></li>
                                    <li class="submenu-nav"><a class="link" href="{{ route('school-teacher') }}">Teacher</a></li>
                                </ul>
                            </li>

                            <li class="hasDD">
                                <a class="nav-link" href="javascript::void(0)">Get Involved</a>
                                <ul class="submenu" style="background-color: #fff">
                                    <li class="submenu-nav"><a class="link" href="{{ route('sponsor-a-student') }}">Sponsor A Student</a></li>
                                    <li class="submenu-nav"><a class="link" href="{{ route('sponsor-a-class') }}">Sponsor A Class</a></li>
                                    <li class="submenu-nav"><a class="link" href="{{ route('gift-student-sponsorship') }}">Gift a Student
                                            Sponsorship</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact-us') }}">Contact US</a>
                            </li>
                            <li class="nav-item">
                                <a target="_blank" class="nav-link btn btn-sm btn-success"
                                    style="color: #fff !important;"
                                    {{-- href="https://pages.razorpay.com/pl_KPHF6fNpLP5CYh/view" --}}
                                    href="javascript:void(0)"
                                    data-toggle="modal" data-target="#rzp"
                                    >Donate Us</a>
                                    

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    @include('layouts.footer')
