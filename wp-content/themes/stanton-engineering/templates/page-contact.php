<?php
/**
 * Template Name: Contact Page
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
			<?php $image = get_field('sub_page_header_image'); ?>
			<?php $contact_info = get_field('contact_info'); ?>
			<?php $contact_address = get_field('contact_address'); ?>
			<?php $contact_form = get_field('contact_form'); ?>
			<section class="contact-details page-section">
				<div class="row">
					<div class="columns small-12 medium-6 large-4">
						<?php echo $contact_info; ?>
					</div>
					<div class="columns small-12 medium-6 large-8">
						<?php echo $contact_address; ?>
					</div>
				</div>
			</section>
			<section class="google-map page-section">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13856.137902699997!2d-95.56233!3d29.7477154!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x591021122dd413b6!2sStanton+Engineering+Group!5e0!3m2!1sen!2sus!4v1505682124553" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
			</section>
			<section class="contact-form page-section">
				<div class="row">
					<!-- BEGIN .content -->
					<div class="contact-page-content page-content columns small-12 medium-8 medium-push-2">
						<article class="post">
							<div class="post-body">
								<?php echo $contact_form; ?>
							</div>
						</article>
					</div>
				</div>
			</section>
		</main>
	<?php endwhile; ?>
<?php get_footer(); ?>
