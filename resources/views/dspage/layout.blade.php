<!DOCTYPE html>
<html class="no-js">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="{{asset('dspage/images/favicon.png')}}" rel="icon" type="image/x-icon"/>
	<title> Dulce Sorpresa | @yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('dspage/css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('dspage/css/custom.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('dspage/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('dspage/bootstrap/css/bootstrap.css')}}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('dspage/css/magnific-popup.css')}}">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{asset('dspage/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('dspage/css/owl.theme.default.min.css')}}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('dspage/css/flexslider.css')}}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('dspage/css/style.css')}}">

	@yield('style')
	<!-- Modernizr JS -->
	<script src="{{asset('dspage/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<div class="ds-loader"></div>

	<div id="page">

	@include('dspage/menu') {{---> MENU <--}}

	@yield('content');

	@include('dspage/footer') {{---> FOOTER <--}}

	</div>


	{{-- SCRIPTS --}}
	<!-- jQuery -->
	<script src="{{asset('dspage/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('dspage/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('dspage/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('dspage/js/jquery.waypoints.min.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset('dspage/js/jquery.stellar.min.js')}}"></script>
	<!-- Carousel -->
	<script src="{{asset('dspage/js/owl.carousel.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('dspage/js/jquery.flexslider-min.js')}}"></script>
	<!-- countTo -->
	<script src="{{asset('dspage/js/jquery.countTo.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{asset('dspage/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('dspage/js/magnific-popup-options.js')}}"></script>
	<!-- Sticky Kit -->
	<script src="{{asset('dspage/js/sticky-kit.min.js')}}"></script>
	<!-- Main -->
	<script src="{{asset('dspage/js/main.js')}}"></script>

	@yield('script')
</body>