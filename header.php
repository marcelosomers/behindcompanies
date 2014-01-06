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

<link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon-precomposed.png">
<meta property="og:image" content="http://behindcompanies.com/wp-content/themes/BC4.0/img/apple-touch-icon-precomposed.png" />

<?php wp_head(); ?>
</head>

<body>
	<header class="header">
        <div class="container">
            <a href="<?php bloginfo('wpurl'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Behind Companies Logo" id="logo" /></a>
        </div>
    </header>

    <nav class="mobile-hide sticky-nav">
        <ul class="nav container">
            <li><a href="<?php echo home_url() ?>/about/">About</a></li>
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