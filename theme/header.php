<!DOCTYPE html>
<html>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>
<?php
wp_body_open();
?>
<header>
  <div class="container">
    <div class="row">
        <div class="col-md-5">
          <?php
          mrlini_site_description();
          mrlini_site_logo();
          ?>
        </div>
        <div class="col-md-6 offset-md-1 right-side">
          <div class="row">
            <div class="col-md-3 text-left">
              <?php wp_nav_menu('english'); ?>
            </div>
            <div class="col-md-9 text-right visually_impaired">
              <?php the_widget('Bvi_Widget', array( 'title'=>null ) ); ?>
            </div>
          </div>
          <div class="right-top-widget-area">
            <?php dynamic_sidebar( 'top-right' ); ?>
          </div>
        </div>
    </div>
</div>
</header>
<?php get_template_part('template-parts/menu'); ?>
<?php get_template_part('template-parts/submenu'); ?>
