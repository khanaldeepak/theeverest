<?php

function gfi_widgets(){
    register_sidebar(array(
        'name'              => __('Home Page Right Sidebar','theeverest'),
        'id'                => 'gfi_sidebar',
        'description'       => __('Sidebar for the theme theeverest', 'theeverest'),
        'class'             => '',
        'before_widget'     => '<div class="sidebar"><div id="%1$s" class="%2$s">',
        'after_widget'      => '</div></div></div></div>',
        'before_title'      => '<div class="catagory_header"><span class="card-title">',
        'after_title'       => '</span></div><div class="card-content"><div class="widget">'
        
    ));
    
        register_sidebar(array(
        'name'              => __('Single Page Right Sidebar','theeverest'),
        'id'                => 'gfi_single_sidebar',
        'description'       => __('Sidebar for the theme theeverest', 'theeverest'),
        'class'             => '',
        'before_widget'     => '<div class="single_sidebar"><div id="%1$s" class="%2$s">',
        'after_widget'      => '</div></div></div></div>',
        'before_title'      => '<div class="catagory_header"><span class="card-title">',
        'after_title'       => '</span></div><div class="card-content"><div class="widget">'
        
    ));
        register_sidebar(array(
        'name'              => __('Category Page Right Sidebar','theeverest'),
        'id'                => 'gfi_category_sidebar',
        'description'       => __('Sidebar for the theme theeverest', 'theeverest'),
        'class'             => '',
        'before_widget'     => '<div class="single_sidebar"><div id="%1$s" class="%2$s">',
        'after_widget'      => '</div></div></div></div>',
        'before_title'      => '<div class="catagory_header"><span class="card-title">',
        'after_title'       => '</span></div><div class="card-content"><div class="widget">'
        
    ));
    register_sidebar( array(
    'name' => __( 'Header Area', 'your-theme' ),
    'id' => 'sidebar-2',
    'description' => __( 'An optional widget area for your site header', 'your-theme' ),
    'before_widget' => '<div id="%1$s" class="headwidget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ) );
    register_sidebar(array(
        'name'              => __('Page Left Sidebar','theeverest'),
        'id'                => 'gfi_page_sidebar',
        'description'       => __('Sidebar for the theme theeverest', 'theeverest'),
        'class'             => '',
        'before_widget'     => '<div class="sidebar-left"><div id="%1$s" class="%2$s">',
        'after_widget'      => '</div></div></div></div>',
        'before_title'      => '<div class="page_cat_header"><span class="card-title">',
        'after_title'       => '</span></div><div class="page-card-content"><div class="page-widget">'
        
    ));
} 