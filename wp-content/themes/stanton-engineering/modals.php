<?php
 /**
  * Title: Modals
  * Description: Place all modals for the site within this file.
  */
?>
<div id="modal-share" class="reveal-modal small" data-reveal>
	<h3>Share this Page</h3>
	<ul class="small-block-grid-4 large-block-grid-4 text-center">
		<li><h2><a href="#" data-share-button data-share-on="facebook" data-share-url="<?php the_permalink(''); ?>"><i class="fa fa-facebook">&nbsp;</i></a></h2></li>
		<li><h2><a href="#" data-share-button data-share-on="twitter" data-share-url="<?php the_permalink(''); ?>" data-share-text="<?= get_the_twitter_title($post->ID); ?>" data-share-hash="<?php the_field('twitter_hash_tags'); ?>"><i class="fa fa-twitter">&nbsp;</i></a></h2></li>
		<li><h2><a href="#" data-share-button data-share-on="google" data-share-url="<?php the_permalink(''); ?>"><i class="fa fa-google-plus">&nbsp;</i></a></h2></li>
		<li><h2><a href="#" data-share-button data-share-on="linkedin" data-share-url="<?php the_permalink(''); ?>" data-share-title="<?= get_the_og_title($post->ID); ?>" data-share-text="<?= get_the_og_description($post->ID); ?>"><i class="fa fa-linkedin">&nbsp;</i></a></h2></li>
		<li><h2><a href="#" data-share-button data-share-on="pinterest" data-share-url="<?php the_permalink(''); ?>" data-share-image="<?= get_the_og_image($post->ID); ?>" data-share-text="<?= get_the_og_description($post->ID); ?>"><i class="fa fa-pinterest">&nbsp;</i></a></h2></li>
		<li><h2><a href="#" data-share-button data-share-on="tumblr" data-share-url="<?php the_permalink(''); ?>" data-share-title="<?= get_the_og_title($post->ID); ?>" data-share-text="<?= get_the_og_description($post->ID); ?>"><i class="fa fa-tumblr">&nbsp;</i></a></h2></li>
		<li><h2><a href="#" data-share-button data-share-on="stumbleupon" data-share-url="<?php the_permalink(''); ?>"><i class="fa fa-stumbleupon">&nbsp;</i></a></h2></li>
		<li><h2><a href="#" data-share-button data-share-on="email" data-share-url="<?php the_permalink(''); ?>" data-share-title="<?= get_the_og_title($post->ID); ?> on <?php bloginfo('name'); ?>" data-share-text="<?= get_the_og_description($post->ID); ?>"><i class="fa fa-envelope">&nbsp;</i></a></h2></li>
	</ul>
	<a class="close-reveal-modal">&#215;</a>
</div>
