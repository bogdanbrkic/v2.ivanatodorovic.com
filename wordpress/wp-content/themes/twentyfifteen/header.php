<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	<?php wp_head(); ?>

	<!--  -->
	<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet" type="text/css">
	<link href="//v2.ivanatodorovic.com:5035/build/css/master.css" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a> -->
	<div id="content" class="site-content">
		<div class="news__item p-lr-1">
			<h1>NEWS</h1>
		</div>
