<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<!-- Footer [ -->
<footer class="l__footer">
	<div class="l__footer--container ">© 2015. <a href="http://afterworkspace.com" alt="Afterwork team website" target="_blank" >Afterwork</a> All rights reserved.</div>
</footer>
<!-- ] Footer -->

<?php wp_footer(); ?>

<!-- bottom script -->
<script src="/build/js/base.min.js"></script>
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script>
// fitVids
// $(".video").fitVids(); // @TODO move in grunt uglfy

//main menu js
$("li.film-1").on('click', function(){
	window.location = "/films/when-i-was-a-boy-i-was-a-girl";
});
$("li.film-2").on('click', function(){
	window.location = "/films/a-harlem-mother";
});
$("li.film-3").on('click', function(){
	window.location = "/films/everyday-life-of-roma-children-from-block-71";
});
$("li.film-4").on('click', function(){
	window.location = "/rapresent";
});
//
$("#hp-badge").on('click', function(){
	window.location = "/lecturer/#tedx";
});

</script>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WHP96Z"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WHP96Z');</script>
<!-- End Google Tag Manager -->
</body>
</html>
