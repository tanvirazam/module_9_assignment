
<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kufa - Personal Portfolio HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('assets/css') }}/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('assets/css') }}/animate.min.css">
        <link rel="stylesheet" href="{{ asset('assets/css') }}/magnific-popup.css">
        <link rel="stylesheet" href="{{ asset('assets/css') }}/fontawesome-all.min.css">
        <link rel="stylesheet" href="{{ asset('assets/css') }}/flaticon.css">
        <link rel="stylesheet" href="{{ asset('assets/css') }}/slick.css">
        <link rel="stylesheet" href="{{ asset('assets/css') }}/aos.css">
        <link rel="stylesheet" href="{{ asset('assets/css') }}/default.css">
        <link rel="stylesheet" href="{{ asset('assets/css') }}/style.css">
        <link rel="stylesheet" href="{{ asset('assets/css') }}/responsive.css">
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
       @include("component.header")
        <!-- header-end -->

        <!-- main-area -->

        @yield("content")

        <!-- main-area-end -->

        <!-- footer -->
        @include("component.footer")
        <!-- footer-end -->





		<!-- JS here -->
        <script src="{{ asset('assets/js') }}/vendor/jquery-1.12.4.min.js"></script>
        <script src="{{ asset('assets/js') }}/popper.min.js"></script>
        <script src="{{ asset('assets/js') }}/bootstrap.min.js"></script>
        <script src="{{ asset('assets/js') }}/isotope.pkgd.min.js"></script>
        <script src="{{ asset('assets/js') }}/one-page-nav-min.js"></script>
        <script src="{{ asset('assets/js') }}/slick.min.js"></script>
        <script src="{{ asset('assets/js') }}/ajax-form.js"></script>
        <script src="{{ asset('assets/js') }}/wow.min.js"></script>
        <script src="{{ asset('assets/js') }}/aos.js"></script>
        <script src="{{ asset('assets/js') }}/jquery.waypoints.min.js"></script>
        <script src="{{ asset('assets/js') }}/jquery.counterup.min.js"></script>
        <script src="{{ asset('assets/js') }}/jquery.scrollUp.min.js"></script>
        <script src="{{ asset('assets/js') }}/imagesloaded.pkgd.min.js"></script>
        <script src="{{ asset('assets/js') }}/jquery.magnific-popup.min.js"></script>
        <script src="{{ asset('assets/js') }}/plugins.js"></script>
        <script src="{{ asset('assets/js') }}/main.js"></script>
    </body>


</html>
