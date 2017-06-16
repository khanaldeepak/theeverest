<div class="category-content-wrapper" style="/*position: relative; left: 0px; top: 0px;*/">

	<div class="category-item">
        <div class="category-featured-image" data-ratio="0.59966592427617" style="height: 215.28px;">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                
                
                
                <?php  

	            if(has_post_thumbnail()){
                
            
             the_post_thumbnail( 'full', array('class' => '')); }
             else{
             ?>
                
                
             <img alt="" title="<?php the_title(); ?>" class="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logoh.png">
             <?php } ?>
            </a>
        </div> 
                

        <div class="category-wrap">
            <h2>
            <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
            </a>
			</h2>

            <p class="category-author">
                <a href="/author/post+report">Post Report</a>, 
                    <?php the_time('l, F j, Y'); ?>                       
			</p>
        </div>
     
		<div class="category-expert">
			<?php// the_excerpt(); ?>
                    
		</div>
            <!--a class="read-more" href="<?php// the_permalink(); ?>" title="<?php// the_title(); ?>">full story »</a-->
			<div class="clear"></div>
    </div>
</div>
