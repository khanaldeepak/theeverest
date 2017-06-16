<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<section class="main_body">
    <div class="title">
        		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); 
                setPostViews(get_the_ID());
                ?>
        <ul>
            <li class="category-head"><?php the_category(array('class'=>'thiscat')); ?></li>
        </ul>
        <div class="top-ad-01">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/add2.jpg" class="" alt="">
        </div>
    </div>
<div id="primary" class="content-area">
	<!--main id="main" class="site-main" role="main"-->
<?php

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

	

			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<div class="next-story"><span class="meta-nav" aria-hidden="true">' . __( 'Next Story', 'theeverest' ) . '</span><i class="fa fa-chevron-circle-right frmt5" aria-hidden="true"></i></div> ' .
						
						'<div class="next-title"><span class="post-title">%title</span></div>',
					'prev_text' => '<div class="prev-story"><i class="fa fa-chevron-circle-left flmt5" aria-hidden="true"></i><span class="meta-nav" aria-hidden="true">' . __( 'Previous Story', 'theeverest' ) . '</span></div> ' .
						
						'<div class="prev-title"><span class="post-title">%title</span></div>',
				) );
			} ?>
            <div class="clear"></div>
            
            

            <?php
            // Include More From Category News content template.
			get_template_part( 'template-parts/content', 'related' );

            // Include Trending News content template.
			get_template_part( 'template-parts/content', 'trending' );
            ?>
            
            
            <!--Facebook Comments-->
            <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="5"></div>
            
                        <?php
                        // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

	<!--/main><!-- .site-main -->
        </div><!-- .content-area -->
</section>

 
<div class="single_sidebar">
    <div class="social-sharing">
        <div class="facebook-sharng left">
            <div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="box_count" data-mobile-iframe="true"></div>
        </div>

        <div class="twitter-sharing right">
            <a href="https://twitter.com/share" class="twitter-share-button" data-via="everesttime" data-related="everesttime" data-hashtags="thetimesofeverest">Tweet</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        </div>

        <div class="clear"></div>
    </div>
</div> 
 
<div class="single_sidebar">
    <div class="side-ad-01">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/add3.jpg" class="" alt="">
    </div>    
</div>

<?php get_sidebar('2'); ?>
<div class="clear"></div>

<?php get_footer(); ?>
