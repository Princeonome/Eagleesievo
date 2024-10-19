
<!doctype html>

<html lang="en" data-bs-theme="dark">



	
<!-- Mirrored from themeperch.net/html/eventiva/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Jul 2024 16:41:23 GMT -->
<head>

		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="description" content="Eventiva description contents">

		<title>Eventiva</title>

		<link rel="shortcut icon" type="images/png" href="assets/images/global/favicon.ico">



		<!-- Google fonts -->	

		<link rel="preconnect" href="https://fonts.googleapis.com/">

		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;family=Poppins:wght@500;600;700;800&amp;family=Roboto:wght@300;400;500&amp;display=swap" rel="stylesheet"> 



		<!-- animate css -->		
        
		<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">	

		<!-- Main CSS -->
        
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

		

	</head>







	<body class="eventiva-landing">





		<!-- Header ======================-->	

		<header class="header-section header-landing sticky-navbar">

			<div class="container-fluid">

				<nav class="navbar navbar-expand-xl">

					<div class="d-flex w-100 justify-content-between align-items-center">

						<a class="navbar-brand" href="{{route('home')}}" aria-label="nav-brands">							

							<img src="{{asset('assets/images/global/logo-landing-light.png')}}" class="logo-light" alt="logo">

							<img src="{{asset('assets/images/global/logo-secondary.png')}}" class="logo-dark" alt="logo">													

						</a>



						<div class="d-block d-xl-none">															

							<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navContentmenu" aria-controls="navContentmenu" aria-expanded="false" aria-label="Toggle navigation">

								<span class="navbar-toggler-icon"></span>

							</button>							

						</div>												



						<div class="d-none d-xl-block">

							<div class="d-flex gap-30 align-items-center">

								<ul class="menu-list navbar-nav mb-2 me-2 mb-lg-0">

									<li class="nav-item">

										<a class="nav-link active" aria-current="page" href="{{route('home')}}" aria-label="nav-links">home</a>

									</li>									

									<!-- <li class="nav-item">

										<a class="nav-link" href="#features" aria-label="nav-links">Features</a>

									</li>	 -->

									<li class="nav-item">

										<a class="nav-link" href="{{route('contactus')}}" aria-label="nav-links">Contact us</a>

									</li>

									<li class="nav-item">

										<a class="nav-link" href="{{route('venue')}}" aria-label="nav-links">venue</a>

									</li>

								</ul>								

							</div>	

						</div>



						<div class="d-none d-xl-block">																

							<a href="{{route('website')}}" class="btn btn-primary btn-light-style-2 d-inline-flex btn-rounded align-items-center gap-10" aria-label="buttons">Login</a>							

						</div>						
                 
					</div>

				</nav>

			</div>



		

		</header>

		<!-- Header ======================-->



		<div class="offcanvas offcanvas-top" id="navContentmenu">

			<div class="offcanvas-header">

				<a class="navbar-brand" href="{{route('home')}}" aria-label="nav-brands"><img src="{{asset('assets/images/global/logo-landing-light.png')}}" alt="logo"></a>

				<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>

			</div>

			<div class="offcanvas-body d-flex justify-content-center">				

				<ul class="navbar-nav custom-navbar-nav mb-2 mb-lg-0">

					<li class="nav-item" data-bs-dismiss="offcanvas">

						<a class="nav-link active" aria-current="page" href="#demos" aria-label="nav-links">Demos</a>

					</li>									

					<!-- <li class="nav-item" data-bs-dismiss="offcanvas">

						<a class="nav-link" href="#features" aria-label="nav-links">Features</a>

					</li>	 -->

					<li class="nav-item" data-bs-dismiss="offcanvas">

						<a class="nav-link" href="{{route('contactus')}}" aria-label="nav-links">Contact us</a>

					</li>

					<li class="nav-item" data-bs-dismiss="offcanvas">

						<a class="nav-link" href="{{('venue')}}" aria-label="nav-links">venue</a>

					</li>			  

				</ul>							  

			</div>

		</div>



		

	<!-- PAGE CONTENT

	============================================= -->	



		<div class="main"  data-bs-spy="scroll" data-bs-target="#navContentmenu" data-bs-root-margin="0px 0px -50%" data-bs-smooth-scroll="true">



			<div id="colorMode" class="theme-switcher d-none">

				<input type="checkbox" class="checkbox" id="checkbox">

				<label for="checkbox" class="checkbox-label">

					<span class="moon-icon" data-bs-theme-value="dark"><svg width="26" height="25"><use xlink:href="#moon-icon"></use></svg></span>

					<span class="sun-icon" data-bs-theme-value="light"><svg width="24" height="24"><use xlink:href="#sun-icon"></use></svg></span>									  

				  <span class="ball"></span>

				</label>

			</div>



			<!-- HERO============================================= -->	

			<section id="hero-landing" class="hero-section hero-landing parallax">

				<div class="container">						

					<div class="hero-txt">

						<h1 class="display-1 text-gradient gradient-reverse fw-extra-bold no-stroke custom-jakarta">Elevate Your Music Event to New Heights</h1>

						<p class="hero-text-inner mt-20 mt-lg-50 custom-jakarta mb-0">Explore a music event theme that redefines excellence. Elevate your event experience with stunning design and powerful features.</p>

						<div class="d-inline-flex flex-column flex-lg-row align-items-lg-center gap-20 gap-lg-40 py-30 py-lg-60">

							<a href="#demos" class="btn btn-gradient btn-rounded" title="">View Demos</a>

							<a href="#features" class="btn btn-outline-gradient btn-gradient-style-2" aria-label="buttons"><span class="text-gradient no-stroke">Features</span></a>

						</div>

						<ul class="list-unstyled d-flex flex-wrap gap-20 gap-md-30 gap-lg-50 mb-0">

							<li class="d-flex align-items-center gap-10"><span class="check-circle-fill"><svg width="28" height="28"><use xlink:href="#check-circle-fill"></use></svg></span>Unique Design</li>

							<li class="d-flex align-items-center gap-10"><span class="check-circle-fill"><svg width="28" height="28"><use xlink:href="#check-circle-fill"></use></svg></span>Clean Code</li>

							<li class="d-flex align-items-center gap-10"><span class="check-circle-fill"><svg width="28" height="28"><use xlink:href="#check-circle-fill"></use></svg></span>Fast & Friendly Support</li>

							<li class="d-flex align-items-center gap-10"><span class="check-circle-fill"><svg width="28" height="28"><use xlink:href="#check-circle-fill"></use></svg></span>RTL Support</li>

						</ul>

					</div>

				</div>   

				<!-- container -->

				

				<div class="hero-landing-image-1 d-none d-lg-block">

					<img src="{{asset('assets/images/hero-landing-image-1.png')}}" class="img-fluid" alt="img">

				</div>

				<div class="hero-landing-image-2 d-none d-lg-block">

					<img src="{{asset('assets/images/hero-landing-image-2.png')}}" class="img-fluid" alt="img">

				</div>



				<div class="d-flex flex-wrap flex-md-nowrap align-items-end mt-50 mt-lg-0 gap-30">

					

					<div class="hero-landing-image-5">

						<img src="{{asset('assets/images/hero-landing-image-5.png')}}" class="img-fluid" alt="img">

					</div>

				

					

					<div class="hero-landing-image-4">

                <img src="{{asset('assets/images/hero-landing-image-4.png')}}" class="img-fluid" alt="img">

					</div>

				

					

					<div class="hero-landing-image-3">

						<img src="{{asset('assets/images/hero-landing-image-3.png')}}" class="img-fluid" alt="img">

					</div>

				

				</div>	

			</section>	

			<!-- HERO============================================= -->	



			

			<!-- Technologies============================================= -->	

			<section id="technologies" class="technologies-section features-landing pt-60 pt-lg-100 pt-xxl-120">

				<div class="container">

					<div class="d-flex flex-column flex-lg-row align-items-center gap-20 gap-lg-30 mb-30">

						<div class="d-flex flex-row flex-lg-column gap-20 gap-lg-30">

							<div class="technologies-wrapper landing-inner-bg technologies-sm d-flex flex-column gap-3 gap-lg-20 align-items-center justify-content-center">

								<img src="
                               assets/images/bootstrap-logo.png" alt="img">

								<h4 class="technologies-heading">Bootstrap 5</h4>

							</div>

							<!-- technologies-sm -->

							<div class="technologies-wrapper landing-inner-bg technologies-sm d-flex flex-column gap-3 gap-lg-20 align-items-center justify-content-center">

								<img src="{{asset('assets/images/google-font-logo.png')}}" alt="img">

								<h4 class="technologies-heading">Google Font</h4>

							</div>

							<!-- technologies-sm -->

						</div>



						<div class="technologies-wrapper landing-inner-bg technologies-lg">

							<img src="{{asset('assets/images/technologies-lg-image.png')}}" class="technologies-lg-image img-fluid" alt="img">



							<div class="technologies-lg-content text-center">

								<div class="d-flex align-items-center justify-content-center gap-3 mb-10 mb-lg-30 position-relative">

									<img src="{{asset('assets/images/frame-logo.png')}}" class="frame-image img-fluid" alt="img">

									<h3 class="technologies-lg-heading text-gradient text-gradient-style-2 fw-bold no-stroke custom-jakarta mb-0">eventiva

									</h3>

									<span class="custom-badge">2.0.1</span>

								</div>

								<p class="technologies-text mb-0">

									Where design meets Sound, and Creativity orchestrates unforgettable Music Event experiences. Elevate your events today!

								</p>

							</div>							

						</div>



						<div class="d-flex flex-row flex-lg-column gap-20 gap-lg-30">

							<div class="technologies-wrapper landing-inner-bg technologies-sm d-flex flex-column gap-3 gap-lg-20 align-items-center justify-content-center">

								<img src="{{asset('assets/images/pagespeed-logo.png')}}" alt="img">

								<h4 class="technologies-heading">Fast Loading Speed</h4>

							</div>

							<!-- technologies-sm -->

							<div class="technologies-wrapper landing-inner-bg technologies-sm d-flex flex-column gap-3 gap-lg-20 align-items-center justify-content-center">

								<img src="{{asset('assets/images/sass-logo.png')}}" alt="img">

								<h4 class="technologies-heading">Sass Available</h4>

							</div>

							<!-- technologies-sm -->

						</div>

					</div>



					<div class="d-flex gap-20 gap-lg-30 flex-column flex-lg-row align-items-center">

						<div class="technologies-wrapper landing-inner-bg technologies-md">

							<img src="{{asset('assets/images/technologies-md-image.png')}}" class="img-fluid" alt="img">

							<h4 class="technologies-huge-text">50+</h4>

							<h2 class="display-3 technologies-gradient-text text-gradient gradient-reverse fw-bold no-stroke custom-jakarta">Elements included</h2>

						</div>

						<!-- technologies-md -->



						<div class="technologies-wrapper landing-inner-bg technologies-md">

							<img src="{{asset('assets/images/technologies-md-image-2.png')}}" class="img-fluid" alt="img">

							<h4 class="technologies-huge-text">5+</h4>

							<h2 class="display-3 technologies-gradient-text text-gradient text-gradient-style-2 fw-bold no-stroke custom-jakarta">Stunning	Design</h2>

						</div>

						<!-- technologies-md -->



						<div class="technologies-wrapper landing-inner-bg technologies-sm d-flex flex-column gap-3 gap-lg-20 align-items-center justify-content-center">

							<img src="{{asset('assets/images/code-logo.png')}}" alt="img">

							<h4 class="technologies-heading">Custom Clean Code</h4>

						</div>

						<!-- technologies-sm -->



					</div>

				</div>

			</section>

			<!-- Technologies============================================= -->





			<!-- Features============================================= -->	

			<section id="features" class="features-section features-landing py-60 py-lg-100 py-xxl-150">

				<div class="container">

					<div class="row gx-20 gy-30 gy-lg-0">

						<div class="col-lg-5">

							<h2 class="display-3 sticky-header text-gradient gradient-reverse fw-bold no-stroke custom-jakarta">Core Features</h2>

						</div>

						<div class="col-lg-7">

							<div class="row gx-60 gy-40 gy-lg-0">

								<div class="col-lg-6">

									<div class="features-wrapper d-flex flex-column gap-40 gap-lg-70">

										<div class="features-inner">

											<div class="features-image mb-20">												

												<img src="{{asset('assets/images/landing-feature-circle.svg')}}" class="circle-features" alt="img">

												<div class="features-icon">

                                                <img src="{{asset('assets/images/feature-icon-1.png')}}" alt="img">

												</div>

											</div>

											<h5 class="features-heading mb-20">Well Documented</h5>

											<p class="features-text">Comprehensive guides and documentation make theme setup and customization a breeze, even for beginners.</p>

										</div>

										<!-- features-inner -->

										<div class="features-inner">

											<div class="features-image mb-20">												

                                        <img src="{{asset('assets/images/landing-feature-circle.svg')}}" class="circle-features" alt="img">

												<div class="features-icon">

													<img src="{{asset('assets/images/feature-icon-2.png')}}" alt="img">

												</div>

											</div>

											<h5 class="features-heading mb-20">Optimized Code</h5>

											<p class="features-text">Clean and efficient coding ensures faster load times, better SEO, and smoother website operation.</p>

										</div>

										<!-- features-inner -->

										<div class="features-inner">

											<div class="features-image mb-20">												

												<img src="{{asset('assets/images/landing-feature-circle.svg')}}" class="circle-features" alt="img">

												<div class="features-icon">

													<img src="{{asset('assets/images/feature-icon-3.png')}}" alt="img">

												</div>

											</div>

											<h5 class="features-heading mb-20">Smooth Animation</h5>

											<p class="features-text">Engage visitors with captivating animations that enhance the user experience and add a touch of elegance.</p>

										</div>

										<!-- features-inner -->

									</div>	

									<!-- features-wrapper -->

								</div>

								<!-- col-6 -->

								<div class="col-lg-6">

									<div class="features-wrapper d-flex flex-column gap-40 gap-lg-70">

										<div class="features-inner">

											<div class="features-image mb-20">												

												<img src="{{asset('assets/images/landing-feature-circle.svg')}}" class="circle-features" alt="img">

												<div class="features-icon">

                                                <img src="{{asset('assets/images/feature-icon-4.png')}}" alt="img">

												</div>

											</div>

											<h5 class="features-heading mb-20">Responsive Design</h5>

											<p class="features-text">Seamlessly adapts to various devices, delivering an optimal viewing experience on smartphones, tablets, and desktops.</p>

										</div>

										<!-- features-inner -->

										<div class="features-inner">

											<div class="features-image mb-20">												

												<img src="{{asset('assets/images/landing-feature-circle.svg')}}" class="circle-features" alt="img">

												<div class="features-icon">

													<img src="{{asset('assets/images/feature-icon-5.png')}}" alt="img">

												</div>

											</div>

											<h5 class="features-heading mb-20">OpenStreet Map</h5>

											<p class="features-text"> Integrated OpenStreet Map feature enhances location-based services, providing precise event venue information.</p>

										</div>

										<!-- features-inner -->

										<div class="features-inner">

											<div class="features-image mb-20">												

												<img src="{{asset('assets/images/landing-feature-circle.svg')}}" class="circle-features" alt="img">

												<div class="features-icon">

													<img src="{{asset('assets/images/feature-icon-6.png')}}" alt="img">

												</div>

											</div>

											<h5 class="features-heading mb-20">Event structured data</h5>

											<p class="features-text">Implement structured data to boost search engine visibility, making your events more discoverable online.</p>

										</div>

										<!-- features-inner -->

									</div>	

									<!-- features-wrapper -->

								</div>

								<!-- col-6 -->

							</div>

						</div>

					</div>

				</div>

			</section>

			<!-- Features============================================= -->	





			<!-- Demos============================================= -->	

			<section id="demos" class="demos-section">

				<div class="container">

					<ul class="nav nav-pills mb-50 mb-lg-70 d-flex flex-column flex-lg-row gap-4 gap-lg-30 justify-content-lg-center" id="demosTab" role="tablist">

						<li class="nav-item" role="presentation">

						<button class="btn btn-gradient btn-rounded active" id="ltr-contents-tab" data-bs-toggle="tab" data-bs-target="#ltr-contents" type="button" role="tab" aria-controls="ltr-contents" aria-selected="true">LTR DEMOS</button>

						</li>

						<li class="nav-item" role="presentation">

						<button class="btn btn-outline-gradient btn-gradient-style-2" id="rtl-contents-tab" data-bs-toggle="tab" data-bs-target="#rtl-contents" type="button" role="tab" aria-controls="rtl-contents" aria-selected="false"><span class="text-gradient no-stroke">RTL DEMOS</span></button>

						</li> 

					</ul>

				</div>

				<!-- position-relative -->



				<div class="tab-content" id="demosTabContent">



					<!-- ltr-contents-->

					<div class="tab-pane fade show active" id="ltr-contents" role="tabpanel" aria-labelledby="ltr-contents-tab">

						<!-- Demos============================================= -->	

						<section class="demos pb-50 pb-lg-100 text-center">

							<div class="container">



								<!-- SECTION TITLE -->	

								<div class="row">

									<div class="col-lg-6 offset-lg-3 text-center mb-40 mb-lg-60">

										<h2 class="display-3 text-gradient gradient-reverse fw-bold no-stroke custom-jakarta">Stylish & Flexible Layouts</h2>								

									</div>																

								</div>



								<!-- DEMOS WRAPPER -->	

								<div class="row g-40 justify-content-center">



									<!-- LAYOUT-1 -->

									<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">

										<div class="demo-image landing-inner-bg shadow-lg"> 

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div>										

											<a href="home-1.html" title="" target="_blank">										

												<img class="img-fluid rounded-4" src="{{asset('assets/images/global/demo-1.jpg')}}" alt="layout-1-preview" loading="lazy">

											</a>

											<a href="home-1.html" class="demo-title text-decoration-none" target="_blank">Demo 1</a>

										</div>																

									</div>

																				

									<!-- LAYOUT-2 -->

									<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">

										<div class="demo-image landing-inner-bg shadow-lg">

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div> 										

											<a href="home-2.html" title="" target="_blank">										

                                        <img class="img-fluid rounded-4" src="{{asset('assets/images/global/demo-2.jpg')}}" alt="layout-2-preview" loading="lazy">

											</a>	

											<a href="home-2.html" class="demo-title text-decoration-none" target="_blank">Demo 2</a>



										</div>																		

									</div>	



									<!-- LAYOUT-3 -->

									<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">

										<div class="demo-image landing-inner-bg shadow-lg">

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div> 										

											<a href="home-3.html" title="" target="_blank">										

												<img class="img-fluid rounded-4" src="{asset{('assets/images/global/demo-3.jpg')}}" alt="layout-3-preview" loading="lazy">

											</a>

											<a href="home-3.html" class="demo-title text-decoration-none" target="_blank">Demo 3</a>

										</div>																	

									</div>



									<!-- LAYOUT-4 -->

									<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">

										<div class="demo-image landing-inner-bg shadow-lg">

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div> 										

											<a href="home-4.html" title="" target="_blank">										

												<img class="img-fluid rounded-4" src="{{asset('assets/images/global/demo-4.jpg')}}" alt="layout-4-preview" loading="lazy">

											</a>

											<a href="home-4.html" class="demo-title text-decoration-none" target="_blank">Demo 4</a>

										</div>										

									</div>



									<!-- LAYOUT-5 -->

									<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">

										<div class="demo-image landing-inner-bg shadow-lg">

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div> 										

											<a href="home-5.html" title="" target="_blank">										

												<img class="img-fluid rounded-4" src="{{asset('assets/images/global/demo-5.jpg')}}" alt="layout-5-preview" loading="lazy">

											</a>

											<a href="home-5.html" class="demo-title text-decoration-none" target="_blank">Demo 5</a>

										</div>										

									</div>



									<!-- LAYOUT-6 -->

									<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">

										<div class="demo-image landing-inner-bg shadow-lg">

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div> 										

											<a href="home-6.html" title="" target="_blank">										

												<img class="img-fluid rounded-4" src="{{asset('assets/images/global/demo-6.jpg')}}" alt="layout-6-preview" loading="lazy">

											</a>

											<a href="home-6.html" class="demo-title text-decoration-none" target="_blank">Demo 6</a>

										</div>										

									</div>			

									

									<!-- LAYOUT-7 -->

									<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">

										<div class="demo-image landing-inner-bg shadow-lg">

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div> 										

											<a href="home-7.html" title="" target="_blank">										

                                            <img class="img-fluid rounded-4" src="{{asset('assets/images/global/demo-7.jpg')}}" alt="layout-7-preview" loading="lazy">

											</a>

											<a href="home-7.html" class="demo-title text-decoration-none" target="_blank">Demo 7</a>

										</div>										

									</div>	

								</div>	<!-- END DEMOS WRAPPER -->	



							</div>	  <!-- End container -->	

						</section>

						<!-- Demos============================================= -->	

 

						<!-- Inner-Pages============================================= -->	

						<section id="inner-pages" class="demos pb-50 pb-lg-100 text-center">

							<div class="container">



								<!-- SECTION TITLE -->	

								<div class="row">

									<div class="col-lg-6 offset-lg-3 text-center mb-40 mb-lg-60">

										<h2 class="display-3 text-gradient gradient-reverse fw-bold no-stroke custom-jakarta">Some Inner-Pages</h2>								

									</div>																

								</div>



								<!-- DEMOS WRAPPER -->	

								

								<div class="row g-40 justify-content-center">

									<!-- LAYOUT-1 -->

									<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">

										<div class="demo-image landing-inner-bg shadow-lg">

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div> 										

											<a href="about-us.html" title="" target="_blank">										

                                            <img class="img-fluid rounded-4" src="{{asset('assets/images/global/about-us.jpg')}}" alt="about-us-preview" loading="lazy">

											</a>

											<a href="about-us.html" class="demo-title text-decoration-none" target="_blank">About Us</a>

										</div>										

									</div>

									<!-- LAYOUT-1 -->



									<!-- LAYOUT-2 -->

									<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">

										<div class="demo-image landing-inner-bg shadow-lg">

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div> 										

											<a href="contact-us.html" title="" target="_blank">										

												<img class="img-fluid rounded-4" src="{{asset('assets/images/global/contact-us.jpg')}}" alt="contact-us-preview" loading="lazy">

											</a>

											<a href="contact-us.html" class="demo-title text-decoration-none" target="_blank">Contact Us</a>

										</div>																	

									</div>		

									<!-- LAYOUT-2 -->



									<!-- LAYOUT-3 -->

									<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">

										<div class="demo-image landing-inner-bg shadow-lg">

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div> 										

											<a href="blog.html" title="" target="_blank">										

												<img class="img-fluid rounded-4" src="{{asset('assets/images/global/blog.jpg')}}" alt="blog-preview" loading="lazy">

											</a>

											<a href="blog.html" class="demo-title text-decoration-none" target="_blank">Blog</a>

										</div>																	

									</div>		

									<!-- LAYOUT-3 -->



									<!-- LAYOUT-4 -->

									<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">

										<div class="demo-image landing-inner-bg shadow-lg"> 

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div>										

											<a href="blog-single-1.html" title="" target="_blank">										

												<img class="img-fluid rounded-4" src="{{asset('assets/images/global/blog-1.jpg')}}" alt="blog-1-preview" loading="lazy">

											</a>

											<a href="blog-single-1.html" class="demo-title text-decoration-none" target="_blank">Blog Single 1</a>

										</div>																

									</div>																			

									<!-- LAYOUT-4 -->



									<!-- LAYOUT-5 -->

									<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">

										<div class="demo-image landing-inner-bg shadow-lg">

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div> 								

											<a href="blog-single-2.html" title="" target="_blank">										

												<img class="img-fluid rounded-4" src="{{asset('assets/images/global/blog-2.jpg')}}" alt="blog-2-preview" loading="lazy">

											</a>

											<a href="blog-single-2.html" class="demo-title text-decoration-none" target="_blank">Blog Single 2</a>

										</div>																		

									</div>			

									<!-- LAYOUT-5 -->



									<!-- LAYOUT-6 -->

									<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">

										<div class="demo-image landing-inner-bg shadow-lg">

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div> 										

											<a href="blog-single-3.html" title="" target="_blank">										

												<img class="img-fluid rounded-4" src="{{asset('assets/images/global/blog-3.jpg')}}" alt="blog-3-preview" loading="lazy">

											</a>

											<a href="blog-single-3.html" class="demo-title text-decoration-none" target="_blank">Blog Single 3</a>

										</div>																	

									</div>		

									<!-- LAYOUT-6 -->	

									

									<!-- LAYOUT-7 -->

									<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">

										<div class="demo-image landing-inner-bg shadow-lg">

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div> 										

											<a href="venue.html" title="" target="_blank">										

												<img class="img-fluid rounded-4" src="{{asset('assets/images/global/venue.jpg')}}" alt="venue-preview" loading="lazy">

											</a>

											<a href="venue.html" class="demo-title text-decoration-none" target="_blank">Venue</a>

										</div>																	

									</div>		

									<!-- LAYOUT-7 -->

									

								</div>	



							</div>	  <!-- End container -->	

						</section>

						<!-- Inner-Pages============================================= --> 

					</div>

					<!-- ltr-contents-->



					<!-- rtl-contents-->

					<div class="tab-pane fade" id="rtl-contents" role="tabpanel" aria-labelledby="rtl-contents-tab"> 

						<!-- Demos============================================= -->	

						<section id="demos-2" class="demos pb-50 pb-lg-100 text-center">

							<div class="container">



								<!-- SECTION TITLE -->	

								<div class="row">

									<div class="col-lg-6 offset-lg-3 text-center mb-40 mb-lg-60">

										<h2 class="display-3 text-gradient gradient-reverse fw-bold no-stroke custom-jakarta">Stylish & Flexible Layouts</h2>								

									</div>																

								</div>



								<!-- DEMOS WRAPPER -->	

								<div class="row g-40 justify-content-center">



									<!-- LAYOUT-1 -->

									<div class="col-md-6 col-lg-4" data-wow-delay="0.1s">

										<div class="demo-image landing-inner-bg shadow-lg"> 

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div>										

											<a href="home-1-rtl.html" title="" target="_blank">										

												<img class="img-fluid rounded-4" src="assets/images/global/rtl/demo-1.jpg" alt="layout-1-preview" loading="lazy">

											</a>

											<a href="home-1-rtl.html" class="demo-title text-decoration-none" target="_blank">Demo 1</a>

										</div>																

									</div>

																				

									<!-- LAYOUT-2 -->

									<div class="col-md-6 col-lg-4" data-wow-delay="0.3s">

										<div class="demo-image landing-inner-bg shadow-lg">

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div> 										

											<a href="home-2-rtl.html" title="" target="_blank">										

												<img class="img-fluid rounded-4" src="assets/images/global/rtl/demo-2.jpg" alt="layout-2-preview" loading="lazy">

											</a>	

											<a href="home-2-rtl.html" class="demo-title text-decoration-none" target="_blank">Demo 2</a>



										</div>																		

									</div>	



									<!-- LAYOUT-3 -->

									<div class="col-md-6 col-lg-4" data-wow-delay="0.5s">

										<div class="demo-image landing-inner-bg shadow-lg">

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div> 										

											<a href="home-3-rtl.html" title="" target="_blank">										

												<img class="img-fluid rounded-4" src="assets/images/global/rtl/demo-3.jpg" alt="layout-3-preview" loading="lazy">

											</a>

											<a href="home-3-rtl.html" class="demo-title text-decoration-none" target="_blank">Demo 3</a>

										</div>																	

									</div>



									<!-- LAYOUT-4 -->

									<div class="col-md-6 col-lg-4" data-wow-delay="0.1s">

										<div class="demo-image landing-inner-bg shadow-lg">

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div> 										

											<a href="home-4-rtl.html" title="" target="_blank">										

												<img class="img-fluid rounded-4" src="assets/images/global/rtl/demo-4.jpg" alt="layout-4-preview" loading="lazy">

											</a>

											<a href="home-4-rtl.html" class="demo-title text-decoration-none" target="_blank">Demo 4</a>

										</div>										

									</div>



									<!-- LAYOUT-5 -->

									<div class="col-md-6 col-lg-4" data-wow-delay="0.3s">

										<div class="demo-image landing-inner-bg shadow-lg">

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div> 										

											<a href="home-5-rtl.html" title="" target="_blank">										

												<img class="img-fluid rounded-4" src="assets/images/global/rtl/demo-5.jpg" alt="layout-5-preview" loading="lazy">

											</a>

											<a href="home-5-rtl.html" class="demo-title text-decoration-none" target="_blank">Demo 5</a>

										</div>										

									</div>



									<!-- LAYOUT-6 -->

									<div class="col-md-6 col-lg-4" data-wow-delay="0.5s">

										<div class="demo-image landing-inner-bg shadow-lg">

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div> 										

											<a href="home-6-rtl.html" title="" target="_blank">										

												<img class="img-fluid rounded-4" src="assets/images/global/rtl/demo-6.jpg" alt="layout-6-preview" loading="lazy">

											</a>

											<a href="home-6-rtl.html" class="demo-title text-decoration-none" target="_blank">Demo 6</a>

										</div>										

									</div>			

									

									<!-- LAYOUT-7 -->

									<div class="col-md-6 col-lg-4" data-wow-delay="0.1s">

										<div class="demo-image landing-inner-bg shadow-lg">

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div> 										

											<a href="home-7-rtl.html" title="" target="_blank">										

												<img class="img-fluid rounded-4" src="assets/images/global/rtl/demo-7.jpg" alt="layout-7-preview" loading="lazy">

											</a>

											<a href="home-7-rtl.html" class="demo-title text-decoration-none" target="_blank">Demo 7</a>

										</div>										

									</div>	

								</div>	<!-- END DEMOS WRAPPER -->	



							</div>	  <!-- End container -->	

						</section>

						<!-- Demos============================================= -->	 



						<!-- Inner-Pages============================================= -->	

						<section id="inner-pages-2" class="demos pb-50 pb-lg-100 text-center">

							<div class="container">



								<!-- SECTION TITLE -->	

								<div class="row">

									<div class="col-lg-6 offset-lg-3 text-center mb-40 mb-lg-60">

										<h2 class="display-3 text-gradient gradient-reverse fw-bold no-stroke custom-jakarta">Some Inner-Pages</h2>								

									</div>																

								</div>



								<!-- DEMOS WRAPPER -->	

								

								<div class="row g-40 justify-content-center">

									<!-- LAYOUT-1 -->

									<div class="col-md-6 col-lg-4" data-wow-delay="0.1s">

										<div class="demo-image landing-inner-bg shadow-lg">

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div> 										

											<a href="about-us-rtl.html" title="" target="_blank">										

												<img class="img-fluid rounded-4" src="assets/images/global/rtl/about-us.jpg" alt="about-us-preview" loading="lazy">

											</a>

											<a href="about-us-rtl.html" class="demo-title text-decoration-none" target="_blank">About Us</a>

										</div>										

									</div>

									<!-- LAYOUT-1 -->



									<!-- LAYOUT-2 -->

									<div class="col-md-6 col-lg-4" data-wow-delay="0.3s">

										<div class="demo-image landing-inner-bg shadow-lg">

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div> 										

											<a href="contact-us-rtl.html" title="" target="_blank">										

												<img class="img-fluid rounded-4" src="assets/images/global/rtl/contact-us.jpg" alt="contact-us-preview" loading="lazy">

											</a>

											<a href="contact-us-rtl.html" class="demo-title text-decoration-none" target="_blank">Contact Us</a>

										</div>																	

									</div>		

									<!-- LAYOUT-2 -->



									<!-- LAYOUT-3 -->

									<div class="col-md-6 col-lg-4" data-wow-delay="0.5s">

										<div class="demo-image landing-inner-bg shadow-lg">

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div> 										

											<a href="blog-rtl.html" title="" target="_blank">										

												<img class="img-fluid rounded-4" src="assets/images/global/rtl/blog.jpg" alt="blog-preview" loading="lazy">

											</a>

											<a href="blog-rtl.html" class="demo-title text-decoration-none" target="_blank">Blog</a>

										</div>																	

									</div>		

									<!-- LAYOUT-3 -->



									<!-- LAYOUT-4 -->

									<div class="col-md-6 col-lg-4" data-wow-delay="0.1s">

										<div class="demo-image landing-inner-bg shadow-lg"> 

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div>										

											<a href="blog-single-1-rtl.html" title="" target="_blank">										

												<img class="img-fluid rounded-4" src="assets/images/global/rtl/blog-1.jpg" alt="blog-1-preview" loading="lazy">

											</a>

											<a href="blog-single-1-rtl.html" class="demo-title text-decoration-none" target="_blank">Blog Single 1</a>

										</div>																

									</div>																			

									<!-- LAYOUT-4 -->



									<!-- LAYOUT-5 -->

									<div class="col-md-6 col-lg-4" data-wow-delay="0.3s">

										<div class="demo-image landing-inner-bg shadow-lg">

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div> 								

											<a href="blog-single-2-rtl.html" title="" target="_blank">										

												<img class="img-fluid rounded-4" src="assets/images/global/rtl/blog-2.jpg" alt="blog-2-preview" loading="lazy">

											</a>

											<a href="blog-single-2-rtl.html" class="demo-title text-decoration-none" target="_blank">Blog Single 2</a>

										</div>																		

									</div>			

									<!-- LAYOUT-5 -->



									<!-- LAYOUT-6 -->

									<div class="col-md-6 col-lg-4" data-wow-delay="0.5s">

										<div class="demo-image landing-inner-bg shadow-lg">

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div> 										

											<a href="blog-single-3-rtl.html" title="" target="_blank">										

												<img class="img-fluid rounded-4" src="assets/images/global/rtl/blog-3.jpg" alt="blog-3-preview" loading="lazy">

											</a>

											<a href="blog-single-3-rtl.html" class="demo-title text-decoration-none" target="_blank">Blog Single 3</a>

										</div>																	

									</div>		

									<!-- LAYOUT-6 -->	

									

									<!-- LAYOUT-7 -->

									<div class="col-md-6 col-lg-4" data-wow-delay="0.1s">

										<div class="demo-image landing-inner-bg shadow-lg">

											<div class="dots d-flex gap-2 align-items-center">

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

												<span class="circle-dot"><svg width="9" height="9"><use xlink:href="#circle-dot"></use></svg></span>

											</div> 										

											<a href="venue-rtl.html" title="" target="_blank">										

												<img class="img-fluid rounded-4" src="assets/images/global/rtl/venue.jpg" alt="venue-preview" loading="lazy">

											</a>

											<a href="venue-rtl.html" class="demo-title text-decoration-none" target="_blank">Venue</a>

										</div>																	

									</div>		

									<!-- LAYOUT-7 -->

									

								</div>	



							</div>	  <!-- End container -->	

						</section>

						<!-- Inner-Pages============================================= -->	

					</div> 

					<!-- rtl-contents-->



				</div>

				<!-- tab-content -->

			</section>

			<!-- Demos============================================= -->	

			

 



			<!-- Separator============================================= -->	

			<div class="container">

				<div class="separator"></div>

			</div>

			<!-- Separator============================================= -->	





			<!-- Loading-Section============================================= -->	

			<section class="loading-section py-50 py-lg-100 py-xxl-120">

				<div class="container">

					<div class="row align-items-center justify-content-around gy-40 gy-xl-0">

						<div class="col-xl-4">

							<h2 class="display-3 text-gradient gradient-reverse fw-bold no-stroke custom-jakarta">Designed for Swift Loading</h2>

						</div>

						<!-- col-4 -->

						<div class="col-lg-6 col-xl-3">

							<div class="loading-wrapper">

								<p class="category mb-20">A+</p>

								<div class="d-flex align-items-center gap-3">

									<h2 class="loading-heading mb-0">93%</h2>

									<h3 class="loading-desciption mb-0">Google Page Speed Score</h3>

								</div>

								<div class="loading-progress mt-20">

									<div class="progress">

										<div class="progress-bar" style="width: 85%">

										</div>

									</div>

								</div>								

							</div>

						</div>

						<!-- col-4 -->

						<div class="col-lg-6 col-xl-3">

							<div class="loading-wrapper">

								<p class="category mb-20">A+</p>

								<div class="d-flex align-items-center gap-3">

									<h2 class="loading-heading mb-0">95%</h2>

									<h3 class="loading-desciption mb-0">GT Metrix Score</h3>

								</div>

								<div class="loading-progress mt-20">

									<div class="progress">

										<div class="progress-bar progress-bar-2" style="width: 90%">

										</div>

									</div>

								</div>								

							</div>

						</div>

						<!-- col-4 -->

					</div>

				</div>

			</section>

			<!-- Loading-Section============================================= -->	

			

			

			<!-- Pricing-Section============================================= -->

			<section id="pricing" class="pricing-section pricing-landing">

				<div class="container">

					<div class="pricing-landing-wrapper landing-inner-bg px-20 px-lg-50 pt-40 pt-lg-90 pb-3 pb-lg-90">

						<div class="row gy-40 gy-lg-0 justify-content-between align-items-lg-center">

							<div class="col-lg-7">

								<h2 class="pricing-heading mb-0">Grab Eventiva Now for Unforgettable Music Experiences!</h2>

							</div>

							<!-- col-7 -->

							<div class="col-lg-4">

								<h3 class="pricing-amount display-3 mb-4 mb-lg-30">$17</h3>

								<ul class="list-unstyled d-flex flex-column gap-3 mb-30 mb-lg-50">

									<li class="d-flex align-items-center gap-10"><span class="check-circle-fill"><svg width="28" height="28"><use xlink:href="#check-circle-fill"></use></svg></span>One-Time Payment</li>

									<li class="d-flex align-items-center gap-10"><span class="check-circle-fill"><svg width="28" height="28"><use xlink:href="#check-circle-fill"></use></svg></span>6 Months Support</li>

									<li class="d-flex align-items-center gap-10"><span class="check-circle-fill"><svg width="28" height="28"><use xlink:href="#check-circle-fill"></use></svg></span>No Monthly Fees</li>

								</ul>

								<a href="https://1.envato.market/oqrQme" target="_blank" class="btn btn-primary btn-light-style-2 d-inline-flex btn-rounded align-items-center gap-10" aria-label="buttons">log</a>

								

							</div>

						</div>

						<!-- row -->

					</div>

					<!-- pricing-landing-wrapper -->

				</div>

			</section>

			<!-- Pricing-Section============================================= -->				



		</div>



			<!-- Footer ======================-->

			<footer class="footer-section footer-1 py-lg-50 py-40 mt-auto">

				<div class="container">

					<div class="row gy-lg-0 gy-10 justify-content-between align-items-center text-center text-lg-start">

						<div class="col-lg-4 order-3 order-lg-1">

							<p class="custom-roboto mb-0">&copy; 2023 <a href="https://themeperch.net/" class="text-primary text-decoration-none" target="_blank">Themeperch</a>. All rights Reserved.</p>							

						</div>

						<div class="col-lg-4 order-1 order-lg-2">

							<a class="navbar-brand d-flex justify-content-center" href="index.html" aria-label="nav-brands">

								<img src="assets/images/global/logo-landing-light.png" class="logo-light" alt="logo">

								<img src="assets/images/global/logo-secondary.png" class="logo-dark" alt="logo">

							</a>

						</div>

						<div class="col-lg-4 order-2 order-lg-3">

							<ul class="footer-nav list-unstyled d-flex justify-content-center justify-content-lg-end gap-30 mb-0">

								<li class="nav-item">

									<a href="#" class="nav-link" aria-label="nav-links">Privecy Policy</a>

								</li>

								<li class="nav-item">

									<a href="#" class="nav-link" aria-label="nav-links">Terms & Conditions</a>

								</li>					

							</ul>

						</div>

					</div>

					<!-- row -->

				</div>

				<!-- container -->

			</footer>

			<!-- Footer ======================-->







	<!-- PAGE CONTENT

	============================================= -->





		<!-- SVG ======================-->

		<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">	



			<symbol id="moon-icon" viewBox="0 0 16 16">

				<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>			

			</symbol>



			<symbol id="sun-icon" viewBox="0 0 16 16">

				<path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>		

			</symbol>



			<symbol id="check-circle-fill" viewBox="0 0 28 28">

				<path d="M26.5 14C26.5 20.9036 20.9036 26.5 14 26.5C7.09644 26.5 1.5 20.9036 1.5 14C1.5 7.09644 7.09644 1.5 14 1.5C20.9036 1.5 26.5 7.09644 26.5 14Z" stroke="#0DB10A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>

				<path fill-rule="evenodd" clip-rule="evenodd" d="M19.5756 9.51003C19.9843 9.8279 20.0579 10.4169 19.74 10.8256L14.7313 17.2654C13.9516 18.2678 12.4851 18.3979 11.5412 17.5484L8.37285 14.6969C7.988 14.3505 7.9568 13.7577 8.30317 13.3729C8.64954 12.988 9.24231 12.9568 9.62716 13.3032L12.7955 16.1547C12.9304 16.2761 13.1399 16.2575 13.2512 16.1143L18.26 9.67447C18.5779 9.26577 19.1669 9.19215 19.5756 9.51003Z" fill="#0DB10A"/>

			</symbol>



			<symbol id="circle-dot" viewBox="0 0 9 9">				

				<circle cx="4.66623" cy="4.22214" r="3.88889" fill="#0A111F"/>					

			</symbol>		

			

			<symbol id="circle-features" viewBox="0 0 100 100">	

				<circle cx="50" cy="50" r="47" stroke="url(#paint0_linear_2512_824)" stroke-width="2"/>

				<defs>

				<linearGradient id="paint0_linear_2512_824" x1="8.72728" y1="15.7091" x2="89.0182" y2="76.8" gradientUnits="userSpaceOnUse">

				<stop stop-color="#B30D5D"/>

				<stop offset="1" stop-color="#FCA311"/>

				</linearGradient>

				</defs> 			

			</symbol>		

		</svg>



		<!-- Scripts/Plugins ======================-->



			<script src="{{asset('assets/js/jquery-3.7.0.min.js')}}"></script>	

			<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>	

			<!-- animation -->

			<script src="{{asset('assets/js/wow.min.js')}}"></script>

			<script src="{{asset('assets/js/landing-script.js')}}"></script>

			

		

	</body>




<!-- Mirrored from themeperch.net/html/eventiva/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Jul 2024 16:42:26 GMT -->
</html>