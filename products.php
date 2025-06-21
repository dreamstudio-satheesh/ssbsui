<?php
require_once 'api_helper.php';

$productsEndpointPath = "api/products";
$apiResponse = fetchDataFromApi($productsEndpointPath);
$categoryResponse = fetchDataFromApi("api/categories");

$products = [];
$categories = [];
$pageTitle = "Our Products";
$errorMessage = null;

if (isset($categoryResponse['categories'])) {
	foreach ($categoryResponse['categories'] as $cat) {
		if ($cat['type'] === 'product') {
			$categories[$cat['id']] = $cat['name'];
		}
	}
}

if ($apiResponse === null) {
	$errorMessage = "There was an issue fetching the products data. Please try again later.";
} elseif (isset($apiResponse['products']) && is_array($apiResponse['products'])) {
	$products = $apiResponse['products'];
} elseif (is_array($apiResponse) && !empty($apiResponse) && isset($apiResponse[0]['id']) && isset($apiResponse[0]['title'])) {
	$products = $apiResponse;
} else {
	$errorMessage = "No products found or the data format from '" . htmlspecialchars($productsEndpointPath) . "' is unexpected.";
}

function slugify($text)
{
	return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $text)));
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
					<h1>Our Products</h1>
				</div>
			</div>
			<ul class="page-breadcrumb">
				<li><a href="index.php">home</a></li>
				<li>Products</li>
			</ul>
		</section>
		<!-- End Page Title -->



		<!-- Products Section -->
		<section class="projects-section-two">
			<div class="auto-container">
				<div class="sec-title centered">
					<span class="icon flaticon-telephone"></span>
					<h2>Our Company <span>Products</span></h2>
					<div class="text">South-central construction region since 2005</div>
				</div>

				<div class="mixitup-gallery">
					<div class="filters clearfix">
						<ul class="filter-tabs filter-btns text-center clearfix">
							<li class="filter active" data-role="button" data-filter="all">All</li>
							<?php
							$used = [];
							foreach ($products as $product):
								$catName = $categories[$product['category_id']] ?? null;
								if ($catName):
									$slug = slugify($catName);
									if (!in_array($slug, $used)):
										$used[] = $slug;
							?>
										<li class="filter" data-role="button" data-filter=".<?= $slug ?>">
											<?= htmlspecialchars($catName, ENT_QUOTES) ?>
										</li>
							<?php
									endif;
								endif;
							endforeach;
							?>
						</ul>
					</div>

					<div class="filter-list row clearfix">
						<?php foreach ($products as $product): ?>
							<?php
							$catName = $categories[$product['category_id']] ?? 'general';
							$catClass = slugify($catName);
							$image = $product['photos'][0] ?? '';
							?>
							<div class="gallery-block-two mix all <?= $catClass ?> col-lg-4 col-md-6 col-sm-12">
								<div class="inner-box">
									<div class="image">
										<a href="products-detail.php?id=<?= $product['id'] ?>">
											<img src="<?= getFullImageUrl($image) ?>" alt="<?= htmlspecialchars($product['title'], ENT_QUOTES) ?>" />
										</a>
									</div>
									<div class="lower-content">
										<h5>
											<a href="products-detail.php?id=<?= $product['id'] ?>">
												<?= htmlspecialchars($product['title'], ENT_QUOTES) ?>
											</a>
										</h5>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>

					<div class="button-box text-center">
						<a class="btn-style-two theme-btn" href="#"><span class="txt">View All Products</span></a>
					</div>
				</div>
			</div>
		</section>

		<!-- End Projects Section  -->



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
	<script src="assets/js/mixitup.js"></script>
	<script src="assets/js/nav-tool.js"></script>
	<script src="assets/js/jquery-ui.js"></script>
	<script src="assets/js/script.js"></script>
	<script src="assets/js/color-settings.js"></script>

</body>


</html>