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

					$args = array( 'posts_per_page' => 5, 'category_name' => 'news' ); //list only post from cat = news
					$myposts = get_posts( $args );

					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

					<div class="news news__item">
							<div class="col-1-2 news__img"><img src="<?php the_field('fg_news_img'); ?>" /></div>
							<div class="col-1-2 news__txt p-lr-1">
								<h3 class="news__txt-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p class="news__txt-p"><?php the_content(); ?></p>
							</div>
							</div>
								<!-- spacer -->
								<div class="news__item"><div class="news__spacer">&nbsp;</div>


					<?php endforeach;

					wp_reset_postdata();
					?>


		<?php endwhile; // end of the loop. ?>


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
