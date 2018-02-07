<?php
/**
 * Title: Theme Support
 * Description: Miscellaneous theme support functions.
 * Documentation:
 * -- http://codex.wordpress.org/Function_Reference/add_theme_support
 * -- http://codex.wordpress.org/Function_Reference/add_filter
 * -- http://codex.wordpress.org/Function_Reference/add_image_size
 */

// Add theme support for featured images
add_theme_support('post-thumbnails');

// Add new image sizes
// Update these values to match site design
if (function_exists('add_image_size')) {
	add_image_size('home-hero',         1500, 650, TRUE); // Home page hero
	add_image_size('page-hero',         1500, 450, TRUE); // Sub page hero
	add_image_size('portfolio-thumb',        600,  400, array( 'center', 'center' )); // Blog page post thumbs
	add_image_size('post-thumb-detail', 800,  450, TRUE); // Detail page post thumbs
}

// Enable shortcodes in widgets
add_filter('widget_text', 'do_shortcode');

// Change the default excerpt ending
function custom_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );

/**
 * Enable custom shortcodes in Contact Form 7
 *
 * @param  array $form
 * @return array
 */
function mycustom_wpcf7_form_elements($form) {
	$form = do_shortcode($form);
	return $form;
}
add_filter('wpcf7_form_elements', 'mycustom_wpcf7_form_elements');
?>
