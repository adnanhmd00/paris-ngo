@extends('layouts.head')
@section('content')
    <section class="navigation">
        <div class="nav-container">
            <div class="brand">
                <a href="#!"><img src="assets/images/logo.png" style="width: 80px" alt=""></a>
            </div>
            <nav>
                <div class="nav-mobile"><a id="navbar-toggle" href="#!"><span></span></a></div>
                <ul class="nav-list">
                    <li>
                        <a href="#!">Home</a>
                    </li>
                    <li>
                        <a href="#!">The School</a>
                        <ul class="navbar-dropdown">
                            <li>
                                <a href="#!">History</a>
                            </li>
                            <li>
                                <a href="#!">School</a>
                            </li>
                            <li>
                                <a href="#!">Teacher</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#!">Get Involved</a>
                        <ul class="navbar-dropdown">
                            <li>
                                <a href="#!">Sponsor A Student</a>
                            </li>
                            <li>
                                <a href="#!">Sponsor A Class</a>
                            </li>
                            <li>
                                <a href="#!">Gift A Student Sponsorship</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#!">Contact Us</a>
                    </li>

                    <button class="btn btn-primary">
                        Donate
                    </button>
                </ul>
            </nav>
        </div>
    </section>


    <div class="panels">
        <div class="panel panel1">
            <p>Hey</p>
            <p>Let's</p>
            <p>Go</p>
        </div>
        <div class="panel panel2">
            <p>Give</p>
            <p>Have</p>
            {{-- <p>Take</p> --}}
            <p>Receive</p>
        </div>
        <div class="panel panel3">
            <p>Experience</p>
            <p>Them</p>
            {{-- <p>It</p> --}}
            <p>Today</p>
        </div>
        <div class="panel panel4">
            <p>Give</p>
            <p>Keep</p>
            {{-- <p>All</p> --}}
            <p>You Can</p>
        </div>
        <div class="panel panel5">
            <p>Life</p>
            <p>Smiling</p>
            {{-- <p>In</p> --}}
            <p>Motion</p>
        </div>
    </div>

    <section class="container-fluid" id="about-us">
        <div class="container mt-5">
            <div class="text-center">
                <h3>About Us</h3>
                <div class="row">
                    <div class="col-md-7">
                        <div class="row text-left">
                            We aim to empower students to become life-long learners who strive for excellence and actively
                            participate in and contribute to their communities.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="assets/images/Romil1.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <header>
        <div class="owl-carousel owl-theme mt-3">
            <div class="item">
                <img src="https://cdn.pixabay.com/photo/2017/10/24/10/30/business-2884023_960_720.jpg"
                    alt="images not found">
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line"></div>
                            <h2>This is dummy text</h2>
                            <h1>The ngo text for test</h1>
                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia molestias similique sunt
                                soluta quam.</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="https://cdn.pixabay.com/photo/2017/10/24/10/30/business-2884023_960_720.jpg"
                    alt="images not found">
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line"></div>
                            <h2>This is dummy text</h2>
                            <h1>The ngo text for test</h1>
                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia molestias similique sunt
                                soluta quam.</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="https://cdn.pixabay.com/photo/2017/10/24/10/30/business-2884023_960_720.jpg"
                    alt="images not found">
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line"></div>
                            <h2>This is dummy text</h2>
                            <h1>The ngo text for test</h1>
                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia molestias similique sunt
                                soluta quam.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section class="container-fluid" id="mission-vision">
        <div class="container mt-5">
            <div class="text-center">
                <h3>Our Mission & Vision</h3>
                <div class="row">
                    <div class="col-md-7">
                        <h4 class="mt-3">Our Mission</h4>
                        <div class="row text-left">
                            We aim to empower students to become life-long learners who strive for excellence and actively
                            participate in and contribute to their communities.
                        </div>
                        <h4 class="mt-3">Our Vision</h4>
                        <div class="row text-left">
                            We aim to empower students to become life-long learners who strive for excellence and actively
                            participate in and contribute to their communities.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="assets/images/Romil1.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section style="background: #4470BD;" id="counter-stats" class="py-5 text-light wow fadeInRight" data-wow-duration="1.4s">
        <div style="" class="container">
            <div class="row">
                <div class="col-lg-4 stats">
                    <i class="fa fa-children" aria-hidden="true"></i>
                    <div class="counting" data-count="1812">0</div>
                    <h5>HAPPY CHILDREN</h5>
                </div>
                <div class="col-lg-4 stats">
                    <i class="fa fa-calendar-check" aria-hidden="true"></i>
                    <div class="counting" data-count="52">0</div>
                    <h5>EVENTS</h5>
                </div>
                <div class="col-lg-4 stats">
                    <i class="fa fa-money-bill-wave" aria-hidden="true"></i>
                    <div class="counting" data-count="48">0</div>
                    <h5>FUND RAISED</h5>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <section>

    </section>
@endsection
