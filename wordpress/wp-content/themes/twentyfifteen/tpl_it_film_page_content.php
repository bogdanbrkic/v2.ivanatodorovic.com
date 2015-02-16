<?php /* Template name: IT Film page Template */ ?>

<!-- header -->
<?php get_header(); ?>

<div class="row">

<?php
// Start the loop.
while ( have_posts() ) : the_post();

	// Include the page content template.
	get_template_part( 'content', 'page-film' );

// End the loop.
endwhile;
?>

</div>

<!-- footer -->
<?php get_footer(); ?>
