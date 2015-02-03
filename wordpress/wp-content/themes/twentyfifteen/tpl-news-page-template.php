<?php /* Template name: News page Template */ ?>

<!-- header  -->
<?php get_header(); ?>

<div class="news__item p-lr-1">
	<h1>NEWS</h1>
</div>

<!-- content  -->

<?php
/*
* list posts from cat == news (2)
*/
$additional_loop = new WP_Query("posts_per_page=4&cat=2&paged=$paged");

// debug
// print_r($additional_loop);
?>

<?php while ($additional_loop->have_posts()) : $additional_loop->the_post(); ?>

	<div class="news news__item">
		<div class="col-1-2 news__img"><img src="<?php the_field('fg_news_img'); ?>" /></div>
		<div class="col-1-2 news__txt p-lr-1">
			<h3 class="news__txt-title"><?php the_title() ?></h3>
			<p class="news__txt-p"><?php the_content(); ?></p>
		</div>
	</div>

	<!-- spacer -->
	<div class="news__item"><div class="news__spacer">&nbsp;</div></div>




	<?php wp_reset_postdata(); // Restore original Post Data ?>

<?php endwhile; // end of the loop. ?>

<!-- render pagination  -->
<?php kriesi_pagination($additional_loop->max_num_pages); ?>

<!-- footer  -->
<?php get_footer(); ?>
