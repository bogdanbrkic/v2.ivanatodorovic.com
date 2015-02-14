<?php /* Template name: News page Template */ ?>

<?php
//debug
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );
 ?>

<!-- header -->
<?php get_header(); ?>

<div class="news__item p-lr-1">
  <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
</div>

<?php
// Start the loop.
while ( have_posts() ) : the_post();

	// Include the page content template.
	get_template_part( 'content', 'page-news' );

// End the loop.
endwhile;
?>

<!-- footer -->
<?php get_footer(); ?>
