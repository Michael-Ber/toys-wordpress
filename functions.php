<?php
    add_action('wp_enqueue_scripts', 'childhood_scripts');
    function childhood_scripts() {
        wp_enqueue_style('childhood-style', get_stylesheet_uri());
        wp_enqueue_script('chldhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
        // wp_deregister_script('jquery');
        // wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js');
        // wp_enqueue_script('jquery');
    }

    add_theme_support('custom-logo'); // разрешение для изменения логотипа
    add_theme_support('post-thumbnails'); // разрешение 
    add_theme_support('menus'); // разрешение для создания меню

    add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);

    function filter_nav_menu_link_attributes($atts, $item, $args) {
        if($args -> menu == 'Main') {
            $atts['class'] = 'header__nav-item'; // меняем атрибут class у li

            if($item -> current) {
                $atts['class'] .= ' header__nav-item-active'; // пробел обязательно чтобы классы не слились
            }
            if($item -> ID == 189 && (in_category('toys') || in_category('edu_toys'))) {
                $atts['class'] .= ' header__nav-item-active';
            }
        }
        return $atts;
    }

    // function my_acf_google_map_api($api) {
    //     $api['key'] = 'AIzaSyBYv3uLW6LOmRCRX7Wt0VVPVb7xLmcUvdE';
    //     return $api;
    // }
    // add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
    // add_filter( 'wpcf7_validate_configuration', '__return_false' ); // убирает ошибку при валидации в вордпресс адреса почты From
?>