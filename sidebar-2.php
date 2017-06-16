<?php
if( is_active_sidebar('gfi_single_sidebar')){
dynamic_sidebar('gfi_single_sidebar');
}
?>
<?php 
    // Include More From Category News content template.
    get_template_part( 'template-parts/content', 'mainnews' );

?>  

<div class="single_sidebar">
    <div class="side-news-feed">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/add3.jpg" class="" alt="">
    </div>    
</div>

<div class="single_sidebar">
    
    <div class="fb-page" data-href="https://www.facebook.com/thetimesofeverest/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
        <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/thetimesofeverest/">
                <a href="https://www.facebook.com/thetimesofeverest/">The Times of Everest</a>
            </blockquote>
        </div>
    </div>
       
</div>

<div class="single_sidebar">
    <a class="twitter-timeline" href="https://twitter.com/everesttime" data-widget-id="734769484888723456">Tweets by @everesttime</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>