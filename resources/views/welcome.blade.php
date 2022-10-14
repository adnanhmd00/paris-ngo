@extends('layouts.head')
@section('content')
    <div class="d-none d-lg-block">
        <div class="panels">
            <div class="panel panel1">
                <p></p>
                <p>Let's</p>
                <p></p>
            </div>
            <div class="panel panel2">
                <p></p>
                <p>Have</p>
                {{-- <p>Take</p> --}}
                <p></p>
            </div>
            <div class="panel panel3">
                <p></p>
                <p>Them</p>
                {{-- <p>It</p> --}}
                <p></p>
            </div>
            <div class="panel panel4">
                <p></p>
                <p>Keep</p>
                {{-- <p>All</p> --}}
                <p></p>
            </div>
            <div class="panel panel5">
                <p></p>
                <p>Smiling</p>
                {{-- <p>In</p> --}}
                <p></p>
            </div>
        </div>
    </div>

    <div class="d-sm-block d-lg-none">
        <div class="container">
            <img src="{{ asset('assets/images/panel/child-img-1.webp') }}" alt="Snow" style="width:100%;">
            <div class="centered text-center">
                <h3 class="font-weight-bolder">Lets <br> Have <br> Them <br> Keep <br> Smiling</h3>
            </div>
        </div>
    </div>

    <section class="container-fluid animation-element slide-right" id="about-us">
        <div class="text-center">
            <div class="row mt-3 h3">
                <div class="col-md-12 text-center">
                    We aim to empower students to become life- long learners who strive for excellence and actively
                    participate in and contribute to their communities
                </div>
            </div>
        </div>
    </section>

    <section id="vision" class="container-fluid" style="background: #4479bd;">
        <div class="container">
            <div class="starter-template">
                <div class="row">
                    <div class="col-sm-4">
                        <section class="hover-div"> 
                            <i class="fa fa-lightbulb fa-2x mb-3 p-3" style="color: #4479bd; font-size: 50px;"></i>
                            <div class="hover-div_inner">
                                {{-- <h3><a href="#">Windows</a></h3> --}}
                                <p class="text-center">We aim to empower  students to become life-  long learners who strive  for excellence and  actively participate in  and contribute to their  communities</p>
                                {{-- <div class="hover-div-lower">
                                </div> --}}
                            </div>
                        </section>
                    </div>
                    <div class="col-sm-4">
                        <section class="hover-div"><i class="fa fa-eye fa-2x mb-3 p-3" style="color: #4479bd; font-size: 50px;"></i>
                            <div class="hover-div_inner">
                                {{-- <h3><a href="#">Mac</a></h3> --}}
                                <p class="text-center">We aim to empower students to become life- long learners who strive for excellence and actively participate in and contribute to their communities.</p>
                                {{-- <div class="hover-div-lower">
                                    <div class="col-xs-6 text-left"><span class="lower-text">Latest</span>High Sierra</div>
                                    <div class="col-xs-6 text-right"><span class="lower-text">Old</span>OS X 10.0</div>
                                </div> --}}
                            </div>
                        </section>
                    </div>
                    <div class="col-sm-4">
                        <section class="hover-div"><i class="fa fa-flag fa-light fa-2x mb-3 p-3" style="color: #4479bd; font-size: 50px;"></i>
                            <div class="hover-div_inner">
                                {{-- <h3><a href="#">Mac</a></h3> --}}
                                <p class="text-center">We aim to empower students to become life- long learners who strive for excellence and actively participate in and contribute to their communities.</p>
                                {{-- <div class="hover-div-lower">
                                    <div class="col-xs-6 text-left"><span class="lower-text">Latest</span>High Sierra</div>
                                    <div class="col-xs-6 text-right"><span class="lower-text">Old</span>OS X 10.0</div>
                                </div> --}}
                            </div>
                        </section>
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


    {{-- <section class="container-fluid" id="mission-vision">
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
    </section> --}}


    {{-- <section style="background: #4470BD;" id="counter-stats" class="py-5 text-light wow fadeInRight"
        data-wow-duration="1.4s">
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
        </div>
    </section> --}}

    <section>

    </section>
@endsection
