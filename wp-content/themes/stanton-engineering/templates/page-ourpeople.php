<?php
/**
 * Template Name: Our People Page
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
		<main class="sub-page-content contact-page">
			<section class="our-team-members page-section">
				<ul>
					<?php if( have_rows('team_member') ):
							while ( have_rows('team_member') ) : the_row(); ?>
								<li>
									<div class="team-member-container">
										<div class="row">
											<div class="small-12 large-4 columns text-center">
												<div class="team-member-image">
													<img src="<?php the_sub_field('team_member_image'); ?>">
												</div>
											</div>
											<div class="small-12 large-8 columns">
												<div class="team-member-info">
													<h1><?php the_sub_field('team_member_name'); ?></h1>
													<h2><?php the_sub_field('team_member_title'); ?></h2>
													<p><?php the_sub_field('team_member_bio'); ?></p>
												</div>
											</div>
										</div>
									</div>
								</li>
							<?php endwhile;
						else :
							// no rows found
					endif; ?>
				</ul>
			</section>
		</main>
	<?php endwhile; ?>
<?php get_footer(); ?>
