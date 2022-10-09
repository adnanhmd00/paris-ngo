<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/carousel.css">
    <link rel="stylesheet" href="assets/css/section-image-gallery.css">
    <link href='https://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>
    <title>Romil Seva Sanstha</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto');

        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
        }

        .navigation {
            height: 80px;
            padding: 5px;
            background: linear-gradient(45deg, #4199fe, #74b4fe);
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
            max-width: 1000px;
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
            position: relative;
        }

        nav ul li a,
        nav ul li a:visited {
            display: block;
            padding: 0 20px;
            line-height: 55px;
            color: #fff;
            background: #262626;
            text-decoration: none;
        }

        nav ul li a {
            background: transparent;
            color: #FFF;
        }

        nav ul li a:hover,
        nav ul li a:visited:hover {
            background: #2581DC;
            color: #ffffff;
        }

        .navbar-dropdown li a {
            background: #2581DC;
        }

        nav ul li a:not(:only-child):after,
        nav ul li a:visited:not(:only-child):after {
            padding-left: 4px;
            content: ' \025BE';
        }

        nav ul li ul li {
            min-width: 190px;
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
                background: #ffffff;
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
    </style>
</head>

<body>
    @yield('content')
</body>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="assets/js/carousel.js"></script>

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

</html>