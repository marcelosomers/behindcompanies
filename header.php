<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Behind Companies 5.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/js/jquery-2.0.3.min.js'></script>

<?php wp_head(); ?>

<!-- BuySellAds PRO Code -->
<script type=""text/javascript"">
(function(){
    var bsa = document.createElement('script');
        bsa.type = 'text/javascript';
        bsa.async = true;
        bsa.src = 'http://cdn.buysellads.com/ac/pro.js';
    document.getElementsByTagName('head')[0].appendChild(bsa);
})();
</script>
<!-- End BuySellAds PRO Ad Code -->

<!-- Fusion Ads Tag -->
    <script type="text/javascript">
    (function(){
      var fusion = document.createElement('script');
      fusion.src = window.location.protocol + '//adn.fusionads.net/api/1.0/ad.js?zoneid=178&rand=' + Math.floor(Math.random()*9999999);
      fusion.async = true;
      (document.head || document.getElementsByTagName('head')[0]).appendChild(fusion);
    })();</script>
</head>

<body>
	<header class="header">
        <div class="container">
            <a href="<?php bloginfo('wpurl'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Behind Companies Logo" id="logo" /></a>
        </div>
    </header>

    <nav class="mobile-hide sticky-nav">
        <ul class="nav container">
            <li><a href="<?php echo home_url() ?>/colophon/">About</a></li>
            <li><a href="<?php echo home_url() ?>/subscribe/">Subscribe</a></li>
            <li><a href="<?php echo home_url() ?>/sponsorship/">Advertise</a></li>
            <li><a href="<?php echo home_url() ?>/archive/">Archive</a></li>
            <li class="byline"><a href="<?php echo home_url() ?>/colophon/">By Marcelo Somers</a></li>
        </ul>
    </nav>

    <nav class="mobile-show">
        <span class="mobile-show nav-title js-nav-toggle">Navigation &raquo;</span>
        <ul class="nav nav--mobile js-nav">
            <li><a href="colophon/">About</a></li>
            <li><a href="subscribe/">Subscribe</a></li>
            <li><a href="sponsorship/">Advertise</a></li>
            <li><a href="archive/">Archive</a></li>
            <li class="byline"><a href="colophon/">By Marcelo Somers</a></li>
        </ul>
    </nav>

    <div class="container">
        <section class="content">