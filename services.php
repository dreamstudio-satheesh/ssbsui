<?php
require_once __DIR__ . '/api_helper.php';

// Fetch categorized categories
$categoryGroups = getCategoryGroups();
$serviceCategories = $categoryGroups['service'] ?? [];

// Fetch services list
$serviceResp = fetchDataFromApi('api/services');
$services = $serviceResp['services'] ?? [];


// Create category slug map for filtering/classes
$categoryMap = [];
foreach ($serviceCategories as $cat) {
    $categoryMap[$cat['id']] = $cat['slug'];
}

// print as json $services 

// header('Content-type: application/json');
// echo json_encode( $services, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

// exit();





$serviceIcons = [
	'flaticon-home-1',
	'flaticon-under-construction',
	'flaticon-blueprint',
	'flaticon-building',
	'flaticon-helmet',
	'flaticon-helmet',
];
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

		<!-- Page Title -->
		<section class="page-title">
			<div class="content" style="background-image: url(assets/images/background/15.jpg)">
				<div class="auto-container">
					<h1>Service's</h1>
				</div>
			</div>
			<ul class="page-breadcrumb">
				<li><a href="index.php">home</a></li>
				<li>Service's</li>
			</ul>
		</section>
		<!-- End Page Title -->

		<!-- Services Section Four -->
		<section class="services-section-four style-two" style="background-image:url(assets/images/background/pattern-1.png)">
			<div class="auto-container">

				<!-- Sec Title -->
				<div class="sec-title centered">
					<span class="icon flaticon-telephone"></span>
					<h2>What we <span>do</span></h2>
					<div class="text">South-central construction region since 2005</div>
				</div>

				<div class="row clearfix" style="min-height: 726;">
					<?php foreach ($services as $i => $service): ?>
						<?php
						$iconClass = $serviceIcons[$i % count($serviceIcons)];
						$title = htmlspecialchars($service['title'], ENT_QUOTES);
						foreach ($service['photos'] as $key => $value) {
							# code...
							$rawPath = $value;
						}
						$cleanPath = trim($rawPath);
						$image = 'https://admin.starlitsteel.com/storage/' . ltrim($cleanPath, '/');
						$id = $service['id'];
						
						?>

						
						<!-- Service Block Three -->
						<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
								<div class="image">
									<a href="services-post.php?id=<?= $id ?>"><img src="https://admin.starlitsteel.com/storage/<?php echo $rawPath ?>" alt="<?php echo $title ?>" /></a>
								</div>
								<div class="lower-content">
									<div class="content">
										<span class="icon <?php echo $iconClass ?>"></span>
										<h5><a href="services-post.php?id=<?php echo $id ?>"><?php echo $title ?></a></h5>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>


				<!-- Lower Text -->
				<div class="lower-text">
					<div class="text">Want to see our company industrial services... <a href="#">View More Services</a></div>
				</div>

			</div>
		</section>
		<!-- End Services Section Four -->

		<!-- CTA Section -->
		<section class="cta-section">
			<div class="auto-container">
				<div class="row clearfix">

					<!-- Title Column -->
					<div class="title-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<h3>Get An Easy Quotation</h3>
							<div class="text">We Are Professional Building Construction</div>
						</div>
					</div>

					<!-- Info Column -->
					<div class="info-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="clearfix">
								<div class="phone-box">
									<span class="icon flaticon-call-2"></span>
									Call Us Any Time:<br>
									<a href="tel:+91 84285 77887">+91 84285 77887</a>
									<span class="or">or</span>
								</div>
								<!-- Button Box -->
								<div class="button-box">
									<a class="btn-style-four theme-btn" href="contact.html"><span class="txt">Contact us</span></a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End CTA Section -->



		<?php include 'footer.php'; ?>


	</div>
	<!-- End PageWrapper -->

	<!-- Search Popup -->
	<div class="search-popup">
		<button class="close-search style-two"><span class="flaticon-cancel-1"></span></button>
		<button class="close-search"><span class="flaticon-up-arrow"></span></button>
		<form method="post" action="https://uniqthemes.com/html/bricks/blog.html">
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