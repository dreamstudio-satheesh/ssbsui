<!-- header.php -->
<?php
require_once __DIR__ . '/api_helper.php';

$resp = fetchDataFromApi('api/services');
$services = $resp['services'] ?? [];
?>

<!-- Preloader -->
<div class="loader-wrap">
	<div class="preloader">
		<div class="preloader-close">x</div>
		<div id="handle-preloader" class="handle-preloader">
			<div class="animation-preloader">
				<div class="spinner"></div>
				<div class="txt-loading">
					<span data-text-preloader="S" class="letters-loading">
						S
					</span>
					<span data-text-preloader="T" class="letters-loading">
						T
					</span>
					<span data-text-preloader="A" class="letters-loading">
						A
					</span>
					<span data-text-preloader="R" class="letters-loading">
						R
					</span>
					<span data-text-preloader="L" class="letters-loading">
						L
					</span>
					<span data-text-preloader="I" class="letters-loading">
						I
					</span>
					<span data-text-preloader="T" class="letters-loading">
						T
					</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Preloader End -->

<!-- Header Style One -->
<header class="main-header">

	<!-- Header Top -->
	<div class="header-top">
		<div class="auto-container">
			<div class="inner-container clearfix">
				<!-- Top Left -->
				<div class="top-left clearfix">
					<ul class="page-links">
						<li><a href="faq.html">FAQ</a></li>
						<li><a href="privacy.html">Privacy Policy</a></li>
						<li><a href="terms.html">Term Of Service</a></li>
					</ul>
				</div>

				<!-- Top Right -->
				<div class="top-right pull-right clearfix">
					<!-- Social Box -->
					<ul class="social-box">
						<li class="follow">Follow us:</li>
						<li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
						<li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
						<li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
						<li><a href="https://youtube.com/" class="fa fa-youtube-play"></a></li>
					</ul>
				</div>

			</div>
		</div>
	</div>

	<!-- Header Upper -->
	<div class="header-upper">
		<div class="auto-container">
			<div class="clearfix">

				<div class="pull-left logo-box">
					<div class="logo"><a href="index.php"><img src="assets/images/logo.png" alt="" title=""></a></div>
				</div>

				<div class="pull-right upper-right clearfix">

					<!--Info Box-->
					<div class="upper-column info-box">
						<div class="icon-box"><span class="flaticon-email"></span></div>
						<ul>
							<li>Email Us At:<br> <a href="mailto:info@starlitsteel.com">info@starlitsteel.com</a></li>
						</ul>
					</div>

					<!--Info Box-->
					<div class="upper-column info-box">
						<div class="icon-box"><span class="flaticon-telephone"></span></div>
						<ul>
							<li>Call Us Any Time:<br> <a href="tel:+91 84285 77887">+91 84285 77887</a></li>
						</ul>
					</div>

					<!--Info Box-->
					<div class="upper-column info-box">
						<div class="icon-box"><span class="flaticon-map"></span></div>
						<ul>
							<li>Location<br> <a href="#">Gobichettipalayam</a></li>
						</ul>
					</div>

					<!--Info Box-->
					<div class="upper-column info-box">
						<a href="#" class="theme-btn btn-style-two"><span class="txt">Get A Quote</span></a>
					</div>

				</div>

			</div>
		</div>
	</div>
	<!--End Header Upper-->

	<!-- Header Lower -->
	<div class="header-lower">
		<div class="auto-container clearfix">

			<div class="nav-outer clearfix">
				<div class="curve-layer"></div>
				<!-- Mobile Navigation Toggler -->
				<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
				<!-- Main Menu -->
				<nav class="main-menu navbar-expand-md">
					<div class="navbar-header">
						<!-- Toggle Button -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
						<ul class="navigation clearfix">
							<li class="current"><a href="index.php">Home</a>

							</li>
							<li class="dropdown"><a href="#">About</a>
								<ul>
									<li><a href="aboutus.php">About us</a></li>
									<li><a href="vision-mission.php">Vision &amp; Mission</a></li>
									<li><a href="management.php">Our Management</a></li>

								</ul>
							</li>
							<li class="dropdown">
								<a href="#">Services</a>
								<ul>
									<?php foreach ($services as $svc): ?>
										<li>
											<a href="service.php?id=<?= $svc['id'] ?>">
												<?= htmlspecialchars($svc['title'], ENT_QUOTES) ?>
											</a>
										</li>
									<?php endforeach; ?>
								</ul>
							</li>
							<li class="dropdown"><a href="#">Projects</a>
								
							</li>
							<li><a href="products.php">Our Products</a>

							</li>
							<li><a href="blog.php">Blog</a>

							</li>
							<li><a href="contactus.php">Contact</a>

							</li>
						</ul>
					</div>
				</nav>

				<!-- Main Menu End-->
				<div class="outer-box clearfix">

					<!-- Search Btn -->
					<div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>

					<!-- Nav Btn -->
					<div class="nav-btn navSidebar-button"><span class="icon flaticon-menu-2"></span></div>

				</div>
			</div>

		</div>
	</div>
	<!-- End Header Lower -->

	<!-- Sticky Header  -->
	<div class="sticky-header">
		<div class="auto-container clearfix">
			<!--Logo-->
			<div class="logo pull-left">
				<a href="index.php" title=""><img src="assets/images/logo-small.png" alt="" title=""></a>
			</div>
			<!--Right Col-->
			<div class="pull-right">

				<!-- Main Menu -->
				<nav class="main-menu">
					<!--Keep This Empty / Menu will come through Javascript-->
				</nav>
				<!-- Main Menu End-->

				<!-- Mobile Navigation Toggler -->
				<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

			</div>
		</div>
	</div><!-- End Sticky Menu -->

	<!-- Mobile Menu  -->
	<div class="mobile-menu">
		<div class="menu-backdrop"></div>
		<div class="close-btn"><span class="icon flaticon-multiply"></span></div>

		<nav class="menu-box">
			<div class="nav-logo"><a href="index.php"><img src="assets/images/logo-small.png" alt="" title=""></a></div>
			<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
		</nav>
	</div><!-- End Mobile Menu -->

</header>
<!-- End Main Header -->