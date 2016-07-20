<?php
/**
 * Template Name: Prices
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

<?php if (have_posts()) : while (have_posts()) : the_post();?>
<?php the_content(); ?>
<?php endwhile; endif; ?>

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