<?php get_header(); ?>
    <header class="page-title">
        <div class="row">
            <div class="columns small-12">
                <h1>News</h1>
            </div>
        </div>
    </header>

    <main class="news-page-content page-content">
        <section class="page-section">
            <!-- <div class="row">
                <div class="columns small-12">
                    <?php get_search_form(); ?>
                    <hr />
                </div>
            </div> -->

            <div class="row">
                <!-- BEGIN .content -->
                <div class="content columns small-12 medium-8 large-8">
                    <?php if (have_posts()): ?>
                        <?php while (have_posts()): the_post(); ?>
                            <article class="news-post post post-type-feed">
                                <div class="post-header">
                                    <div class="post-meta">
                                        <!-- <span class="post-author"><?php the_author_posts_link(); ?></span> -->
                                        <!-- <span class="bullet">&bull;</span> -->
                                        <span class="post-date"><?php the_time('M d, Y'); ?></span>
                                        <!-- <span class="bullet">&bull;</span> -->
                                        <!-- <span class="post-category"><?php the_category(', '); ?></span> -->
                                    </div>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <?php _e('
                            <div class="error error-search">
                                <h1>Nothing found.</h1>
                                <p class="lead">Your search query returned no results. Please try again.</p>
                                <a class="button" href="/blog">&larr; Go back to posts</a>
                            </div>
                        '); ?>
                    <?php endif; ?>

                    <?php get_template_part('pagination'); ?>
                </div>

                <!-- BEGIN .sidebar -->
                <div class="sidebar columns small-12 medium-4 large-4">
                    <?php get_sidebar('blog'); ?>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>
