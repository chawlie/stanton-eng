<!-- ACF Formats - for future reference -->

<!-- Headline -->
<h1><?php the_field('home_headline'); ?></h1>

<!-- Link or Button-->
<a href="#" class="button"><?php the_field('home_call-out_button_text'); ?></a>

<!-- Single Image-->
<?php $image = get_field('home_background_image');
    if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php endif; ?>

<?php
/**
 * Repeater Style format
 */

if( have_rows('team_member') ):
    while ( have_rows('team_member') ) : the_row(); ?>
        <img src="<?php the_sub_field('team_member_image'); ?>">
        <h2><?php the_sub_field('team_member_name'); ?></h2>
        <p><?php the_sub_field('team_member_bio'); ?></p>
    <?php endwhile;
else :
    // no rows found
endif; ?>
