<!--Footer Content Starts-->
<footer class="main_footer">
    <?php
    $theme_opts         =   get_option('gfi_opts');
?>
<!--Top Footer content starts-->
<div class="top_footer">
    
                <?php
            wp_nav_menu(array(
                'theme_location' => 'secondary',
                'container'      => false,
                'menu_class'     => 'footernavbar'
            ));
            ?>
    
	<a href="sponsor.php">Advertise with Us</a> |
	<a href="#">Sitemap</a> | 
	<a href="#">Archives</a> | 
	<a href="#">RSS</a><br><br>
<!--Newsletter Sign up form-->
<form name="signupform" id="signupform" onsubmit="return false;">
	<p align="center"><strong>NEWSLETTER SIGNUP :</strong>&nbsp;&nbsp;
	<input id="sus_name" name="sus_name" type="text" placeholder="Enter your Name" size="15">
	<input id="sus_email" name="sus_email" type="text" placeholder="Enter your Email" size="26">
	<input id="optin" name="optin" type="submit" value="SUBSCRIBE" onclick="newsletter()"><br>
	<span id="status"></span>
	</p>
</form>
<!--Newsletter Sign up form Ends-->
</div>
<!--Top Footer Ends-->
<!--BOTTOM FOOTER Starting-->
<div class="bottom_footer">
<!--Copyright Goes Here-->
	<div class="copyright">
		<p>Copyright © 2015 The Times of Everest, Jainson Solution Inc. All rights reserved.</p>
                 <!--a href="http://www.geniusfreelancers.com"><p>Designed By: Jainson Solution Inc</p></a-->
	</div>
<!--Social Icons Goes Here-->
	<div class="social_icons">
		<p><strong>FOLLOW US ON</strong></p>
                
                <?php
                if(!empty($theme_opts['twitter'])){
                    ?><a target="_blank" href="https://twitter.com/<?php echo $theme_opts['twitter']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a><?php
                }
                if(!empty($theme_opts['facebook'])){
                    ?><a target="_blank" href="https://www.facebook.com/<?php echo $theme_opts['facebook']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php
                }                
                if(!empty($theme_opts['youtube'])){
                    ?><a target="_blank" href="https://youtube.com/user/<?php echo $theme_opts['youtube']; ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a><?php
                }                
                
                ?>
                
 
	</div>
	<div style="clear:both;"></div>
        <?php echo $theme_opts['footer']; ?> 
</div>
<!--Bottom Footer content ends-->
</footer><!--Footer content ends-->
</div>
<!--Main Wrapper Ends-->
<?php wp_footer(); ?>

</body>

</html>