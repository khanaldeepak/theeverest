<?php

function gfi_admin_menus(){
    add_menu_page(
            'Everest Theme Options',
            'Theme Options',
            'edit_theme_options',
            'gfi_theme_opts',
            'gfi_theme_opts_page'
            );
}