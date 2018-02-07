<?php get_header(); ?>
	<header class="page-title">
		<div class="row">
			<div class="columns small-12">
				<h1>Testimonials</h1>
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
				<div class="content columns small-12 medium-8 large-8">
					<?php if (have_posts()): ?>
						<?php while (have_posts()): the_post(); ?>
							<article class="post post-type-feed">
								<header class="post-header">
								</header>
								<div class="post-body">
									<h4 class="testimonial-quote">&ldquo;<?= strip_tags(get_the_content()); ?>&rdquo;</h4>
									<em class="testimonial-attribution">&mdash; <?php the_field('customer_name'); ?>, <?php the_field('client_company'); ?></em>
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
					<?php get_sidebar('page-right'); ?>
				</div>
			</div>
		</section>
	</main>
<?php get_footer(); ?>
