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

// Подсчет просмотров записи

add_action('wp_head', 'kama_postviews');
function kama_postviews() {

    /* ------------ Настройки -------------- */
    $meta_key       = 'views';  // Ключ мета поля, куда будет записываться количество просмотров.
    $who_count      = 0;            // Чьи посещения считать? 0 - Всех. 1 - Только гостей. 2 - Только зарегистрированных пользователей.
    $exclude_bots   = 0;            // Исключить ботов, роботов, пауков и прочую нечесть :)? 0 - нет, пусть тоже считаются. 1 - да, исключить из подсчета.

    global $user_ID, $post;
    if(is_singular()) {
        $id = (int)$post->ID;
        static $post_views = false;
        if($post_views) return true; // чтобы 1 раз за поток
        $post_views = (int)get_post_meta($id,$meta_key, true);
        $should_count = false;
        switch( (int)$who_count ) {
            case 0: $should_count = true;
                break;
            case 1:
                if( (int)$user_ID == 0 )
                    $should_count = true;
                break;
            case 2:
                if( (int)$user_ID > 0 )
                    $should_count = true;
                break;
        }
        if( (int)$exclude_bots==1 && $should_count ){
            $useragent = $_SERVER['HTTP_USER_AGENT'];
            $notbot = "Mozilla|Opera"; //Chrome|Safari|Firefox|Netscape - все равны Mozilla
            $bot = "Bot/|robot|Slurp/|yahoo"; //Яндекс иногда как Mozilla представляется
            if ( !preg_match("/$notbot/i", $useragent) || preg_match("!$bot!i", $useragent) )
                $should_count = false;
        }

        if($should_count)
            if( !update_post_meta($id, $meta_key, ($post_views+1)) ) add_post_meta($id, $meta_key, 1, true);
    }
    return true;
}

//