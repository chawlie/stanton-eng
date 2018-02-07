<?php
/**
 * Template Name: Services
 */
get_header(); ?>
    <?php while (have_posts()): the_post(); ?>
        <header class="page-title">
            <div class="row">
                <div class="small-12 columns">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </header>
        <main class="sub-page-content">
            <section class="page-section">
                <?php $image = get_field('sub_page_header_image'); ?>
                <div class="sub-page-header-image" style="background-image: url(<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>);">
                    <div class="row">
                        <!-- BEGIN .content -->
                        <div class="page-content columns small-12 medium-10 medium-push-1">
                            <article class="post">
                                <div class="post-body">
                                    <?php the_content(); ?>
                                    <div class="row">
                                        <?php if( have_rows('service_types') ):
                                                while ( have_rows('service_types') ) : the_row(); ?>
                                                    <div class="columns small-12 medium-6">
                                                        <div class="service-type-container text-center" style="background-image: url(<?php the_sub_field('service_image'); ?>" );">
                                                            <h2><?php the_sub_field('service_name'); ?></h2>
                                                        </div>
                                                    </div>
                                                <?php endwhile;
                                            else :
                                                // no rows found
                                        endif; ?>
                                    </div>
                                    <?php $additional_services_text = get_field('additional_services_text'); ?>
                                    <div class="additional-services-text">
                                        <?php echo $additional_services_text; ?>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    <?php endwhile; ?>
<?php get_footer(); ?>
