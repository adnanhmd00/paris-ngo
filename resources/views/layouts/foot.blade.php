<footer style="background: #4470BD;">
    <div class="container pt-5 pb-5 mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="d-none d-lg-block"><img src="{{ asset('assets/images/logo.png') }}" style="width: 200px; position: absolute; top: 20%;" alt=""></div>
                <div class="text-center d-sm-block d-lg-none"><img src="{{ asset('assets/images/logo.png') }}" style="width: 200px;" alt=""></div>
            </div>
            <div class="col-md-3">
                <div class="accordion-container">
                    <div class="set">
                        <a href="javascript:void(0)">
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
                        <a href="javascript:void(0)">
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
                        <a href="javascript:void(0)">
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
            </div>
            <div class="col-md-3 mt-2">
                <div>
                    <a href="{{ route('terms-and-conditions') }}" class="nav-link text-light">Terms & Conditions</a>
                </div>
                <div>
                    <a href="{{ route('privacy-policy') }}" class="nav-link text-light">Privacy Policy</a>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center mt-4">
                <div class="d-flex flex-column">
                    <div class="row">
                        <div><a href="https://www.facebook.com/RadicoWelfareSchool"><i class="p-3 text-light fa-brands fa-lg fa-facebook-f"></i></a></div>
                        <div><i class="p-3 text-light fa-brands fa-lg fa-instagram"></i></div>
                        <div><i class="p-3 text-light fa-brands fa-lg fa-twitter"></i> </div>
                        <div><i class="p-3 text-light fa-brands fa-lg fa-linkedin"></i></div>
                    </div>
                    
                    <div class="mt-3">
                        <a style="background: #fff; padding: 10px 20px; border-radius: 20px;" class="btn btn-block" href="javascript:void(0)" data-toggle="modal" data-target="#rzp">Donate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="modal fade" id="rzp">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                {{-- <iframe id="videoContainer" width="800" height="685"
                   src="https://pages.razorpay.com/pl_KPHF6fNpLP5CYh/view" frameborder="0"
                   allowfullscreen></iframe> --}}
                <div class="text-center">
                    <img src="{{ asset('assets/images/logo.png') }}" style="width: 100px;" class="mb-2"
                        alt="">
                </div>
                {{-- <form action="/pay/coffee"> --}}
                <input type="hidden" name="key" id="key" value="{{ env('RAZORPAY_KEY') }}">
                <input type="hidden" name="key" id="token" value="{{ csrf_token() }}">
                <input type="text" id="name" name="name" value="" placeholder="&nbsp;Name" class="form-control p-1 m-2" style="border-radius: 10px;" required>
                <input type="text" id="email" name="email" value="" placeholder="&nbsp;Email" class="form-control p-1 m-2" style="border-radius: 10px;" required>
                <input type="text" id="phone" name="phone" value="" placeholder="&nbsp;Mobile No." class="form-control p-1 m-2" style="border-radius: 10px;" required>
                <input type="text" id="amount" name="amount" value="" placeholder="&nbsp;Amount" class=" form-control p-1 m-2" style="border-radius: 10px;" required>
                <div class="text-center mt-2">
                    <button id="donate" class="btn btn-success px-5" style="background: #4479bd; padding: 10px 20px; border-radius: 20px;">Donate</button>
                </div>
                {{-- </form> --}}
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="sas">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                {{-- <iframe id="videoContainer" width="800" height="685"
                   src="https://pages.razorpay.com/pl_KPHF6fNpLP5CYh/view" frameborder="0"
                   allowfullscreen></iframe> --}}
                <div class="text-center">
                    <img src="{{ asset('assets/images/logo.png') }}" style="width: 100px;" class="mb-2"
                        alt="">
                </div>
                {{-- <form action="/pay/coffee"> --}}
                <input type="hidden" name="key" id="key" value="{{ env('RAZORPAY_KEY') }}">
                <input type="hidden" name="key" id="token" value="{{ csrf_token() }}">
                <input type="text" id="spname" name="name" value="" placeholder="&nbsp;Name" class="form-control p-1 m-2" style="border-radius: 10px;" required>
                <input type="text" id="spemail" name="email" value="" placeholder="&nbsp;Email" class="form-control p-1 m-2" style="border-radius: 10px;" required>
                <input type="text" id="spphone" name="phone" value="" placeholder="&nbsp;Mobile No." class="form-control p-1 m-2" style="border-radius: 10px;" required>
                <input type="text" id="spamount" name="amount" value="10000" readonly placeholder="&nbsp;Amount" class=" form-control p-1 m-2" style="border-radius: 10px;" required>
                <div class="text-center mt-2">
                    <button id="sponsor_student" class="btn btn-success px-5" style="background: #4479bd; padding: 10px 20px; border-radius: 20px;">Sponsor A Student</button>
                </div>
                {{-- </form> --}}
            </div>

        </div>
    </div>
