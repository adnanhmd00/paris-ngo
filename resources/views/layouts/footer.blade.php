     <footer class="footer">
         <div class="container">
             <div class="row">
                 <div class="col-md-4 col-sm-12">
                     <h2>About Us</h2>
                     <p>
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi asperiores vel modi
                         perferendis perspiciatis blanditiis consequuntur vitae facere magnam eum minima ipsum, quia,
                         eaque debitis repellat fuga saepe laudantium pariatur!
                     </p>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente modi esse iure. Vero,
                         distinctio illum.</p>
                 </div>
                 <div class="col-md-4 col-sm-12">
                     <h2>Useful Links</h2>
                     <ul class="list-unstyled link-list">
                         <li><a ui-sref="about" href="#about">About us</a><i class="fa fa-angle-right"></i></li>
                         <li><a ui-sref="about" href="#gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                         <li><a ui-sref="about" href="#blog">Blog</a><i class="fa fa-angle-right"></i></li>
                         <li><a ui-sref="contact" href="#contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                     </ul>
                 </div>
                 <div class="col-md-4 col-sm-12 map-img">
                     <h2>Contact Us</h2>
                     <address class="md-margin-bottom-40">
                         xyz <br>
                         Marthandam (K.K District) <br>
                         Tamil Nadu, IND <br>
                         Phone: +91 9159669599 <br>
                         Email: <a href="mailto:info@anybiz.com" class="">info@xyz.in</a><br>
                         Web: <a href="smart-eye.html" class="">www.xyz.in</a>
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


     <!-- The Modal -->
     <div class="modal" id="myModal">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-body">
                     <iframe id="videoContainer" width="800" height="685"
                         src="https://pages.razorpay.com/pl_KPHF6fNpLP5CYh/view" frameborder="0"
                         allowfullscreen></iframe>
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
