<?php


// регистрирует определенное местo для меню на сайте

register_nav_menus(
    array(
        'header-menu'    => __( 'rest-menu-header', 'restaurante' ),
        'footer-menu' => __( 'rest-menu-footer', 'restaurante' ),
    )
);

//  добавляет класс к ссылке

add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );
function filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) {
    if ( $args->theme_location === 'header-menu' ) {
        $atts['class'] = 'header__list-item';
    }
    return $atts;
}


add_action( 'wp_enqueue_scripts', 'restaurante_scripts' );

  function restaurante_scripts(){

//       подключение css файлов

      wp_enqueue_style( 'restaurante-animate.min', get_template_directory_uri() .'/assets/css/animate.min.css', array(), '1.0.0', false );
      wp_enqueue_style( 'restaurante-bootstrap.min', get_template_directory_uri() .'/assets/css/bootstrap.min.css', array(), '1.0.0', false );
      wp_enqueue_style( 'restaurante-owl.carousel.min', get_template_directory_uri() .'/assets/css/owl.carousel.min.css', array(), '1.0.0', false );
      wp_enqueue_style( 'restaurante-owl.theme.default', get_template_directory_uri() .'/assets/css/owl.theme.default', array(), '1.0.0', false );
      wp_enqueue_style( 'restaurante-style', get_stylesheet_uri() );




//       подключение js файлов

      wp_deregister_script( 'jquery' );
      wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
      wp_enqueue_script( 'jquery' );

      wp_enqueue_script( 'restaurante-owl.carousel.min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), null, true );
      wp_enqueue_script( 'restaurante-wow.min', get_template_directory_uri() . '/assets/js/wow.min.js', array(), null, true );
      wp_enqueue_script( 'restaurante-script.min', get_template_directory_uri() . '/assets/js/script.min.js', array(), null, true );


  }