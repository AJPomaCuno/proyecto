<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Consen - Finanace Consulting HTML5 Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="assets/images/fav-icon/icon.png">
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('resources/css/bootstrap.min.css') }}" type="text/css" media="all">
	<!-- carousel CSS -->
	<link rel="stylesheet" href="{{ asset ('resources/css/owl.carousel.min.css') }}" type="text/css" media="all">
	<!-- animate CSS -->
	<link rel="stylesheet" href="{{ asset('resorces/css/animate.css') }}" type="text/css" media="all">
	<!-- animated-text CSS -->
	<link rel="stylesheet" href="{{ asset('resources/css/animated-text.css') }}" type="text/css" media="all">
	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="{{ asset('resources/css/all.min.css') }}" type="text/css" media="all">
	<!-- font-flaticon CSS -->
	<link rel="stylesheet" href="{{ asset('resources/css/flaticon.css') }}" type="text/css" media="all">
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="{{ asset('resources/css/theme-default.css') }}" type="text/css" media="all">
	<!-- meanmenu CSS -->
	<link rel="stylesheet" href="{{ asset('resources/css/meanmenu.min.css') }}" type="text/css" media="all">
	<!-- transitions CSS -->
	<link rel="stylesheet" href="{{ asset('resources/css/owl.transitions.css') }}" type="text/css" media="all">
	<!-- venobox CSS -->
	<link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="all">

	<!-- bootstrap icons -->
	<link rel="stylesheet" href="{{ asset('resources/css/bootstrap-icons.css') }}" type="text/css" media="all">

	<!-- Main Style CSS -->
	<link rel="stylesheet" href="{{ asset('resources/css/style.css') }}" type="text/css" media="all">
	<!-- responsive CSS -->
	<link rel="stylesheet" href="{{ asset('resources/css/responsive.css') }}" type="text/css" media="all">

	<!-- modernizr js -->
	<script src="{{ asset('resources/js/vendor/modernizr-3.5.0.min.js') }}"></script>
</head>

@vite(['resources/css/app.css', 
'resources/css/all.min.css',
'resources/css/animate.css',
'resources/css/animated-text.css',
'resources/css/bootstrap.icons.css',
'resources/css/bootstrap.min.css',
'resources/css/flaticon.css',
'resources/css/meanmenu.min.css',
'resources/css/owl.carousel.min.css',
'resources/css/owl.transitions.css',
'resources/css/responsive.css',
'resources/css/theme-default.css',

'resources/js/app.js',
'resources/js/ajax-mail.js',
'resources/js/animated-text.js',
'resources/js/bootstrap.min.js',
'resources/js/imagesloaded.pkgd.min.js',
'resources/js/isotope.pkgd.min.js',
'resources/js/jquery.barfiller.js',
'resources/js/jquery.counterup.min.js',
'resources/js/jquery.nav.js',
'resources/js/jquerymeanmenu.js',
'resources/js/jqueryscrolllUp.js',
'resources/js/owl.carousel.min.js',
'resources/js/particls.js',
'resources/js/popper.min.js',
'resources/js/waypoints.min.js',
'resources/js/wow.js'])