</div>


<div class="myAlert-top alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Thank You For Your Donation! A confirmation mail has been sent on your email address.
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="assets/js/carousel.js"></script>
<script src="{{ asset('https://checkout.razorpay.com/v1/checkout.js') }}"></script>
<script src="{{ asset('assets/js/razorpay.js') }}"></script>
<script src="{{ asset('assets/js/razorpay-sponsor.js') }}"></script>

<script>
    (function($) {
        $(function() {
            //  open and close nav 
            $('#navbar-toggle').click(function() {
                $('nav ul').slideToggle();
            });


            // Hamburger toggle
            $('#navbar-toggle').on('click', function() {
                this.classList.toggle('active');
            });


            // If a link has a dropdown, add sub menu toggle.
            $('nav ul li a:not(:only-child)').click(function(e) {
                $(this).siblings('.navbar-dropdown').slideToggle("slow");

                // Close dropdown when select another dropdown
                $('.navbar-dropdown').not($(this).siblings()).hide("slow");
                e.stopPropagation();
            });


            // Click outside the dropdown will remove the dropdown class
            $('html').click(function() {
                $('.navbar-dropdown').hide();
            });
        });
    })(jQuery);
</script>
<script>
    const panels = document.querySelectorAll('.panel');

    function toggleOpen() {
        this.classList.toggle('open');
    }

    function toggleActive(e) {
        if (e.propertyName.includes('flex')) {
            this.classList.toggle('open-active');
        }
    }

    panels.forEach(panel => panel.addEventListener('click', toggleOpen));
    panels.forEach(panel => panel.addEventListener('transitionend', toggleActive));
</script>

{{-- counter start --}}
<script>
    $('.counting').each(function() {
        var $this = $(this),
            countTo = $this.attr('data-count');
        $({
            countNum: $this.text()
        }).animate({
            countNum: countTo
        }, {
            duration: 3000,
            easing: 'linear',
            step: function() {
                $this.text(Math.floor(this.countNum));
            },
            complete: function() {
                $this.text(this.countNum);
                //alert('finished');
            }
        });
    });
</script>
{{-- counter end --}}

{{-- accordion start --}}

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
{{-- accordion end --}}

{{-- scroll behaviour on slide start --}}
<script>
    var $animation_elements = $(".animation-element");
    var $window = $(window);

    function check_if_in_view() {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position =
            window_top_position + window_height;

        $.each($animation_elements, function() {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position =
                element_top_position + element_height;

            //check to see if this current container is within viewport
            if (
                element_bottom_position >= window_top_position &&
                element_top_position <= window_bottom_position
            ) {
                $element.addClass("in-view");
            } else {
                $element.removeClass("in-view");
            }
        });
    }

    $window.on("scroll resize", check_if_in_view);
    $window.trigger("scroll", check_if_in_view);
</script>
{{-- scroll behaviour on slide end --}}

{{-- Card Effect --}}
<script>
    $(document).ready(function() {
        $('.hover-div').hover(function() {
            $('.hover-div').stop().fadeTo('fast', 0.3);
            $(this).stop().fadeTo('fast', 1);
        }, function() {
            $('.hover-div').stop().fadeTo('fast', 1);
        });
    });
</script>
{{-- Card Effect --}}

</html>
