<?php wp_nav_menu(
      array(
    'theme_location' => 'primary',
    'menu_class'=>'nav nav-pills justify-content-center',
    'walker' => new WP_Bootstrap_Navwalker(),
    'depth' => 1
  )
  ); ?>
