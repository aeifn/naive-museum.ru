<?php
if ( is_category() ) {
  $title = single_cat_title( '', false );
} elseif ( is_tag() ) {
  /* translators: Tag archive title. %s: Tag name. */
  $title = sprintf( __( 'Tag: %s' ), single_tag_title( '', false ) );
} else {
  $title = the_title('','',false);
}
 ?>
<h1 class="entry-header"><?= $title ?></h1>
