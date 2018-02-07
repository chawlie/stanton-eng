<?php
/**
 * Title: Assets
 * Description: Register and enqueue all theme stylesheets and scripts.
 * Documentation:
 * -- http://codex.wordpress.org/Function_Reference/wp_deregister_script
 * -- http://codex.wordpress.org/Function_Reference/wp_register_script
 * -- http://codex.wordpress.org/Function_Reference/wp_register_style
 * -- http://codex.wordpress.org/Function_Reference/wp_enqueue_script
 * -- http://codex.wordpress.org/Function_Reference/wp_enqueue_style
 */

/**
 * Register and enqueue theme styles.
 *
 * @return void
 */
function enqueue_theme_styles() {

	// Register global stylesheets
	wp_register_style('fonts-css', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,700,600,300,800', array(), '1.0.0', 'all');
	wp_register_style('global-css', get_template_directory_uri() . '/site/css/global.css', array('fonts-css'), '1.0.0', 'all');

	// Home page
	if (is_front_page()) {
		wp_enqueue_style('home-css', get_template_directory_uri() . '/site/css/home.css', array('global-css'), '1.0.0', 'all');
	}

	// Style guide page
	if (is_page('styleguide')) {
		wp_enqueue_style('styleguide-css', get_template_directory_uri() . '/site/css/styleguide.css', array('global-css'), '1.0.0', 'all');
	}

	// Enqueue global stylesheet
	wp_enqueue_style('global-css');
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');

/**
 * Register and enqueue theme scripts.
 *
 * @return void
 */
function enqueue_theme_scripts() {

	// Deregister the jQuery version bundled with WordPress
	wp_deregister_script('jquery');

	// Register all scripts
	wp_register_script('modernizr',         get_template_directory_uri() . '/site/vendor/modernizr.js',                  array(),                                           '2.8.3',  FALSE);
	wp_register_script('fastclick-js',      get_template_directory_uri() . '/site/vendor/fastclick.js',                  array(),                                           '1.0.3',  FALSE);
	wp_register_script('jquery',            get_template_directory_uri() . '/site/vendor/jquery.min.js',                 array(),                                           '2.1.4',  TRUE);
	wp_register_script('foundation-js',     get_template_directory_uri() . '/site/vendor/foundation.js',           		 array('jquery'),                                   '6.1.2',  TRUE);
	wp_register_script('slick-js',          get_template_directory_uri() . '/site/vendor/slick.min.js',                  array('jquery'),                                   '1.3.7',  TRUE);
	wp_register_script('fancybox-js',       get_template_directory_uri() . '/site/vendor/jquery.fancybox.pack.js',       array('jquery'),                                   '2.1.5',  TRUE);
	wp_register_script('scrollto-js',       get_template_directory_uri() . '/site/vendor/jquery.scrollTo.min.js',        array('jquery'),                                   '1.4.13', TRUE);
	wp_register_script('localscroll-js',    get_template_directory_uri() . '/site/vendor/jquery.localScroll.min.js',     array('jquery', 'scrollto-js'),                    '1.3.5',  TRUE);
	wp_register_script('waypoints-js',      get_template_directory_uri() . '/site/vendor/waypoints.min.js',              array('jquery'),                                   '2.0.5',  TRUE);
	wp_register_script('prettify-js',       get_template_directory_uri() . '/site/vendor/prettify.min.js',               array(),                                           '1.0.1',  TRUE);
	wp_register_script('home-js',           get_template_directory_uri() . '/site/js/home.js',                           array(),                                           '1.0.0',  TRUE);
	wp_register_script('styleguide-js',     get_template_directory_uri() . '/site/js/styleguide.js',                     array(),                                           '1.0.0',  TRUE);

	// Base global script dependencies
	$global_js_depends = array(
		'foundation-js',
		'slick-js',
		'fancybox-js',
		'localscroll-js',
		'waypoints-js',
	);

	// Home page
	if (is_front_page()) {
		array_push($global_js_depends, 'home-js');
	}

	// Style guide page
	if (is_page('styleguide')) {
		array_push($global_js_depends, 'sticky-js', 'dynamic-subnav-js', 'prettify-js', 'styleguide-js');
	}

	// Dynamic sidebar page template
	if (is_page_template('template-dynamic-sidebar-left.php') or is_page_template('template-dynamic-sidebar-right.php')) {
		array_push($global_js_depends, 'sticky-js', 'dynamic-subnav-js');
	}

	// Enqueue global scripts.
	wp_enqueue_script('modernizr');
	wp_enqueue_script('fastclick-js');
	wp_enqueue_script('jquery');
	wp_enqueue_script('global-js', get_template_directory_uri() . '/site/js/global.js', $global_js_depends, '1.0.0',  TRUE);
	wp_enqueue_script('slick-js');
}
add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');
// Removes type='text/javascript' and type="text/css" - element is not needed and should be omitted.
// https://wordpress.stackexchange.com/questions/287830/remove-type-attribute-from-script-and-style-tags-added-by-wordpress
add_filter('style_loader_tag', 'myplugin_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'myplugin_remove_type_attr', 10, 2);

function myplugin_remove_type_attr($tag, $handle) {
    return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}
?>
