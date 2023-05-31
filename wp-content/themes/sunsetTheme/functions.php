<?php

    function sunsetTheme_theme_support() {
        // Adds dynamic title tag support
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    }

    add_action('after_setup_theme', 'sunsetTheme_theme_support');



    function sunsetTheme_register_styles(){

        $version = wp_get_theme()->get( 'Version ');

        wp_enqueue_style(
            'sunsettheme-style',
            get_template_directory_uri() . "/style.css",
            array('sunsettheme-bootstrap'),
            $version,
        );

        wp_enqueue_style(
            'sunsettheme-bootstrap',
            "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css",
            array(),
            '4.4.1'
        );

        wp_enqueue_style(
            'sunsettheme-fontawesome',
            "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css",
            array(),
            '5.13.0'
        );
    }

    add_action(
        'wp_enqueue_scripts',
        'sunsettheme_register_styles'
    );

    function sunsetTheme_register_scripts(){
        wp_enqueue_script(
            'sunsettheme-jquery',
            "https://code.jquery.com/jquery-3.4.1.slim.min.js",
            array(),
            '3.4.1',
            true,
        );

        wp_enqueue_script(
            'sunsettheme-popper',
            "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js",
            array(),
            '1.16.0',
            true,
        );

        wp_enqueue_script(
            'sunsettheme-bootstrap',
            "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js",
            array(),
            '4.4.1',
            true,
        );

        wp_enqueue_script(
            'sunsettheme-main',
            get_template_directory_uri() . "/assets/javascript/main.js",
            array(),
            '1.0',
            true,
        );
    }

    add_action(
        'wp_enqueue_scripts',
        'sunsettheme_register_scripts'
    );
?>