<?php get_header();

?>
<main id="site-content" class="container" role="main">
	<div class="row">
	<?php
    if (is_active_sidebar('sidebar-1')) {
        ?> <div class="col-md-4"> <?php
        get_sidebar(); ?> </div><div class="col-md-8"> <?php
    } else {
        ?> <div class="col-md-12 col-lg-10 mx-auto"> <?php
    }
    ?>


	<?php

    if (have_posts()) {
        while (have_posts()) {
            the_post();
						
            get_template_part('template-parts/content', get_post_type());
        }
    }
    ?>
</div>
</main><!-- #site-content -->
<?php get_footer();
