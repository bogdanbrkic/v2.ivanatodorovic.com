<?php
/**
* The default template for displaying content
*
* Used for both single and index/archive/search.
*
* @package WordPress
* @subpackage Twenty_Fifteen
* @since Twenty Fifteen 1.0
*/
?>
<div class="news news__item">

	<article id="post-<?php the_ID(); ?>" <?php post_class_oddeven(); ?> >

		<?php
		// Post thumbnail.
		twentyfifteen_post_thumbnail();
		?>

		<header class="entry-header">
			<?php
				the_title( '<h1 class="entry-title">', '</h1>' );
				?>
		</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
				/* translators: %s: Name of current post */
				the_content();
					?>
				</div><!-- .entry-content -->

				<div>
					<?php wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
						) );
					?>
				</div>

				<!-- AFC ield value -->
				<!-- <img src="<?php // the_field('fg_news_img'); ?>" />
				<h2><?php // the_field('FG_1_title'); ?></h2>
				<div><?php // the_field('FG_1_content'); ?></div> -->


				<!-- CF_video : render custom field value -->
				<?php // echo get_post_meta($post->ID, "CF_video", true); ?>


		</article><!-- #post-## -->

</div>
