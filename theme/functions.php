<?php

require_once get_template_directory() . '/vendor/autoload.php';

function mrlini_theme_support() {
  /*
   * Let WordPress manage the document title.
   * By adding theme support, we declare that this theme does not use a
   * hard-coded <title> tag in the document head, and expect WordPress to
   * provide it for us.
   */
  //add_theme_support( 'title-tag' );
  // Add support for responsive embeds.
	//add_theme_support( 'responsive-embeds' );
  add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'mrlini_theme_support' );


/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function mrlini_menus() {

	$locations = array(
		'primary'  => __( 'Главное меню', 'mrlini' ),
//		'expanded' => __( 'Desktop Expanded Menu', 'twentytwenty' ),
//		'mobile'   => __( 'Mobile Menu', 'twentytwenty' ),
		'footer'   => __( 'Footer Menu', 'mrlini' ),
		'social'   => __( 'Social Menu', 'mrlini' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'mrlini_menus' );



/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentytwenty_sidebar_registration() {

  // Footer #1.
	register_sidebar(
			array(
				'name'        => 'Сайдбар #1',
				'id'          => 'sidebar-1',
			)
	);

	// Footer #1.
	register_sidebar(
			array(
				'name'        => 'Подвал #1',
				'id'          => 'footer-1',
			)
	);

	// Footer #2.
	register_sidebar(
			array(
				'name'        => 'Подвал #2',
				'id'          => 'footer-2',
			)
	);

  // Footer #3.
  register_sidebar(
      array(
        'name'        => 'Подвал #3',
        'id'          => 'footer-3',
      )
  );

}

add_action( 'widgets_init', 'twentytwenty_sidebar_registration' );
