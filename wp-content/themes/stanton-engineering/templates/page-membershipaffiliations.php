<?php
/**
 * Template Name: Membership Affiliations
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
			<section class="membership-affiliations page-section">
				<div class="row">
					<div class="columns small-12">
						<div class="page-content">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<div class="row">
					<?php if( have_rows('membership_affiliations') ):
							while ( have_rows('membership_affiliations') ) : the_row(); ?>
								<div class="small-12 medium-3 columns">
									<div class="membership-affiliation-logo">
										<img src="<?php the_sub_field('membership_affiliation_logo'); ?>">
									</div>
								</div>
							<?php endwhile;
						else :
							// no rows found
					endif; ?>
				</div>
			</section>
		</main>
	<?php endwhile; ?>
<?php get_footer(); ?>