<body>

	<!-- loder
	<div class="loader-wrapper">
		<div class="loader"></div>
		<div class="loder-section left-section"></div>
		<div class="loder-section right-section"></div>
	</div>-->

	<!--==================================================-->
	<!-- Start consen Header Top Menu Area Css -->
	<!--==================================================-->
	<div class="header_top_menu d-flex align-items-center">
		<div class="container">
			<div class="row d-flex align-items-cente">
				<div class="col-lg-8 col-sm-8">
					<div class="header_top_menu_address">
						<div class="header_top_menu_text">
							<p>Welcome! to Consen Finance Consultant.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-4 pr-0">
					<div class="header_top_menu_icon text-right">
						<div class="menu-title">
							<h6>FOLLOW US</h6>
						</div>
						<div class="header_top_menu_icon_inner">
							<ul>
								<li><a href="#"><i class="bi bi-facebook"></i></a></li>
								<li class="menu-icon"><a href="#"><i class="bi bi-dribbble"></i></a></li>
								<li><a href="#"><i class="bi bi-twitter"></i></a></li>
								<li class="menu-icon"><a href="#"><i class="bi bi-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End consen Header Top Menu Area Css -->
	<!--===================================================-->




	<!--==================================================-->
	<!-- Start consen Main Menu Area -->
	<!--==================================================-->
	<div id="sticky-header" class="consen_nav_manu style-two">
		<div class="container">
			<div class="row header-bg align-items-center">
				<div class="col-lg-3">
					<div class="logo">
						<a class="logo_img" href="index.html" title="consen">
							<img src="assets/images/logo2.png" alt="logo">
						</a>
						<a class="main_sticky" href="index.html" title="consen">
							<img src="assets/images/logo2.png" alt="logo">
						</a>
					</div>
				</div>
				<div class="col-lg-9 pl-0 pr-0">
					<nav class="consen_menu">
						<ul class="nav_scroll">
							<li><a href="#">Home <span><i class="fas fa-angle-down"></i></span></a>
								<ul class="sub-menu">
									<li><a href="index.html">IT Consulting</a></li>
									<li><a href="index-2.html">Finance Consulting</a></li>
									<li><a href="index-3.html">IT Solution <span>New</span></a></li>
									<li><a href="landing-1.html">Landing One<span>New</span></a></li>
									<li><a href="landing-2.html">Landing Two<span>New</span></a></li>
								</ul>
							</li>
							<li><a href="#">Company <span><i class="fas fa-angle-down"></i></span></a>
								<ul class="sub-menu">
									<li><a href="about.html">About Us</a></li>
									<li><a href="service.html">Our Service</a></li>
									<li><a href="pricing.html">Pricing</a></li>
									<li><a href="team.html">Our Team</a></li>
									<li><a href="portfolio.html">Portfolio</a></li>
									<li><a href="portfolio-details.html">Portfolio Details</a></li>
									<li><a href="404.html">404</a></li>
									<li><a href="contact.html">Contact Us</a></li>
								</ul>
							</li>
							<li><a href="#">Services <span><i class="fas fa-angle-down"></i></span></a>
								<ul class="sub-menu">
									<li><a href="service.html">Our Service</a></li>
									<li><a href="service-details.html">Service Details</a></li>
								</ul>
							</li>
							<li><a href="portfolio.html">Portfolio</a></li>
							<li><a href="#">Blog <span><i class="fas fa-angle-down"></i></span></a>
								<ul class="sub-menu">
									<li><a href="blog-grid.html">Blog Gird</a></li>
									<li><a href="blog-list.html">Blog List</a></li>
									<li><a href="blog-2column.html">Blog-2Column</a></li>
									<li><a href="blog-details.html">Blog Details</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
						<div class="search-box-btn search-box-outer">
							<div class="nav-btn navSidebar-button"><a><i class="fas fa-align-left"></i></a></div>
						</div>
						<div class="header-button">
							<a href="contact.html"> Request a Quote </a>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- consen Mobile Menu Area -->
	<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
		<div class="mobile-menu">
			<nav class="consen_menu">
				<ul class="nav_scroll">
					<li><a href="#">INICIO </a>
						<ul class="sub-menu">
							<li><a href="index.html">IT Consulting</a></li>
							<li><a href="index-2.html">Finance Consulting</a></li>
							<li><a href="index-3.html">IT Solution</a></li>
							<li><a href="landing-1.html">Landing One<span>New</span></a></li>
							<li><a href="landing-2.html">Landing Two<span>New</span></a></li>
						</ul>
					</li>
					<li><a href="#">Documentos-SIE </a>
						<ul class="sub-menu">
							<li><a href="about.html">About Us</a></li>
							<li><a href="service.html">Our Service</a></li>
							<li><a href="pricing.html">Pricing</a></li>
							<li><a href="team.html">Our Team</a></li>
							<li><a href="portfolio.html">Portfolio</a></li>
							<li><a href="portfolio-details.html">Portfolio Details</a></li>
							<li><a href="404.html">404</a></li>
							<li><a href="contact.html">Contact Us</a></li>
						</ul>
					</li>
					<li><a href="#">Services </a>
						<ul class="sub-menu">
							<li><a href="service.html">Our Service</a></li>
							<li><a href="service-details.html">Service Details</a></li>
						</ul>
					</li>
					<li><a href="portfolio.html">Portfolio</a></li>
					<li><a href="#">Blog </a>
						<ul class="sub-menu">
							<li><a href="blog-grid.html">Blog Gird</a></li>
							<li><a href="blog-list.html">Blog List</a></li>
							<li><a href="blog-2column.html">Blog-2Column</a></li>
							<li><a href="blog-details.html">Blog Details</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<!--==================================================-->
	<!-- End consen Main Menu Area -->
	<!--==================================================-->





	<!--==================================================-->
	<!-- Start consen slider Area -->
	<!--==================================================-->
	<div class="slider-area slider2 d-flex align-items-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="slider-content">
						<h1> The Financial </h1>
						<h1> Planning <span>Guide</span> </h1>
						<p>Without Consulting Plans, Plans not Growing fashion user friendly architectures synergistic
							resources.</p>
					</div>
					<div class="slider-button mt-5">
						<a href="service.html"> <i class="bi bi-gear"></i> Discover More </a>
					</div>
				</div>
				<!-- slider shape -->
				<div class="slider-shape">

					<div class="slider-shape-thumb2">
						<img src="assets/images/slider/shape2.png" alt="">
					</div>
					<div class="slider-shape-thumb4">
						<img src="assets/images/slider/shape3.png" alt="">
					</div>
					<div class="slider-shape-thumb5 dance">
						<img src="assets/images/slider/circle1.png" alt="">
					</div>
					<div class="slider-shape-thumb6 bounce-animate">
						<img src="assets/images/slider/circle2.png" alt="">
					</div>
					<div class="slider-shape-thumb7 bounce-animate2">
						<img src="assets/images/slider/circle3.png" alt="">
					</div>
					<div class="slider-shape-thumb8 bounce-animate3">
						<img src="assets/images/slider/white-dot.png" alt="">
					</div>
					<div class="slider-shape-thumb9 ">
						<img src="assets/images/slider/line.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!--End consen slider Area  -->
	<!--==================================================-->

	<!-- Sidebar Cart Item -->
	<div class="xs-sidebar-group info-group">
		<div class="xs-overlay xs-bg-black"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="widget-heading">
					<a href="#" class="close-side-widget">
						<i class="far fa-times-circle"></i>
					</a>
				</div>
				<div class="sidebar-textwidget">
					<!-- Sidebar Info Content -->
					<div class="sidebar-info-contents">
						<div class="content-inner">
							<div class="nav-logo">
								<a href="index.html"><img src="assets/images/logo.png" alt="logo"></a>
							</div>
							<div class="content-box">
								<h2>About Us</h2>
								<p class="text">The argument in favor of using filler text goes something like this: If
									you use real content in the Consulting Process, anytime you reach a review point
									you’ll end up reviewing and negotiating the content itself and not the design.</p>
								<a href="index" class="theme-btn btn-style-two"><span>Consultation</span> <i
										class="fas fa-heart"></i></a>
							</div>
							<div class="contact-info">
								<h2>Contact Info</h2>
								<ul class="list-style-one">
									<li><span class="icon flaticon-email"></span>Chicago 12, Melborne City, USA</li>
									<li><span> <i class="bi bi-telephone-inbound"></i> </span>(+001) 123-456-7890</li>
									<li><span><i class="bi bi-geo-alt"></i></span>Example @gmail.com</li>
									<li><span><i class="bi bi-clock"></i></span>Week Days: 09.00 to 18.00 Sunday: Closed
									</li>
								</ul>
							</div>
							<!-- Social Box -->
							<ul class="social-box">
								<li class="facebook"><a href="#" class="fab fa-facebook-f"></a></li>
								<li class="twitter"><a href="#" class="fab fa-instagram"></a></li>
								<li class="linkedin"><a href="#" class="fab fa-twitter"></a></li>
								<li class="instagram"><a href="#" class="fab fa-pinterest-p"></a></li>
								<li class="youtube"><a href="#" class="fab fa-linkedin-in"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>





	<!--==================================================-->
	<!-- Start consen feature Area -->
	<!--==================================================-->
	<div class="feature-area">
		<div class="container">
			<div class="row feature-bg">
				<div class="col-lg-4 col-md-6">
					<div class="single-feature-box">
						<div class="feature-box-inner">
							<div class="feature-icon1">
								<img src="assets/images/resource/main1.png" alt="">
							</div>
							<div class="feature-title">
								<h3> Business Planning </h3>
							</div>
							<div class="feature-text">
								<p> Appropriately enhance principle-cent standards in platforms. Credibly orch popular
									services. </p>
							</div>
							<div class="feature-bar"></div>
						</div>
						<!-- feature back -->
						<div class="consen-feature-back">
							<div class="feature-back-title">
								<h3> Strategy </h3>
								<h2> Strategy Building </h2>
							</div>
							<div class="feature-back-icon">
								<a href="#">+</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-feature-box uppp-1">
						<div class="feature-box-inner">
							<div class="feature-icon1">
								<img src="assets/images/resource/main3.png" alt="">
							</div>
							<div class="feature-title">
								<h3> Cloud Solutions </h3>
							</div>
							<div class="feature-text">
								<p> Appropriately enhance principle-cent standards in platforms. Credibly orch popular
									services. </p>
							</div>
							<div class="feature-bar"></div>
						</div>
						<!-- feature back -->
						<div class="consen-feature-back">
							<div class="feature-back-title">
								<h3> Strategy </h3>
								<h2> Strategy Building </h2>
							</div>
							<div class="feature-back-icon">
								<a href="#">+</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-feature-box uppp-1">
						<div class="feature-box-inner">
							<div class="feature-icon1">
								<img src="assets/images/resource/main2.png" alt="">
							</div>
							<div class="feature-title">
								<h3> Customers Support </h3>
							</div>
							<div class="feature-text">
								<p> Appropriately enhance principle-cent standards in platforms. Credibly orch popular
									services. </p>
							</div>
							<div class="feature-bar"></div>
						</div>
						<!-- feature back -->
						<div class="consen-feature-back">
							<div class="feature-back-title">
								<h3> Strategy </h3>
								<h2> Strategy Building </h2>
							</div>
							<div class="feature-back-icon">
								<a href="#">+</a>
							</div>
						</div>
					</div>
				</div>
				<!-- feature shape -->
				<div class="feature-shape bounce-animate2">
					<img src="assets/images/resource/all-shape4.png" alt="">
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End consen feature Area -->
	<!--==================================================-->





	<!--==================================================-->
	<!-- End consen about Area -->
	<!--==================================================-->
	<div class="about-area style-three">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-12">
					<div class="dreamit-about-thumb mr-lg-4">
						<img src="assets/images/about/about-2.png" alt="">
						<!-- about-shape -->
						<div class="about-shape-thumb1 bounce-animate2">
							<img src="assets/images/about/about-shpe.png" alt="">
						</div>
						<div class="about-shape-thumb3 bounce-animate4">
							<img src="assets/images/about/about-shape4.png" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="consen-section-title">
						<h5> About Consen </h5>
						<h2> We Are Global Stakeholder </h2>
						<h2> Over 2000+ <span> Companies </span></h2>
						<p class="about-text1"> Appropriately enhance principle-centered innovation rather than high
							standards in platforms. Credibly orchestrate functional. </p>
					</div>
					<div class="dreamit-icon-box">
						<div class="dreamit-icon-list">
							<ul>
								<li><i class="bi bi-arrow-right-circle"></i> <span> Communicate orthogonal process
									</span></li>
								<li><i class="bi bi-arrow-right-circle"></i> <span> Professionally grow cutting-edge
										paradigms </span></li>
							</ul>
						</div>
					</div>

					<!-- progress bar -->
					<div class="progress-box">
						<div class="circle_percent" data-percent="85">
							<div class="circle_inner">
								<div class="round_per"></div>
							</div>
						</div>
						<div class="circle-progress-title">
							<h4> Clients <br> Satisfactions </h4>
						</div>
						<div class="extra-progress">
							<div class="circle_percent" data-percent="95">
								<div class="circle_inner">
									<div class="round_per"></div>
								</div>
							</div>
							<div class="circle-progress-title">
								<h4> Finance <br> Consulting </h4>
							</div>
						</div>
					</div>
					<div class="about-button">
						<a href="about.html"> <i class="bi bi-gear"></i> More About </a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End consen about Area -->
	<!--==================================================-->





	<!--==================================================-->
	<!-- Start consen feature Area -->
	<!--==================================================-->
	<div class="service-area style-three">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-6">
					<div class="consen-section-title white pb-50 mb-1">
						<h5> What We Do? </h5>
						<h2> We Run All Kinds Of Services</h2>
						<h2> From <span> Technologies </span></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6 pl-1">
					<div class="dreamit-service-box">
						<div class="service-box-inner">
							<div class="em-service-icon1 upper">
								<img src="assets/images/resource/service-icon8.png" alt="">
							</div>
							<div class="em-service-title">
								<h3> Business Growth </h3>
							</div>
							<div class="service-bar"></div>
							<div class="em-service-text">
								<p> Dramatically cultivate qualit user centric growth stratege enable emerging. </p>
							</div>
							<div class="service-button">
								<a href="service-details.html"> Read More <i class="bi bi-plus"></i> </a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 pl-1">
					<div class="dreamit-service-box">
						<div class="service-box-inner">
							<div class="em-service-icon1">
								<img src="assets/images/resource/service-icon5.png" alt="">
							</div>
							<div class="em-service-title">
								<h3> Content Startegy </h3>
							</div>
							<div class="service-bar"></div>
							<div class="em-service-text">
								<p> Dramatically cultivate qualit user centric growth stratege enable emerging. </p>
							</div>
							<div class="service-button">
								<a href="service-details.html"> Read More <i class="bi bi-plus"></i> </a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 pl-1">
					<div class="dreamit-service-box">
						<div class="service-box-inner">
							<div class="em-service-icon1">
								<img src="assets/images/resource/service-icon6.png" alt="">
							</div>
							<div class="em-service-title">
								<h3> IT Consulting </h3>
							</div>
							<div class="service-bar"></div>
							<div class="em-service-text">
								<p> Dramatically cultivate qualit user centric growth stratege enable emerging. </p>
							</div>
							<div class="service-button">
								<a href="service-details.html"> Read More <i class="bi bi-plus"></i> </a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 pl-1">
					<div class="dreamit-service-box">
						<div class="service-box-inner">
							<div class="em-service-icon1">
								<img src="assets/images/resource/service-icon7.png" alt="">
							</div>
							<div class="em-service-title">
								<h3> Leadership Work </h3>
							</div>
							<div class="service-bar"></div>
							<div class="em-service-text">
								<p> Dramatically cultivate qualit user centric growth stratege enable emerging. </p>
							</div>
							<div class="service-button">
								<a href="service-details.html"> Read More <i class="bi bi-plus"></i> </a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="service-bottom-text">
						<p> Consulting and Finance Services Built Specially and Business <a href="service.html">Find
								Solutions</a></p>
					</div>
				</div>
				<div class="service-shape">
					<img src="assets/images/resource/all-shape3.png" alt="">
				</div>
				<div class="service-shape1 bounce-animate2">
					<img src="assets/images/resource/all-shape6.png" alt="">
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End consen feature Area -->
	<!--==================================================-->





	<!--==================================================-->
	<!-- Start consen case study Area -->
	<!--==================================================-->
	<div class="why-choose-us-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="consen-section-title">
						<h5> Why Choose Us? </h5>
						<h2> The Fatest Way To Achieve </h2>
						<h2> Technology <span> Consulting </span></h2>
						<p class="choose-text1"> Appropriately enhance principle-centered innovation rather than high
							standards in platforms. Credibly orchestrate functional. </p>
					</div>
					<div class="dreamit-icon-list">
						<ul>
							<li><i class="bi bi-arrow-right-circle"></i> <span> Communicate orthogonal process </span>
							</li>
							<li><i class="bi bi-arrow-right-circle"></i> <span> Professionally grow cutting-edge
									paradigms </span></li>
							<li><i class="bi bi-arrow-right-circle"></i> <span> Communicate orthogonal process </span>
							</li>
							<li><i class="bi bi-arrow-right-circle"></i> <span> Professionally grow cutting-edge
									paradigms </span></li>
						</ul>
					</div>
					<div class="why-choose-button">
						<a href="about.html"> <i class="bi bi-gear"></i> More About </a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="why-choose-us-thumb">
						<img src="assets/images/resource/why-choose.png" alt="">
						<!-- choose shape thumb -->
						<div class="why-choose-us-image">
							<div class="why-choose-us-shape-thumb bounce-animate">
								<img src="assets/images/resource/all-shape2.png" alt="">
							</div>
							<div class="why-choose-us-shape-thumb2 rotateme">
								<img src="assets/images/resource/case-shape.png" alt="">
							</div>
							<div class="why-choose-us-shape-thumb3 bounce-animate2">
								<img src="assets/images/resource/case-shape2.png" alt="">
							</div>
							<div class="why-choose-us-shape-thumb4">
								<img src="assets/images/about/about-shape4.png" alt="">
							</div>
						</div>
						<!-- end choose shape thumb -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End consen case study Area -->
	<!--==================================================-->





	<!--==================================================-->
	<!-- Start consen Testimonial Area -->
	<!--==================================================-->
	<div class="testimonial-area">
		<div class="container">
			<div class="row testi-rotate align-items-center">
				<div class="col-lg-7 col-md-6">
					<div class="consen-section-title white pb-50">
						<h5> Testimonials </h5>
						<h2> Consen Trusted Customers </h2>
						<h2> Awesome <span> Reviews </span></h2>
					</div>
				</div>
				<div class="col-lg-5 col-md-6">
					<div class="row">
						<div class="col-6">
							<div class="testi-counter-box upper">
								<div class="testi-counter-title">
									<h3 class="counter"> 1,372 </h3>
									<span>+</span>
									<p> Happy Customers </p>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="testi-counter-box">
								<div class="testi-counter-title">
									<h3 class="counter"> 100 </h3>
									<span>%</span>
									<p> Satisfaction Rate </p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="testi-shape-thumb1 rotateme">
					<img src="assets/images/resource/testimonial-map.png" alt="">
				</div>
			</div>
			<div class="row">
				<div class="testimonial_list owl-carousel">
					<div class="col-lg-12 pr-1">
						<div class="testimonial-single-box">
							<div class="testimonial-content1">
								<div class="single-quote-icon">
									<div class="quote-thumb">
										<img src="assets/images/resource/testi1.png" alt="">
									</div>
									<div class="quote-title">
										<h4>Philip Anthorpy</h4>
										<p>UI Designer</p>
									</div>
								</div>
								<div class="em-testimonial-text">
									<p>“Holisticly pursue market-more synerg through innovative paradi. Enthusia
										productivate media”.</p>
								</div>
								<div class="em-testi-start-icon">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 pr-1">
						<div class="testimonial-single-box">
							<div class="testimonial-content1">
								<div class="single-quote-icon">
									<div class="quote-thumb">
										<img src="assets/images/resource/testi3.png" alt="">
									</div>
									<div class="quote-title">
										<h4> Shilpa Shethy </h4>
										<p> CEO, Founder </p>
									</div>
								</div>
								<div class="em-testimonial-text">
									<p>“Holisticly pursue market-more synerg through innovative paradi. Enthusia
										productivate media”.</p>
								</div>
								<div class="em-testi-start-icon">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 pr-1">
						<div class="testimonial-single-box">
							<div class="testimonial-content1">
								<div class="single-quote-icon">
									<div class="quote-thumb">
										<img src="assets/images/resource/testi2.png" alt="">
									</div>
									<div class="quote-title">
										<h4> David Alexon </h4>
										<p> MH Manager </p>
									</div>
								</div>
								<div class="em-testimonial-text">
									<p>“Holisticly pursue market-more synerg through innovative paradi. Enthusia
										productivate media”.</p>
								</div>
								<div class="em-testi-start-icon">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 pr-1">
						<div class="testimonial-single-box">
							<div class="testimonial-content1">
								<div class="single-quote-icon">
									<div class="quote-thumb">
										<img src="assets/images/resource/testi3.png" alt="">
									</div>
									<div class="quote-title">
										<h4> Shilpa Shethy </h4>
										<p> CEO, Founder </p>
									</div>
								</div>
								<div class="em-testimonial-text">
									<p>“Holisticly pursue market-more synerg through innovative paradi. Enthusia
										productivate media”.</p>
								</div>
								<div class="em-testi-start-icon">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 pr-1">
						<div class="testimonial-single-box">
							<div class="testimonial-content1">
								<div class="single-quote-icon">
									<div class="quote-thumb">
										<img src="assets/images/resource/testi2.png" alt="">
									</div>
									<div class="quote-title">
										<h4> David Alexon </h4>
										<p> MH Manager </p>
									</div>
								</div>
								<div class="em-testimonial-text">
									<p>“Holisticly pursue market-more synerg through innovative paradi. Enthusia
										productivate media”.</p>
								</div>
								<div class="em-testi-start-icon">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 pr-1">
						<div class="testimonial-single-box">
							<div class="testimonial-content1">
								<div class="single-quote-icon">
									<div class="quote-thumb">
										<img src="assets/images/resource/testi1.png" alt="">
									</div>
									<div class="quote-title">
										<h4>Philip Anthorpy</h4>
										<p>UI Designer</p>
									</div>
								</div>
								<div class="em-testimonial-text">
									<p>“Holisticly pursue market-more synerg through innovative paradi. Enthusia
										productivate media”.</p>
								</div>
								<div class="em-testi-start-icon">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 pr-1">
						<div class="testimonial-single-box">
							<div class="testimonial-content1">
								<div class="single-quote-icon">
									<div class="quote-thumb">
										<img src="assets/images/resource/testi2.png" alt="">
									</div>
									<div class="quote-title">
										<h4> David Alexon </h4>
										<p> MH Manager </p>
									</div>
								</div>
								<div class="em-testimonial-text">
									<p>“Holisticly pursue market-more synerg through innovative paradi. Enthusia
										productivate media”.</p>
								</div>
								<div class="em-testi-start-icon">
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-fill"></i>
									<i class="bi bi-star-half"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="testi-shape">
					<div class="testi-shape-thumb">
						<img src="assets/images/resource/all-shape5.png" alt="">
					</div>

				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End consen Testimonial Area -->
	<!--==================================================-->





	<!--==================================================-->
	<!-- Start consen case study Area -->
	<!--==================================================-->
	<div class="case-study-area style-three">
		<div class="container">
			<div class="row case-study-bg">
				<div class="col-lg-12">
					<div class="consen-section-title upper text-center pb-50">
						<h5> Case Studies </h5>
						<h2> We Server the Best Works </h2>
						<h2>View <span> Case Studies </span></h2>
					</div>
				</div>
				<div class="portfolio-shape">
					<div class="port-shape-thumb rotateme">
						<img src="assets/images/resource/red-dot.png" alt="">
					</div>
					<div class="port-shape-thumb2 bounce-animate2">
						<img src="assets/images/resource/all-shape6.png" alt="">
					</div>
				</div>
				<div class="col-lg-12">
					<div class="portfolio_nav">
						<div class="portfolio_menu">
							<ul class="menu-filtering">
								<li class="current_menu_item" data-filter="*"> All items </li>
								<li data-filter=".physics"> Stregy </li>
								<li data-filter=".chemistry"> Ficulties </li>
								<li data-filter=".math"> Coaching </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row image_load">
				<div class="col-lg-4 col-md-6 grid-item physics english">
					<div class="case-study-single-box">
						<div class="case-study-thumb2">
							<img src="assets/images/project/ING.jpg" alt="">
							<!-- port icon -->
							<div class="single_portfolio_icon">
								<a class="portfolio-icon venobox vbox-item" data-gall="myportfolio"
									href="assets/images/project/study1.png"><i class="bi bi-card-image"></i></a>
							</div>
							<div class="case-study-content">
								<div class="case-study-content-inner">
									<div class="case-study-title">
										<h6> Consulting </h6>
										<h3> <a href="portfolio-details.html"> Consulting for Business Organizations
											</a> </h3>
									</div>
								</div>
							</div>
							<div class="video-icon style-two">
								<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true"
									href="https://youtu.be/BS4TUd7FJSg"><i class="fa fa-play"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 grid-item physics chemistry math">
					<div class="case-study-single-box">
						<div class="case-study-thumb2">
							<img src="assets/images/project/study2.png" alt="">
							<!-- port icon -->
							<div class="single_portfolio_icon">
								<a class="portfolio-icon venobox vbox-item" data-gall="myportfolio"
									href="assets/images/project/study2.png"><i class="bi bi-card-image"></i></a>
							</div>
							<div class="case-study-content">
								<div class="case-study-content-inner">
									<div class="case-study-title">
										<h6> Consulting </h6>
										<h3> <a href="portfolio-details.html"> Consulting for Business Organizations
											</a> </h3>
									</div>
								</div>
							</div>
							<div class="video-icon style-two">
								<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true"
									href="https://youtu.be/BS4TUd7FJSg"><i class="fa fa-play"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 grid-item chemistry english">
					<div class="case-study-single-box">
						<div class="case-study-thumb2">
							<img src="assets/images/project/study3.png" alt="">
							<!-- port icon -->
							<div class="single_portfolio_icon">
								<a class="portfolio-icon venobox vbox-item" data-gall="myportfolio"
									href="assets/images/project/study3.png"><i class="bi bi-card-image"></i></a>
							</div>
							<div class="case-study-content">
								<div class="case-study-content-inner">
									<div class="case-study-title">
										<h6> Consulting </h6>
										<h3> <a href="portfolio-details.html"> Consulting for Business Organizations
											</a> </h3>
									</div>
								</div>
							</div>
							<div class="video-icon style-two">
								<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true"
									href="https://youtu.be/BS4TUd7FJSg"><i class="fa fa-play"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 grid-item math english">
					<div class="case-study-single-box">
						<div class="case-study-thumb2">
							<img src="assets/images/project/study4.png" alt="">
							<!-- port icon -->
							<div class="single_portfolio_icon">
								<a class="portfolio-icon venobox vbox-item" data-gall="myportfolio"
									href="assets/images/project/study4.png"><i class="bi bi-card-image"></i></a>
							</div>
							<div class="case-study-content">
								<div class="case-study-content-inner">
									<div class="case-study-title">
										<h6> Consulting </h6>
										<h3> <a href="portfolio-details.html"> Consulting for Business Organizations
											</a> </h3>
									</div>
								</div>
							</div>
							<div class="video-icon style-two">
								<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true"
									href="https://youtu.be/BS4TUd7FJSg"><i class="fa fa-play"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 grid-item math physics">
					<div class="case-study-single-box">
						<div class="case-study-thumb2">
							<img src="assets/images/project/study5.png" alt="">
							<!-- port icon -->
							<div class="single_portfolio_icon">
								<a class="portfolio-icon venobox vbox-item" data-gall="myportfolio"
									href="assets/images/project/study5.png"><i class="bi bi-card-image"></i></a>
							</div>
							<div class="case-study-content">
								<div class="case-study-content-inner">
									<div class="case-study-title">
										<h6> Consulting </h6>
										<h3> <a href="portfolio-details.html"> Consulting for Business Organizations
											</a> </h3>
									</div>
								</div>
							</div>
							<div class="video-icon style-two">
								<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true"
									href="https://youtu.be/BS4TUd7FJSg"><i class="fa fa-play"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 grid-item chemistry physics">
					<div class="case-study-single-box">
						<div class="case-study-thumb2">
							<img src="assets/images/project/study6.png" alt="">
							<!-- port icon -->
							<div class="single_portfolio_icon">
								<a class="portfolio-icon venobox vbox-item" data-gall="myportfolio"
									href="assets/images/project/study6.png"><i class="bi bi-card-image"></i></a>
							</div>
							<div class="case-study-content">
								<div class="case-study-content-inner">
									<div class="case-study-title">
										<h6> Consulting </h6>
										<h3> <a href="portfolio-details.html"> Consulting for Business Organizations
											</a> </h3>
									</div>
								</div>
							</div>
							<div class="video-icon style-two">
								<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true"
									href="https://youtu.be/BS4TUd7FJSg"><i class="fa fa-play"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End consen case study Area -->
	<!--==================================================-->





	<!--==================================================-->
	<!-- Start consen process Area -->
	<!--==================================================-->
	<div class="process-area style-two">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7 col-md-6">
					<div class="consen-section-title white pb-4 pb-lg-5">
						<h5> process </h5>
						<h2> We follow some easy steps to </h2>
						<h2> developed <span> Projects </span></h2>
					</div>
				</div>
				<div class="col-lg-5 col-md-6">
					<div class="process-text">
						<p> Monotonectally brand worldwide value before in seamless process Collaboratively initiate
							strategic expertise after functionalized and formulate based internal organic. </p>
					</div>
				</div>
			</div>
			<!-- process shape -->
			<div class="process-shape">
				<div class="service-shape">
					<img src="assets/images/resource/all-shape3.png" alt="">
				</div>
				<div class="process-shape-thumb bounce-animate2">
					<img src="assets/images/resource/all-shape6.png" alt="">
				</div>
			</div>
		</div>
	</div>
	<div class="process-extra-area style-two">
		<div class="container">
			<div class="row justify-content-center process-bg">
				<div class="col-lg-4 col-sm-6">
					<div class="process-single-box2">
						<div class="process-icon-thumb">
							<img src="assets/images/resource/a.png" alt="">
						</div>
						<div class="process-title">
							<h3>Idea Generate</h3>
							<p>Collaboratively initiate strategic ex formulate based internal.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="process-single-box2 responsive">
						<div class="process-icon-thumb">
							<img src="assets/images/resource/b.png" alt="">
						</div>
						<div class="process-title">
							<h3> System Design </h3>
							<p>Collaboratively initiate strategic ex formulate based internal.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="process-single-box2 upper">
						<div class="process-icon-thumb">
							<img src="assets/images/resource/c.png" alt="">
						</div>
						<div class="process-title">
							<h3> Report Analysis </h3>
							<p>Collaboratively initiate strategic ex formulate based internal.</p>
						</div>
					</div>
				</div>
				<div class="process-shape">
					<div class="process-shape-thumb3 bounce-animate3">
						<img src="assets/images/resource/all-shape2.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End consen process Area -->
	<!--==================================================-->





	<!--==================================================-->
	<!-- Start consen Team Area -->
	<!--==================================================-->
	<div class="team_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="consen-section-title upper text-center pb-60">
						<h5> Team Member </h5>
						<h2> Let’s Meet with Our <span> Experts </span></h2>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-4 col-sm-6">
					<div class="single_team">
						<div class="single_team_thumb1">
							<img src="assets/images/resource/team-1.jpg" alt="logo">
						</div>
						<div class="single_team_content">
							<div class="team-title">
								<h4>Silvia Garden</h4>
								<span>Designer</span>
							</div>
							<div class="single_team_icon">
								<a href="#"> <i class="bi bi-facebook"></i> </a>
								<a href="#"> <i class="bi bi-twitter"></i> </a>
								<a href=""><i class="bi bi-dribbble"></i></a>
								<a href="#"> <i class="bi bi-instagram"> </i> </a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="single_team">
						<div class="single_team_thumb1">
							<img src="assets/images/resource/team-2.jpg" alt="image">
						</div>
						<div class="single_team_content">
							<div class="team-title">
								<h4> Monalisha Shen </h4>
								<span> IT-Executive </span>
							</div>
							<div class="single_team_icon">
								<a href="#"> <i class="bi bi-facebook"></i> </a>
								<a href="#"> <i class="bi bi-twitter"></i> </a>
								<a href=""><i class="bi bi-dribbble"></i></a>
								<a href="#"> <i class="bi bi-instagram"> </i> </a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="single_team">
						<div class="single_team_thumb1">
							<img src="assets/images/resource/team-3.jpg" alt="image">
						</div>
						<div class="single_team_content">
							<div class="team-title">
								<h4>Bubli Khanam</h4>
								<span>Developer</span>
							</div>
							<div class="single_team_icon">
								<a href="#"> <i class="bi bi-facebook"></i> </a>
								<a href="#"> <i class="bi bi-twitter"></i> </a>
								<a href=""><i class="bi bi-dribbble"></i></a>
								<a href="#"> <i class="bi bi-instagram"> </i> </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End consen Team Area -->
	<!--==================================================-->





	<!--==================================================-->
	<!-- Start faq Area -->
	<!--==================================================-->
	<div class="faq-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 pl-0">
					<!-- Start Accordion -->
					<div class="tab_container">
						<div class="consen-section-title white pb-40 mb-1">
							<h5> FAQ </h5>
							<h2> Freequently Asked <span> Question </span></h2>
						</div>
						<div id="tab1" class="tab_content">
							<ul class="accordion">
								<li>
									<a><span> What is Finance Consultant? </span></a>
									<p>Continually cultivate inexpensive convergence whereas collaborative communitie.
										Credib generate team building vorta after professional value. Proactively
										administrate enabled paradigm</p>
								</li>
								<li>
									<a><span> How to Book a New Consultant? </span></a>
									<p>Continually cultivate inexpensive convergence whereas collaborative communitie.
										Credib generate team building vorta after professional value. Proactively
										administrate enabled paradigm</p>
								</li>
								<li>
									<a><span> What is the Benifits of Busines ? </span></a>
									<p>Continually cultivate inexpensive convergence whereas collaborative communitie.
										Credib generate team building vorta after professional value. Proactively
										administrate enabled paradigm</p>
								</li>
								<li>
									<a><span> How to Book a New Consultant? </span></a>
									<p>Continually cultivate inexpensive convergence whereas collaborative communitie.
										Credib generate team building vorta after professional value. Proactively
										administrate enabled paradigm</p>
								</li>
							</ul>
						</div>
					</div>
					<!-- End Accordion -->
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="contract-form-bg">
						<div class="contact-form-title">
							<h4> Free Consultant </h4>
							<p> 24/7 anytime Open Our Services </p>
						</div>
						<div class="contact_from">
							<form action="https://formspree.io/f/myyleorq" method="POST" id="dreamit-form">
								<div class="row">
									<div class="col-lg-12">
										<div class="form_box mb-20">
											<input type="text" name="name" placeholder="Name*">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form_box mb-20">
											<input type="email" name="email" placeholder="Your E-Mail*">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form_box mb-20">
											<input type="text" name="phone" placeholder="Phone Number">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form_box mb-20">
											<textarea name="message" id="message" cols="30" rows="10"
												placeholder="Write a Message"></textarea>
										</div>
										<div class="quote_button">
											<button class="btn" type="submit"> <i class="bi bi-gear"></i> Free
												Consultant </button>
										</div>
									</div>
								</div>
							</form>
							<div id="status"></div>
						</div>
					</div>
				</div>
				<div class="form-shape">
					<div class="testi-shape-thumb">
						<img src="assets/images/resource/all-shape5.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End consen faq Area -->
	<!--==================================================-->





	<!--==================================================-->
	<!-- Start consen Blog Area -->
	<!--==================================================-->
	<div class="blog-area style-two">
		<div class="container">
			<div class="row pb-40">
				<div class="col-lg-7 col-md-6">
					<div class="consen-section-title mobile-center">
						<h2> We Run All Kinds Of Services </h2>
						<h2> From <span> Technologies </span></h2>
					</div>
				</div>
				<div class="col-lg-5 col-md-6">
					<div class="consen-button text-right pt-4 pt-md-0">
						<a href="blog-grid.html"> <i class="bi bi-gear"></i> View all Blog </a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-blog-box">
						<div class="single-blog-thumb">
							<img src="assets/images/resource/blog1.png" alt="">
							<div class="blog-top-button">
								<a href="#"> GRAPHIC </a>
							</div>
						</div>
						<div class="em-blog-content">
							<div class="meta-blog-text">
								<p> August 25, 2023 </p>
							</div>
							<div class="em-blog-title">
								<h2> <a href="blog-details.html"> Popular Consultants are big Meetup 2023 </a> </h2>
							</div>
							<div class="em-blog-icon">
								<div class="em-blog-thumb">
									<img src="assets/images/resource/blog-icon.png" alt="">
								</div>
								<div class="em-blog-icon-title">
									<h6> Alex Collins </h6>
								</div>
							</div>
							<div class="blog-button">
								<a href="blog-details.html"> Learn More <i class="bi bi-plus"></i> </a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog-box">
						<div class="single-blog-thumb">
							<img src="assets/images/resource/blog2.png" alt="">
							<div class="blog-top-button">
								<a href="#"> DEVELOPMENT </a>
							</div>
						</div>
						<div class="em-blog-content">
							<div class="meta-blog-text">
								<p> August 21, 2023 </p>
							</div>
							<div class="em-blog-title">
								<h2> <a href="blog-details.html"> How to Increase Business Products Sales </a> </h2>
							</div>
							<div class="em-blog-icon">
								<div class="em-blog-thumb">
									<img src="assets/images/resource/blog-icon.png" alt="">
								</div>
								<div class="em-blog-icon-title">
									<h6> Julia Moris </h6>
								</div>
							</div>
							<div class="blog-button">
								<a href="blog-details.html"> Learn More <i class="bi bi-plus"></i> </a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog-box">
						<div class="single-blog-thumb">
							<img src="assets/images/resource/blog3.png" alt="">
							<div class="blog-top-button">
								<a href="#"> DESIGN </a>
							</div>
						</div>
						<div class="em-blog-content">
							<div class="meta-blog-text">
								<p> August 20, 2023 </p>
							</div>
							<div class="em-blog-title">
								<h2> <a href="blog-details.html"> Top 10 Most Populars Google Chrome app</a>
								</h2>
							</div>
							<div class="em-blog-icon">
								<div class="em-blog-thumb">
									<img src="assets/images/resource/blog-icon.png" alt="">
								</div>
								<div class="em-blog-icon-title">
									<h6> Amantha </h6>
								</div>
							</div>
							<div class="blog-button">
								<a href="blog-details.html"> Learn More <i class="bi bi-plus"></i> </a>
							</div>
						</div>
					</div>
				</div>
				<div class="blog-shape">
					<div class="port-shape-thumb2 bounce-animate2">
						<img src="assets/images/resource/all-shape6.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End consen Blog Area -->
	<!--==================================================-->





	<!--==================================================-->
	<!-- Start consen Subscribe Area -->
	<!--==================================================-->
	<div class="subscribe-area style-two mt-5 mt-sm-0">
		<div class="container">
			<div class="subscribe">
				<div class="row align-items-center">
					<div class="col-lg-4 col-md-12">
						<div class="subscribe-title">
							<h1>Get your Free Business Consolution</h1>
						</div>
					</div>
					<div class="col-lg-8 col-md-12">
						<a href="tel:09837393403" class="subscribe-icon">
							<i class="bi bi-telephone-inbound"></i>
						</a>
						<div class="subscribe-title2">
							<h1> +98 376 (2890) 100 </h1>
							<p> example@gmail.com </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End consen Subscribe Area -->
	<!--==================================================-->





	<!--==================================================-->
	<!-- Start consen Footer Middle Area -->
	<!--==================================================-->

	<div class="footer-middle style-two">
		<div class="container">
			<div class="footer-bg">
				<div class="row">
					<div class="col-lg-4 col-sm-6">
						<div class="widget widgets-company-info mb-4 mb-lg-0">
							<div class="company-info-desc pr-2">
								<h4 class="widget-title"> About Us </h4>
								<p>Busines Consulting is optimize standing manufactured products and installation
									synergy.
									Professionally predominat why professional business</p>
							</div>
							<div class="follow-company-icon">
								<a class="social-icon-color" href="#"> <i class="bi bi-facebook"></i> </a>
								<a class="social-icon-color2" href="#"> <i class="bi bi-instagram"> </i> </a>
								<a class="social-icon-color1" href="#"> <i class="bi bi-twitter"></i> </a>
								<a class="social-icon-color3" href="#"> <i class="bi bi-youtube"></i> </a>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-6">
						<div class="widget widget-nav-menu">
							<h4 class="widget-title">Company</h4>
							<div class="menu-quick-link-content">
								<ul class="footer-menu">
									<li><a href="index.html"> Home </a></li>
									<li><a href="about.html"> About Us</a></li>
									<li><a href="contact.html"> Contact Us </a></li>
									<li><a href="service.html"> Service </a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-6">
						<div class="widget widget-nav-menu">
							<h4 class="widget-title"> Services </h4>
							<div class="menu-quick-link-content">
								<ul class="footer-menu">
									<li><a href="#"> Strategy & Planing </a></li>
									<li><a href="#"> Consumer Market </a></li>
									<li><a href="#"> Data Analysis </a></li>
									<li><a href="#"> Corporate Finance </a></li>
									<li><a href="#"> Market Research </a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div id="em-recent-post-widget" class="mt-5 mt-sm-0">
							<div class="single-widget-item">
								<h4 class="widget-title pb-2">Popular Posts</h4>
								<div class="contact-form-footer ">
									<form>
										<div class="subscribe_form">
											<input type="email" name="email" id="email" class="form-control" required
												data-error="Please enter your email" placeholder="Enter E-Mail">
											<button type="submit" class="btn"> <i class="bi bi-send-check"></i>
											</button>
										</div>
										<div class="subscribe_form_send">

										</div>
									</form>
								</div>
								<div class="recent-post-item">
									<div class="recent-post-thumb1">
										<a href="#">
											<img src="assets/images/resource/google-play.png" alt="">
										</a>
									</div>
									<div class="recent-post-thumb">
										<a href="#">
											<img src="assets/images/resource/app-store.png" alt="">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="foorer-shape">
					<div class="footer-thumb">
						<img src="assets/images/resource/red-dot.png" alt="">
					</div>
					<div class="footer-thumb1 bounce-animate2">
						<img src="assets/images/resource/all-shape.png" alt="">
					</div>
				</div>
			</div>

		</div>
		<div class="footer-bottom-area d-flex align-items-center">
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col-md-4">
						<div class="consen-logo">
							<a class="logo_thumb" href="index.html" title="consen">
								<img src="assets/images/logo.png" alt="logo">
							</a>
						</div>
					</div>
					<div class="col-md-8">
						<div class="footer-bottom-content">
							<div class="footer-bottom-content-copy">
								<p>© 2023 <span>Consen</span> all rights reserved. Design By Dream-IT.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End consen Footer Middle Area -->
	<!--==================================================-->





	<!--==================================================-->
	<!-- Start scrollup section Area -->
	<!--==================================================-->
	<!-- scrollup section -->
	<div class="scroll-area">
		<div class="top-wrap">
			<div class="go-top-btn-wraper">
				<div class="go-top go-top-button">
					<i class="fas fa-arrow-up"></i>
					<i class="fas fa-arrow-up"></i>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- Start scrollup section Area -->
	<!--==================================================-->




	<!-- jquery js -->
	<script src="assets/js/vendor/jquery-3.6.2.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<!-- bootstrap js -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- carousel js -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- counterup js -->
	<script src="assets/js/jquery.counterup.min.js"></script>
	<!-- waypoints js -->
	<script src="assets/js/waypoints.min.js"></script>
	<!-- wow js -->
	<script src="assets/js/wow.js"></script>
	<!-- imagesloaded js -->
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<!-- venobox js -->
	<script src="venobox/venobox.js"></script>
	<!-- venobox min js -->
	<script src="venobox/venobox.min.js"></script>

	<!--  animated-text js -->
	<script src="assets/js/animated-text.js"></script>
	<!-- isotope js -->
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<!-- jquery meanmenu js -->
	<script src="assets/js/jquery.meanmenu.js"></script>

	<!-- jquery scrollup js -->
	<script src="assets/js/jquery.scrollUp.js"></script>
	<!-- theme js -->
	<script src="assets/js/theme.js"></script>
	<script src="assets/js/jquery.barfiller.js"></script>
	<!-- jquery js -->
	<script>
		"use strict";
		jQuery(document).ready(function (o) {
			0 < o(".offset-side-bar").length &&
				o(".offset-side-bar").on("click", function (e) {
					e.preventDefault(), e.stopPropagation(), o(".cart-group").addClass("isActive");
				}),
				0 < o(".close-side-widget").length &&
				o(".close-side-widget").on("click", function (e) {
					e.preventDefault(), o(".cart-group").removeClass("isActive");
				}),
				0 < o(".navSidebar-button").length &&
				o(".navSidebar-button").on("click", function (e) {
					e.preventDefault(), e.stopPropagation(), o(".info-group").addClass("isActive");
				}),
				0 < o(".close-side-widget").length &&
				o(".close-side-widget").on("click", function (e) {
					e.preventDefault(), o(".info-group").removeClass("isActive");
				}),
				o("body").on("click", function (e) {
					o(".info-group").removeClass("isActive"), o(".cart-group").removeClass("isActive");
				}),
				o(".xs-sidebar-widget").on("click", function (e) {
					e.stopPropagation();
				}),
				0 < o(".xs-modal-popup").length &&
				o(".xs-modal-popup").magnificPopup({
					type: "inline",
					fixedContentPos: !2,
					fixedBgPos: !0,
					overflowY: "auto",
					closeBtnInside: !2,
					callbacks: {
						beforeOpen: function () {
							this.st.mainClass = "my-mfp-slide-bottom xs-promo-popup";
						},
					},
				});
		});
	</script>
</body>

</html>