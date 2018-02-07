<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>

<?php while (have_posts()): the_post(); ?>
    <section id="typography" class="home-hero page-section">
            <?php $image = get_field('home_background_image');
                    if( !empty($image) ): ?>
                        <div class="home-hero-image" style="background-image: url(<?php echo $image['url']; ?>" >
                            <div class="row">
                                <div class="columns small-12 medium-10 medium-push-1">
                                    <h1><?php the_field('home_headline'); ?></h1>
                                    <a href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>" class="button"><?php the_field('home_call-out_button_text'); ?></a>
                                </div>
                            </div>
                        </div>
            <?php endif; ?>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>
