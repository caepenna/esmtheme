<?php
/**
 * LLAL functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ESM
 */

if ( ! function_exists( 'esm_setup' ) ) :
  function esm_setup() {
    register_nav_menus( array(
      'header-menu' => esc_html__( 'Header Menu', 'esm' )
    ) );
    load_theme_textdomain( 'esm', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ) );
  }
endif;

add_action( 'after_setup_theme', 'esm_setup' );

function esm_scripts() {
  $theme_style = get_template_directory_uri() . '/css/style.css';
  wp_enqueue_style('theme_style', $theme_style);
  wp_deregister_script('jquery');
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), $ver = false, false );
}

function ag_tinymce_paste_as_text( $init ) {
  $init['paste_as_text'] = true;
  return $init;
}

add_filter('tiny_mce_before_init', 'ag_tinymce_paste_as_text');

function custom_editor_styles() {
  add_editor_style( '/css/editor.css');
}

add_action( 'admin_init', 'custom_editor_styles' );

add_action( 'wp_enqueue_scripts', 'esm_scripts' );

if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title' 	=> 'Global Content',
    'menu_title'	=> 'Global Content',
    'menu_slug' 	=> 'global-content'
  ));
}
