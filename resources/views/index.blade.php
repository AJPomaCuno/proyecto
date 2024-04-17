<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Consen - Finance Consulting HTML5 Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="{{asset('images/fav-icon/icon.png')}}">
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('resources/css/bootstrap.min.css') }}" type="text/css" media="all">
	<!-- carousel CSS -->
	<link rel="stylesheet" href="{{ asset('resources/css/owl.carousel.min.css') }}" type="text/css" media="all">
	<!-- animate CSS -->
	<link rel="stylesheet" href="{{ asset('resources/css/animate.css') }}" type="text/css" media="all">
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
	<link rel="stylesheet" href="{{ asset('resources/css/app.css') }}" type="text/css" media="all">
	<!-- responsive CSS -->
	<link rel="stylesheet" href="{{ asset('resources/css/responsive.css') }}" type="text/css" media="all">

	<!-- modernizr js -->
	<script src="{{ asset('resources/js/modernizr-3.5.0.min.js') }}"></script>
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
	<!-- loder-->
	@include('components.header')
	<!--==================================================-->
	<!-- Start consen Main Menu Area -->
	<!--==================================================-->
	

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
					<li><a href="#">PRODUCTOS </a>
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
					<li><a href="#">SERVICIOS </a>
						<ul class="sub-menu">
							<li><a href="service.html">Our Service</a></li>
							<li><a href="service-details.html">Service Details</a></li>
						</ul>
					</li>
					<li><a href="portfolio.html">CARRERA</a></li>
					<li><a href="#">UPEA </a>
						<ul class="sub-menu">
							<li><a href="blog-grid.html">Blog Gird</a></li>
							<li><a href="blog-list.html">Blog List</a></li>
							<li><a href="blog-2column.html">Blog-2Column</a></li>
							<li><a href="blog-details.html">Blog Details</a></li>
						</ul>
					</li>
					<li><a href="contact.html">CONTACTO</a></li>
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
	<div class="slider-area d-flex align-items-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7 col-md-6">
					<div class="slider-content">
						<h3> Work With Consen </h3>
						<h1> Unidad de Tecnogias </h1>
						<h1> de Informacion y <span>Comunicacion</span> </h1>
						<p> Monotonectally implement integrated commerce and distributed is conveniently unleash B2B
							customer service via long</p>
					</div>
					<div class="lines pt-20 pb-40">
						<div class="line"></div>
					</div>
					<div class="banner-buttons">
						<div class="slider-button">
							<a href="service.html"> Trabajar Juntos <i class="bi bi-plus"></i> </a>
						</div>
						<div class="slider-contact-box">
							<a class="contact-icon" href="tel:+983217690326"><img src="{{asset('images/slider/call.png')}}"
									alt="call icon"></a>

							<div class="contact-number">
								<span> Llamar Todos los Días </span>
								<h3><a href="tel:+983217690326">+98 321 (7690) 326</a> </h3>
							</div>
						</div>
					</div>

				</div>
				<div class="col-lg-5 col-md-6 ">
					<div class="slider-thumb">
						<img src="{{ asset('images/slider/ubic.png') }}" alt="">
					</div>
					<div class="video-icon">
						<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true"
							href="https://youtu.be/vcyDuvWb4Tw?t=2"><i class="fa fa-play"></i></a>
					</div>
				</div>
				<!-- slider shape -->
				<div class="slider-shape">
					<div class="slider-shape-thumb">
						<img src="{{asset('images/slider/hero-shape.png') }}" alt="">
					</div>
					<div class="slider-shape-thumb2">
						<img src="{{ asset('images/slider/hero-shape2.png') }}" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!--End consen slider Area  -->
	<!--==================================================-->






	<!--==================================================-->
	<!-- Start consen feature Area -->
	<!--==================================================-->
	<div class="service-area">
		<div class="container">
			<div class="row align-items-center mb-90">
				<div class="col-lg-7 col-md-8 pl-0">
					<div class="consen-section-title mobile-center">
						<h2> Ofrecemos todo tipo </h2>
						<h2> de servicios, <span> desde tecnologías </span></h2>
					</div>
				</div>
				<div class="col-lg-5 col-md-4">
					<div class="consen-button text-right">
						<a href="service.html"> Todos los Servicios <i class="bi bi-plus"></i> </a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6 p-0">
					<div class="dreamit-service-box">
						<div class="service-box-inner">
							<div class="em-service-icon">
								<img src="{{ asset('images/resource/service-icon.png') }}" alt="">
							</div>
							<div class="em-service-title">
								<h2> Interacture Capacity Planning </h2>
							</div>
							<div class="service-number">
								<h1> 01 </h1>
							</div>
							<div class="em-service-text">
								<p> Dramatically cultivate from quality user centric growth strateges emerging </p>
							</div>
							<div class="service-button">
								<a href="service-details.html"> Read More <i class="bi bi-plus"></i> </a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 p-0">
					<div class="dreamit-service-box">
						<div class="service-box-inner">
							<div class="em-service-icon">
								<img src="{{asset('images/resource/service-icon2.png') }}" alt="">
							</div>
							<div class="em-service-title">
								<h2> New Technology Services </h2>
							</div>
							<div class="service-number">
								<h1> 02 </h1>
							</div>
							<div class="em-service-text">
								<p> Dramatically cultivate from quality user centric growth strateges emerging </p>
							</div>
							<div class="service-button">
								<a href="service-details.html"> Read More <i class="bi bi-plus"></i> </a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 p-0">
					<div class="dreamit-service-box">
						<div class="service-box-inner">
							<div class="em-service-icon">
								<img src="{{asset('images/resource/service-icon3.png')}}" alt="">
							</div>
							<div class="em-service-title">
								<h2> Cloud Computing Solutions </h2>
							</div>
							<div class="service-number">
								<h1> 03 </h1>
							</div>
							<div class="em-service-text">
								<p> Dramatically cultivate from quality user centric growth strateges emerging </p>
							</div>
							<div class="service-button">
								<a href="service-details.html"> Read More <i class="bi bi-plus"></i> </a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 p-0">
					<div class="dreamit-service-box">
						<div class="service-box-inner">
							<div class="em-service-icon">
								<img src="{{asset('images/resource/service-icon.png')}}" alt="">
							</div>
							<div class="em-service-title">
								<h2> Top Information Technology </h2>
							</div>
							<div class="service-number">
								<h1> 04 </h1>
							</div>
							<div class="em-service-text">
								<p> Dramatically cultivate from quality user centric growth strateges emerging </p>
							</div>
							<div class="service-button">
								<a href="service-details.html"> Read More <i class="bi bi-plus"></i> </a>
							</div>
						</div>
					</div>
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
	<div class="about-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-12">
					<div class="dreamit-about-thumb">
						<img src="{{asset('images/about/about.png')}}" alt="">
						<!-- about-shape -->
						<div class="about-shape-thumb1 bounce-animate2">
							<img src="{{asset('images/about/about-shape2.png')}}" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 ">
					<div class="consen-section-title white pb-10">
						<h2> The Fatest Way To Achieve</h2>
						<h2> Your Business <span> Success </span></h2>
						<p>Continually generate 2.0 communities and client-focused products. In synergize strategic
							manufactured products whereas levera.</p>
					</div>
					<div class="lines style-two pb-15">
						<div class="line"></div>
					</div>

					<div class="dreamit-icon-title">
						<h4> We are Since <span>2007 to Present</span> in Sandigo, USA </h4>
					</div>
					<div class="dreamit-icon-list">
						<ul>
							<li><i class="flaticon-tick"></i> <span> Credibly reinvent sticky partnerships done </span>
							</li>
							<li><i class="flaticon-tick"></i> <span> Distinctively evisculate data superior content.
								</span></li>
							<li><i class="flaticon-tick"></i> <span> Monotonectally foster open source </span></li>
						</ul>
					</div>
					<div class="about-button">
						<a href="about.html"> Learn More <i class="bi bi-plus"></i> </a>
					</div>
				</div>
				<!-- about thumb -->
				<div class="about-shape-thumb2 bounce-animate4">
					<img src="{{asset('images/resource/all-shape.png')}}" alt="">
				</div>
			</div>
			<div class="row counter-vip">
				<div class="col-lg-12">
					<div class="couter-top-title">
						<h3> Consen Finished this Achivement in 7 Years </h3>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="counter-single-box">
						<div class="counter-title">
							<h4 class="counter">1,372</h4>
							<p>Project Complete</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="counter-single-box">
						<div class="counter-title">
							<h4 class="counter">23</h4>
							<span>+</span>
							<p>Years Experience</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="counter-single-box">
						<div class="counter-title">
							<h4 class="counter">38</h4>
							<span>+</span>
							<p>Exper Member</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-6">
					<div class="counter-single-box">
						<div class="counter-title">
							<h4 class="counter">1,372</h4>
							<span>+</span>
							<p>Satisfactions Rate</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End consen about Area -->
	<!--==================================================-->






	<!--==================================================-->
	<!-- End consen about Area -->
	<!--==================================================-->
	<div class="ceo-cod-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-12 ">
					<div class="consen-section-title">
						<h2> What Say Our CEO, About</h2>
						<h2> Consen <span> Customers </span></h2>
						<div class="lines style-three pt-20 pb-10">
							<div class="line"></div>
						</div>
						<p class="about-text"> “We help Our Clients to Renew Their Business Function to Create Brandable
							Organizations” </p>
						<p class="about-text2">Appropriately enhance principle-centered innovation rather than high
							standards in platforms. Credibly orchestrate functional markets through multidisciplinary
							services. Uniquely strategize transparent technology and user friendly ideas markets. </p>
					</div>
					<div class="dreamit-ceo-title">
						<h4> Philip Antrophy </h4>
						<span>SEO & Founder</span>
					</div>
					<div class="about-button">
						<a href="testimonial.html"> Clients Review <i class="bi bi-plus"></i> </a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="dreamit-about-thumb1">
						<img src="{{asset('images/about/about2.png')}}" alt="">
					</div>
					<div class="about-shape-box">
						<div class="about-shape-thumb bounce-animate">
							<img src="{{asset('images/about/ab-shape.png')}}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End consen about Area -->
	<!--==================================================-->






	<!--==================================================-->
	<!-- Start consen case study Area -->
	<!--==================================================-->
	<div class="case-study-area">
		<div class="container">
			<div class="row case-study-bg align-items-center mb-40">
				<div class="col-lg-6 col-md-8">
					<div class="consen-section-title mobile-center white ">
						<h2> We Serve the Best Works</h2>
						<h2> View <span> Case Studies </span></h2>
					</div>
				</div>
				<div class="col-lg-6 col-md-4">
					<div class="consen-button text-right">
						<a href="portfolio.html"> All Project <i class="bi bi-plus"></i> </a>
					</div>
				</div>
				<div class="case-study-shape">
					<div class="case-shape-thumb bounce-animate4">
						<img src="{{asset('images/resource/red-dot.png')}}" alt="">
					</div>
					<div class="case-shape-thumb1 bounce-animate2">
						<img src="{{asset('images/resource/all-shape.png')}}" alt="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="case-study owl-carousel">
					<div class="col-lg-12">
						<div class="case-study-single-box">
							<div class="case-study-thumb">
								<img src="{{asset('images/project/case2.png')}}" alt="">
								<div class="case-study-content">
									<div class="case-study-title">
										<h6> Consulting </h6>
										<h3> <a href="portfolio-details.html"> Consulting for Business Organizations</a>
										</h3>
									</div>
									<div class="case-button">
										<a href="portfolio-details.html">Read More <i class="bi bi-plus"></i> </a>
									</div>
								</div>
								<div class="video-icon style-two">
									<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube"
										data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg"><i
											class="fa fa-play"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="case-study-single-box">
							<div class="case-study-thumb">
								<img src="{{asset('images/project/case3.png')}}" alt="">
								<div class="case-study-content">
									<div class="case-study-title">
										<h6> Consulting </h6>
										<h3> <a href="portfolio-details.html"> Strategy and Planning Building Idea</a>
										</h3>
									</div>
									<div class="case-button">
										<a href="portfolio-details.html">Read More <i class="bi bi-plus"></i> </a>
									</div>
								</div>
								<div class="video-icon style-two">
									<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube"
										data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg"><i
											class="fa fa-play"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="case-study-single-box">
							<div class="case-study-thumb">
								<img src="{{asset('images/project/case1.png')}}" alt="">
								<div class="case-study-content">
									<div class="case-study-title">
										<h6> Consulting </h6>
										<h3> <a href="portfolio-details.html"> Corporate Finance for helpfulness
												Markets</a>
										</h3>
									</div>
									<div class="case-button">
										<a href="portfolio-details.html">Read More <i class="bi bi-plus"></i> </a>
									</div>
								</div>
								<div class="video-icon style-two">
									<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube"
										data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg"><i
											class="fa fa-play"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="case-study-single-box">
							<div class="case-study-thumb">
								<img src="{{asset('images/project/case2.png')}}" alt="">
								<div class="case-study-content">
									<div class="case-study-title">
										<h6> Consulting </h6>
										<h3> <a href="portfolio-details.html"> Consulting for Business Organizations</a>
										</h3>
									</div>
									<div class="case-button">
										<a href="portfolio-details.html">Read More <i class="bi bi-plus"></i> </a>
									</div>
								</div>
								<div class="video-icon style-two">
									<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube"
										data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg"><i
											class="fa fa-play"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="case-study-single-box">
							<div class="case-study-thumb">
								<img src="{{asset('images/project/case3.png')}}" alt="">
								<div class="case-study-content">
									<div class="case-study-title">
										<h6> Consulting </h6>
										<h3> <a href="portfolio-details.html"> Strategy and Planning Building Idea</a>
										</h3>
									</div>
									<div class="case-button">
										<a href="portfolio-details.html">Read More <i class="bi bi-plus"></i> </a>
									</div>
								</div>
								<div class="video-icon style-two">
									<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube"
										data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg"><i
											class="fa fa-play"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="case-study-single-box">
							<div class="case-study-thumb">
								<img src="{{asset('images/project/case2.png')}}" alt="">
								<div class="case-study-content">
									<div class="case-study-title">
										<h6> Consulting </h6>
										<h3> <a href="portfolio-details.html"> Consulting for Business Organizations</a>
										</h3>
									</div>
									<div class="case-button">
										<a href="portfolio-details.html">Read More <i class="bi bi-plus"></i> </a>
									</div>
								</div>
								<div class="video-icon style-two">
									<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube"
										data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg"><i
											class="fa fa-play"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="case-study-single-box">
							<div class="case-study-thumb">
								<img src="{{asset('images/project/case3.png')}}" alt="">
								<div class="case-study-content">
									<div class="case-study-title">
										<h6> Consulting </h6>
										<h3> <a href="portfolio-details.html">Strategy and Planning Building Idea</a>
										</h3>
									</div>
									<div class="case-button">
										<a href="portfolio-details.html">Read More <i class="bi bi-plus"></i> </a>
									</div>
								</div>
								<div class="video-icon style-two">
									<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube"
										data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg"><i
											class="fa fa-play"></i></a>
								</div>
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
	<div class="process-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-12">
					<div class="row process-bg">
						<div class="col-sm-6 pl-10 pr-10">
							<div class="process-single-box">
								<div class="process-number">
									<span>1</span>
								</div>
								<div class="process-title">
									<h3>Idea <span> Generate </span></h3>
									<p>Appropriately enhance data centered innovation</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 pl-10 pr-10">
							<div class="process-single-box upper">
								<div class="process-number">
									<span>2</span>
								</div>
								<div class="process-title">
									<h3> System <span> Design </span></h3>
									<p>Appropriately enhance data centered innovation</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 pl-10 pr-10">
							<div class="process-single-box upper1">
								<div class="process-number">
									<span>3</span>
								</div>
								<div class="process-title">
									<h3> 24/7 <span> Support </span></h3>
									<p>Appropriately enhance data centered innovation</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 pl-10 pr-10">
							<div class="process-single-box upper2">
								<div class="process-number">
									<span>4</span>
								</div>
								<div class="process-title">
									<h3> Sales <span> Generate </span></h3>
									<p>Appropriately enhance data centered innovation</p>
								</div>
							</div>
						</div>
						<div class="process-shape">
							<div class="process-thumb">
								<img src="{{asset('images/resource/process-shape.png')}}" alt="">
							</div>
							<div class="process-thumb1">
								<img src="{{asset('images/resource/dreamit-shape.png')}}" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 pl-lg-50">
					<div class="consen-section-title mt-4 mt-lg-0">
						<h2> The Fatest Way To Achieve </h2>
						<h2> Technology <span> Consulting </span></h2>
					</div>
					<div class="lines style-three pt-30 pb-10">
						<div class="line"></div>
					</div>
					<div class="dreamit-smart-title">
						<h4> For Choose <span>Consen</span> Before know who we are? </h4>
						<p>Monotonectally brand worldwide value before in seamless process data Collaboratively initiate
							strategic expertise after functionalized models in. Synergistically synthesize front-end
							convergence whereas resource tosynergy. Collaboratively the expedite focused architectures
							rather than resources. Enthusiastically extensive.</p>
					</div>
					<div class="about-button">
						<a href="about.html"> More About <i class="bi bi-plus"></i> </a>
					</div>
				</div>
			</div>
			<div class="row pt-50">
				<div class="col-lg-12">
					<div class="dreamits-top-title">
						<h3> More Then 5K+ Brands with work Consen</h3>
					</div>
				</div>
			</div>
			<div class="row pt-30">
				<div class="brand-list owl-carousel">
					<div class="col-lg-12">
						<div class="brand-single-box">
							<div class="brand-thumb">
								<img src="{{asset('images/resource/allian.png')}}" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="brand-single-box">
							<div class="brand-thumb">
								<img src="{{asset('images/resource/figma.png')}}" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="brand-single-box">
							<div class="brand-thumb">
								<img src="{{asset('images/resource/google.png')}}" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="brand-single-box">
							<div class="brand-thumb">
								<img src="{{asset('images/resource/redit.png')}}" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End consen process Area -->
	<!--==================================================-->





	<!--==================================================-->
	<!-- Start consen Skills Area Css -->
	<!--==================================================-->
	<div class="skill-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="extra-animation-div">
						<div class="consen-section-title white">
							<h2> Join the Community to learn </h2>
							<h2> About our <span>PRODUCTOS</span></h2>
						</div>
						<div class="lines style-three upper pt-30 pb-10">
							<div class="line"></div>
						</div>
						<div class="dreamit-smart-title">
							<p class="slill-text">Continually generate 2.0 communities and client-focused products. In
								synergize strategic manufactured products whereas levera.</p>
						</div>
					</div>
					<div class="prossess-ber-plugin pt-20">
						<span class="prosses-bar">Business Strategy</span>
						<div id="bar1" class="barfiller">
							<div class="tipWrap">
								<span class="tip"></span>
							</div>
							<span class="fill" data-percentage="65"></span>
						</div>
						<span class="prosses-bar">Technology Consulting</span>
						<div id="bar2" class="barfiller">
							<div class="tipWrap">
								<span class="tip"></span>
							</div>
							<span class="fill my-class" data-percentage="90"></span>
						</div>
						<span class="prosses-bar">Product Development</span>
						<div id="bar3" class="barfiller">
							<div class="tipWrap">
								<span class="tip"></span>
							</div>
							<span class="fill my-class2" data-percentage="80"></span>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="slill-single-thumb mt-4 mt-lg-0 pl-50 ml-1">
						<img src="{{asset('images/resource/sie.png')}}" alt="">
						<!-- thumb content -->
						<div class="skill-thumb-content">
							<div class="skill-title">
								<h3 class="counter"> 17 </h3>
								<span>+</span>
								<h5> YEARS EXPERIENCE </h5>
							</div>
						</div>
						<!-- skill shape -->
						<div class="skill-shape dance">
							<img src="{{asset('images/resource/skill-shape.png')}}" alt="">
						</div>
						<div class="skill-shape1 bounce-animate2">
							<img src="{{asset('images/resource/all-shape.png')}}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End consen Skill Area Css -->
	<!--==================================================-->






	<!--==================================================-->
	<!-- Start consen Blog Area -->
	<!--==================================================-->
	<div class="blog-area blog-new">
		<div class="container">
			<div class="row align-items-center mb-40">
				<div class="col-lg-7 col-md-8">
					<div class="consen-section-title mobile-center">
						<h2> We’re here to share story </h2>
						<h2> from Latest <span> News </span></h2>
					</div>
				</div>
				<div class="col-lg-5 col-md-4">
					<div class="consen-button text-right">
						<a href="blog-grid.html"> View all Blog <i class="bi bi-plus"></i> </a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-blog-box">
						<div class="single-blog-thumb">
							<img src="{{asset('images/resource/blog1.png')}}" alt="">
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
									<img src="{{asset('images/resource/blog-icon.png')}}" alt="">
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
							<img src="{{asset('images/resource/blog2.png')}}" alt="">
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
									<img src="{{asset('images/resource/blog-icon.png')}}" alt="">
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
							<img src="{{asset('images/resource/blog3.png')}}" alt="">
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
									<img src="{{asset('images/resource/blog-icon.png')}}" alt="">
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
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End consen Blog Area -->
	<!--==================================================-->






	<!--==================================================-->
	<!-- Start consen Footer Middle Area -->
	<!--==================================================-->
	@include('components.footer')
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
	<script src="{{ asset('js/vendor/jquery-3.6.2.min.js')}}"></script>
	<script src="{{ asset('js/popper.min.js')}}"></script>
	<!-- bootstrap js -->
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
	<!-- carousel js -->
	<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
	<!-- counterup js -->
	<script src="{{ asset('js/jquery.counterup.min.js')}}"></script>
	<!-- waypoints js -->
	<script src="{{ asset('js/waypoints.min.js')}}"></script>
	<!-- wow js -->
	<script src="{{ asset('js/wow.js')}}"></script>
	<!-- imagesloaded js -->
	<script src="{{ asset('js/imagesloaded.pkgd.min.js')}}"></script>
	<!-- venobox js -->
	<script src="venobox/venobox.js"></script>

	<!--  animated-text js -->
	<script src="{{ asset('js/animated-text.js')}}"></script>
	<!-- venobox min js -->
	<script src="venobox/venobox.min.js"></script>
	<!-- isotope js -->
	<script src="{{ asset('js/isotope.pkgd.min.js')}}"></script>
	<!-- jquery meanmenu js -->
	<script src="{{ asset('js/jquery.meanmenu.js')}}"></script>

	<!-- jquery scrollup js -->
	<script src="{{ asset('js/jquery.scrollUp.js')}}"></script>

	<script src="{{ asset('js/jquery.barfiller.js')}}"></script>
	<!-- jquery js -->


	<!-- theme js -->
	<script src="{{ asset('js/theme.js')}}"></script>
</body>

</html>