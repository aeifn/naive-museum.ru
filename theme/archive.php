<?php get_header();
if (is_active_sidebar( 'sidebar-1' )) {
    get_template_part('template-parts/archive-sidebar');
} else {
    get_template_part('template-parts/archive-no-sidebar');
}

get_footer();
