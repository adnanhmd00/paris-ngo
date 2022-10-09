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

    <section id="about-us">
        <div class="container mt-5">
            <div class="text-center">
                <h3>About Us</h3>
                <div class="row">
                    <div class="col-md-8">
                        <div class="row text-left">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit enim corrupti ducimus pariatur
                            sint! Ad corrupti minima impedit excepturi rerum vel, ut ullam, consequuntur esse dicta ab
                            tempora, exercitationem sint!
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="assets/images/logo.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <header>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="https://cdn.pixabay.com/photo/2017/10/24/10/30/business-2884023_960_720.jpg"
                    alt="images not found">
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line"></div>
                            <h2>Teimagine Digital Experience with</h2>
                            <h1>Start-ups and solutions</h1>
                            <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="https://cdn.pixabay.com/photo/2016/03/09/09/22/workplace-1245776_960_720.jpg"
                    alt="images not found">
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line animated bounceInLeft"></div>
                            <h2>Reimagine Digital Experience with</h2>
                            <h1>Intelligent solutions</h1>
                            <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="https://cdn.pixabay.com/photo/2017/05/04/16/37/meeting-2284501_960_720.jpg"
                    alt="images not found">
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line animated bounceInLeft"></div>
                            <h2>Peimagine Digital Experience with</h2>
                            <h1>Intelligent Solutions</h1>
                            <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
