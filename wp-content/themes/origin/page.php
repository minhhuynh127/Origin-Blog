<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="main-content">
	<div class="post">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h3><?php echo the_title(); ?></h3>
					<div class="entry">

						<?php the_content(); ?>

					</div>

				</div>

		<?php endwhile;
		endif; ?>
	</div>
	<!-- end post -->

</div>
<!-- end main-content -->
<?php get_sidebar('second'); ?>

<?php get_footer(); ?>