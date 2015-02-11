<?php /* Template name: News page Template */ ?>

<!-- header  -->
<?php get_header(); ?>

<div class="news__item p-lr-1">
	<h1>NEWS</h1>
</div>

<style>

/* move into sass and style-it and set in the middle .. like on power nap site .. */

.pagination {
clear:both;
padding:20px 0;
position:relative;
font-size:11px;
line-height:13px;

width: 50%;
left: 50%;
}

.pagination span, .pagination a {
display:block;
float:left;
margin: 2px 2px 2px 0;
padding:6px 9px 5px 9px;
text-decoration:none;
width:auto;
color:#fff;
background: #555;
}

.pagination a:hover{
color:#fff;
background: #3279BB;
}

.pagination .current{
padding:6px 9px 5px 9px;
background: #3279BB;
color:#fff;
}

</style>

<!-- content  -->

<?php
/*
* list posts from cat == news (2)
*/
$conf_post_per_page = 4;
$additional_loop = new WP_Query("posts_per_page=".$conf_post_per_page."&cat=2&paged=$paged");
// print_r($additional_loop);	// debug
/*
 * loop array and set 1 2 3 with diff tpls
 * count == 3 reset counter and lop again
*/

	$i = 0; // counter
	while ($additional_loop->have_posts()) : $additional_loop->the_post();
	$i++;
	if ($i == 1) {
?>

	<div class="news news__item">
			<div class="col-1 news__img"><img src="<?php the_field('fg_news_img'); ?>"/></div>
			<div class="col-1 news__txt p-lr-1">
				<h3 class="news__txt-title"><a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a></h3>
				<p class="news__txt-p"><?php the_content(); ?></p>
			</div>
		</div>

	<?php } // if i eq 1
	if ($i == 2) {
	?>

	<div class="news news__item">
		<div class="col-1-2 news__img"><img src="<?php the_field('fg_news_img'); ?>" /></div>
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
			<div class="col-1-2 news__img"><img src="<?php the_field('fg_news_img'); ?>" /></div>
		</div>

	<?php
		$i=0; // reset tpl counter
		} // if i eq 3
	?>

	<!-- spacer -->
	<div class="news__item"><div class="news__spacer">&nbsp;</div></div>

	<?php wp_reset_postdata(); // Restore original Post Data ?>

<?php endwhile; // end of the loop. ?>

<div class="text--center row">
<!-- render pagination  -->
<?php custom_pagination($additional_loop->max_num_pages, $range = 2, $cssClassName="pagination"); ?>
</div>

<!-- footer  -->
<?php get_footer(); ?>
