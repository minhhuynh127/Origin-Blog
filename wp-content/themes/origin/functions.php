<?php

// Add RSS links to <head> section
add_theme_support('automatic-feed-links');



// Load jQuery
function my_init_method()
{
	if (!is_admin()) {
		wp_enqueue_script('jquery');
		wp_deregister_script('jquery');
		wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"), false);
		wp_register_script('main-nav', get_bloginfo('template_directory') . "/js/main-nav.js");
		wp_enqueue_script('main-nav');
		wp_register_script('tab-nav', get_bloginfo('template_directory') . "/js/tab-nav.js");
		wp_enqueue_script('tab-nav');
	}
}
add_action('wp_enqueue_scripts', 'my_init_method');

// if (!is_admin()) {
// 	wp_deregister_script('jquery');
// 	wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"), false);
// 	wp_enqueue_script('jquery');
// 	wp_register_script('main-nav', get_bloginfo('template_directory')."/js/main-nav.js");
// 	wp_enqueue_script('main-nav');
// 	wp_register_script('tab-nav', get_bloginfo('template_directory')."/js/tab-nav.js");
// 	wp_enqueue_script('tab-nav');

// }

// Clean up the <head>
function removeHeadLinks()
{
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

// Declare sidebar widget zone
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Left Sidebar',
		'id'   => 'left-sidebar',
		'description'   => 'These are widgets for the sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));
}

// Declare sidebar widget zone
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Right Sidebar',
		'id'   => 'right-sidebar',
		'description'   => 'These are widgets for the sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));
}

// Create menu support for theme.
if (function_exists('register_nav_menus')) {
	register_nav_menus(array(
		'main_nav' => 'Main Navigation Menu'
	));
}

if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');
};

// excerpt de hien thi link
function new_excerpt_more($more)
{
	global $post;
	return "<a class='more-link' href='" . get_permalink($post->ID) . "'>Continue Reading</a>";
}
add_filter('excerpt_more', 'new_excerpt_more');

function new_excerpt_length($length)
{
	return 40;
}
add_filter('excerpt_length', 'new_excerpt_length');

//Theme Option Page
include_once(TEMPLATEPATH . '/inc/theme-options.php');
