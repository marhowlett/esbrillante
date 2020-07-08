<?php

// Quitar estilos que no se usan

function dequeue_my_css() {
  wp_dequeue_style('wp-block-library');
  wp_deregister_style('wp-block-library');
}
add_action('wp_enqueue_scripts','dequeue_my_css', 1000);



add_action( 'wp_enqueue_scripts', 'woodmart_child_enqueue_styles', 1000 );

function woodmart_child_enqueue_styles() {
    
    wp_enqueue_style( 'esbrillante', get_stylesheet_directory_uri() . '/less/main.css', false);
                     
	if( woodmart_get_opt( 'minified_css' ) ) {
        
        if ( is_front_page() ){
             wp_enqueue_style( 'woodmart-style', get_stylesheet_directory_uri() . '/less/base-light.css', array('bootstrap') );
        }
        else{
           wp_enqueue_style( 'woodmart-style', get_stylesheet_directory_uri() . '/less/base.css', array('bootstrap') );
        }
		
	} else {
		wp_enqueue_style( 'woodmart-style', get_template_directory_uri() . '/style.css', array('bootstrap') );
	}

    
}





function theme_js() {
    wp_enqueue_script( 'scrollreveal', get_stylesheet_directory_uri() . '/js/scrollreveal.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/js/main.min.js', array( 'jquery' ), '1.0', true );
}

add_action('wp_enqueue_scripts', 'theme_js');

// -------------------------------------------------------
// Desactivar opciones del menu del dashboard de Wordpress
// -------------------------------------------------------

function remove_menus(){
  
  remove_menu_page( 'edit.php?post_type=cms_block' );          //HTML BLOCKS
  remove_menu_page( 'edit.php?post_type=woodmart_size_guide' );          //	 WOODMART SIZE GUIDE
  remove_menu_page( 'edit.php?post_type=portfolio' );
  remove_menu_page( 'woodmart_dashboard' );  // DUMMY CONTENT
  remove_menu_page( 'edit.php?post_type=woodmart_sidebar' );
}
add_action( 'admin_menu', 'remove_menus', '999' );