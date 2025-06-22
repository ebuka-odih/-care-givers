<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<!-- Mirrored from html.dynamiclayers.net/dl/charitify/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Apr 2025 11:02:48 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="DynamicLayers">

    <title>Caregivers - Children's Charity & Donation</title>

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <!-- Font Awesome Icons CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Themify Icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Elegant Font Icons CSS -->
    <link rel="stylesheet" href="css/elegant-font-icons.css">
    <!-- Elegant Line Icons CSS -->
    <link rel="stylesheet" href="css/elegant-line-icons.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="css/venobox/venobox.css">
    <!-- OWL-Carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- Slick Nav CSS -->
    <link rel="stylesheet" href="css/slicknav.min.css">
    <!-- Css Animation CSS -->
    <link rel="stylesheet" href="css/css-animation.min.css">
    <!-- Nivo Slider CSS -->
    <link rel="stylesheet" href="css/nivo-slider.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    <style>
        .slicknav_btn {
     background-color: black;
    margin: 13px 5px 14px;
}
    </style>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<div class="site-preloader-wrap">
    <div class="spinner"></div>
</div><!-- Preloader -->

<header id="header" class="header-section">
    <div class="top-header">
        <div class="container">
            <div class="top-content-wrap row">
                <div class="col-sm-8">
                    <ul class="left-info">
                        <li><a href="mailto:info@care-givers.org"><i class="ti-email"></i>
                                <span>info@care-givers.org</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="bottom-content-wrap row">
                <div class="col-sm-4">
                    <div class="site-branding">
                        <a  href="{{ route('index') }}">
                            <h2 style="font-weight: bolder; height: 30px; margin-top: 10px">Caregivers</h2>
                        </a>
                    </div>
                </div>
                <div class="col-sm-8 text-right">
                    <ul id="mainmenu" class="nav navbar-nav nav-menu">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('causes') }}">Causes</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                    <a href="{{ route('donate') }}" class="default-btn">Donate Now</a>
                </div>
            </div>
        </div>
    </div>
</header><!-- /Header Section -->

<div class="header-height"></div>

@yield('content')

<section class="widget-section padding">
    <div class="container">
        <div class="widget-wrap row">
            <div class="col-md-6 xs-padding">
                <div class="widget-content">
                    <h2 style="font-weight: bolder; color: white">Caregivers</h2>
                    <p>Dedicated to nurturing the potential of every child through education, healthcare, and support. Every child deserves the opportunity to dream, learn, and grow.</p>
                </div>
            </div>
            <div class="col-md-6 xs-padding">
                <div class="widget-content">
                    <h3>Contact</h3>
                    <ul class="address">
                        <li><i class="ti-email"></i> <a
                                href="mailto:info@care-givers.org"><span>info@care-givers.org</span></a>
                        </li>
                        <li><i class="ti-location-pin"></i>  Place du Palais,<br>
                            Monaco-Ville 98015 Monaco
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 sm-padding">
                <div class="copyright">&copy; {{ Date('Y') }} Caregivers. All rights reserved. | Children's Charity & Donation Organization</div>
            </div>
        </div>
    </div>
</footer><!-- /Footer Section -->

<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

<!-- jQuery Lib -->
<script data-cfasync="false"
        src="https://html.dynamiclayers.net/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/vendor/bootstrap.min.js"></script>
<!-- Tether JS -->
<script src="js/vendor/tether.min.js"></script>
<!-- Imagesloaded JS -->
<script src="js/vendor/imagesloaded.pkgd.min.js"></script>
<!-- OWL-Carousel JS -->
<script src="js/vendor/owl.carousel.min.js"></script>
<!-- isotope JS -->
<script src="js/vendor/jquery.isotope.v3.0.2.js"></script>
<!-- Smooth Scroll JS -->
<script src="js/vendor/smooth-scroll.min.js"></script>
<!-- venobox JS -->
<script src="js/vendor/venobox.min.js"></script>
<!-- ajaxchimp JS -->
<script src="js/vendor/jquery.ajaxchimp.min.js"></script>
<!-- Counterup JS -->
<script src="js/vendor/jquery.counterup.min.js"></script>
<!-- waypoints js -->
<script src="js/vendor/jquery.waypoints.v2.0.3.min.js"></script>
<!-- Slick Nav JS -->
<script src="js/vendor/jquery.slicknav.min.js"></script>
<!-- Nivo Slider JS -->
<script src="js/vendor/jquery.nivo.slider.pack.js"></script>
<!-- Letter Animation JS -->
<script src="js/vendor/letteranimation.min.js"></script>
<!-- Wow JS -->
<script src="js/vendor/wow.min.js"></script>
<!-- Contact JS -->
<script src="js/contact.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>

<script>(function () {
        function c() {
            var b = a.contentDocument || a.contentWindow.document;
            if (b) {
                var d = b.createElement('script');
                d.innerHTML = "window.__CF$cv$params={r:'92d983a089b2f6a9',t:'MTc0NDE5NjU2Ny4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='https://html.dynamiclayers.net/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                b.getElementsByTagName('head')[0].appendChild(d)
            }
        }

        if (document.body) {
            var a = document.createElement('iframe');
            a.height = 1;
            a.width = 1;
            a.style.position = 'absolute';
            a.style.top = 0;
            a.style.left = 0;
            a.style.border = 'none';
            a.style.visibility = 'hidden';
            document.body.appendChild(a);
            if ('loading' !== document.readyState) c(); else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c); else {
                var e = document.onreadystatechange || function () {
                };
                document.onreadystatechange = function (b) {
                    e(b);
                    'loading' !== document.readyState && (document.onreadystatechange = e, c())
                }
            }
        }
    })();</script>
</body>

<!-- Mirrored from html.dynamiclayers.net/dl/charitify/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Apr 2025 11:04:05 GMT -->
</html>
