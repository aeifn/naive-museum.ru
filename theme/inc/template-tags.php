<?php
function mrlini_site_logo () {
  $site_title = get_bloginfo( 'name' );
  ?>
<div id="logo">
  <a href="/">
    <img alt="<?=$site_title?>" src="<?= get_template_directory_uri() . '/img/logo.png' ?>" class="img-fluid">
  </a>
</div>
<?php }

function mrlini_site_description () {
  $site_description = get_bloginfo( 'description' );
  ?>
  <div id="description">
    <a href="http://mos.ru/kultura">
      <img src="<?php echo get_template_directory_uri() . '/img/depcult.png' ?>">
    </a>
  </div>
<?php }

function mrlini_carousel_tags( $categories ) {
   foreach ($categories as $key=>$category) {
     $link = get_term_link( $category );
     $a[$key] = "<a href=\"$link\">$category->name</a>";
   }
   echo "<p>";
   echo ( implode ( ', ' , $a ) );
   echo "</p>";
}
