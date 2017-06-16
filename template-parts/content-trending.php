<div class="news-category-container">
    <div class="catagory-heading">
        <ul class="post-categories">
            <li class="">
                <span class="cat-shadow">TRENDING</span>
            </li>
        </ul>
    </div>
        <div class="catagory-inner">
          <?php
	query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC');
	if (have_posts()) : while (have_posts()) : the_post(); ?>

                          <!--Trend 4 Starts-->
                  <div class="trend">
                <div class="trend-wrap">
                    
                <?php  
                    $fullclass="fullwidth";
	            if(has_post_thumbnail()){
                ?>
                    
                    
                    <div class="trend-image">

                
                <?php
                     the_post_thumbnail( 'full', array('class' => 'trend-single-image')); 
             
               ?>
                        
                        
			<!--img alt="" class="img-responsive" title="" src="http://assets-cdn.ekantipur.com/images/kantipur/miscellaneous/20052016115831lumbani13-0x150.JPG"-->
                    </div>
                    
                    
                 <?php
                 $fullclass="nowidth";
                 
                    } ?>
                    <div class="trend-title <?php echo $fullclass; ?>">
			<a href="<?php the_permalink(); ?>" class="trend-head">
                            
                            <?php
                            $post_title_test = get_the_title(); 
                            $string = substr($post_title_test,0,50).'...';
                            echo $string;
                            ?>                     
                        </a>
			<a href="<?php the_permalink(); ?>" class="morelink">full story »</a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
                    <!--Trend 4 Ends-->
        
        
	<?php
	endwhile; endif;
	wp_reset_query();
?>

            
        </div>
</div>
<div class="clear"></div>
