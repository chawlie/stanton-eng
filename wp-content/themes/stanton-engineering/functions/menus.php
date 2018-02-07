<?php
/*
 * Title: Menus
 * Description: Set up the various menus/menu locations to be used by the theme.
 * Documentation:
 * -- http://codex.wordpress.org/Function_Reference/register_nav_menus
 * -- http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */

/**
 * Register menu locations to be managed by site admin.
 */
register_nav_menus(array(
	'header-menu-primary'   => __('Header Menu - Primary'),
	// 'header-menu-secondary' => __('Header Menu - Secondary'),
	'footer-menu-bottom'    => __('Footer Menu - Bottom'),
	'mobile-menu'           => __('Mobile Menu')
));

/**
 * Define args for and return primary menu.
 *
 * @return string
 */
function header_menu_primary() {
	wp_nav_menu(array(
		'container'       => '',                      // remove nav container
		'container_class' => '',                      // class of container
		'menu'            => '',                      // menu name
		'menu_id'         => '',                      // menu id
		'menu_class'      => 'inline',                // adding custom nav class
		'theme_location'  => 'header-menu-primary',   // where it's located in the theme
		'before'          => '',                      // before each link <a>
		'after'           => '',                      // after each link </a>
		'link_before'     => '',                      // before each link text
		'link_after'      => '<i class="caret"></i>', // after each link text
		'depth'           => 3
	));
}

/**
 * Define args for and return secondary menu.
 *
 * @return string
 */
// function header_menu_secondary() {
// 	wp_nav_menu(array(
// 		'container'       => '',                      // remove nav container
// 		'container_class' => '',                      // class of container
// 		'menu'            => '',                      // menu name
// 		'menu_id'         => '',                      // menu id
// 		'menu_class'      => 'inline',                // adding custom nav class
// 		'theme_location'  => 'header-menu-secondary', // where it's located in the theme
// 		'before'          => '',                      // before each link <a>
// 		'after'           => '',                      // after each link </a>
// 		'link_before'     => '',                      // before each link text
// 		'link_after'      => '<i class="caret"></i>', // after each link text
// 		'depth'           => 2
// 	));
// }

/**
 * Define args for and return mobile menu.
 *
 * @return string
 */
function mobile_menu() {
	wp_nav_menu(array(
		'container'       => '',                                 // remove nav container
		'container_class' => '',                                 // class of container
		'menu'            => '',                                 // menu name
		'menu_id'         => '',                                 // menu id
		'menu_class'      => 'inline',                           // adding custom nav class
		'theme_location'  => 'mobile-menu',                      // where it's located in the theme
		'before'          => '',                                 // before each link <a>
		'after'           => '<i class="caret caret-down"></i>', // after each link </a>
		'link_before'     => '',                                 // before each link text
		'link_after'      => '',                                 // after each link text
		'depth'           => 3
	));
}

/**
 * Define args for and return footer menu.
 *
 * @return string
 */
function footer_menu_bottom() {
	wp_nav_menu(array(
		'container'       => '',                   // remove nav container
		'container_class' => '',                   // class of container
		'menu'            => '',                   // menu name
		'menu_id'         => '',                   // menu id
		'menu_class'      => 'inline',             // adding custom nav class
		'theme_location'  => 'footer-menu-bottom', // where it's located in the theme
		'before'          => '',                   // before each link <a>
		'after'           => '',                   // after each link </a>
		'link_before'     => '',                   // before each link text
		'link_after'      => '',                   // after each link text
		'depth'           => -1
	));
}
?>
