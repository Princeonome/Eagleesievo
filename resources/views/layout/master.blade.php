

   @include("includes.header")

	<body class="home-1">


		<!-- Header ======================-->	
		<header class="header-section header-4 sticky-navbar hover-menu">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-lg max-width">
					<div class="d-flex w-100 justify-content-between align-items-center">
						<a class="navbar-brand" href="https://themeperch.net/html/eventiva/index.html" aria-label="nav-brands">	
							<img src="https://themeperch.net/html/eventiva/assets/images/global/logo.png" class="logo-light" alt="logo">
							<img src="https://themeperch.net/html/eventiva/assets/images/global/logo-dark.png" class="logo-dark" alt="logo">
						</a>

						<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navContentmenu" aria-controls="navContentmenu" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="d-none d-lg-block">
							<div class="d-flex gap-30 align-items-center">
								<ul class="menu-list navbar-nav mb-2 me-2 mb-lg-0">
									<li class="nav-item dropdown single-pages-dropdown">
										<a class="nav-link text-uppercase" href="{{route('home')}}">
											<span class="fw-semibold">Home</span>
										</a>
										
									</li>	
									
																	
									<li class="nav-item dropdown single-pages-dropdown">
										<a class="nav-link  text-uppercase" href="{{route('venue')}}">
											<span class="fw-semibold">venue</span>
										</a>
																		
									</li>									
									
									<li class="nav-item">
										<a class="nav-link active text-uppercase" href="{{route('contactus')}}" aria-label="nav-links" aria-current="page">
											<span class="fw-semibold">Contact Us</span>
										</a>
									</li>			  
								</ul>								
							</div>							
						</div>

						<div class="d-none d-lg-block">
							<div class="d-flex gap-50 align-items-center">
								<a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasShop" aria-controls="offcanvasShop" aria-expanded="false" aria-label="Toggle navigation"><span class="shop-icon-xl"><svg width="28" height="28"><use xlink:href="#shop-icon-xl"></use></svg></span></a>
								<a href="https://themeperch.net/html/eventiva/home-1.html#ticket" class="btn btn-primary d-inline-flex btn-rounded align-items-center gap-2" aria-label="buttons"><span class="buttons-logo "><svg width="25" height="25"><use xlink:href="#buttons-logo"></use></svg></span> Buy Ticket</a>
							</div>
						</div>						
					</div>
				</nav>
			</div>		
		</header>
		<!-- Header ======================-->

		<div class="offcanvas offcanvas-top offcanvas-light" id="navContentmenu" data-bs-backdrop="static" tabindex="-1">
			<div class="offcanvas-header">
				<a class="navbar-brand" href="https://themeperch.net/html/eventiva/index.html" aria-label="nav-brands">
					<img src="https://themeperch.net/html/eventiva/assets/images/global/logo.png" class="logo-light" alt="logo">
					<img src="https://themeperch.net/html/eventiva/assets/images/global/logo-dark.png" class="logo-dark" alt="logo">
				</a>
				<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body d-flex justify-content-center">				
				<ul class="navbar-nav custom-navbar-nav mb-2 mb-lg-0">
					<li class="nav-item dropdown offcanvas-pages-dropdown">
						<a class="nav-link dropdown-toggle text-uppercase" href="#" aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="false">							
							<span class="fw-semibold">Home</span>
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="https://themeperch.net/html/eventiva/home-1.html" target="_blank" aria-label="single-pages">Home 1</a></li>
							<li><a class="dropdown-item" href="https://themeperch.net/html/eventiva/home-2.html" target="_blank" aria-label="single-pages">Home 2</a></li>
							<li><a class="dropdown-item" href="https://themeperch.net/html/eventiva/home-3.html" target="_blank" aria-label="single-pages">Home 3</a></li>
							<li><a class="dropdown-item" href="https://themeperch.net/html/eventiva/home-4.html" target="_blank" aria-label="single-pages">Home 4</a></li>
							<li><a class="dropdown-item" href="https://themeperch.net/html/eventiva/home-5.html" target="_blank" aria-label="single-pages">Home 5</a></li>
							<li><a class="dropdown-item" href="https://themeperch.net/html/eventiva/home-6.html" target="_blank" aria-label="single-pages">Home 6</a></li>
							<li><a class="dropdown-item" href="https://themeperch.net/html/eventiva/home-7.html" target="_blank" aria-label="single-pages">Home 7</a></li>
							
						</ul>
					</li>									
					<li class="nav-item">
						<a class="nav-link text-uppercase" href="https://themeperch.net/html/eventiva/about-us.html" aria-label="nav-links">							
							<span class="fw-semibold">About Us</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-uppercase" href="https://themeperch.net/html/eventiva/venue.html" aria-label="nav-links">							
							<span class="fw-semibold">Venue</span>
						</a>
					</li>								
					<li class="nav-item dropdown offcanvas-pages-dropdown">
						<a class="nav-link dropdown-toggle text-uppercase" href="#" aria-label="nav-links" data-bs-toggle="dropdown" aria-expanded="false">							
							<span class="fw-semibold">Blog</span>
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="https://themeperch.net/html/eventiva/blog.html" target="_blank" aria-label="single-pages">Blog</a></li>
							<li><a class="dropdown-item" href="https://themeperch.net/html/eventiva/blog-single-1.html" target="_blank" aria-label="single-pages">Blog Single 1</a></li>
							<li><a class="dropdown-item" href="https://themeperch.net/html/eventiva/blog-single-2.html" target="_blank" aria-label="single-pages">Blog Single 2</a></li>
							<li><a class="dropdown-item" href="https://themeperch.net/html/eventiva/blog-single-3.html" target="_blank" aria-label="single-pages">Blog Single 3</a></li>											
						</ul>								
					</li>									
					
					<li class="nav-item">
						<a class="nav-link active text-uppercase" href="https://themeperch.net/html/eventiva/contact-us.html" aria-label="nav-links" aria-current="page">							
							<span class="fw-semibold">Contact Us</span>
						</a>
					</li>			  
				</ul>				
			</div>
		</div>
		<!-- offcanvas-top -->


		<div class="offcanvas offcanvas-end offcanvasShop" id="offcanvasShop" data-bs-backdrop="static" tabindex="-1">
			<div class="offcanvas-header">
				<h3 class="text-uppercase fw-bold">Cart</h3>
				<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body d-flex justify-content-center">		
				<h2 class="fw-semibold">
					Your Cart Is Empty
				</h2>		
			</div>
		</div>
		<!-- offcanvasShop -->

      <!--put content here-->

      @yield('content')

      <!--end put content here-->
		
@include('includes.footer')