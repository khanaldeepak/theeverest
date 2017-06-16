<?php

function gfi_enqueue(){
    wp_register_style('gfi_mobile', get_template_directory_uri().'/assets/styles/mobile.css');
    wp_register_style('gfi_awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
    wp_register_style('gfi_slick', get_template_directory_uri().'/assets/styles/slick.css');
    wp_register_style('gfi_slicktheme', get_template_directory_uri().'/assets/styles/slick-theme.css');
    
    wp_enqueue_style('gfi_mobile');
    wp_enqueue_style('gfi_awesome');
    wp_enqueue_style('gfi_slick');
    wp_enqueue_style('gfi_slicktheme');    
    
    wp_register_script('gfi_ajaxfun',get_template_directory_uri().'/assets/vendor/ajaxfun.js' );
    wp_register_script('gfi_main',get_template_directory_uri().'/assets/vendor/main.js' );
    wp_register_script('gfi_jq',get_template_directory_uri().'/assets/vendor/jquery-2.1.4.min.js' );
    wp_register_script('gfi_cycle',get_template_directory_uri().'/assets/vendor/jquery.cycle2.min.js' );
    wp_register_script('gfi_slick',get_template_directory_uri().'/assets/vendor/slick.min.js' );
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('gfi_ajaxfun');
    wp_enqueue_script('gfi_main');
    wp_enqueue_script('gfi_jq');
    wp_enqueue_script('gfi_cycle');
    wp_enqueue_script('gfi_slick');
    
}

