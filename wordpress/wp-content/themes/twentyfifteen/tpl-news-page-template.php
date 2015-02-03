<?php /* Template name: News page Template */ ?>

<!-- header  -->
<?php get_header(); ?>

<div class="news__item p-lr-1">
	<h1>NEWS</h1>
</div>

<!-- content  -->


		<?php while ( have_posts() ) : the_post(); ?>
			<? //php the_content(); | php post_class_oddeven(); ?>

					<?php
					/*
					 * list posts from cat == news
					*/
					// $page = (get_query_var('page')) ? get_query_var('page') : 1;
					$args = array( 'posts_per_page' => 2, 'category_name' => 'news', 'page' => $page);
					$myposts = get_posts( $args );

					// debug
					// print_r($args);
					// print_r($myposts);
					next_posts_link( 'Older Entries', $loop->max_num_pages );
					previous_posts_link( 'Newer Entries' );

					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

					<div class="news news__item">
							<div class="col-1-2 news__img"><img src="<?php the_field('fg_news_img'); ?>" /></div>
							<div class="col-1-2 news__txt p-lr-1">
								<h3 class="news__txt-title"><?php the_title(); ?></h3>
								<p class="news__txt-p"><?php the_content(); ?></p>
							</div>
							</div>
								<!-- spacer -->
								<div class="news__item"><div class="news__spacer">&nbsp;</div></div>




					<?php endforeach;
								wp_reset_postdata();
					?>


		<?php endwhile; // end of the loop. ?>

		<div id="pagination">
			<?php wp_pagenavi( array( 'type' => 'multipart' ) ); ?>
		</div>

<!-- footer  -->
<?php get_footer(); ?>








<!-- tpl left right ... fali big post  -->
<!-- <div class="news news__item">
	<div class="col-1-2 news__img"><img src="http://ivanatodorovic.com/img/news/fotka-radionice.jpg" ></div>
	<div class="col-1-2 news__txt p-lr-1">
		<h3 class="news__txt-title">I was on a panel about future about Visual Anthropology with legend David MacDougall on Gottingen International Ethnographic Film Festival!</h3>
		<p class="news__txt-p">My film “When I was a boy, I was a girl “ was screened too and was emotional journey for me as Gottingen was first film festival in 2006 where I showed my first film</p>
	</div>
</div>

<div class="news__item"><div class="news__spacer">&nbsp;</div></div>

<div class="news news__item">
	<div class="col-1-2 news__txt p-lr-1">
		<h3 class="news__txt-title">I was on a panel about future about Visual Anthropology with legend David MacDougall on Gottingen International Ethnographic Film Festival!</h3>
		<p class="news__txt-p">My film “When I was a boy, I was a girl “ was screened too and was emotional journey for me as Gottingen was first film festival in 2006 where I showed my first film</p>
	</div>
	<div class="col-1-2 news__img"><img src="http://ivanatodorovic.com/img/news/fotka-radionice.jpg" ></div>
</div> -->
