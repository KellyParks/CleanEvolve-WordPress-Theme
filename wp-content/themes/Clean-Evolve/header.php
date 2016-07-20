<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<title><?php bloginfo('name'); echo wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body>
<nav>
	<div class="content-container">
		<?php wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => 'nav-collapse')); ?>
		<?php dynamic_sidebar('menu-social-media'); ?>
	</div>
</nav>
<header role="banner">
	<div class="content-container">
		<div class="logo-contact-wrapper">
			<img src="<?php the_field('logo'); ?>" alt="" class="logo-img">
			<?php the_field('contact_info'); ?>
		</div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="tagline-wrapper"><?php the_content(); ?></div>
		<?php endwhile; endif; ?>
	</div>
</header>