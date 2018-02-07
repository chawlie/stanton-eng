<?php
/* This is the Project Detail Page that shows project details */
get_header(); ?>
	<?php while (have_posts()) : the_post(); ?>
		<header class="page-title">
			<div class="row">
				<div class="columns small-12">
					<h1>Project Portfolio</h1>
				</div>
			</div>
		</header>

		<main class="portfolio-page-content page-content">
			<section class="page-section">
				<?php $image = get_field('sub_page_header_image'); ?>
				<div class="sub-page-header-image" style="background-image: url(<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>);">
					<div class="row">
						<!-- BEGIN .content -->
						<div class="content columns small-12 medium-10 medium-push-1">
							<article class="portfolio-post post post-type-single">
								<div class="post-body">
									<div class="row">
										<div class="columns small-12">
											<header class="post-header">
												<h2><?php the_title(); ?></h2>
												<hr>
											</header>
										</div>
									</div>
									<div class="row">
										<?php
											$project_description = get_field('project_description');
											$project_details = get_field('project_details');
										?>
										<div class="columns small-12 medium-8">
											<div class="project-description">
												<?= $project_description?>
											</div>
										</div>
										<div class="columns small-12 medium-4">
											<div class="project-details">
												<?= $project_details?>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="columns small-12">
											<?php if( have_rows('project_gallery') ):
												while ( have_rows('project_gallery') ) : the_row(); ?>
													<img src="<?php the_sub_field('project_gallery_image'); ?>">
												<?php endwhile;
												else :
												// no rows found
											endif; ?>
										</div>
									</div>
								</div>
							</article>
						</div>

						<!-- BEGIN .sidebar -->
						<div class="sidebar columns small-12 medium-4 large-4">
							<?php get_sidebar('blog'); ?>
						</div>
					</div>
				</div>
			</section>
		</main>
	<?php endwhile; ?>
<?php get_footer(); ?>
