<?php
get_header();
?>
<div class="container mt-4">
<h1 class="text-center mb-3">Результаты поиска по запросу:
<?=get_search_query()?>
</h1>

<?php
while (have_posts()) {
  the_post();
  get_template_part('template-parts/search-row');
}


?>
</div>

<?php

get_footer();
