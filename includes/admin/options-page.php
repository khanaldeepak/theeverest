<?php

function gfi_theme_opts_page(){
    $theme_opts             = get_option('gfi_opts');
?> 
<div class="wrap">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title"><?php _e('Everest Theme Settings','theeverest'); ?></h3>
        </div>
        <div class="panel-body">
            <?php
            if(isset($_GET['status']) && $_GET['status'] ==1){
            ?>
            <div class="alert alert-success">Success!</div>
            
            <?php
            }
            ?>
            <form method="post" action="admin-post.php">
                <input type="hidden" name="action" value="gfi_save_options">
                <?php wp_nonce_field('gfi_options_verify'); ?>
                <h4><?php _e('Social Icons','theeverest'); ?></h4>
                <div class="form-group">
                    <label><?php _e('Twitter','theeverest'); ?></label>
                    <input type="text" class="form-control" name="gfi_inputTwitter" value="<?php echo $theme_opts['twitter']; ?>"> 
                </div>
                <div class="form-group">
                    <label><?php _e('Facebook','theeverest'); ?></label>
                    <input type="text" class="form-control" name="gfi_inputFacebook" value="<?php echo $theme_opts['facebook']; ?>"> 
                </div>
                <div class="form-group">
                    <label><?php _e('Youtube','theeverest'); ?></label>
                    <input type="text" class="form-control" name="gfi_inputYoutube" value="<?php echo $theme_opts['youtube']; ?>"> 
                </div>  
                <h4><?php _e('Logo','theeverest'); ?></h4>
                <div class="form-group">
                    <label><?php _e('Logo Type','theeverest'); ?></label>
                    <select class="form-control" name="gfi_inputLogoType">
                        <option value="1"><?php _e('Site name','theeverest'); ?></option>
                        <option value="2" <?php echo $theme_opts['logo_type'] == 2 ? 'SELECTED' : '' ; ?>><?php _e('Image','theeverest'); ?></option>
                    </select>
                </div> 
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Logo Image" name="gfi_inputLogoImg"
                           value="<?php echo $theme_opts['logo_img']; ?>"> 
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button" id="gfi_uploadLogoImgBtn"><?php _e('Upload','theeverest'); ?></button>
                    </span>
                </div>
                <h4><?php _e('Footer','theeverest'); ?></h4>
                <div class="form-group">
                    <label><?php _e('Footer Text(HTML Allowed)','theeverest'); ?></label>
                    <textarea class="form-control" name="gfi_inputFooter"><?php echo stripslashes_deep($theme_opts['footer']); ?></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit"><?php _e('Update','theeverest'); ?></button> 
                </div>
                
                    
            </form>
        </div>
    </div>
    
</div>       
        
<?php
}