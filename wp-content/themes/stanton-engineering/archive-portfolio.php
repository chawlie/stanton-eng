<?php
/* This is the Project Portfolio Page that shows all projects */
 get_header(); ?>
	<header class="page-title">
		<div class="row">
			<div class="columns small-12">
				<h1>Project Portfolio</h1>
			</div>
		</div>
	</header>
	<main class="page-content">
		<section class="portfolio-project-page page-section">
			<div class="row">
				<?php $my_query = new WP_Query('post_type=portfolio&posts_per_page=5&orderby=menu_order&order=ASC'); ?>
					<?php while ($my_query->have_posts()): $my_query->the_post(); ?>
					<?php
						$project_image = get_field('project_image');
						$size = 'portfolio-thumb'; // (thumbnail, medium, large, full or custom size)
					?>
					<div class="columns small-12 medium-6 large-4">
						<a href="<?php the_permalink(); ?>">
							<div class="portfolio-item">
								<?php if ( $project_image ) {
									echo wp_get_attachment_image( $project_image, $size );
								} ?>
								<div class="portfolio-title">
									<h2><?php echo wp_trim_words( get_the_title(), 20 ); ?></h2>
								</div>
							</div>
						</a>
					</div>
				<?php endwhile; ?>
			</div>
		</section>
	</main>
<?php get_footer(); ?>
