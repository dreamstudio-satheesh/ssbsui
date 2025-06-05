<?php
require_once 'api_helper.php'; 

$servicesEndpointPath = "api/services"; 
$apiResponse = fetchDataFromApi($servicesEndpointPath);

$services = [];
$pageTitle = "Our Services";
$errorMessage = null;

if ($apiResponse === null) {
    $errorMessage = "There was an issue fetching the services data. Please try again later.";
} elseif (isset($apiResponse['services']) && is_array($apiResponse['services'])) {
    $services = $apiResponse['services'];
} elseif (is_array($apiResponse) && !empty($apiResponse) && isset($apiResponse[0]['id']) && isset($apiResponse[0]['title'])) {
    // If the API returns the array of services directly (less common if it's a named endpoint)
    $services = $apiResponse;
} else {
    $errorMessage = "No services found or the data format from '" . htmlspecialchars($servicesEndpointPath) . "' is unexpected.";
    
}

?>


<!DOCTYPE html>
<html lang="en"> <?php // Added lang="en" to html tag ?>

<head>
<meta charset="utf-8">
<title><?= htmlspecialchars($pageMeta['title'] ?? 'Starlit Steel Building Solutions') ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageMeta['description'] ?? 'Starlit Steel Building Solutions: 30+ years of expertise in pre-engineered steel construction. Delivering innovative, and cost-effective building solutions for commercial, industrial, and residential projects. Engineered to Endure.') ?>"/>
    <meta name="keywords" content="<?= htmlspecialchars($pageMeta['keywords'] ?? 'HEAVY INDUSTRIAL STEEL BUILDING') ?>"/>
    <meta name="Copyright" content="Copyright © <?= date('Y') ?> - Starlit Steel Building Solutions " /> <?php // Dynamic year ?>
    <meta name="robots" content="index, follow, all" />
    <meta http-equiv="content-language" content="en-us" /> <?php // Corrected casing ?>
    <meta name="distribution" content="global" />
    <meta name="document-type" content="Public" />
    <meta name="audience" content="all"/>
    <meta name="coverage" content="Worldwide" /> <?php // Corrected casing ?>
    <meta name="rating" content="General" />
    <meta name="geo.placename" content="Namakkal, Karur, Madurai, Tirupur, Bangalore, Mumbai, Salem, Chennai, Coimbatore, Hyderabad, Erode, Tamil Nadu, India" /> <?php // Corrected Bangalore spelling, removed trailing comma ?>
    <meta name="geo.region" content="IN" /> <?php // It's better to use ISO 3166-1 alpha-2 country codes for region if specifying country. For multiple, consider separate tags or a structured data approach. The previous list was extensive and mixed regions/countries. ?>
    <meta name="googlebot" content="index, follow" />
    <?php /* YahooSeeker, allow-search, msnbot are less critical these days as "robots" and "googlebot" cover major crawlers. */ ?>
    <?php /* <meta name="expires" content="never"> 'never' is not standard. Omit or use a valid format if needed. */ ?>

    <meta property="og:title" content="<?= htmlspecialchars($pageMeta['title'] ?? 'Starlit Steel Building Solutions') ?>" />
    <meta property="og:description" content="<?= htmlspecialchars($pageMeta['description'] ?? 'Starlit Steel Building Solutions: 30+ years of expertise in pre-engineered steel construction') ?>" />
    <meta property="og:type" content="website" /> <?php // Set a valid OG type ?>
    <meta property="og:url" content="https://starlitsteel.com/services_page.php" /> <?php // Should be the canonical URL of THIS page ?>
    <meta property="og:site_name" content="Starlit Steel Building Solutions" /> <?php // Only one og:site_name ?>
    <?php // <meta property="og:image" content="https://starlitsteel.com/assets/images/og-image-services.jpg" /> Add a relevant OG image for this page ?>

<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;800;900&amp;family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">

