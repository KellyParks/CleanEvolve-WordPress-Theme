<?php
/**
 * Template Name: Contact Us
 *
 * @package WordPress
 * @subpackage Clean Evolve
 * @since Clean Evolve 1.0
 */

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<title><?php bloginfo('name'); echo wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body class="nobgimage">
<nav>
	<div class="content-container">
		<?php wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => 'nav-collapse')); ?>
		<?php dynamic_sidebar('menu-social-media'); ?>
	</div>
</nav>
<div class="contact-content-container">
	<div class="contact-payment-wrapper">
		<img src="<?php the_field('logo'); ?>" alt="Clean Evolve Logo" class="contact-page-logo">
		<?php the_field('contact_info'); ?>
		<?php the_field('payment_options'); ?>
		<img src="<?php the_field('feature_image'); ?>" alt="" class="feature-image">
	</div>
	<div class="form-map-wrapper">
		<?php dynamic_sidebar('footer-map'); ?>
		<?php dynamic_sidebar('footer-form'); ?>
	</div>
</div>
<footer role="contentinfo">
	<p>&#9400; <?php echo date("Y"); ?> CleanEvolve</p>
</footer>
<?php wp_footer(); ?>
<script>
  var nav = responsiveNav(".nav-collapse", {
  	 closeOnNavClick: true,
  });
</script>
</body>
</html>