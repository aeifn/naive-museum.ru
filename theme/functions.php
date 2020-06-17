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
//		'footer'   => __( 'Footer Menu', 'twentytwenty' ),
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

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	// Footer #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Подменю', 'twentytwenty' ),
				'id'          => 'submenu',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty' ),
			)
		)
	);

	// Footer #2.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #2', 'twentytwenty' ),
				'id'          => 'sidebar-2',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'twentytwenty' ),
			)
		)
	);

}

add_action( 'widgets_init', 'twentytwenty_sidebar_registration' );
