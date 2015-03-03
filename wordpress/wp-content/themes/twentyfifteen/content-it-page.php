<?php
/**
 * The template used for displaying film page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		$mainImage = get_the_post_thumbnail( $post->ID, array(980, 652) );
		echo $mainImage;
	?>

	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
