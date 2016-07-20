<footer role="contentinfo">
	<div class="content-container">
		<?php dynamic_sidebar('footer-form'); ?>
		<?php dynamic_sidebar('footer-map'); ?>
	</div>
	<p>&#9400; <?php echo date("Y"); ?> CleanEvolve</p>
</footer>
<?php wp_footer(); ?>
<script>
  var nav = responsiveNav(".nav-collapse", {
  	 closeOnNavClick: true,
  });
</script>
<script>
$(window).on("hashchange", function () {
    window.scrollTo(window.scrollX, window.scrollY - 100);
});
</script>
</body>
</html>