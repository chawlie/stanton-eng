<?php get_header(); ?>
	<header class="page-title">
		<div class="row">
			<div class="columns small-6">
				<h1>Blog</h1>
			</div>
			<div class="columns small-6 text-right">
				<a href="/blog" class="button back-to-posts">&larr; <span class="show-for-medium-up">Back to</span><span class="show-for-small-only">All</span> Posts</a>
			</div>
		</div>
	</header>

	<main class="page-content">
		<section class="page-section">
			<div class="show-for-small-only">
				<div class="row">
					<div class="columns small-12">
						<?php get_search_form(); ?>
						<hr />
					</div>
				</div>
			</div>

			<div class="row">
				<!-- BEGIN .content -->

				<?php
					$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
				?>
				<div class="content columns small-12 medium-8 large-8">
					<header class="archive-header">
						<h2>Showing all posts by <?= $curauth->display_name; ?></h2>
					</header>

					<?php if (have_posts()): ?>
						<?php while (have_posts()): the_post(); ?>
							<article class="post post-type-feed">
								<header class="post-header">
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<div class="post-meta">
										<span class="post-author"><?php the_author_posts_link(); ?></span>
										<span class="bullet">&bull;</span>
										<span class="post-date"><?php the_time('F d, Y'); ?></span>
										<span class="bullet">&bull;</span>
										<span class="post-category"><?php the_category(', '); ?></span>
									</div>
								</header>
								<div class="post-body">
									<?php if ( has_post_thumbnail()) : ?>
										<a class="post-thumb" href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail('post-thumb'); ?>
										</a>
									 <?php endif; ?>
									<?php the_excerpt(); ?>
									<div class="post-more">
										<a href="<?php the_permalink(); ?>" class="button">Continue reading &rarr;</a>
									</div>
								</div>
							</article>
						<?php endwhile; ?>
					<?php else: ?>
						<?php _e('
							<div class="error error-search">
								<h1>Nothing found.</h1>
								<p class="lead">Your search returned no results. Please try again.</p>
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
