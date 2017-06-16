<div class="single_sidebar main-news">
    <p class="main-news-head">Main News</p>
    <?php
	query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC');
	if (have_posts()) : while (have_posts()) : the_post(); ?>
        
    <div class="single-news-item">
        
            
            
                            <?php  
                    $fullclass="fullwidth";
	            if(has_post_thumbnail()){
                ?>
                    
                    
                    <div class="main-news-image">

                
                <?php
                     the_post_thumbnail( 'thumbnail', array('class' => 'main-news-thumbnail')); 
             
               ?>
                        
                        
			<!--img alt="" class="img-responsive" title="" src="http://assets-cdn.ekantipur.com/images/kantipur/miscellaneous/20052016115831lumbani13-0x150.JPG"-->
                    </div>
                    
                    
                 <?php
                 $fullclass="nowidth";
                 
                    } ?>
            
            
        
        <div class="main-news-title <?php echo $fullclass; ?>">
            <li><a href="<?php the_permalink(); ?>">
                
                   <?php
                            $post_title_test = get_the_title(); 
                            $string = substr($post_title_test,0,45).'..';
                            echo $string;
                    ?> 
                
                </a></li>
            <li class="smally"><?php the_time('l, F j, Y'); ?></li>
        </div>
        <div class="clear"></div>
    </div>
    
	
        
        
	<?php
	endwhile; endif;
	wp_reset_query();
?>
    
</div>  