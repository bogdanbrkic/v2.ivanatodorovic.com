<?php /* Template name: IT Content page Template */ ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >


	<header class="entry-header">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->



	<!-- AFC ield value
	<img src="<?php the_field('fg_news_img'); ?>" />
	<h2><?php the_field('FG_1_title'); ?></h2>
	<div><?php the_field('FG_1_content'); ?></div>
   -->

	<!-- CF_video : render custom field value
	<?php echo get_post_meta($post->ID, "CF_video", true); ?>
-->


	<footer class="entry-footer">
		<?php // twentyfifteen_entry_meta(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
