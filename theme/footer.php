<?php get_template_part( 'template-parts/banners' ); ?>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</div>
			<div class="col-lg-3">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</div>
			<div class="col-lg-4">
				<?php dynamic_sidebar( 'footer-3' ); ?>
				<?php get_template_part( 'template-parts/credits' ); ?>
			</div>
		</div>
	</div>

	<?php wp_footer(); ?>
</footer>
</body>
</html>
