@extends('layouts.header')
@section('content')
    <!-- ******************** Slider Starts Here ******************* -->
    <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
            @foreach ($sliders as $slider)
                <div class="slider-img">
                    <div class="item">
                        <div class="slider-img"><img src="storage/{{ $slider->image }}" alt="slider-images"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                    <div class="animated bounceInDown slider-captions">
                                        <h1 class="slider-title">{{ $slider->text }}</h1>
                                        <p class="slider-text hidden-xs">{{ $slider->sub_text }}</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!--  ************************* About Us Starts Here ************************** -->

    <div id="about" class="about-us container-fluid">
        <div class="container">

            <div class="row natur-row no-margin w-100">
                <div class="text-part col-md-6">
                    <h2>About Our Charity</h2>
                    <?php echo $about->about_us; ?>
                </div>
                <div class="image-part col-md-6">
                    <div class="about-quick-box row">
                        <div class="col-md-6">
                            <div class="about-qcard">
                                <i class="fas fa-user"></i>
                                <p>Becom a Volunteer</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-qcard ">
                                <i class="fas fa-search-dollar red"></i>
                                <p>Quick Fundrais</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-qcard ">
                                <i class="fas fa-donate yell"></i>
                                <p>Giv Donation</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-qcard ">
                                <i class="fas fa-hands-helping blu"></i>
                                <p>Help Someone</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- ################# Mission Vision Start Here #######################--->

    <section class="container-fluid mission-vision">
        <div class="container">
            <div class="row mission">
                <div class="col-md-6 mv-det">
                    <h1>Our Mission</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer neque libero, pulvinar et elementum
                        quis, facilisis eu ante. Mauris non placerat sapien. Pellentesque tempor arcu non odio scelerisque
                        ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam varius eros consequat
                        auctor gravida. Fusce tristique lacus at urna sollicitudin pulvinar. Suspendisse hendrerit ultrices
                        mauris.</p>
                </div>
                <div class="col-md-6 mv-img">
                    <img src="assets/images/misin.jpg" alt="">
                </div>
            </div>
            <div class="row vision">
                <div class="col-md-6 mv-img">
                    <img src="assets/images/vision.jpg" alt="">
                </div>
                <div class="col-md-6 mv-det">
                    <h1>Our Vision</h1>
                    <p>Ut ultricies lacus a rutrum mollis. Orci varius natoque penatibus et magnis dis parturient montes,
                        nascetur ridiculus mus. Sed porta dolor quis felis pulvinar dignissim. Etiam nisl ligula,
                        ullamcorper non metus vitae, maximus efficitur mi. Vivamus ut ex ullamcorper, scelerisque lacus nec,
                        commodo dui. Proin massa urna, volutpat vel augue eget, iaculis tristique dui.</p>
                </div>
            </div>
        </div>
    </section>



    <!-- ################# Events Start Here#######################--->
    {{-- <section class="events">
        <div class="container">
            <div class="session-title row">
                <h2>Popular Causes</h2>
                <p>We are a non-profital & Charity raising money for child education</p> 
            </div>
            <div class="event-ro row">
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/image_08.jpg" alt="">
                        <h4>Child Education in Africa</h4>
                        
                        <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                        <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>
                        <button class="btn btn-success btn-sm">Donate Now</button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/image_06.jpg" alt="">
                        <h4>Child Education in Africa</h4>
                        <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                        <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>
                        <button class="btn btn-success btn-sm">Donate Now</button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/image_04.jpg" alt="">
                        <h4>Child Education in Africa</h4>
                        <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                        <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>
                        <button class="btn btn-success btn-sm">Donate Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>    --}}




    <!-- ################# Charity Number Starts Here#######################--->


    <div class="doctor-message">
        <div class="inner-lay">
            <div class="container">
                <div class="row session-title">
                    <h2>Our Achievemtns in Numbers</h2>
                    <p>We can talk for a long time about advantages of our Dental clinic before other medical treatment
                        facilities.
                        But you can read the following facts in order to make sure of all pluses of our clinic:</p>
                </div>
                <div class="row">
                    <div class="col-sm-3 numb">
                        <h3>12+</h3>
                        <span>YEARS OF EXPEREANCE</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>1812+</h3>
                        <span>HAPPY CHILDRENS</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>52+</h3>
                        <span>EVENTS</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>48+</h3>
                        <span>FUNT RAISED</span>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!--################### Our Team Starts Here #######################--->
    {{-- <section class="our-team team-11">
            <div class="container">
                <div class="session-title row">
                      <h2>Meet our Team</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu. Donec hendrerit velit</p>
                </div>
                <div class="row team-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-usr">
                            <img src="assets/images/team/team-memb1.jpg" alt="">
                            <div class="det-o">
                                <h4>David Kanuel</h4>
                                <i>CEO </i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-usr">
                            <img src="assets/images/team/team-memb2.jpg" alt="">
                            <div class="det-o">
                                <h4>David Kanuel</h4>
                                <i>CFO</i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-usr">
                            <img src="assets/images/team/team-memb3.jpg" alt="">
                            <div class="det-o">
                                <h4>David Kanuel</h4>
                                <i>Team Leader</i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-usr">
                            <img src="assets/images/team/team-memb4.jpg" alt="">
                            <div class="det-o">
                                <h4>David Kanuel</h4>
                                <i>Project Manager</i>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>       --}}



    <!-- ################# Our Blog Starts Here#######################--->

@endsection
