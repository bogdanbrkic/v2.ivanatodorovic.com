<?php /* Template name: IT Content page Template */ ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

<h2>123</h2>

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

		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php // twentyfifteen_entry_meta(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
