<?php

function gfi_admin_enqueue(){
    if(!isset($_GET['page']) || $_GET['page'] != "gfi_theme_opts"){
        return;
    }
        
        wp_register_style('gfi_mobile', get_template_directory_uri().'/assets/styles/mobile.css');
        wp_register_style('gfi_awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
        wp_register_style('gfi_bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
        wp_enqueue_style('gfi_bootstrap');
        wp_enqueue_style('gfi_mobile');
        wp_enqueue_style('gfi_awesome');
        
        
        wp_register_script('gfi_options',get_template_directory_uri().'/assets/scripts/options.js',array(),false,true );
        wp_enqueue_media();
        wp_enqueue_script('gfi_options' );
}
