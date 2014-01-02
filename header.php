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
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header">
        <div class="container">
            <a href="/"><img src="wp-content/themes/behindcompanies-5/images/logo.png" alt="Behind Companies Logo" id="logo" /></a>
        </div>
    </header>

    <nav>
        <ul class="nav container">
            <li><a href="#">About</a></li>
            <li><a href="#">Subscribe</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="#">Archive</a></li>
            <li class="byline">By Marcelo Somers</li>
        </ul>
    </nav>

    <div class="container">
        <section class="content">