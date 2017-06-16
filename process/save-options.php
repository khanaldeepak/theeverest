<?php

function gfi_save_options(){
    if( !current_user_can('edit_theme_options') ){
        wp_die(__('You are not allowed to be on this page.'));
    }
    
    check_admin_referer('gfi_options_verify');
    
    $opts                   =  get_option('gfi_opts');
    $opts['twitter']        = sanitize_text_field($_POST['gfi_inputTwitter']);
    $opts['facebook']        = sanitize_text_field($_POST['gfi_inputFacebook']);
    $opts['youtube']        = sanitize_text_field($_POST['gfi_inputYoutube']);
    $opts['logo_type']        = absint($_POST['gfi_inputLogoType']);
    $opts['footer']        = $_POST['gfi_inputFooter'];
    $opts['logo_img']       = esc_url_raw($_POST['gfi_inputLogoImg']);
    
    update_option('gfi_opts', $opts);
    wp_redirect(admin_url('admin.php?page=gfi_theme_opts&status=1'));
    
    
}