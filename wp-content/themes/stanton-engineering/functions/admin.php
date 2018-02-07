<?php
/**
 * Title: Admin Function
 * Description: These are the functions that are used to customize the admin interface
 * Documentation:
 * -- http://codex.wordpress.org/Creating_Admin_Themes
 * -- http://codex.wordpress.org/Dashboard_Widgets_API
 */

/**
 * Enqueue custom stylesheet for admin panel.
 *
 * @return void
 */
function enqueue_my_admin_style() {
	wp_enqueue_style('admin-css', get_template_directory_uri() . '/public/css/admin.css', FALSE, '1.0.0');
}
add_action('admin_enqueue_scripts', 'enqueue_my_admin_style');
add_action('login_enqueue_scripts', 'enqueue_my_admin_style');
?>
