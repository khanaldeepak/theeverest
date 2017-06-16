<?php

function gfi_admin_init(){
    include( 'enqueue.php' );
    add_action('admin_enqueue_scripts','gfi_admin_enqueue');
    add_action('admin_post_gfi_save_options','gfi_save_options');
}

