<?php
/**
 * Template Name: About Page
 */
			$page_title = get_field('page_title');
			$page_description = get_field('page_title'); 
			$image_one = get_field('image_1');
			$service_title_1 = get_field('service_title_1');
			$service_1_description = get_field('service_1_description');
			$image_two = get_field('image_2');
			$service_title_2 = get_field('service_title_2');
			$service_2_description = get_field('service_2_description');
			$image_three = get_field('image_3');
			$service_title_3 = get_field('service_title_3');
			$service_3_description = get_field('service_3_description');
			$image_four = get_field('image_4');
			$service_title_4 = get_field('service_title_4');
			$service_4_description = get_field('service_4_description');
			$size = "full";

get_header(); ?>

<section class="about-page">
		<?php while ( have_posts() ) : the_post(); ?>

		
			<div class="aboutpage-hero">
				<?php the_content(); ?>
			</div>
	<div class="site-content">



			<div class="about-description">
				<h3><?php the_field('page_title'); ?></h3>
				<p><?php the_field('page_description'); ?></p>
			</div>

			<div class="service-one">
				<div class="service-left-image">
					<img src="<?php the_field('image_1'); ?>">
				</div>
				<div class="service-left-info">
					<h4><?php the_field('service_title_1'); ?></h4>
					<p><?php the_field('service_1_description'); ?></p>
				</div>
			</div>

			<div class="services-two">
				<div class="service-right-image">
					<img src="<?php the_field('image_2'); ?>">
				</div>
				<div class="service-right-info">
					<h4><?php the_field('service_title_2'); ?></h4>
					<p><?php the_field('service_2_description'); ?></p>
				</div>
			</div>

			<div class="service-three">
				<div class="service-left-image">
					<img src="<?php the_field('image_1'); ?>">
				</div>
				<div class="service-left-info">
					<h4><?php the_field('service_title_1'); ?></h4>
					<p><?php the_field('service_1_description'); ?></p>
				</div>
			</div>

			<div class="services-four">
				<div class="service-right-image">
					<img src="<?php the_field('image_2'); ?>">
				</div>
				<div class="service-right-info">
					<h4><?php the_field('service_title_2'); ?></h4>
					<p><?php the_field('service_2_description'); ?></p>
				</div>
			</div>									
			<?php endwhile; ?>


		<div class="contact-us">
			<h2 class="contact-question">Interested in working with us?</h2>
			<a class="button contact-btn" href="<?php echo home_url(); ?>/blog">Contact Us</a>
		</div>
	
	</div><!-- #primary -->
</section>


<?php get_footer();