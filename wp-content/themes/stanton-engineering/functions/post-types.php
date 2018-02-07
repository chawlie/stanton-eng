<?php
/**
 * Title: Post Types
 * Description: Custom post types to be used by the theme.
 * Documentation: http://codex.wordpress.org/Post_Types
 *
 * NOTE: For assistance creating custom post types visit http://generatewp.com/
 */

/**
 * Register Project Portfolio post type
 *
 * @return void
 */
function post_type_portfolio() {
	$labels = array(
		'name'                => _x('Project Portfolio', 'Post Type General Name', 'text_domain'),
		'singular_name'       => _x('Project Portfolio', 'Post Type Singular Name', 'text_domain'),
		'menu_name'           => __('Project Portfolio', 'text_domain'),
		'parent_item_colon'   => __('Parent Item:', 'text_domain'),
		'all_items'           => __('All Projects', 'text_domain'),
		'view_item'           => __('View Project', 'text_domain'),
		'add_new_item'        => __('Add New Project', 'text_domain'),
		'add_new'             => __('Add New', 'text_domain'),
		'edit_item'           => __('Edit Project', 'text_domain'),
		'update_item'         => __('Update Project', 'text_domain'),
		'search_items'        => __('Search Project', 'text_domain'),
		'not_found'           => __('Not found', 'text_domain'),
		'not_found_in_trash'  => __('Not found in Trash', 'text_domain'),
	);
	$args = array(
		'label'               => __('Project Portfolio', 'text_domain'),
		'description'         => __('Project Portfolio', 'text_domain'),
		'labels'              => $labels,
		'supports'            => array('title', 'revisions', 'page-attributes'),
		'hierarchical'        => FALSE,
		'public'              => TRUE,
		'show_ui'             => TRUE,
		'show_in_menu'        => TRUE,
		'show_in_nav_menus'   => TRUE,
		'show_in_admin_bar'   => TRUE,
		'menu_position'       => 5,
		'can_export'          => TRUE,
		'has_archive'         => TRUE,
		'exclude_from_search' => TRUE,
		'publicly_queryable'  => TRUE,
		'capability_type'     => 'page',
	);
	register_post_type('portfolio', $args);
}
add_action('init', 'post_type_portfolio', 0);
?>
