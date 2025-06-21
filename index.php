<?php
require_once 'api_helper.php';

$sliderResponse = fetchDataFromApi('api/sliders');
$sliders = [];

if (!empty($sliderResponse['sliders']) && is_array($sliderResponse['sliders'])) {
	$sliders = $sliderResponse['sliders'];
}
?>


<!DOCTYPE html>
<html>


<head>
	<meta charset="utf-8">
	<title>Starlit Steel Building Solutions</title>
	<meta name="description" content="Starlit Steel Building Solutions: 30+ years of expertise in pre-engineered steel construction. Delivering innovative, and cost-effective building solutions for commercial, industrial, and residential projects. Engineered to Endure." />
	<meta name="keywords" content="HEAVY INDUSTRIAL STEEL BUILDING " />
	<meta name="Copyright" content="Copyright © 2025 - Starlit Steel Building Solutions " />
	<meta name="robots" content="index, follow, all" />
	<meta http-equiv="content-language" content="en-us">
	<meta name="distribution" content="global" />
	<meta name="document-type" content="Public" />
	<meta name="audience" content="all" />
	<meta name="coverage" content="Worldwide">
	<meta name="rating" content="General" />
	<meta name="geo.placename" content="Namakkal, Karur, Madurai, Tirupur, bangalore, mumbai, salem, Chennai, Coimbatore, Hyderabad, Erode, Tamil Nadu, India, " />
	<meta name="geo.region" content="Australia, Canada, Denmark, Brazil, Bhutan, Bangladesh, Ethiopia, Germany, Greece, Kuwait, dubai, Nepal, Poland" />
	<meta name="googlebot" content="index, follow" />
	<meta name="YahooSeeker" content="index,follow" />
	<meta name="allow-search" content="yes" />
	<meta name="msnbot" content="index, follow" />
	<meta name="expires" content="never">
	<meta property="og:site_name" content="https://starlitsteel.com" />
	<meta property="og:type" content="" />
	<meta property="og:url" content="https://starlitsteel.com" />
	<meta property="og:site_name" content="Starlit Steel Building Solutions" />
	<meta property="og:site_name" content="Starlit Steel Building Solutions" />
	<meta property="og:description" content="Starlit Steel Building Solutions: 30+ years of expertise in pre-engineered steel construction " />

	<!-- Stylesheets -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;800;900&amp;family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">

	<!-- Color Switcher Mockup -->
	<link href="assets/css/color-switcher-design.css" rel="stylesheet">

	<!-- Color Themes -->
	<link id="theme-color-file" href="assets/css/color-themes/default-color.css" rel="stylesheet">

	<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
	<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

	<div class="page-wrapper">

		<?php include 'header.php'; ?>
		<?php include 'sidebar.php'; ?>

		<?php include 'slider.php'; ?>





		<!-- Counter Section -->
		<section class="counter-section">
			<div class="outer-container">
				<div class="inner-container">

					<!-- Fact Counter -->
					<div class="fact-counter">
						<div class="clearfix">

							<!-- Column -->
							<div class="column counter-column col-lg-4 col-md-6 col-sm-12">
								<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
									<div class="content">
										<div class="icon flaticon-helmet"></div>
										<div class="count-outer count-box alternate">
											<span class="count-text" data-speed="5000" data-stop="2854">0</span>+
										</div>
										<h4 class="counter-title">Complete Project</h4>
									</div>
								</div>
							</div>

							<!-- Column -->
							<div class="column counter-column col-lg-4 col-md-6 col-sm-12">
								<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
									<div class="content">
										<div class="icon flaticon-pencil-and-ruler"></div>
										<div class="count-outer count-box">
											<span class="count-text" data-speed="3000" data-stop="3">0</span>M
										</div>
										<h4 class="counter-title">Company Followers</h4>
									</div>
								</div>
							</div>

							<!-- Column -->
							<div class="column counter-column col-lg-4 col-md-6 col-sm-12">
								<div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
									<div class="content">
										<div class="icon flaticon-solidarity"></div>
										<div class="count-outer count-box">
											<span class="count-text" data-speed="3500" data-stop="76">0</span>k
										</div>
										<h4 class="counter-title">Happy Clients</h4>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Counter Section -->

		<!-- Services Section -->
		<section class="services-section">
			<div class="image-layer-one" style="background-image:url(assets/images/background/2.jpg)"></div>
			<div class="auto-container">
				<!-- Sec Title -->
				<div class="sec-title centered">
					<span class="icon flaticon-telephone"></span>
					<h2>What We <span>DO?</span></h2>
					<div class="text">Starlit Steel Building Solutions (SSBS) since 1995</div>
				</div>
				<div class="inner-container" style="background-image:url(assets/images/background/1.jpg)">
					<div class="row clearfix">

						<!-- Service Block -->
						<div class="service-block col-lg-4 col-md-6 col-sm-12">
							<div class="inner-box">
								<span class="icon flaticon-pencil-and-ruler"></span>
								<h4><a href="#">Heavy Industrial Steel Building</a></h4>
								<div class="text">Starlit Steel Building Solutions specializes in heavy-duty steel structures for industrial applications. Engineered to withstand extreme conditions</div>
								<a href="#" class="read-more">Read More <span class="arrow fa fa-caret-right"></span></a>
							</div>
						</div>

						<!-- Service Block -->
						<div class="service-block col-lg-4 col-md-6 col-sm-12">
							<div class="inner-box">
								<span class="icon flaticon-tools"></span>
								<h4><a href="#">Pre-Engineered Building</a></h4>
								<div class="text">Starlit Steel Building Solutions offers custom-designed, pre-engineered buildings that combine speed, efficiency, and cost-effectiveness.</div>
								<a href="#" class="read-more">Read More <span class="arrow fa fa-caret-right"></span></a>
							</div>
						</div>

						<!-- Service Block -->
						<div class="service-block col-lg-4 col-md-6 col-sm-12">
							<div class="inner-box">
								<span class="icon flaticon-settings-1"></span>
								<h4><a href="#">Commercial PEB Building</a></h4>
								<div class="text">We specializes in designing and constructing high-quality commercial steel buildings tailored to your business needs. Energy efficiency, and aesthetic appeal</div>
								<a href="#" class="read-more">Read More <span class="arrow fa fa-caret-right"></span></a>
							</div>
						</div>

					</div>
				</div>

				<!-- Button Box -->
				<div class="button-box text-center">
					<a class="btn-style-two theme-btn" href="#"><span class="txt">More Services</span></a>
				</div>

			</div>
		</section>
		<!-- End Services Section -->

		<!-- Experiance Section -->
		<section class="experiance-section">
			<div class="image-layer" style="background-image:url(assets/images/background/3.jpg)"></div>
			<div class="auto-container">
				<div class="row clearfix">

					<!-- Content Column -->
					<div class="content-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="year-box">
								<div class="count-box">
									<span class="count-text" data-speed="3000" data-stop="30">0</span>
								</div>
								<span class="years">Years</span>
							</div>
							<div class="title">
								<span class="icon flaticon-helmet-2"></span>
								Starlit Steel <br> Building Solutions
							</div>
							<div class="text" align="justify">Starlit Steel Building Solutions: 30+ years of expertise in pre-engineered steel construction. Delivering innovative, and cost-effective building solutions for commercial, industrial, and residential projects. Engineered to Endure.</div>
							<!-- Button Box -->
							<div class="button-box">
								<a class="btn-style-three theme-btn" href="#"><span class="txt">More About Us</span></a>
							</div>
						</div>
					</div>

					<!-- Form Column -->
					<div class="form-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="content">
								<div class="title">
									<h4>Intrested in Contraction</h4>
									<span>Get In Touch</span>
								</div>

								<!-- Email Form -->
								<div class="email-form">
									<form method="post" action="#">
										<div class="form-group">
											<input type="email" name="email" value="" placeholder="Enter Your Email Address" required>
											<button type="submit" class="theme-btn btn-style-one"><span class="txt">Contact Us Now</span></button>
										</div>
									</form>
								</div>

							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Experiance Section -->

		<!-- Projects Section -->
		<section class="projects-section">
			<div class="auto-container">
				<!-- Sec Title -->
				<div class="sec-title centered">
					<span class="icon flaticon-telephone"></span>
					<h2>Our Company <span>Projects</span></h2>

				</div>

				<!-- Porfolio Tabs -->
				<div class="project-tab">

					<div class="tab-btns-box">
						<!--Tabs Header-->
						<div class="tabs-header">
							<ul class="product-tab-btns clearfix">
								<li class="p-tab-btn active-btn" data-tab="#p-tab-1">Show All</li>
								<li class="p-tab-btn" data-tab="#p-tab-2">Industrial</li>
								<li class="p-tab-btn" data-tab="#p-tab-3">Institutional</li>
								<li class="p-tab-btn" data-tab="#p-tab-4">Commercial</li>
								<li class="p-tab-btn" data-tab="#p-tab-5">Sports & Leisure</li>
								<li class="p-tab-btn" data-tab="#p-tab-6">Residential</li>
							</ul>
						</div>
					</div>

					<!--Tabs Content-->
					<div class="p-tabs-content">

						<!-- Portfolio Tab / Active Tab -->
						<div class="p-tab active-tab" id="p-tab-1">
							<div class="project-carousel owl-theme owl-carousel">

								<!-- Gallery Block -->
								<?php foreach ($sliders as $slider): ?>
									<div class="gallery-block">
										<div class="inner-box">
											<div class="image">
												<a href="<?= htmlspecialchars($slider['link'] ?? '#') ?>">
													<img src="<?= getFullImageUrl($slider['image_path']) ?>" alt="<?= htmlspecialchars($slider['title']) ?>" />
												</a>
												<div class="overlay-box">
													<h5><a href="<?= htmlspecialchars($slider['link'] ?? '#') ?>"><?= htmlspecialchars($slider['title']) ?></a></h5>
													<div class="location"><?= htmlspecialchars($slider['subtitle']) ?></div>
												</div>
											</div>
										</div>
									</div>
								<?php endforeach; ?>





							</div>
						</div>

						<!-- Portfolio Tab -->
						<div class="p-tab" id="p-tab-2">
							<div class="project-carousel owl-theme owl-carousel">

								<?php foreach ($sliders as $slider): ?>
									<div class="gallery-block">
										<div class="inner-box">
											<div class="image">
												<a href="<?= htmlspecialchars($slider['link'] ?? '#') ?>">
													<img src="<?= getFullImageUrl($slider['image_path']) ?>" alt="<?= htmlspecialchars($slider['title']) ?>" />
												</a>
												<div class="overlay-box">
													<h5><a href="<?= htmlspecialchars($slider['link'] ?? '#') ?>"><?= htmlspecialchars($slider['title']) ?></a></h5>
													<div class="location"><?= htmlspecialchars($slider['subtitle']) ?></div>
												</div>
											</div>
										</div>
									</div>
								<?php endforeach; ?>

							</div>
						</div>

						<!-- Portfolio Tab -->
						<div class="p-tab" id="p-tab-3">
							<div class="project-carousel owl-theme owl-carousel">

								<?php foreach ($sliders as $slider): ?>
									<div class="gallery-block">
										<div class="inner-box">
											<div class="image">
												<a href="<?= htmlspecialchars($slider['link'] ?? '#') ?>">
													<img src="<?= getFullImageUrl($slider['image_path']) ?>" alt="<?= htmlspecialchars($slider['title']) ?>" />
												</a>
												<div class="overlay-box">
													<h5><a href="<?= htmlspecialchars($slider['link'] ?? '#') ?>"><?= htmlspecialchars($slider['title']) ?></a></h5>
													<div class="location"><?= htmlspecialchars($slider['subtitle']) ?></div>
												</div>
											</div>
										</div>
									</div>
								<?php endforeach; ?>

							</div>
						</div>

						<!-- Portfolio Tab -->
						<div class="p-tab" id="p-tab-5">
							<div class="project-carousel owl-theme owl-carousel">

								<?php foreach ($sliders as $slider): ?>
									<div class="gallery-block">
										<div class="inner-box">
											<div class="image">
												<a href="<?= htmlspecialchars($slider['link'] ?? '#') ?>">
													<img src="<?= getFullImageUrl($slider['image_path']) ?>" alt="<?= htmlspecialchars($slider['title']) ?>" />
												</a>
												<div class="overlay-box">
													<h5><a href="<?= htmlspecialchars($slider['link'] ?? '#') ?>"><?= htmlspecialchars($slider['title']) ?></a></h5>
													<div class="location"><?= htmlspecialchars($slider['subtitle']) ?></div>
												</div>
											</div>
										</div>
									</div>
								<?php endforeach; ?>

							</div>
						</div>

						<!-- Portfolio Tab -->
						<div class="p-tab" id="p-tab-6">
							<div class="project-carousel owl-theme owl-carousel">
								<!-- Gallery Block -->
								<?php foreach ($sliders as $slider): ?>
									<div class="gallery-block">
										<div class="inner-box">
											<div class="image">
												<a href="<?= htmlspecialchars($slider['link'] ?? '#') ?>">
													<img src="<?= getFullImageUrl($slider['image_path']) ?>" alt="<?= htmlspecialchars($slider['title']) ?>" />
												</a>
												<div class="overlay-box">
													<h5><a href="<?= htmlspecialchars($slider['link'] ?? '#') ?>"><?= htmlspecialchars($slider['title']) ?></a></h5>
													<div class="location"><?= htmlspecialchars($slider['subtitle']) ?></div>
												</div>
											</div>
										</div>
									</div>
								<?php endforeach; ?>


							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- End Services Section -->

		<!-- Solution Section -->
		<section class="solution-section" style="background-image:url(assets/images/background/4.jpg)">
			<div class="side-image wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
				<img src="assets/images/resource/solution.png" alt="" />
			</div>
			<div class="auto-container">
				<div class="row clearfix">

					<!-- Title Column -->
					<div class="title-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="sec-title">
								<h2>Multi-Disciplined Engineering Solutions </h2>
								<div class="text">South-central construction region since 2005</div>
							</div>
							<!-- Button Box -->
							<div class="button-box">
								<a class="btn-style-two theme-btn" href="about.html"><span class="txt">More About Us</span></a>
							</div>
						</div>
					</div>

					<!-- Content Column -->
					<div class="content-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">

							<!-- Feature Block -->
							<div class="feature-block">
								<div class="inner-box">
									<span class="icon flaticon-helmet-2"></span>
									<h4><a href="accurate-measurements.html">Process Engineering</a></h4>
									<div class="text">Donec adipiscing tristique risus nec feugiat in. Porttitor massa id neque aliquam vestibulum morbi.</div>
									<a href="accurate-measurements.html" class="read-more">Read More <i class="fa fa-caret-right"></i></a>
								</div>
							</div>

							<!-- Feature Block -->
							<div class="feature-block">
								<div class="inner-box">
									<span class="icon flaticon-office-building"></span>
									<h4><a href="accurate-measurements.html">Construction Management</a></h4>
									<div class="text">Donec adipiscing tristique risus nec feugiat in. Porttitor massa id neque aliquam vestibulum morbi.</div>
									<a href="accurate-measurements.html" class="read-more">Read More <i class="fa fa-caret-right"></i></a>
								</div>
							</div>

							<!-- Feature Block -->
							<div class="feature-block">
								<div class="inner-box">
									<span class="icon flaticon-crane"></span>
									<h4><a href="accurate-measurements.html">Civil Engineering</a></h4>
									<div class="text">Donec adipiscing tristique risus nec feugiat in. Porttitor massa id neque aliquam vestibulum morbi.</div>
									<a href="accurate-measurements.html" class="read-more">Read More <i class="fa fa-caret-right"></i></a>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Solution Section -->

		<!-- Video Section -->
		<section class="video-section" style="background-image:url(assets/images/background/5.jpg)">
			<div class="auto-container">
				<div class="content">
					<h2>Make Constraction <br> your Dream into Reality</h2>
					<div class="text">Starlit Steel Building Solutions (SSBS) since 1995</div>
					<a href="https://www.youtube.com/" class="lightbox-image video-box"><span class="flaticon-play-button"><i class="ripple"></i></span></a>
				</div>
			</div>
		</section>
		<!-- End Video Section -->



		<!-- FullWidth Section -->
		<section class="fullwidth-section">
			<div class="outer-container">
				<div class="row clearfix">
					<!-- Left Column -->
					<div class="left-column" style="background-image:url(assets/images/background/fullwidth-1.jpg)">
						<div class="inner-column">
							<div class="title">Why Choose Us?</div>
							<h3>Make The World Better Place <br> With Construction Quality</h3>
							<div class="text">Starlit Steel Building Solutions (SSBS) since 1995</div>
							<a href="#" class="plus fa fa-plus"></a>
						</div>
					</div>
					<!-- Right Column -->
					<div class="right-column" style="background-image:url(assets/images/background/fullwidth-2.png)">
						<div class="inner-column">
							<h3>Download Our Broucher</h3>
							<h5>Last Update : 15/02/2025</h5>
							<a href="#" class="theme-btn btn-style-four"><span class="txt">Download Now</span></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End FullWidth Section -->

		<!-- News Section -->
		<section class="news-section">
			<div class="auto-container">
				<!-- Sec Title -->
				<div class="sec-title centered">
					<span class="icon flaticon-telephone"></span>
					<h2>Our Blog <span>Insight</span></h2>
					<div class="text">Starlit Steel Building Solutions (SSBS) since 1995</div>
				</div>

				<div class="row clearfix">

					<!-- News Block -->
					<div class="news-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
							<div class="image">
								<a href="blog-detail.html"><img src="assets/images/resource/news-1.jpg" alt="" /></a>
							</div>
							<div class="lower-content">
								<div class="post-date">31 OCT 2021</div>
								<h4><a href="blog-detail.html">A plan to solve California's housing crisis</a></h4>
								<ul class="post-meta">
									<li><span class="icon fa fa-user"></span>James Smith</li>
									<li><span class="icon fa fa-comment"></span>4 Comments</li>
								</ul>
							</div>
						</div>
					</div>

					<!-- News Block -->
					<div class="news-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
							<div class="image">
								<a href="blog-detail.html"><img src="assets/images/resource/news-2.jpg" alt="" /></a>
							</div>
							<div class="lower-content">
								<div class="post-date">24 Nov 2021</div>
								<h4><a href="blog-detail.html">Achieving resiliency through integrated design</a></h4>
								<ul class="post-meta">
									<li><span class="icon fa fa-user"></span>James Smith</li>
									<li><span class="icon fa fa-comment"></span>4 Comments</li>
								</ul>
							</div>
						</div>
					</div>

					<!-- News Block -->
					<div class="news-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
							<div class="image">
								<a href="blog-detail.html"><img src="assets/images/resource/news-3.jpg" alt="" /></a>
							</div>
							<div class="lower-content">
								<div class="post-date">06 Dec 2021</div>
								<h4><a href="blog-detail.html">Wellness is now part of more colleges’ health services</a></h4>
								<ul class="post-meta">
									<li><span class="icon fa fa-user"></span>James Smith</li>
									<li><span class="icon fa fa-comment"></span>4 Comments</li>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<!-- Button Box -->
				<div class="button-box text-center">
					<a class="btn-style-two theme-btn" href="#"><span class="txt">View All Posts</span></a>
				</div>

			</div>
		</section>
		<!-- End News Section -->

		<!-- Main Footer -->
		<footer class="main-footer" style="background-image:url(assets/images/background/6.jpg)">
			<div class="auto-container">

				<!-- Upper Box -->
				<div class="upper-box">
					<div class="box-inner">
						<div class="title">Sign Up To Our <span>Newsletter</span></div>
						<!-- Subscribe Form -->
						<div class="subscribe-form">
							<form method="post" action="#">
								<div class="form-group">
									<span class="icon fa fa-envelope"></span>
									<input type="email" name="email" value="" placeholder="Enter your email address" required="">
									<button type="submit" class="theme-btn btn-style-one"><span class="txt">Subscribe Now</span></button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- End Upper Box -->

				<?php include 'footer.php'; ?>


			</div>
			<!-- End PageWrapper -->

			<!-- Search Popup -->
			<div class="search-popup">
				<button class="close-search style-two"><span class="flaticon-cancel-1"></span></button>
				<button class="close-search"><span class="flaticon-up-arrow"></span></button>
				<form method="post" action="#">
					<div class="form-group">
						<input type="search" name="search-field" value="" placeholder="Search Here" required="">
						<button type="submit"><i class="fa fa-search"></i></button>
					</div>
				</form>
			</div>
			<!-- End Header Search -->



			<!-- Scroll To Top -->
			<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

			<script src="assets/js/jquery.js"></script>
			<script src="assets/js/popper.min.js"></script>
			<script src="assets/js/bootstrap.min.js"></script>
			<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
			<script src="assets/js/jquery.fancybox.js"></script>
			<script src="assets/js/appear.js"></script>
			<script src="assets/js/parallax.min.js"></script>
			<script src="assets/js/tilt.jquery.min.js"></script>
			<script src="assets/js/jquery.paroller.min.js"></script>
			<script src="assets/js/owl.js"></script>
			<script src="assets/js/wow.js"></script>
			<script src="assets/js/validate.js"></script>
			<script src="assets/js/nav-tool.js"></script>
			<script src="assets/js/jquery-ui.js"></script>
			<script src="assets/js/script.js"></script>
			<script src="assets/js/color-settings.js"></script>

</body>


</html>