<link id="theme-color-file" href="assets/css/color-themes/default-color.css" rel="stylesheet">

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
    <?php include 'header.php'; ?>
    <?php include 'sidebar.php'; // If you have a mobile navigation/sidebar ?>
    
    <section class="page-title">
        <div class="content" style="background-image: url(assets/images/background/15.jpg)">
            <div class="auto-container">
                <h1><?= htmlspecialchars($pageMeta['title'] ?? "Our Services") ?></h1>
            </div>
        </div>
        <ul class="page-breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>Services</li> <?php // Or use $pageMeta['title'] if more specific ?>
        </ul>
    </section>
    <section class="services-section-four style-two" style="background-image:url(assets/images/background/pattern-1.png)">
        <div class="auto-container">
            
            <div class="sec-title centered">
                <span class="icon flaticon-telephone"></span> <?php // This icon can be dynamic if part of service data ?>
                <h2>What we <span>do</span></h2>
                <div class="text">Delivering innovative, and cost-effective building solutions.</div> <?php // Updated text slightly ?>
            </div>

            <?php if (isset($displayError) && $displayError): ?>
                <div class="alert alert-danger text-center"><?= htmlspecialchars($displayError) ?></div>
            <?php endif; ?>
            
            <div class="row clearfix">
                <?php if (!empty($servicesData)): ?>
                    <?php foreach ($servicesData as $service): ?>
                        <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"> <?php // Consider varying or removing wow delay for looped items or make it dynamic ?>
                                <div class="image">
                                    <?php 
                                        // Assuming photos is an array and we use the first one.
                                        // ApiClient should ensure $service->photos is an array (empty if none).
                                        $imageUrl = (!empty($service->photos) && isset($service->photos[0])) 
                                                        ? ApiClient::getFullImageUrl($service->photos[0]) 
                                                        : 'assets/images/resource/default-service.jpg'; // Fallback image
                                        // Assuming service detail link is services-post.php?id=SERVICE_ID
                                        // If your API provides a slug or full URL for detail page, use that.
                                        $serviceLink = 'services-post.php?id=' . urlencode($service->id ?? ''); 
                                    ?>
                                    <a href="<?= htmlspecialchars($serviceLink) ?>">
                                        <img src="<?= htmlspecialchars($imageUrl) ?>" alt="<?= htmlspecialchars($service->title ?? 'Service Image') ?>" />
                                    </a>
                                </div>
                                <div class="lower-content">
                                    <div class="content">
                                        <?php // If icons are dynamic from API: <span class="icon <?= htmlspecialchars($service->icon_class ?? 'flaticon-helmet') ?>"></span> ?>
                                        <span class="icon flaticon-home-1"></span> <?php // Example: keep static or make dynamic based on $service data ?>
                                        <h5>
                                            <a href="<?= htmlspecialchars($serviceLink) ?>">
                                                <?= nl2br(htmlspecialchars($service->title ?? 'Service Title Not Available')) /* nl2br if titles can have newlines intended as <br> */ ?>
                                            </a>
                                        </h5>
                                        <?php /* You can add a short description here if available and desired
                                        if ($service->description): ?>
                                            <div class="service-short-description">
                                                <?php 
                                                    // Strip tags and truncate for a short description preview
                                                    // $shortDesc = substr(strip_tags($service->description), 0, 100);
                                                    // echo htmlspecialchars($shortDesc) . (strlen(strip_tags($service->description)) > 100 ? '...' : '');
                                                ?>
                                            </div>
                                        <?php endif; */?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php elseif (empty($displayError)): ?>
                    <div class="col-12 text-center">
                        <p>No services are currently available. Please check back later.</p>
                    </div>
                <?php endif; ?>
                
            </div>
            
            <?php if (!empty($servicesData)): // Only show "View More" if there are services listed ?>
            <div class="lower-text">
                <div class="text">Want to see more details or other offerings? <a href="contact.php">Contact Us</a></div> <?php // Example: Changed link to contact ?>
            </div>
            <?php endif; ?>
            
        </div>
    </section>
    <section class="cta-section">
        <div class="auto-container">
            <div class="row clearfix">
            
                <div class="title-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h3>Get An Easy Quotation</h3>
                        <div class="text">We Are Professional Building Construction</div>
                    </div>
                </div>
                
                <div class="info-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="clearfix">
                            <div class="phone-box">
                                <span class="icon flaticon-call-2"></span>
                                Call Us Any Time:<br>
                                <a href="tel:+918428577887">+91 84285 77887</a>
                                <span class="or">or</span>
                            </div>
                            <div class="button-box">
                                <a class="btn-style-four theme-btn" href="contact.php"><span class="txt">Contact us</span></a> <?php // Changed to contact.php to match previous edit ?>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
    
</div> <div class="search-popup">
    <button class="close-search style-two"><span class="flaticon-cancel-1"></span></button>
    <button class="close-search"><span class="flaticon-up-arrow"></span></button>
    <form method="post" action="search_results.php"> <?php // Changed to a generic search results page ?>
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required="">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </form>
</div>
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