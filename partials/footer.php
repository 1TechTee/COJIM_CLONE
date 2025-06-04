<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./images/COJIM/logo.png" rel="icon">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/COJIM_CLONE/css/all.min.css"> -->


    <!-- Themify Icons (CDN) -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@icon/themify-icons@1.0.1-alpha.3/themify-icons.min.css"> -->


    <!--Title-->
    <title>COJIM_CLONE</title>
    <!-- CSS -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="COJIM_CLONE/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="COJIM_CLONE/css/font-awesome.min.css">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="COJIM_CLONE/css/simple-line-icons.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="COJIM_CLONE/css/themify-icons.css">
    <!-- Owl Slider -->
    <link rel="stylesheet" href="COJIM_CLONE/css/owl.carousel.min.css">
    <link rel="stylesheet" href="COJIM_CLONE/css/owl.theme.default.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="COJIM_CLONE/css/magnific-popup.css">
    <!-- Revolution Slider -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/fonts/pe-icon-7-stroke/COJIM_CLONE/css/pe-icon-7-stroke.css">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/COJIM_CLONE/css/settings.css">
    <link rel="stylesheet" type="text/css" href="rs-plugin/COJIM_CLONE/css/main-slider/rs6.css">
    <!-- Color Panel -->
    <link href="COJIM_CLONE/css/color_panel.css" rel="stylesheet" type="text/css" />
    <!-- Color Panel -->
    <link href="COJIM_CLONE/css/color_panel.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="COJIM_CLONE/css/color-schemes/red.css" id="changeable-colors">
    <!-- Main Style -->
    <link rel="stylesheet" href="COJIM_CLONE/css/style.css" class="main-style">
    <style>
        #rev_slider_6_1_wrapper .tp-loader.spinner1 {
            background-color: #FFFFFF !important;
        }
    </style>
    <style>
        .rs-layer.Concept-Content a,
        .rs-layer.Concept-Content a:visited {
            color: #fff !important;
            border-bottom: 1px solid #fff !important;
            font-weight: 700 !important
        }

        .rs-layer.Concept-Content a:hover {
            border-bottom: 1px solid transparent !important
        }

        .rs-layer.Concept-Content-Dark a,
        .rs-layer.Concept-Content-Dark a:visited {
            color: #000 !important;
            border-bottom: 1px solid #000 !important;
            font-weight: 700 !important
        }

        .rs-layer.Concept-Content-Dark a:hover {
            border-bottom: 1px solid transparent !important
        }

        @media only screen and (max-width:575px) {
            rs-layer.res-slide-btn {
                padding: 7px 16px !important;
                font-size: 13px !important
            }
        }

        #rev_slider_1_1_wrapper .zeus.tparrows {
            cursor: pointer;
            min-width: 60px;
            min-height: 60px;
            position: absolute;
            display: block;
            z-index: 1000;
            border-radius: 50%;
            overflow: hidden;
            background: rgba(0, 0, 0, 0.38)
        }

        #rev_slider_1_1_wrapper .zeus.tparrows:before {
            font-family: 'revicons';
            font-size: 17px;
            color: #ffffff;
            display: block;
            line-height: 60px;
            text-align: center;
            z-index: 2;
            position: relative
        }

        #rev_slider_1_1_wrapper .zeus.tparrows.tp-leftarrow:before {
            content: '\e824'
        }

        #rev_slider_1_1_wrapper .zeus.tparrows.tp-rightarrow:before {
            content: '\e825'
        }

        #rev_slider_1_1_wrapper .zeus .tp-title-wrap {
            background: rgba(0, 0, 0, 0.5);
            width: 100%;
            height: 100%;
            top: 0px;
            left: 0px;
            position: absolute;
            opacity: 0;
            transform: scale(0);
            -webkit-transform: scale(0);
            transition: all 0.3s;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            border-radius: 50%
        }

        #rev_slider_1_1_wrapper .zeus .tp-arr-imgholder {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0px;
            left: 0px;
            background-position: center center;
            background-size: cover;
            border-radius: 50%;
            transform: translatex(-100%);
            -webkit-transform: translatex(-100%);
            transition: all 0.3s;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s
        }

        #rev_slider_1_1_wrapper .zeus.tp-rightarrow .tp-arr-imgholder {
            transform: translatex(100%);
            -webkit-transform: translatex(100%)
        }

        #rev_slider_1_1_wrapper .zeus.tparrows.rs-touchhover .tp-arr-imgholder {
            transform: translatex(0);
            -webkit-transform: translatex(0);
            opacity: 1
        }

        #rev_slider_1_1_wrapper .zeus.tparrows.rs-touchhover .tp-title-wrap {
            transform: scale(1);
            -webkit-transform: scale(1);
            opacity: 1
        }

        #rev_slider_1_1[data-slideactive="rs-1"] .zeus.tparrows {
            min-width: 60px !important;
            min-height: 60px !important;
            background: rgba(0, 0, 0, 0.38) !important
        }

        #rev_slider_1_1[data-slideactive="rs-1"] .zeus.tparrows:before {
            line-height: 60px !important;
            font-size: 17px !important
        }

        #rev_slider_1_1[data-slideactive="rs-2"] .zeus.tparrows {
            min-width: 60px !important;
            min-height: 60px !important;
            background: rgba(0, 0, 0, 0.38) !important
        }

        #rev_slider_1_1[data-slideactive="rs-2"] .zeus.tparrows:before {
            line-height: 60px !important;
            color: #ffffff !important;
            font-size: 17px !important
        }

        #rev_slider_1_1[data-slideactive="rs-3"] .zeus.tparrows {
            min-width: 60px !important;
            min-height: 60px !important;
            background: rgba(0, 0, 0, 0.38) !important
        }

        #rev_slider_1_1[data-slideactive="rs-3"] .zeus.tparrows:before {
            line-height: 60px !important;
            font-size: 17px !important
        }
    </style>
