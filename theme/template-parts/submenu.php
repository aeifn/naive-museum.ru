<?php

    $menu_class='nav nav-pills justify-content-center';

 $a=wp_nav_menu(array (
  'start_depth'=> 1,
//  'container_class' => '',
  'menu_class'      => $menu_class,
  'walker' => new WP_Bootstrap_Navwalker(),
) ); ?>
