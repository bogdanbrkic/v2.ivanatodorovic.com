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
  <link href="/build/css/master.css" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

  <!-- Header [ -->
  <header class="l__header">
    <div class="row p-top logo p-lr-1">
      <a href="/" title="ivana todorovic home page"><img class="element-1 logo__name " src="/img/svg/ivana-todorovic-logo-full.svg" /></a>
      <!-- ivanatodorovic-header-name-img.png -->
      <!-- <a href="/" title="ivana todorovic home page"><img class="element-1 logo__name " src="/img/home/ivanatodorovic-header-name-img.png" /></a> -->
    </div>

    <div class="row">
      <?php

      $menu_arr = array(
        'theme_location'  => '',
        'menu'            => '',
        'container'       => 'nav',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
      );

      wp_nav_menu( $menu_arr ); ?>
    </div>
  </header>
  <!--] Header -->
