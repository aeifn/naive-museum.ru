<?php
get_header();
get_template_part('template-parts/entry-header');

if (is_category()) {
    get_template_part('template-parts/archive-2');
} else {
    get_template_part('template-parts/archive-3');
}

get_footer();
