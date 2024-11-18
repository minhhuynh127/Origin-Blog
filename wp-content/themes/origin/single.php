<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="main-content">
	<div class="post">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

					<h3><?php the_title(); ?></h3>

					<?php include(TEMPLATEPATH . '/inc/meta.php'); ?>

					<div class="entry">

						<?php the_content(); ?>

						<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

						<?php the_tags('Tags: ', ', ', ''); ?>

					</div>

					<?php edit_post_link('Edit this entry', '', '.'); ?>

				</div>


		<?php endwhile;
		endif; ?>
	</div>
	<!-- end post -->
	<?php comments_template(); ?>

</div>
<!-- end main-content -->
<?php get_sidebar('second'); ?>

<?php get_footer(); ?>