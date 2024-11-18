<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="main-content">
	<div class="post">
		<p class="not-found">NOT FOUND</p>
		<a href="index.php" class="go-home">Go Home</a>
		<img class="img-not-found" src="<?php echo bloginfo('template_directory') ?>/images/not-found.jpg" alt="">
	</div>
	<!-- end post -->

</div>
<!-- end main-content -->
<?php get_sidebar('second'); ?>

<?php get_footer(); ?>