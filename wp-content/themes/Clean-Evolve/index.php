<?php get_header(); ?>
<main>
	<div class="content-container pic-text-about-wrapper" id="about">
		<div class="picture-text-wrapper">
		<?php if ( have_posts() ) while ( have_posts()) : the_post(); ?>
		<p>
			<img src="<?php the_field('van_picture'); ?>" alt="">
			<?php the_field('text_below_van'); ?>
		</p>
		</div> <!-- end of picture-text-wrapper -->
		<div class="about-wrapper">
			<?php the_field('about_summary'); ?>
		</div> <!-- end of about-wrapper -->
	</div> <!-- end of pic-text-about-wrapper -->
	<section class="services">
		<div class="clipping-wrapper">
			<div class="res-pic-big">
				<div class="res-solid-bg">
					<h2><?php the_field('res_service_title'); ?></h2>
					<p><?php the_field('res_services_list'); ?>
					<a href="<?php the_field('res_services_link'); ?>">Learn more>></a></p>
				</div>
			</div>
		</div>
		<p class="note">CleanEvolve's home office is located in Chilliwack, British Columbia.</p>
		<div class="clipping-wrapper">
			<div class="comm-pic-big">
				<div class="comm-solid-bg">
					<h2><?php the_field('comm_title'); ?></h2>
					<p><?php the_field('commercial_services_list'); ?>
					<a href="<?php the_field('comm_services_link'); ?>">Learn more>></a></p>
				</div>
			</div>
		</div>
	</section>
	<div class="gallery-wrapper">
		<div class="inner-gallery">
			<figure>
				<figcaption>Before</figcaption>
				<div class="parallelogram">
					<img src="<?php the_field('before_photo'); ?>" alt="">
				</div>
			</figure>
			<figure>
				<figcaption>After</figcaption>
				<div class="parallelogram">
					<img src="<?php the_field('after_photo'); ?>" alt="">
				</div>
			</figure>
		</div>
		<p><a href="'<?php the_field('gallery_link'); ?>'">View full before &#38; after gallery>></a></p>
	</div>
		<?php endwhile; ?>
</main>
<section class="testimonials">
	<div class="container">
		<?php dynamic_sidebar('testimonials'); ?>
	</div>
</section>
<?php get_footer(); ?>