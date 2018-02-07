<?php
/**
 * Title: Meta Data
 * Description: Functions to set and return the admin generated meta and social data.
 * Documentation: http://codex.wordpress.org/Function_Reference/get_post_meta
 */

/**
 * Set and return the meta_description of a specific page based on the post id.
 *
 * @param  int $id
 * @return string
 */
function get_the_meta_description($id) {
	// Check if meta_description is set.
	if (get_post_meta($id, "meta_description", TRUE) !='') {
		$output = get_post_meta($id, "meta_description", TRUE);

	// If meta description is not set, use the excerpt instead.
	} else {
		global $post;
		setup_postdata($post);
		$output = get_the_excerpt();
		wp_reset_postdata();
	}
	return $output;
}

/**
 * Set and return the meta_keywords of a specific page based on the post id.
 *
 * @param  int $id
 * @return string
 */
function get_the_meta_keywords($id) {
	// Check if meta_keywords are set.
	if (get_post_meta($id, "meta_keywords", TRUE) != '') {
		$output = get_post_meta($id, "meta_keywords", TRUE);

	// If meta keywords are not set, use the site name and page title instead.
	} else {
		$output  = strtolower(get_bloginfo('name')) . ', ';
		$output .= strtolower(get_the_title($id));
	}
	return $output;
}

/**
 * Set and return the meta og_title of a specific page based on the post id.
 *
 * @param  int $id
 * @return string
 */
function get_the_og_title($id) {
	// Check if og_title is set.
	if (get_post_meta($id, "og_title", TRUE) != '') {
		$output = get_post_meta($id, "og_title", TRUE);

	// If og_title is not set, use the page title instead.
	} else {
		$output = get_the_title($id);
	}
	return $output;
}

/**
 * Set and return the meta og_description of a specific page based on the post id.
 *
 * @param  int $id
 * @return string
 */
function get_the_og_description($id) {
	// Check if og_description is set.
	if (get_post_meta($id, "og_description", TRUE) !='') {
		$output = get_post_meta($id, "og_description", TRUE);

	// If og_description is not set, check if meta_description is set.
	} elseif (get_post_meta($id, "meta_description", TRUE) !='')  {
		$output = get_post_meta($id, "meta_description", TRUE);

	// If neither og_description nor meta_description is set, use the excerpt.
	} else {
		global $post;
		setup_postdata($post);
		$output = get_the_excerpt();
		wp_reset_postdata();
	}
	return $output;
}

/**
 * Set and return the meta og_image of a specific page based on the post id.
 *
 * @param  int $id
 * @return string
 */
function get_the_og_image($id) {
	// Check if og_image is set.
	if (get_post_meta($id, "og_image", TRUE) !='') {
		$output = get_post_meta($id, "og_image", TRUE);

	// If og_image is not set, check if post_thumbnail is set.
	} elseif (get_the_post_thumbnail($id) != '') {
		$output = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'thumbnail');
		$output = $output['0'];

	// If neither og_image nor post_thumbnail is set, use "/img/ipad3_retina_144x144.png".
	} else {
		$output = bloginfo('template_url') . '/img/ipad3_retina_144x144.png';
	}
	return $output;
}

/**
 * Set and return the twitter_title of a specific page based on the post id.
 *
 * @param  int $id
 * @return string
 */
function get_the_twitter_title($id) {
	// Check if twitter_title is set.
	if (get_post_meta($id, "twitter_title", TRUE) != '') {
		$output = get_post_meta($id, "twitter_title", TRUE);

	// If twitter_title is not set, use the page title instead.
	} else {
		$output = get_the_title($id);
	}
	return $output;
}

/**
 * Set and return the twitter_description of a specific page based on the post id.
 *
 * @param  int $id
 * @return string
 */
function get_the_twitter_description($id) {
	// Check if twitter_description is set.
	if (get_post_meta($id, "twitter_description", TRUE) !='') {
		$output = get_post_meta($id, "twitter_description", TRUE);

	// If twitter_description is not set, check if meta_description is set.
	} elseif (get_post_meta($id, "meta_description", TRUE) !='') {
		$output = get_post_meta($id, "meta_description", TRUE);

	// If neither twitter_description nor meta_description is set, use the excerpt.
	} else {
		global $post;
		setup_postdata($post);
		$output = get_the_excerpt();
		wp_reset_postdata();
	}
	return $output;
}

/**
 * Set and return the twitter_image of a specific page based on the post id.
 *
 * @param  int $id
 * @return string
 */
function get_the_twitter_image($id) {
	// Check if twitter_image is set.
	if (get_post_meta($id, "twitter_image", TRUE) !='') {
		$output = get_post_meta($id, "twitter_image", TRUE);

	// If twitter_image is not set, check if post_thumbnail is set.
	} elseif (get_the_post_thumbnail($id) != '') {
		$output = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'thumbnail');
		$output = $output['0'];

	// If neither twitter_image nor post_thumbnail is set, use "/img/ipad3_retina_144x144.png".
	} else {
		$output = get_bloginfo('template_url') . '/img/ipad3_retina_144x144.png';
	}
	return $output;
}

/**
 * Ensure that wordpress doesn't output installed version for security purposes
 *
 * @return string
 */
function remove_version() {
	return '';
}
add_filter('the_generator', 'remove_version');
