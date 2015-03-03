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
	<div class="l__footer--container ">© 2015. All rights reserved.</div>
</footer>
<!-- ] Footer -->

<?php wp_footer(); ?>


<!-- custom -->

<!-- bottom script -->
<script src="build/js/base.min.js"></script>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script>
//fitVids
$(".video").fitVids(); // @TODO move in grunt uglfy
<!--  -->

</body>
</html>
