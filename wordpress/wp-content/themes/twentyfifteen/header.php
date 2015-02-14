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
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:100,400,700,300,300italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,700' rel='stylesheet' type='text/css'>
	<link href="//v2.ivanatodorovic.com:5015/build/css/master.css" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

	<!-- Header [ -->
	<header class="l__header">
		<div class="row p-top logo p-lr-1">
			<img class="element-1 logo__name " src="/img/svg/ivana-todorovic-logo-full.svg" />
		</div>

<!-- menu cur link class :: menu__item--current  -->
		<div class="row">
			<ul class="menu p-lr-1">
				<li class="menu__item"><a href="index.html">HOME</a></li>
				<li class="menu__item"><a href="#">FILMS</a></li>
				<li class="menu__item">LECTURER</li>
				<li class="menu__item">BIO</li>
				<li class="menu__item">NEWS</li>
				<li class="menu__item">PRESS</li>
				<li class="menu__item">FRIENDS</li>
				<li class="menu__item">CONTACT</li>
			</ul>
		</div>

	</header>
	<!--] Header -->
