<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />

	<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" />
	<?php } ?>

	<title>
		<?php
		if (function_exists('is_tag') && is_tag()) {
			single_tag_title("Tag Archive for &quot;");
			echo '&quot; - ';
		} elseif (is_archive()) {
			wp_title('');
			echo ' Archive - ';
		} elseif (is_search()) {
			echo 'Search for &quot;' . wp_specialchars($s) . '&quot; - ';
		} elseif (!(is_404()) && (is_single()) || (is_page())) {
			wp_title('');
			echo ' - ';
		} elseif (is_404()) {
			echo 'Not Found - ';
		}
		if (is_home()) {
			bloginfo('name');
			echo ' - ';
			bloginfo('description');
		} else {
			bloginfo('name');
		}
		if ($paged > 1) {
			echo ' - page ' . $paged;
		}
		?>
	</title>

	<link rel="shortcut icon" href="/favicon.ico">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if (is_singular()) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>

	<?php if (is_home()) { ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		<script src="<?php echo bloginfo('template_directory') ?>/js/easyAccordionFixed.js"></script>
		<script src="<?php echo bloginfo('template_directory') ?>/js/utility.js"></script>
		<script src="<?php echo bloginfo('template_directory') ?>/js/tooltip.js"></script>
		<link rel="stylesheet" href="<?php echo bloginfo('template_directory') ?>/css/featured.css">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
		<!--[if (lt IE 9)]><script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.helper.ie8.js"></script><![endif]-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
		<!-- NOTE: prior to v2.2.1 tiny-slider.js need to be in <body> -->
		<script type="module">
            var slider = tns({
                container: '.my-slider',
                items: 1,
                slideBy: 'page',
                autoplay: true
            });
        </script>

	<?php } ?>

	<?php if (is_page(18)) { ?>
		<script src="<?php echo bloginfo('template_directory') ?>/js/faqs.js"></script>

	<?php } ?>

	<?php if (is_single()) { ?>
		<link rel="stylesheet" href="<?php echo bloginfo('template_directory') ?>/css/comments.css">
	<?php } ?>
</head>

<body <?php body_class(); ?>>

	<div id="page-wrap">

		<div id="header">
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>

		</div>

		<div id="top-bar" class="group">
			<?php wp_nav_menu(array('menu' => 'Page Menu', 'container' => '')) ?>
			<div id="search-box">
				<?php include(TEMPLATEPATH . './searchform.php'); ?>
				<!-- <form action="" method="get" id="search-form">
					<input type="text" name="s" id="s" value="" />
					<input type="submit" name="submit" id="s" value="Search" />
				</form> -->
			</div>
		</div>
		<!-- end top-bar -->