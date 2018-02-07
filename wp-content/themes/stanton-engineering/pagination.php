<?php
 /**
  * Title: Pagination
  * Description: Pagination that appears at the bottom of the default blog, archive, category and search pages.
  * Documentation: http://codex.wordpress.org/Function_Reference/paginate_links
  */
?>
<nav class="post-pagination">
	<?php
		global $wp_query;

		$big = 999999999; // need an unlikely integer

		print(
			paginate_links(array(
				'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
				'format'    => '?paged=%#%',
				'current'   => max(1, get_query_var('paged')),
				'prev_text' => __('&laquo;'),
				'next_text' => __('&raquo;'),
				'total'     => $wp_query->max_num_pages
			))
		);
	?>
</nav>
