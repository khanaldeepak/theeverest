<?php
function gfi_setup_theme(){
    register_nav_menu('primary', __('Primary Menu','theeverest'));
    register_nav_menu('secondary', __('Footer Menu','theeverest'));
}