</head>
<body>
    <footer id="footer" class="footer footer-1 footer-bg-img" data-bg="images/bg/footer-bg.jpg">
    <div class="footer-widgets">
        <div class="footer-middle-wrap footer-overlay-dark">
            <div class="color-overlay"></div>
            <div class="container">
                <div class="row">
                    <!-- Contact Info -->
                    <div class="col-lg-3 widget text-widget">
                        <h3 class="title typo-white">Contact Us</h3>
                        <p>Stay connected with us for more faith-filled moments and spirit-lifting content. Follow us on Facebook and all our social media platforms — your encounter with God’s power is just a click away!</p>
                        <div class="social-icons">
                            <a href="https://facebook.com/ChristopherOrjiMinistriesCOJIM" target="_blank"><i class="bi bi-facebook fs-3 me-3"></i></a>
                            <a href="https://twitter.com/cojimofficiel" target="_blank"><i class="bi bi-twitter fs-3 me-3"></i></a>
                            <a href="https://instagram.com/cojimofficiel" target="_blank"><i class="bi bi-instagram fs-3 me-3"></i></a>
                            <a href="https://tiktok.com/@cojim" target="_blank"><i class="bi bi-tiktok fs-3 me-3"></i></a>
                            <a href="https://youtube.com/@COJIMOfficial" target="_blank"><i class="bi bi-youtube fs-3 me-3 text-danger"></i></a>
                            <a href="https://twitch.tv/christopherorjiministries" target="_blank"><i class="bi bi-twitch fs-3 me-3"></i></a>
                            <a href="https://logif.org" target="_blank" title="Give"><i class="bi bi-gift fs-3"></i></a>
                        </div>
                    </div>
                    <!-- Quick Links -->
                    <div class="col-lg-3 widget text-widget">
                        <h3 class="title typo-white">Quick Links</h3>
                        <ul class="menu">
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#sermons">Sermons</a></li>
                            <li><a href="https://cojim.org/partnership">Partnership</a></li>
                            <li><a href="#">Testimonies</a></li>
                            <li><a href="#">Volunteer</a></li>
                        </ul>
                    </div>
                    <!-- Newsletter -->
                    <div class="col-lg-3 widget contact-info-widget">
                        <h3 class="title typo-white">Newsletter</h3>
                        <p>Stay connected to the move of God! Subscribe to our newsletter for faith-lifting updates, testimonies, and events.</p>
                        <!-- You can add a form here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="/COJIM_CLONE/js/jquery.min.js"></script>
<script src="/COJIM_CLONE/js/bootstrap.bundle.min.js"></script>
<script src="/COJIM_CLONE/js/jquery.easing.min.js"></script>
<script src="/COJIM_CLONE/js/owl.carousel.min.js"></script>
<script src="/COJIM_CLONE/js/jquery.paroller.min.js"></script>
<script src="/COJIM_CLONE/js/isotope.pkgd.min.js"></script>
<script src="/COJIM_CLONE/js/jquery.magnific-popup.min.js"></script>
<script src="/COJIM_CLONE/js/validator.min.js"></script>
<script src="/COJIM_CLONE/js/smartresize.min.js"></script>
<script src="/COJIM_CLONE/js/jquery.appear.min.js"></script>
<script src="/COJIM_CLONE/js/custom.js"></script>
<script src="/COJIM_CLONE/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="/COJIM_CLONE/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="/COJIM_CLONE/rs-plugin/js/main-slider/rbtools.min.js"></script>
<script src="/COJIM_CLONE/rs-plugin/js/main-slider/rs6.min.js"></script>
<script src="/COJIM_CLONE/rs-plugin/js/main-slider/home-1.js"></script>
<script src="/COJIM_CLONE/js/color-panel.js"></script>

</body>
</html>