{{-- white design from here --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Englebert' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/scroll-animation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/section-image-gallery.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>
    <title>Romil Seva Sanstha</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto');
        /* @import url('https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles&display=swap'); */
        body {
            font-size: 20px;
            overflow-x: hidden !important;
            margin: 0;
            padding: 0;
            /* font-family: 'Roboto', sans-serif; */
            font-family: 'Fuzzy Bubbles', 'Open Sans' cursive;

        }
        
.choices__list--multiple .choices__item {
    display: inline-block;
    vertical-align: middle;
    border-radius: 20px;
    padding: 4px 10px;
    font-size: 12px;
    font-weight: 500;
    margin-right: 3.75px;
    margin-bottom: 3.75px;
    background-color: #4479bd !important;
    border: 1px solid #4479bd !important;
    color: #fff;
    word-break: break-all;
}


        /* mobile image cover */

        /* Centered text */
        .centered {
            position: absolute;
            top: 30%;
            /* margin: 0 auto; */
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: 'Amatic SC', cursive;
            color: #fff;
            font-weight: 900;
        }

        /* mobiel image cover */
        .navigation {
            height: 80px;
            padding: 5px;
            /* background: linear-gradient(45deg, #4199fe, #74b4fe); */
            /* background: #4479BD; */
            background: #fff;
        }

        .brand {
            position: absolute;
            padding-left: 20px;
            float: left;
            line-height: 55px;
            text-transform: uppercase;
            font-size: 1.4em;
        }

        .brand a,
        .brand a:visited {
            color: #ffffff;
            text-decoration: none;
        }

        .nav-container {
            max-width: 1300px;
            margin: 0 auto;
        }

        nav {
            position: sticky;
            float: right;
            margin-top: 5px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            float: left;
            margin: 0px 10px;
            position: relative;
        }

        nav ul li a,
        nav ul li a:visited {
            /* display: block;
            padding: 0 20px;
            line-height: 55px;
            color: #fff;
            background: #262626;
            text-decoration: none; */

            /* for blue background header */
            /* display: block;
            padding: 0 20px;
            line-height: 55px;
            color: #4479bd;
            border: 1px solid #4479bd;
            background: #262626;
            text-decoration: none;
            margin: 0px 10px;
            border-radius: 20px; */
            /* for blue background li */
            /* for white background li */
            display: block;
            padding: 0 20px;
            line-height: 55px;
            color: #4479bd;
            border: 1px solid #4479bd;
            background: #fff;
            text-decoration: none;
            /* margin: 2px 10px; */
            margin: 0 auto;
            border-radius: 20px;
            width: 100%;
            position: relative
                /* for white background li */

        }

        nav ul li ul {
            min-width: 300px;
        }

        nav ul li a {
            background: #fff;
            color: #4479bd;
            text-decoration: none;
        }

        a:link {
            text-decoration: none;
        }

        a:visited {
            text-decoration: none;
        }

        nav ul li a:hover,
        nav ul li a:visited:hover {
            background: #4479bd;
            color: #ffffff;
        }

        .navbar-dropdown li a {
            /* background: #2581DC; */
            background: #fff;
        }

        nav ul li a:not(:only-child):after,
        nav ul li a:visited:not(:only-child):after {
            padding-left: 4px;
            content: ' \025BE';
        }

        nav ul li ul li {
            margin: 0 auto;
            padding: 5px;
            margin-top: 5px;
            min-width: 100%;
        }

        nav ul li ul li a {
            padding: 15px;
            line-height: 20px;
        }

        .navbar-dropdown {
            position: absolute;
            display: none;
            z-index: 99;
            background: #fff;
            box-shadow: 0 0 35px 0 rgba(0, 0, 0, 0.25);
            width: 100%;
            border-radius: 20px;
            margin: 0 auto;
        }

        /* Mobile navigation */
        .nav-mobile {
            display: none;
            position: absolute;
            top: 0;
            right: 0;
            background: transparent;
            height: 55px;
            width: 70px;
        }

        @media only screen and (max-width: 800px) {
            .nav-mobile {
                display: block;
            }

            nav {
                width: 100%;
                padding: 55px 0 15px;
            }

            nav ul {
                display: none;
            }

            nav ul li {
                float: none;
            }

            nav ul li a {
                margin-top: 20px;
                padding: 15px;
                line-height: 20px;
                background: #262626;
            }

            nav ul li ul li a {
                padding-left: 30px;
            }

            .navbar-dropdown {
                position: static;
            }

            @media screen and (min-width:800px) {
                .nav-list {
                    display: block !important;
                }
            }

            #navbar-toggle {
                position: absolute;
                left: 18px;
                top: 15px;
                cursor: pointer;
                padding: 10px 35px 16px 0px;
            }

            #navbar-toggle span,
            #navbar-toggle span:before,
            #navbar-toggle span:after {
                cursor: pointer;
                border-radius: 1px;
                height: 3px;
                width: 30px;
                background: #4479bd;
                position: absolute;
                display: block;
                content: '';
                transition: all 300ms ease-in-out;
            }

            #navbar-toggle span:before {
                top: -10px;
            }

            #navbar-toggle span:after {
                bottom: -10px;
            }

            #navbar-toggle.active span {
                background-color: transparent;
            }

            #navbar-toggle.active span:before,
            #navbar-toggle.active span:after {
                top: 0;
            }

            #navbar-toggle.active span:before {
                transform: rotate(45deg);
            }

            #navbar-toggle.active span:after {
                transform: rotate(-45deg);
            }
        }



        /* counter start */

        section#counter-stats {
            display: flex;
            justify-content: center;
            margin-top: 100px;
        }

        .stats {
            text-align: center;
            font-size: 35px;
            font-weight: 700;
            font-family: 'Montserrat', sans-serif;
        }

        .stats .fa {
            color: #fff;
            font-size: 60px;
        }

        /* counter end */



        /* Footer Accordion start */
        .accordion-container {
            position: relative;
            max-width: 500px;
            height: auto;
            margin: 10px auto;
        }

        .accordion-container>h2 {
            text-align: center;
            color: #fff;
            padding-bottom: 5px;
            margin-bottom: 20px;
            padding-bottom: 15px;
            /* border-bottom: 1px solid #ddd; */
        }

        .set {
            position: relative;
            width: 100%;
            height: auto;
            color: #fff;
            /* background-color: #f5f5f5; */
        }

        .set>a {
            display: block;
            padding: 10px 15px;
            text-decoration: none;
            color: #fff;
            /* font-weight: 600; */
            /* border-bottom: 1px solid #ddd; */
            -webkit-transition: all 0.2s linear;
            -moz-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }

        .set>a i {
            float: right;
            margin-top: 2px;
        }

        .set>a.active {
            background-color: #4479BD;
            border-radius: 50px;
            color: #fff;
        }


        .content {
            color: #fff !important;
            /* background-color: #fff; */
            padding: 2px;
            border-bottom: 1px solid #ddd;
            display: none;
        }

        .content a {
            color: #4479BD;
            padding: 10px 15px;
            margin: 0;
            color: #333;
        }

        .content div:hover {
            color: #4479BD;
            padding: 10px;
            /* background-color: #4479BD; */
            background: #fff;
            border-radius: 50px;
            margin: 0;
            /* color: #fff; */
            color: #4479bd;
        }

        .content div {
            color: #4479BD;
            padding: 10px;
            /* background-color: #4479BD; */
            background: #fff;
            border-radius: 50px;
            margin: 2px;
            /* color: #fff; */
        }

        /* Footer Acccordion end */

        /* Cards Effect */

        .starter-template {
            padding: 80px 15px;
            text-align: center;
        }

        span.lower-text {
            color: #ffc300;
            font-size: 25px;
            display: block;
        }

        .hover-div {
            padding: 20px 20px;
            text-align: center;
            min-height: 350px;
            border-radius: 20px;
        }

        .hover-div {
            border-top: 1px solid #f8f8f8;
            background: #f8f8f8;
            box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.2);
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
            margin: 10px 0px;
        }

        .hover-div:hover {
            -webkit-transform: translateY(-20px);
            -ms-transform: translateY(-20px);
            transform: translateY(-20px);
            box-shadow: 0 22px 43px rgba(0, 0, 0, 0.32);
            cursor: pointer;
            border-radius: 5px;
        }

        .hover-div-sm {
            padding: 20px 20px;
            text-align: center;
            min-height: 150px;
            border-radius: 20px;
        }

        .hover-div-sm {
            border-top: 1px solid #f8f8f8;
            background: #f8f8f8;
            box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.2);
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
            margin: 10px 0px;
        }

        .hover-div-sm:hover {
            -webkit-transform: translateY(-20px);
            -ms-transform: translateY(-20px);
            transform: translateY(-20px);
            box-shadow: 0 22px 43px rgba(0, 0, 0, 0.32);
            cursor: pointer;
            border-radius: 5px;
        }

        /* Cards Effect */


        /* .myAlert-top {
            position: fixed;
            top: 50px;
            right: 2%;
            z-index: 9999;
            width: 25%;
        }

        @media (max-width: 768px) {
            .myAlert-top {
                position: fixed;
                top: 5px;
                left: 2%;
                z-index: 9999;
                width: 96%;
            }
        } */
    </style>
