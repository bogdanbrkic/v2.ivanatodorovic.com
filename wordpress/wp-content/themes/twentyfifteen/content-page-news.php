<?php
/**
* The template used for displaying newspage content
*
* @package WordPress
* @subpackage Twenty_Fifteen
* @since Twenty Fifteen 1.0
*/
?>

<!-- header  -->
<?php get_header(); ?>

<!-- content  -->

<?php
/*
* list posts from cat == news (2)
*/
$conf_post_per_page = 4;
$additional_loop = new WP_Query("posts_per_page=".$conf_post_per_page."&cat=2&paged=$paged");
// print_r($additional_loop);	// debug
// print_r($additional_loop->found_posts);
/*
* loop array and set 1 2 3 with diff tpls
* count == 3 reset counter and lop again
*/
$i = 0; // counter
$k = 0;
while ($additional_loop->have_posts()) : $additional_loop->the_post();
$i++;
$k++;

if ($i == 1) {
	?>
	<div class="news news__item">
		<div class="col-1 news__img">
			<?php the_post_thumbnail( array( 970, 9999), array( 'class' => '' ), $crop = TRUE ) // 9999 = wp auto height ?>
		</div>
		<div class="col-1 news__txt p-lr-1">
			<h3 class="news__txt-title"><a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a></h3>
			<p class="news__txt-p"><?php the_content(); ?></p>
		</div>
	</div>

	<?php } // if i eq 1
	if ($i == 2) {
		?>
		<div class="news news__item">
			<div class="col-1-2 news__img"><?php the_post_thumbnail( array( 480, 320), array( 'class' => 'slideshow-img' ) ) ?></div>
			<div class="col-1-2 news__txt p-lr-1">
				<h3 class="news__txt-title"><a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a></h3>
				<p class="news__txt-p"><?php the_content(); ?></p>
			</div>
		</div>

		<?php } // if i eq 2
		if ($i == 3) {
			?>
			<div class="news news__item">
				<div class="col-1-2 news__txt p-lr-1">
					<h3 class="news__txt-title"><a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a></h3>
					<p class="news__txt-p"><?php the_content(); ?></p>
				</div>
				<div class="col-1-2 news__img"><?php the_post_thumbnail( array( 480, 320), array( 'class' => 'slideshow-img' ) ) ?></div>
			</div>

			<?php
			$i=0; // reset tpl counter
		} // if i eq 3
		?>

		<!-- spacer -->
		<?php if($k != $conf_post_per_page){ ?>
			<div class="news__item"><div class="news__spacer">&nbsp;</div></div>
		<?php } ?>

		<?php wp_reset_postdata(); // Restore original Post Data ?>

	<?php endwhile; // end of the loop. ?>

	<div class="text--center row">
		<!-- render pagination  -->
		<?php custom_pagination($additional_loop->max_num_pages, $range = 2, $cssClassName="pagination"); ?>
	</div>
