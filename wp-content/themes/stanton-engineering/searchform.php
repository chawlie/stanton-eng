<?php
 /**
  * Title: Search Form
  * Description: Override WordPress's default search form.
  * Documentation: http://codex.wordpress.org/Function_Reference/get_search_form
  */
?>
<div class="search-form">
	<form role="search" method="get" action="<?= home_url('/'); ?>">
		<input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:" />
		<button class="search-button"><i class="fa fa-search"></i></button>
	</form>
</div>
