@extends('layouts.head')
@section('content')

<style>
    .panel1{ background-image:url({{ 'storage/'.$cover_image[0]->image }});}
    .panel2{ background-image:url({{ 'storage/'.$cover_image[1]->image }});}
    .panel3{ background-image:url({{ 'storage/'.$cover_image[2]->image }});}
    .panel4{ background-image:url({{ 'storage/'.$cover_image[3]->image }});}
    .panel5{ background-image:url({{ 'storage/'.$cover_image[4]->image }});}
</style>
    <div class="d-none d-lg-block">
        <div class="panels">
            <div class="panel panel1">
                <p></p>
                {{-- <p>Let's</p> --}}  
                <p></p>
            </div>
            <div class="panel panel2">
                <p></p>
                {{-- <p>Have</p> --}}
                {{-- <p>Take</p> --}}
                <p></p>
            </div>
            <div class="panel panel3">
                <p></p>
                {{-- <p>Them</p> --}}
                {{-- <p>It</p> --}}
                <p></p>
            </div>
            <div class="panel panel4">
                <p></p>
                {{-- <p>Keep</p> --}}
                {{-- <p>All</p> --}}
                <p></p>
            </div>
            <div class="panel panel5">
                <p></p>
                {{-- <p>Smiling</p> --}}
                {{-- <p>In</p> --}}
                <p></p>
            </div>
        </div>
    </div>

    <div class="d-sm-block d-lg-none">
        <div class="container">
            <img src="{{ asset('assets/images/curriculum-7.jpg') }}" alt="Snow" style="width:100%;">
            <div class="centered text-center">
                {{-- <h3 class="font-weight-bolder">Lets <br> Have <br> Them <br> Keep <br> Educating</h3> --}}
            </div>
        </div>
    </div>

    {{-- <section class="container-fluid animation-element slide-right" id="about-us">
        <div class="text-center">
            <div class="row mt-3 h3">
                <div class="col-md-12 text-center">
                    We aim to empower students to become life- long learners who strive for excellence and actively
                    participate in and contribute to their communities.Our founders have dedicated themselves to youth service by establishing this institution. We at Romil Sewa Sanstha strongly agree with Victor Hugo’s quote, “He, who opens a school door, closes a prison”.
                </div>
            </div>
        </div>
    </section> --}}

    <section id="vision" class="container-fluid">
        <div class="d-none d-lg-block">
            <div class="container">
                <div class="starter-template">
                    <div class="row">
                        <div class="col-sm-4">
                            <section class="hover-div shadow"> 
                                <i class="fa fa-lightbulb fa-2x mb-3 p-3" style="color: #4479bd; font-size: 50px;"></i>
                                <div class="hover-div_inner">
                                    {{-- <h3><a href="#">Windows</a></h3> --}}
                                    <div class="text-center"> <?php echo  $box_text[0]->text ?></p>
                                    {{-- <div class="hover-div-lower">
                                    </div> --}}
                                </div>
                            </section>
                        </div>
                        <div class="col-sm-4">
                            <section class="hover-div shadow">
                                <i class="fa fa-eye fa-2x mb-3 p-3" style="color: #4479bd; font-size: 50px;"></i>
                                <div class="hover-div_inner">
                                    {{-- <h3><a href="#">Mac</a></h3> --}}
                                    <div class="text-center"> <?php echo  $box_text[1]->text ?></p>
                                        {{-- <div class="hover-div-lower">
                                        <div class="col-xs-6 text-left"><span class="lower-text">Latest</span>High Sierra</div>
                                        <div class="col-xs-6 text-right"><span class="lower-text">Old</span>OS X 10.0</div>
                                    </div> --}}
                                </div>
                            </section>
                        </div>
                        <div class="col-sm-4">
                            <section class="hover-div shadow">
                                <i class="fa fa-flag fa-light fa-2x mb-3 p-3" style="color: #4479bd; font-size: 50px;"></i>
                                <div class="hover-div_inner">
                                    {{-- <h3><a href="#">Mac</a></h3> --}}
                                    <div class="text-center"> <?php echo  $box_text[2]->text ?></p>
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
        </div>
        <div class="d-sm-block d-lg-none">
            <div class="container-fluid">
                <div class="starter-template">
                    <div class="row">
                        <div class="col-sm-4">
                            <section class="hover-div-sm shadow"> 
                                {{-- <i class="fa fa-lightbulb fa-2x mb-3 p-3" style="color: #4479bd; font-size: 50px;"></i> --}}
                                <div class="hover-div_inner">
                                    {{-- <h3><a href="#">Windows</a></h3> --}}
                                    <div class="text-center"> <?php echo  $box_text[0]->text ?></p>
                                        {{-- <div class="hover-div-lower">
                                    </div> --}}
                                </div>
                            </section>
                        </div>
                        <div class="col-sm-4">
                            <section class="hover-div-sm shadow">
                                {{-- <i class="fa fa-eye fa-2x mb-3 p-3" style="color: #4479bd; font-size: 50px;"></i> --}}
                                <div class="hover-div_inner">
                                    {{-- <h3><a href="#">Mac</a></h3> --}}
                                    <div class="text-center"> <?php echo  $box_text[1]->text ?></p>
                                        {{-- <div class="hover-div-lower">
                                        <div class="col-xs-6 text-left"><span class="lower-text">Latest</span>High Sierra</div>
                                        <div class="col-xs-6 text-right"><span class="lower-text">Old</span>OS X 10.0</div>
                                    </div> --}}
                                </div>
                            </section>
                        </div>
                        <div class="col-sm-4">
                            <section class="hover-div-sm shadow">
                                {{-- <i class="fa fa-flag fa-light fa-2x mb-3 p-3" style="color: #4479bd; font-size: 50px;"></i> --}}
                                <div class="hover-div_inner">
                                    {{-- <h3><a href="#">Mac</a></h3> --}}
                                    <div class="text-center"> <?php echo  $box_text[2]->text ?></p>
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
        </div>
    </section>

    <header>
        <div class="owl-carousel owl-theme mt-3">
            @foreach ($sliders as $slider)
            <div class="item">
                <img src="{{ 'storage/'.$slider->image }}"
                    alt="images not found">
                {{-- <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line"></div>
                            <h2>Education for a change</h2>
                            <h1>Revolution in Education</h1>
                            <h4>We are making a change</h4>
                        </div>
                    </div>
                </div> --}}
            </div>
            @endforeach
        </div>
    </header>

    {{-- <section id="notes" class="text-center">
        <div class="wrapper clearfix">
            <aside class="note-wrap note-yellow">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, et!</p>
            </aside>
            <aside class="note-wrap note-blue">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, et!</p>
            </aside>
            <aside class="note-wrap note-pink">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, et!</p>
            </aside>
            <aside class="note-wrap note-green">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, et!</p>
            </aside>
        </div>
    </section> --}}

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
