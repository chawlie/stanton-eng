<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<header class="page-title">
			<div class="row">
				<div class="columns small-12">
					<h1>News</h1>
				</div>
			</div>
		</header>

		<main class="news-page-content page-content">
			<section class="page-section">
				<div class="row">
					<div class="columns small-12">
						<div class="back-to-posts">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>news" class="button small">&larr; <span class="show-for-medium-up">Back to</span><span class="show-for-small-only">All</span> News</a>
						</div>
					</div>
				</div>

				<div class="row">
					<!-- BEGIN .content -->
					<div class="content columns small-12 medium-10">
						<article class="news-post post post-type-single">
							<div class="post-body">
								<header class="post-header">
									<div class="post-meta">
	                                    <!-- <span class="post-author"><?php the_author_posts_link(); ?></span> -->
	                                    <!-- <span class="bullet">&bull;</span> -->
	                                    <span class="post-date"><?php the_time('M d, Y'); ?></span>
	                                    <!-- <span class="bullet">&bull;</span> -->
	                                    <!-- <span class="post-category"><?php the_category(', '); ?></span> -->
	                                </div>
	                                <h2><?php the_title(); ?></h2>
								</header>
								<?php if ( has_post_thumbnail()) : ?>
									<div class="post-thumb">
										<?php the_post_thumbnail('post-thumb-detail'); ?>
									</div>
								<?php endif; ?>
								<div class='post-content-top'></div>
								<?php the_content(); ?>
								<div class="post-tags">
									<?php the_tags('Tags: ', '', ''); ?>
								</div>
							</div>
							<!-- <footer class="post-footer">
								<nav class="post-nav">
									<div class="row">
										<div class="columns small-6">
											<div class="post-prev"><?php previous_post_link('%link', '&larr; Previous post'); ?></div>
										</div>
										<div class="columns small-6 text-right">
											<div class="post-next"><?php next_post_link('%link', 'Next post &rarr;'); ?></div>
										</div>
									</div>
								</nav>
							</footer> -->
						</article>
					</div>

					<!-- BEGIN .sidebar -->
					<div class="sidebar columns small-12 medium-4 large-4">
						<?php get_sidebar('blog'); ?>
					</div>
				</div>
			</section>
		</main>
	<?php endwhile; ?>
<?php get_footer(); ?>
