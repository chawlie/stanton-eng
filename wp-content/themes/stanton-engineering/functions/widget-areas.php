<?php
/**
 * Title: Widgets Areas
 * Description: Create administrable widget areas.
 * Documentation: http://codex.wordpress.org/Function_Reference/register_sidebar
 */

// Register Right Sidebar widget area for blog.
register_sidebar(array(
	'name'          => __('Blog - Right Sidebar'),
	'id'            => 'sidebar-blog',
	'description'   => __('Widgets in this area will be shown on blog pages on the right-hand side.'),
	'before_widget' => '<aside id="%1$s" class="sidebar-section widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<header class="sidebar-header"><h5>',
	'after_title'   => '</h5></header>'
));

// Register Left Sidebar widget area for pages.
register_sidebar(array(
	'name'          => __('Page - Left Sidebar'),
	'id'            => 'sidebar-page-left',
	'description'   => __('Widgets in this area will be shown on regular pages on the left-hand side.'),
	'before_widget' => '<aside id="%1$s" class="sidebar-section widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<header class="sidebar-header"><h5>',
	'after_title'   => '</h5></header>'
));

// Register Left Sidebar widget area for pages.
register_sidebar(array(
	'name'          => __('Page - Right Sidebar'),
	'id'            => 'sidebar-page-right',
	'description'   => __('Widgets in this area will be shown on regular pages on the right-hand side.'),
	'before_widget' => '<aside id="%1$s" class="sidebar-section widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<header class="sidebar-header"><h5>',
	'after_title'   => '</h5></header>'
));

// Register Call to Action widget area.
register_sidebar(array(
	'name'          => __('Call to Action (Above Footer)'),
	'id'            => 'cta-footer',
	'description'   => __('Widgets in this area will be shown in the Call to Action bar above the footer.'),
	'before_widget' => '<div class="row"><div class="columns small-12 medium-8 large-8 call-to-action-left">',
	'after_widget'  => '</div></div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3></div><div class="columns small-12 medium-4 large-4 call-to-action-right">'
));

// Register Footer Column 1 widget area.
register_sidebar(array(
	'name'          => __('Footer Column 1'),
	'id'            => 'footer-column-1',
	'description'   => __('Widgets in this area will be shown in the footer in the first column.'),
	'before_widget' => '<div id="%1$s" class="footer-widget-area widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>'
));

// Register Footer Column 2 widget area.
register_sidebar(array(
	'name'          => __('Footer Column 2'),
	'id'            => 'footer-column-2',
	'description'   => __('Widgets in this area will be shown in the footer in the second column.'),
	'before_widget' => '<div id="%1$s" class="footer-widget-area widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>'
));

// Register Footer Column 3 widget area.
register_sidebar(array(
	'name'          => __('Footer Column 3'),
	'id'            => 'footer-column-3',
	'description'   => __('Widgets in this area will be shown in the footer in the third column.'),
	'before_widget' => '<div id="%1$s" class="footer-widget-area widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>'
));

// Register Footer Column 4 widget area.
register_sidebar(array(
	'name'          => __('Footer Column 4'),
	'id'            => 'footer-column-4',
	'description'   => __('Widgets in this area will be shown in the footer in the fourth column.'),
	'before_widget' => '<div id="%1$s" class="footer-widget-area widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>'
));
?>
