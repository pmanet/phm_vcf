<?php

define("PHMVCF_VERSION", "1.0.0");
/**
 * Chargement des style et des scripts
 */
function phmvcf_scripts() {
    // Chargement des css
    wp_enqueue_style( 'vcfphm_bootstrap-core', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', 
    array(), PHMVCF_VERSION, 'all' );
    wp_enqueue_style( 'vcfphm_fontawesome', get_stylesheet_directory_uri() . '/css/all.min.css', 
    array('vcfphm_bootstrap-core'), PHMVCF_VERSION, 'all' );
    wp_enqueue_style( 'vcfphm_style', get_stylesheet_directory_uri() . '/style.css', 
    array('vcfphm_bootstrap-core', 'vcfphm_fontawesome'), PHMVCF_VERSION, 'all' );

    // Chargement des javascripts
    wp_enqueue_script( 'vcfphm_bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), PHMVCF_VERSION, true );
    wp_enqueue_script( 'vcfphm_fontawesome-js', get_template_directory_uri() . '/js/fontawesome.min.js', array(), PHMVCF_VERSION, true );
    wp_enqueue_script( 'vcfphm_vcf-js', get_template_directory_uri() . '/js/vcf.js', array('jquery'), PHMVCF_VERSION, true );

} // fin phmvcf_scripts
add_action( 'wp_enqueue_scripts', 'phmvcf_scripts' );

//*=====================================
//
//  UTILITAIRES
// 
//======================================
function phmvcf_setup() {

    // support de l'image a la une
    add_theme_support( 'post-thumbnails' );

    // suppression de la ligne meta generator dans l'entete
    remove_action('wp_head', 'wp_generator');

    // suppression des guillemets à la française
    remove_filter('the_content', 'wptexturize');

    // support du titre
    add_theme_support('title-tag');

    // Les Menus
    // Include custom navwalker
    require_once('includes/bs4navwalker.php');
    // active la gestion des menus
    register_nav_menus( array('primary' => 'principal' ));


} // fin phmvcf_setup
add_action('after_setup_theme', 'phmvcf_setup');

/**
 * Register our sidebars and widgetized areas.
 */
function phm_vcf_widgets_init() {

	register_sidebar( array(
		'name'          => 'Barre latérale droite',
		'id'            => 'sidebar_right',
		'before_widget' => '<section class="card card-widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="card-header bg-info text-white"><h4 class="h5">',
		'after_title'   => '</h4></div>',
	) );

}
add_action( 'widgets_init', 'phm_vcf_widgets_init' );