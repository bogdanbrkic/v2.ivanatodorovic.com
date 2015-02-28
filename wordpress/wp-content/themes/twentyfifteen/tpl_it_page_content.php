<?php /* Template name: IT page Template */ ?>

<?php
//debug
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );
 ?>

<!-- header -->
<?php get_header(); ?>

<div class="row">

<?php
// Start the loop.
while ( have_posts() ) : the_post();

	// Include the page content template.
	get_template_part( 'content', 'it-page' );

// End the loop.
endwhile;
?>

</div>

<!-- footer -->
<?php get_footer(); ?>