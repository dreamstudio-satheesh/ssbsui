<?php
require_once __DIR__ . '/api_helper.php';

$resp = fetchDataFromApi('api/categories');
$categories = $resp['categories'] ?? [];

$services = array_filter($categories, fn($cat) => $cat['type'] === 'service');
$projects = array_filter($categories, fn($cat) => $cat['type'] === 'project');
$products = array_filter($categories, fn($cat) => $cat['type'] === 'product');
?>

<!-- Header Section -->
<header class="main-header">

	<!-- Header Top -->
	<div class="header-top">
		<div class="auto-container">
			<div class="inner-container clearfix">
				<div class="top-left clearfix">
					<ul class="page-links">
						<li><a href="faq.html">FAQ</a></li>
						<li><a href="privacy.html">Privacy Policy</a></li>
						<li><a href="terms.html">Term Of Service</a></li>
					</ul>
				</div>
				<div class="top-right pull-right clearfix">
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
					<div class="logo"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></div>
				</div>
				<div class="pull-right upper-right clearfix">
					<div class="upper-column info-box">
						<div class="icon-box"><span class="flaticon-email"></span></div>
						<ul><li>Email Us At:<br> <a href="mailto:info@starlitsteel.com">info@starlitsteel.com</a></li></ul>
					</div>
					<div class="upper-column info-box">
						<div class="icon-box"><span class="flaticon-telephone"></span></div>
						<ul><li>Call Us Any Time:<br> <a href="tel:+918428577887">+91 84285 77887</a></li></ul>
					</div>
					<div class="upper-column info-box">
						<div class="icon-box"><span class="flaticon-map"></span></div>
						<ul><li>Location<br> <a href="#">Gobichettipalayam</a></li></ul>
					</div>
					<div class="upper-column info-box">
						<a href="#" class="theme-btn btn-style-two"><span class="txt">Get A Quote</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Header Lower -->
	<div class="header-lower">
		<div class="auto-container clearfix">
			<div class="nav-outer clearfix">
				<div class="curve-layer"></div>
				<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

				<nav class="main-menu navbar-expand-md">
					<div class="navbar-header">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
						<ul class="navigation clearfix">
							<li class="current"><a href="index.php">Home</a></li>

							<li class="dropdown"><a href="#">About</a>
								<ul>
									<li><a href="aboutus.php">About us</a></li>
									<li><a href="vision-mission.php">Vision &amp; Mission</a></li>
									<li><a href="management.php">Our Management</a></li>
								</ul>
							</li>

							<li class="dropdown"><a href="#">Services</a>
								<ul>
									<?php foreach ($services as $svc): ?>
										<li><a href="services.php?id=<?= $svc['id'] ?>"><?= htmlspecialchars($svc['name']) ?></a></li>
									<?php endforeach; ?>
								</ul>
							</li>

							<li class="dropdown"><a href="#">Projects</a>
								<ul>
									<?php foreach ($projects as $proj): ?>
										<li><a href="projects.php?id=<?= $proj['id'] ?>"><?= htmlspecialchars($proj['name']) ?></a></li>
									<?php endforeach; ?>
								</ul>
							</li>

							<li class="dropdown"><a href="#">Products</a>
								<ul>
									<?php foreach ($products as $prod): ?>
										<li><a href="products.php?id=<?= $prod['id'] ?>"><?= htmlspecialchars($prod['name']) ?></a></li>
									<?php endforeach; ?>
								</ul>
							</li>

							<li><a href="blog.php">Blog</a></li>
							<li><a href="contactus.php">Contact</a></li>
						</ul>
					</div>
				</nav>

				<div class="outer-box clearfix">
					<div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>
					<div class="nav-btn navSidebar-button"><span class="icon flaticon-menu-2"></span></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Sticky Header -->
	<div class="sticky-header">
		<div class="auto-container clearfix">
			<div class="logo pull-left">
				<a href="index.php"><img src="assets/images/logo-small.png" alt=""></a>
			</div>
			<div class="pull-right">
				<nav class="main-menu"><!-- JS will clone menu here --></nav>
				<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
			</div>
		</div>
	</div>

	<!-- Mobile Menu -->
	<div class="mobile-menu">
		<div class="menu-backdrop"></div>
		<div class="close-btn"><span class="icon flaticon-multiply"></span></div>
		<nav class="menu-box">
			<div class="nav-logo"><a href="index.php"><img src="assets/images/logo-small.png" alt=""></a></div>
			<div class="menu-outer"><!-- Auto JS injection --></div>
		</nav>
	</div>
</header>
