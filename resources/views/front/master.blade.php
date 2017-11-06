<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MaterialX - Material Design Personal Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('/front')}}/{{asset('/front')}}/{{asset('/front')}}/images/favicon.png" >

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('/front')}}/assets/css/normalize.css">
    <link rel="stylesheet" href="{{asset('/front')}}/assets/font/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/front')}}/assets/libs/materialize/css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="{{asset('/front')}}/assets/css/bootstrap.css" media="screen,projection" />

    <link rel="stylesheet" href="{{asset('/front')}}/assets/css/animate.min.css" media="screen,projection" />
    <link rel="stylesheet" href="{{asset('/front')}}/assets/libs/sweetalert/sweet-alert.css" media="screen,projection" />

    <link rel="stylesheet" href="{{asset('/front')}}/assets/libs/owl-carousel/owl.carousel.css" media="screen,projection" />
    <link rel="stylesheet" href="{{asset('/front')}}/assets/libs/owl-carousel/owl.transitions.css" media="screen,projection" />
    <link rel="stylesheet" href="{{asset('/front')}}/assets/libs/owl-carousel/owl.theme.css" media="screen,projection" />

    <link rel="stylesheet" href="{{asset('/front')}}/assets/css/main.css">
    <link rel="stylesheet" href="{{asset('/front')}}/assets/css/responsive.css">

    <!-- Choose your default colors -->
    <link rel="stylesheet" href="{{asset('/front')}}/assets/css/colors/color1.css">
    <!-- <link rel="stylesheet" href="{{asset('/front')}}/assets/css/colors/color2.css"> -->
    <!-- <link rel="stylesheet" href="{{asset('/front')}}/assets/css/colors/color3.css"> -->
    <!-- <link rel="stylesheet" href="{{asset('/front')}}/assets/css/colors/color4.css"> -->
    <!-- <link rel="stylesheet" href="{{asset('/front')}}/assets/css/colors/color5.css"> -->
    <!-- <link rel="stylesheet" href="{{asset('/front')}}/assets/css/colors/color6.css"> -->
    <!-- <link rel="stylesheet" href="{{asset('/front')}}/assets/css/colors/color7.css"> -->
    <!-- <link rel="stylesheet" href="{{asset('/front')}}/assets/css/colors/color8.css"> -->

    <!--[if lt IE 9]>
    <script src="{{asset('/front')}}/assets/js/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<!-- Preloader -->
<div id="preloader">
    <div class="loader">
        <svg class="circle-loader" height="50" width="50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="6" stroke-miterlimit="10" />
        </svg>
    </div>
</div><!--preloader end-->

<!-- Main Container -->
<main id="app" class="main-section">
    <!-- header navigation start -->
    @include('front.includes.header')
    <!-- #header  navigation end -->

    <!-- Home Section start -->
    @include('front.includes.home-section')
    <!-- #home Section end -->

    <!-- About Section start -->
    @include('front.includes.about-section')
    <!-- #about Section end -->

    <!-- Resume Section start -->
    <section id="resume" class="scroll-section ">

        <!-- Start skill-section -->
        @include('front.includes.skill-section')
        <!-- End skill-section -->

        <!-- Start experience-section -->
        @include('front.includes.experience-section')
        <!-- End experience-section -->

        <!-- Start experience-section -->
        @include('front.includes.education-section')
        <!-- End experience-section -->

    </section>
    <!-- #resume Section end -->

    <!-- Portfolio Section start -->
    @include('front.includes.portfolio-section')
    <!-- #portfolio Section end -->

    <!-- Team Section end -->
    @include('front.includes.team-section')
    <!-- #team Section end -->

    <!-- Funfacts Section end -->
    @include('front.includes.funfact-section')
    <!-- #funfacts Section end -->

    <!-- Testimonial Section end -->
    @include('front.includes.testimonial-section')
    <!-- #testimonial Section end -->

    <!-- Blog Section end -->
    @include('front.includes.blog-section')
    <!-- #blog Section end -->

    <!-- Contact Section end -->
    @include('front.includes.contact-section')
    <!-- #contact Section end -->

    <!-- Footer Section end -->
    @include('front.includes.footer')
    <!-- #footer end -->

</main>
<!-- Main Container end-->


<!-- JavaScripts -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="{{asset('/front')}}/assets/js/jquery.easing.1.3.js"></script>
<script src="{{asset('/front')}}/assets/js/detectmobilebrowser.js"></script>
<script src="{{asset('/front')}}/assets/js/isotope.pkgd.min.js"></script>
<script src="{{asset('/front')}}/assets/js/wow.min.js"></script>
<script src="{{asset('/front')}}/assets/js/waypoints.js"></script>
<script src="{{asset('/front')}}/assets/js/jquery.counterup.min.js"></script>
<script src="{{asset('/front')}}/assets/js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{asset('/front')}}/assets/js/gmaps.js"></script>
<script src="{{asset('/front')}}/assets/libs/owl-carousel/owl.carousel.min.js"></script>
<script src="{{asset('/front')}}/assets/libs/materialize/js/materialize.min.js"></script>
<script src="{{asset('/front')}}/assets/libs/jwplayer/jwplayer.js"></script>
<script src="{{asset('/front')}}/assets/libs/sweetalert/sweet-alert.min.js"></script>
<script src="{{asset('/front')}}/assets/js/common.js"></script>
<script src="{{asset('/front')}}/assets/js/main.js"></script>
</body>

</html>