</head>

<body>
    <section class="navigation">
        <div class="nav-container">
            <div class="brand">
                <a href="/"><img src="{{ asset('assets/images/logo.png') }}" style="width: 80px" alt=""></a>
            </div>
            <nav style="z-index: 99">
                <div class="nav-mobile"><a id="navbar-toggle" href="javascript:void(0)"><span></span></a></div>
                <ul class="nav-list mt-1">
                    <li>
                        <a href="/">Home</a>
                    </li>

                    <li>
                        <a href="#">About Us</a>
                        <ul class="navbar-dropdown">
                            {{-- <ul class="navbar-dropdown" style="width: 230px; border-radius: 20px;"> --}}
                            <li>
                                <a href="{{ route('about-us-vision') }}">Vision</a>
                            </li>
                            <li>
                                <a href="{{ route('about-us-story') }}">Our Story</a>
                            </li>
                            <li>
                                <a href="{{ route('about-us-team') }}">Our Team</a>
                            </li>
                            <li>
                                <a href="{{ route('about-us-testimonials') }}">Testimonials</a>
                            </li>
                            {{-- <li>
                                <a href="{{ route('gallery') }}">Gallery</a>
                            </li> --}}
                        </ul>
                    </li>

                    <li>
                        <a href="#">Our Work</a>
                        <ul class="navbar-dropdown">
                            {{-- <ul class="navbar-dropdown" style="width: 230px; border-radius: 20px;"> --}}
                            <li>
                                <a href="{{ route('our-work-school') }}">Monsoon Kids School</a>
                            </li>
                            <li>
                                <a href="{{ route('our-work-sewing') }}">Sewing Classes</a>
                            </li>
                            <li>
                                <a href="{{ route('our-work-alumni') }}">Alumni Program</a>
                            </li>
                            <li>
                                <a href="{{ route('our-work-community') }}">Mahila Mandal</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Our Impact</a>
                        <ul class="navbar-dropdown">
                            {{-- <ul class="navbar-dropdown" style="width: 220px;border-radius: 20px;"> --}}
                                <li>
                                    <a href="{{ route('our-impact-students') }}">Students</a>
                                </li>
                                <li>
                                    <a href="{{ route('our-impact-alumni') }}">Alumni</a>
                                </li>
                                <li>
                                    <a href="{{ route('our-impact-community') }}">Community</a>
                                </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Get Involved</a>
                        <ul class="navbar-dropdown">
                            {{-- <ul class="navbar-dropdown" style="width: 220px;border-radius: 20px;"> --}}
                                <li>
                                    <a href="" data-toggle="modal"
                                    data-target="#donate-box">Donate</a>
                                </li>
                                <li>
                                    <a href="{{ route('volunteer') }}">Volunteer</a>
                                </li>
                                <li>
                                    <a href="{{ route('work-with-us') }}">Work With Us</a>
                                </li>
                        </ul>
                    </li>
                    {{-- <li>
                        <a href="{{ route('contact-us') }}">Contact Us</a>
                    </li> --}}


                    {{-- <li>
                        <a style="background: #4479bd; color: #fff;" href="https://rzp.io/l/indiandonations" data-toggle="modal"
                        data-target="#rzp">Donate</a>
                    </li> --}}
                    
                    <li>
                        <a style="background: #4479bd; color: #fff;" href="https://rzp.io/l/indiandonations" data-toggle="modal"
                        data-target="#donate-page-box">Donate</a>
                    </li>
                    

                </ul>
            </nav>
        </div>
    </section>


    <div class="modal fade" id="donate-box">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <ul style="list-style-type: none; margin: 0 auto;" class=" mr-4">
                        <li class="my-3">
                            <!--<a style="background: #4479bd; color: #fff; border-radius: 20px; padding: 10px;"-->
                            <!--    class="btn btn-block" href="javascript:void(0)" data-toggle="modal"-->
                            <!--    data-target="#sas">Sponsor A Student</a>-->
                            <a style="background: #4479bd; color: #fff; border-radius: 20px; padding: 10px;" href="https://rzp.io/l/SponsorAStudentAbroadDOnations" data-toggle="modal"
                        data-target="#donate-page-box-1">Sponsor A Student</a>
                        </li>
                        <li class="my-3">
                            <!--<a style="background: #4479bd; color: #fff; border-radius: 20px; padding: 10px;"-->
                            <!--    class="btn btn-block" href="javascript:void(0)">Sponsor A Class</a>-->
                            <a style="background: #4479bd; color: #fff; border-radius: 20px; padding: 10px;" href="https://rzp.io/l/SponsorAClassAbroadDonations" data-toggle="modal"
                        data-target="#donate-page-box-2">Sponsor A Class</a>
                        </li>
                        <li class="my-3">
                            <!--<a style="background: #4479bd; color: #fff; border-radius: 20px; padding: 10px;"-->
                            <!--    class="btn btn-block" href="javascript:void(0)" data-toggle="modal"-->
                            <!--    data-target="#rzp">Donate Any Amount</a>-->
                            <a style="background: #4479bd; color: #fff; border-radius: 20px; padding: 10px;" href="https://rzp.io/l/AnyAmtAbroadDonation" data-toggle="modal"
                        data-target="#donate-page-box-3">Donate Any Amount</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="donate-page-box">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <embed src="https://rzp.io/l/AnyAmtAbroadDonation" type="text/html" width="100%" height="500px">
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="donate-page-box-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <embed src="https://rzp.io/l/SponsorAStudentAbroadDOnations" type="text/html" width="100%" height="500px">
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="donate-page-box-2">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <embed src="https://rzp.io/l/SponsorAClassAbroadDonations" type="text/html" width="100%" height="500px">
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="donate-page-box-3">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <embed src="https://rzp.io/l/AnyAmtAbroadDonation" type="text/html" width="100%" height="500px">
                </div>

            </div>
        </div>
    </div>
    @yield('content')
    @include('layouts.foot')
</body>