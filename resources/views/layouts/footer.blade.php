     <footer class="footer">
         <div class="container">
             <div class="row">
                 <div class="col-md-4 col-sm-12">
                     <h2>About Us</h2>
                     <p>
                         We aim to empower students to become life-long learners who strive for excellence and actively
                         participate in and contribute to their communities.
                     </p>
                     <p></p>
                 </div>
                 <div class="col-md-4 col-sm-12">
                     <h2>Useful Links</h2>
                     <div class="accordion-container">
                         <div class="set">
                             <a href="javascript::void()">
                                 About Us
                                 <i class="fa fa-plus"></i>
                             </a>
                             <div class="content">
                                 <div class="px-4">
                                    <a href="">Vision</a>
                                 </div>
                                 <div class="px-4">
                                    <a href="">Board of Directors</a>
                                </div>
                             </div>
                         </div>
                         <div class="set">
                             <a href="javascript::void()">
                                 School
                                 <i class="fa fa-plus"></i>
                             </a>
                             <div class="content">
                                <div class="px-4">
                                    <a href="">History</a>
                                 </div>
                                 <div class="px-4">
                                    <a href="">Sponsor a class</a>
                                </div>
                                <div class="px-4">
                                   <a href="">Teacher</a>
                               </div>
                             </div>
                         </div>
                         <div class="set">
                             <a href="javascript::void()">
                                 Get Involved
                                 <i class="fa fa-plus"></i>
                             </a>
                             <div class="content">
                                <div class="px-4">
                                    <a href="">Sponsor a student</a>
                                 </div>
                                 <div class="px-4">
                                    <a href="">Sponsor a class</a>
                                </div>
                                <div class="px-4">
                                   <a href="">Gift a student sponsorship</a>
                               </div>
                             </div>
                         </div>
                         <div class="set">
                             <a href="{{ route('contact-us') }}">
                                 Contact Us
                                 {{-- <i class="fa fa-plus"></i> --}}
                             </a>
                             {{-- <div class="content">
                                 <p> Donec tincidunt consectetur orci at dignissim. Proin auctor aliquam justo, vitae
                                     luctus odio pretium scelerisque. </p>
                             </div> --}}
                         </div>
                     </div>
                     {{-- <ul class="list-unstyled link-list"> --}}
                     {{-- <li><a ui-sref="about" href="#about">About us</a><i class="fa fa-angle-right"></i></li> --}}
                     {{-- <li><a ui-sref="about" href="#gallery">Gallery</a><i class="fa fa-angle-right"></i></li> --}}
                     {{-- <li><a ui-sref="about" href="#blog">Blog</a><i class="fa fa-angle-right"></i></li> --}}
                     {{-- <li><a ui-sref="contact" href="#contact">Contact us</a><i class="fa fa-angle-right"></i></li> --}}
                     {{-- </ul> --}}
                 </div>
                 <div class="col-md-4 col-sm-12 map-img">
                     <h2>Contact Us</h2>
                     <address class="md-margin-bottom-40">
                         C356 <br>
                         Defence Colony <br>
                         New Delhi, India <br>
                         Phone: +91 9930203871 <br>
                         Email: <a href="mailto:urvashi.sethisodhi@gmail.com"
                             class="">urvashi.sethisodhi@gmail.com</a><br>
                         Web: <a href="smart-eye.html" class="">www.romilsewasanstha.org</a>
                     </address>
                 </div>
             </div>
         </div>
     </footer>
     <div class="copy">
         <div class="container mb-3">
             <!-- <a href="https://www.smarteyeapps.com/">2015 &copy; All Rights Reserved | Designed and Developed by Smarteyeapps</a> -->
             <span>
                 <a><i class="fab fa-github"></i></a>
                 <a><i class="fab fa-google-plus-g"></i></a>
                 <a><i class="fab fa-pinterest-p"></i></a>
                 <a><i class="fab fa-twitter"></i></a>
                 <a><i class="fab fa-facebook-f"></i></a>
             </span>
         </div>
     </div>
     </body>

     <div class="modal" id="rzp">
        <div class="modal-dialog modal-dialog-centered">
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
                        <input type="hidden" name="key" id="token" value="{{ csrf_token() }}">
                    <input type="text" id="name" name="name" value=""
                        placeholder="&nbsp;Name" class="form-control"
                        style="border-radius: 50px;">
                    <input type="text" id="email" name="email"
                        value="" placeholder="&nbsp;Email"
                        class="form-control" style="border-radius: 50px;">
                    <input type="text" id="phone" name="phone" value=""
                        placeholder="&nbsp;Mobile No." class="form-control"
                        style="border-radius: 50px;">
                    <input type="text" id="amount" name="amount" value=""
                        placeholder="&nbsp;Amount" class=" form-control"
                        style="border-radius: 50px;">
                    <div class="text-center"><button id="donate" class="btn btn-success px-5"
                            style="border-radius: 50px;">Donate</button></div>
                    {{-- </form> --}}
                </div>

            </div>
        </div>
    </div>



     <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
     <script src="{{ asset('assets/js/popper.min.js') }}"></script>
     <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js') }}"></script>
     <script src="{{ asset('assets/plugins/slider/js/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('assets/js/script.js') }}"></script>
     <script src="{{ asset('https://checkout.razorpay.com/v1/checkout.js') }}"></script>

     <script src="{{ asset('assets/js/razorpay.js') }}"></script>

     <script>
         $(".mainnav div").click(function() {
             $("ul").slideToggle();
             $("ul ul").css("display", "none");
             $(".mainnav .on").toggleClass("on");
         });
         $(".hasDD").click(function(e) {
             $(this)
                 .find("> ul")
                 .slideToggle();
             $(this)
                 .find("> ul ul")
                 .css("display", "none");
             $(this)
                 .find("> ul li")
                 .removeClass("on");
             $(this).toggleClass("on");
             e.stopPropagation();
         });
     </script>

     <script>
         $(document).ready(function() {
             $(".set > a").on("click", function() {
                 if ($(this).hasClass("active")) {
                     $(this).removeClass("active");
                     $(this)
                         .siblings(".content")
                         .slideUp(200);
                     $(".set > a i")
                         .removeClass("fa-minus")
                         .addClass("fa-plus");
                 } else {
                     $(".set > a i")
                         .removeClass("fa-minus")
                         .addClass("fa-plus");
                     $(this)
                         .find("i")
                         .removeClass("fa-plus")
                         .addClass("fa-minus");
                     $(".set > a").removeClass("active");
                     $(this).addClass("active");
                     $(".content").slideUp(200);
                     $(this)
                         .siblings(".content")
                         .slideDown(200);
                 }
             });
         });
     </script>
