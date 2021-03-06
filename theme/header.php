<!DOCTYPE html>
<html>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
wp_body_open();
?>
<header>
  <div class="container">
    <div class="row">
        <div class="col-md-6 logo-container">
          <?php
          mrlini_site_description();
          mrlini_site_logo();
          ?>
        </div>
        <div class="col-md-6 right-side">
          <div class="widget-inline">
            <div>
              <?php wp_nav_menu('english'); ?>
            </div>
            <div class="visually_impaired">
              <?php the_widget('Bvi_Widget', array( 'title'=>null )); ?>
            </div>
          </div>
          <div class="right-top-widget-area">
            <?php dynamic_sidebar('top-right'); ?>
          </div>
        </div>
    </div>
  </div>
  <nav>
  <?php get_template_part('template-parts/menu');
  if(!is_front_page() && !is_search()) {
    get_template_part('template-parts/entry-header');
  }
  if(!is_single()) {
  get_template_part('template-parts/submenu');
  }
  ?>
  </nav>
</header>
