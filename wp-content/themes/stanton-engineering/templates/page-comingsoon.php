<?php
/**
 * Template Name: Page - Coming Soon
 */
get_header('comingsoon'); ?>

<?php while (have_posts()): the_post(); ?>
    <section class="page-section coming-soon">
        <div class="coming-soon-wrapper text-center">
            <div class="rm-m-top coming-soon-banner">
                <h2>Full Website Coming Soon</h2>
            </div>
            <div class="coming-soon-content">
                <div class="row">
                    <div class="small-12 columns text-center">
                        <div class="coming-soon-logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('template_url'); ?>/site/images/stanton_eng_logo.svg" alt="Company Name" /></a>
                        </div>
                        <h1 class="coming-soon-headline">An innovative leader of <span class="gray">MEP</span> <span class="blue">engineering</span> <span class="green">design</span> in Houston.</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 medium-12 large-4 columns text-center">
                        <h2 class="compressed-font cta-title">Email</h2>
                        <a href="mailto:info@stanton-eng.com" class="button email">info@stanton-eng.com</a>
                    </div>
                    <div class="small-12 medium-12 large-4 columns text-center">
                        <h2 class="compressed-font cta-title">Phone</h2>
                        <a href="tel:17133009292" class="button telephone">(713) 300-9292</a>
                        <p><strong>Office hours:</strong><br>
                        8 a.m. - 5 p.m.<br>
                        (Central Time)</p>
                    </div>
                    <div class="small-12 medium-12 large-4 columns text-center">
                        <h2 class="compressed-font cta-title">Address</h2>
                        <div class="coming-soon-address">
                            <p>
                                <strong>Stanton Engineering</strong><br>
                                1300 W. Sam Houston <br class="hide-for-small-only">
                                Parkway S. Suite 121<br>
                                Houston, TX 77042
                            </p>
                            <a href="https://www.google.com/maps/place/Stanton+Engineering+Group/@29.7477154,-95.56233,15z/data=!4m5!3m4!1s0x0:0x591021122dd413b6!8m2!3d29.748237!4d-95.558768" class="button">View Map</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>

<?php get_footer('comingsoon'); ?>
