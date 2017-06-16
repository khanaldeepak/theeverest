<div class="news-category-container">
    <div class="catagory-heading">
        <ul class="post-categories">
            <li class="">
                <span class="cat-shadow">MORE FROM </span>
                <span class="black-cat-head"><?php the_category(array('class'=>'thiscat')); ?></span>
            </li>
        </ul>
    </div>
    <div class="catagory-inner">
            
        <div class="your-class">
            
<?php
$categories = get_the_category();
$category_id = $categories[0]->cat_ID;

$counter= 1;
query_posts('cat='.$category_id);

while (have_posts()) : the_post();?>
            
            <div class="slide-con">
                <div class="slide-content-image">
                <?php  

	            if(has_post_thumbnail()){
                
            
             the_post_thumbnail( 'full', array('class' => 'news-single-image')); 
                    }else{
                ?>
		
                    
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/LOGOH.png"/>
                    
                    <?php } ?>   
                </div>
                <div class="slide-content-info">
                    <?php
                    $post_title_test = get_the_title(); ?>
                    <p class="slide-title"><?php echo wp_trim_words( $post_title_test, 8, '...' ); ?></p>
                    
                    
                    
                    <p class="smally"><?php the_time('l, F j, Y'); ?><span class="right"><a href="<?php the_permalink(); ?>">full story</a></span></p>
                </div>
            </div>
            <?php
            $counter++;
            
            if ($counter==10){
                break;
            }
            
                endwhile;
                // Reset Query
                wp_reset_query();
		?>
  
        </div>

        <script type="text/javascript">
          $(document).ready(function(){
            $('.your-class').slick({

        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,

            });
          });
        </script>
           
    </div>
</div>