<?php 
    //Add dynamic title tag support
    function meliora_theme_support() {
        add_theme_support('title_tag');
    };

    add_action('after_setup_theme', 'meliora_theme_support');


    //Add css
    function meliora_register_styles() {
        $version = wp_get_theme()->get('Version');

        wp_queue_style('meliora-style', get_temmplate_directory_uri() . "/style.css", array(), $version, 'all');
        wp_queue_style('meliora-bootstrap', get_temmplate_directory_uri() . "/style.css", array(), '1.0', 'all');
        wp_queue_style('meliora-swiper', get_temmplate_directory_uri() . "/style.css", array(), '1.0', 'all');
    }

    add_action('qp_enqueue_scripts', 'meliora_register_styles');


    //Add js
    function meliora_register_scripts() {
        wp_queue_script('meliora-script', get_temmplate_directory_uri() . "/assets/js/style.css", array(), '1.0', true);
        wp_queue_script('meliora-bootstrap', get_temmplate_directory_uri() . "/assets/js/style.css", array(), '1.0', true);
        wp_queue_script('meliora-swiper', get_temmplate_directory_uri() . "/assets/plugins/style.css", array(), '1.0', true);
    }

    add_action('qp_enqueue_scripts', 'meliora_register_scripts');
?>