        <footer class="site-footer">
            <div class="row">
                <div class="columns small-12 large-8">
                    <div class="footer-text">
                        <span class="address">1300 W. Sam Houston Parkway S. Suite 121 <br class="show-for-small-only"><span class="hide-for-small-only">•</span> Houston, TX 77042 • <a href="https://www.google.com/maps/place/Stanton+Engineering+Group/@29.7477154,-95.56233,15z/data=!4m5!3m4!1s0x0:0x591021122dd413b6!8m2!3d29.748237!4d-95.558768"> See Map »</a></span><br>
                        <span class="copyright">©Copyright <?php echo date('Y'); ?> Stanton Engineering. All rights reserved.</span>
                    </div>
                </div>

                <div class="columns small-12 large-4">
                    <div class="footer-right">
                        <div class="copyright text-center">
                            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="button">Contact Us</a><br>
                            <span class="telephone"><a href="tel:7133009292"> TEL (713) 300-9292</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div><!-- Closing tag for page-wrapper -->

    <!-- Include analytics -->
    <?php get_template_part('analytics'); ?>

    <?php wp_footer(); ?>
</body>
</html>
