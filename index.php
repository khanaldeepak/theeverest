<?php get_header(); ?>
<!--Slider Starts-->
<section class="main_body">
<!--Slider Starts-->
<div class="cycle-slideshow" data-cycle-slides=".slide" data-cycle-pause-on-hover="true" data-cycle-fx="scrollHorz" data-cycle-timeout="3000">
	<!--Slider Control Starts-->
	<span class="cycle-next"></span>
	<span class="cycle-prev"></span>
	<span class="cycle-pager"></span>
	<!--Slider Control Ends-->
     
 <?php
$cou= 1;
query_posts('cat=5');

while (have_posts()) : the_post();

if(has_post_thumbnail()){
if ($cou<=6){
?>
        
        
        
        <!--Slide-One-->
	<div class="slide">
            
            
         
            
            <?php the_post_thumbnail( 'full', array('class' => 'slider-image')); ?>

	<!--Caption Start-->
	<div class="caption">
            <h3><?php the_title(); ?></h3>
		<p>test passed successfully</p>
                <p><a href="<?php the_permalink(); ?>">READ MORE</a></p>
	</div>
	<!--Caption Ends-->
	</div>
	<!--Slide-Image -End-->
      <?php
    
    $cou++;

            }
            }
            endwhile;
    ?>
        
</div>	
<!--Slider  Ends-->

<!--Here starts Catagory Sections-->
<p class="big_text" style="text-align:center"><strong>Get the latest and breaking news stories from around the world.</strong></p>


<!--Main Body Content-->


<!--------------------------FIRST CATAGORY-------------------------------------------------->

<?php
$counter= 1;
query_posts('cat=5');

while (have_posts()) : the_post();

if ($counter==1){
?>
    <!--left Container-->
    <div class="news-category-container">
    <div class="catagory-heading"><?php the_category(); ?></div>
<div class="catagory-inner">
<div class="catagory_container_img left">
	<div class="image_container">
            <a class="cat_header" href="<?php the_permalink(); ?>">
                
            <?php
            if(has_post_thumbnail()){
                
            
            ?>
            
            <?php the_post_thumbnail( 'full', array('class' => 'featured-thumb')); ?>
            </a>
        </div>
    <div class="news-info">
        <p class="news-head"><?php the_title(); ?></p>
        <p class="author-infomation"><?php the_author(); ?> <span class="smally"><?php the_time('l, F j, Y'); ?></span></p>
        <p class="news-summary">
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="full-story">full story..</a>
        </p>
    </div>
</div>
        <!--Right Container-->
    <div class="catagory_container right">
        <ul class="news-list">
<?php
    
    $counter++;

            }
            }else{
    ?>
                    <a href="<?php the_permalink(); ?>" class=""><li class="each-news">
                    <ul class="each-news-inner">
                        <li class="news-images">
                            
                                        <?php
            if(has_post_thumbnail()){
                
            
            ?>
            
            <?php the_post_thumbnail( 'full', array('class' => 'thumbnail-image-news')); }?>
                            
                        </li>
                        <li class="news-expert">
                            <?php the_title(); ?>
                        </li>
                        <p class="clear"></p>
                    </ul>
                    
                </li>
            </a>    
            <?php
            $counter++;
            
            if ($counter >7){
                break;
            }
            }

endwhile;
?>
        </ul>
        
        <div class="show-sponsors">
            
            <img class="show-sponsors-image" src="http://www.thetimesofeverest.com/everest/wp-content/themes/theeverest/assets/images/add.jpg"/>
        </div>
        
    </div>
    <div class="clear"></div>
</div>
</div>
            
<!--------------------------SECOND CATAGORY-------------------------------------------------->


<?php
$counte= 1;
query_posts('cat=7');

while (have_posts()) : the_post();

if ($counte==1){
?>
    <!--left Container-->
    <div class="news-category-container">
    <div class="catagory-heading"><?php the_category(); ?></div>
<div class="catagory-inner">
<div class="catagory_container_img right">
	<div class="image_container">
            <a class="cat_header" href="<?php the_permalink(); ?>">
                
            <?php
            if(has_post_thumbnail()){
                
            
            ?>
            
            <?php the_post_thumbnail( 'full', array('class' => 'featured-thumb')); ?>
            </a>
        </div>
    <div class="news-info">
        <p class="news-head"><?php the_title(); ?></p>
        <p class="author-infomation"><?php the_author(); ?> <span class="smally"><?php the_time('l, F j, Y'); ?></span></p>
        <p class="news-summary">
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="full-story">full story..</a>
        </p>
    </div>
</div>
        <!--Right Container-->
    <div class="catagory_container left">
        <ul class="news-list">
<?php
    
    $counte++;

            }
            }else{
    ?>
                    <a href="<?php the_permalink(); ?>" class=""><li class="each-news">
                    <ul class="each-news-inner">
                        <li class="news-images">
                            
                                        <?php
            if(has_post_thumbnail()){
                
            
            ?>
            
            <?php the_post_thumbnail( 'full', array('class' => 'thumbnail-image-news')); }?>
                            
                        </li>
                        <li class="news-expert">
                            <?php the_title(); ?>
                        </li>
                        <p class="clear"></p>
                    </ul>
                    
                </li>
            </a>    
            <?php
            $counte++;
            
            if ($counte >7){
                break;
            }
            }

endwhile;
?>
        </ul>
        
        <div class="show-sponsors">
            
            <img class="show-sponsors-image" src="http://www.thetimesofeverest.com/everest/wp-content/themes/theeverest/assets/images/add.jpg"/>
        </div>
        
    </div>
    <div class="clear"></div>
</div>
</div>       
            

<!--------------------------THIRD CATAGORY-------------------------------------------------->

<?php
$countee= 1;
query_posts('cat=7');

while (have_posts()) : the_post();

if ($countee==1){
?>
    <!--left Container-->
    <div class="news-category-container">
    <div class="catagory-heading"><?php the_category(); ?></div>
<div class="catagory-inner">
<div class="catagory_container_img left">
	<div class="image_container">
            <a class="cat_header" href="<?php the_permalink(); ?>">
                
            <?php
            if(has_post_thumbnail()){
                
            
            ?>
            
            <?php the_post_thumbnail( 'full', array('class' => 'featured-thumb')); ?>
            </a>
        </div>
    <div class="news-info">
        <p class="news-head"><?php the_title(); ?></p>
        <p class="author-infomation"><?php the_author(); ?> <span class="smally"><?php the_time('l, F j, Y'); ?></span></p>
        <p class="news-summary">
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="full-story">full story..</a>
        </p>
    </div>
</div>
        <!--Right Container-->
    <div class="catagory_container right">
        <ul class="news-list">
<?php
    
    $countee++;

            }
            }else{
    ?>
                    <a href="<?php the_permalink(); ?>" class=""><li class="each-news">
                    <ul class="each-news-inner">
                        <li class="news-images">
                            
                                        <?php
            if(has_post_thumbnail()){
                
            
            ?>
            
            <?php the_post_thumbnail( 'full', array('class' => 'thumbnail-image-news')); }?>
                            
                        </li>
                        <li class="news-expert">
                            <?php the_title(); ?>
                        </li>
                        <p class="clear"></p>
                    </ul>
                    
                </li>
            </a>    
            <?php
            $countee++;
            
            if ($countee >7){
                break;
            }
            }

endwhile;
?>
        </ul>
        
        <div class="show-sponsors">
            
            <img class="show-sponsors-image" src="http://www.thetimesofeverest.com/everest/wp-content/themes/theeverest/assets/images/add.jpg"/>
        </div>
        
    </div>
    <div class="clear"></div>
</div>
</div>    
    
    
    
        <!--World News Section Starts-->
<div class="world-container">
    <div class="catagory-heading">
        <ul class="post-categories">
            <li><a href="http://localhost/everest/category/politics/" rel="category tag">World</a></li>
        </ul>
    </div>
    <div class="catagory-inner">
        
        <div class="world-wrap">
            <div class="world-imgage-box">
                <img src="http://www.thetimesofeverest.com/everest/wp-content/themes/theeverest/assets/images/add.jpg" class="world-image"/>
            </div>
            <div class="world-info-box">
                <p class="world-info">Canada wildfires: Alberta releases app for worried residents</p>
            </div>
        </div>
        
        <div class="world-wrap">
            <div class="world-imgage-box">
                <img src="http://www.thetimesofeverest.com/everest/wp-content/themes/theeverest/assets/images/add.jpg" class="world-image"/>
            </div>
            <div class="world-info-box">
                <p class="world-info">Canada wildfires: Alberta releases app for worried residents</p>
            </div>
        </div>

        <div class="world-wrap">
            <div class="world-imgage-box">
                <img src="http://www.thetimesofeverest.com/everest/wp-content/themes/theeverest/assets/images/add.jpg" class="world-image"/>
            </div>
            <div class="world-info-box">
                <p class="world-info">Canada wildfires: Alberta releases app for worried residents</p>
            </div>
        </div>

        <div class="world-wrap">
            <div class="world-imgage-box">
                <img src="http://www.thetimesofeverest.com/everest/wp-content/themes/theeverest/assets/images/add.jpg" class="world-image"/>
            </div>
            <div class="world-info-box">
                <p class="world-info">Canada wildfires: Alberta releases app for worried residents</p>
            </div>
        </div>        
        
        <div class="clear"></div>
    </div>
</div>
    
      <!--World News Section Ends-->
    
    
    
<!-----General News Section Starts-->
<div class="general-news-container left">
    <div class="catagory-heading">
        <ul class="post-categories">
            <li><a href="http://www.thetimesofeverest.com/everest/category/politics/" rel="category tag">Politics</a></li>
        </ul>
    </div>
    <div class="catagory-inner">
        <div class="news-info">
            <p class="news-head">The plan to regenerate central Scotland’s canals</p>
            <p class="author-infomation">admin <span class="smally">Saturday, May 14, 2016</span></p>
            <p class="news-summary">
            </p><p>The Falkirk Wheel is a rotating boat lift in Scotland, connecting the Forth and Clyde Canal with the Union Canal. The lift, named after the nearby town of Falkirk in central Scotland, opened in 2002. It reconnects the two canals for the first time since the 1930s as part of the Millennium Link project. The […]</p>
            <a href="http://localhost/everest/the-plan-to-regenerate-central-scotlands-canals/" class="full-story">full story..</a>
        </div>
        <div class="scroll-box clear">
            <ul class="news-listing">
                <a href="#" class=""><li>To the rest of the world i am a best coder</li></a>
                <a href="#" class=""><li>To the rest of the world i am a best coder</li></a>
                <a href="#" class=""><li>To the rest of the world i am a best coder</li></a>
                <a href="#" class=""><li>To the rest of the world i am a best coder</li></a>
                <a href="#" class=""><li>To the rest of the world i am a best coder</li></a>
                <a href="#" class=""><li>To the rest of the world i am a best coder</li></a>
                <a href="#" class=""><li>To the rest of the world i am a best coder</li></a>              
                
            </ul>
        
        <div class="show-sponsors-tiny">
            
            <img class="show-sponsors-image" src="http://www.thetimesofeverest.com/everest/wp-content/themes/theeverest/assets/images/add.jpg"/>
        </div>            
            
            
        </div>
        
    </div>
    
</div>



<!-----General News Section Ends-->



<!-----General News Part 2 Section Starts-->
<div class="interview-container right">
    <div class="catagory-heading">
        <ul class="post-categories">
            <li><a href="http://www.thetimesofeverest.com/everest/category/politics/" rel="category tag">Interview</a></li>
        </ul>
    </div>
    <div class="catagory-inner">
        <div class="news-info">
            <p class="news-head">The plan to regenerate central Scotland’s canals</p>
            <p class="author-infomation">admin <span class="smally">Saturday, May 14, 2016</span></p>
            <p class="news-summary">
                </p><p>The Falkirk Wheel is a rotating boat lift in Scotland, connecting the Forth and Clyde Canal with the Union Canal. The lift, named after the nearby town of Falkirk in central Scotland, opened in 2002. It reconnects the two canals for the first time since the 1930s as part of the Millennium Link project. The […]</p>
                <a href="http://localhost/everest/the-plan-to-regenerate-central-scotlands-canals/" class="full-story">full story..</a>
            
        </div>
        
        <div class="scroll-box clear">
            <ul class="news-listing">
                <a href="#" class=""><li>To the rest of the world i am a best coder gotcha</li></a>
                <a href="#" class=""><li>To the rest of the world i am a best coder gotcha</li></a>
                <a href="#" class=""><li>To the rest of the world i am a best coder gotcha</li></a>
                <a href="#" class=""><li>To the rest of the world i am a best coder gotcha</li></a>
               
                
            </ul>
            
        </div>
        
    </div>
    
</div>


<div class="clear"></div>
<!-----General News Part 2 Section Ends-->

<!--------------------------FIRST CATAGORY-------------------------------------------------->


<?php
$countee= 1;
query_posts('cat=7');

while (have_posts()) : the_post();

if ($countee==1){
?>
    <!--left Container-->
    <div class="news-category-container">
    <div class="catagory-heading"><?php the_category(); ?></div>
<div class="catagory-inner">
<div class="catagory_container_img left">
	<div class="image_container">
            <a class="cat_header" href="<?php the_permalink(); ?>">
                
            <?php
            if(has_post_thumbnail()){
                
            
            ?>
            
            <?php the_post_thumbnail( 'full', array('class' => 'featured-thumb')); ?>
            </a>
        </div>
    <div class="news-info">
        <p class="news-head"><?php the_title(); ?></p>
        <p class="author-infomation"><?php the_author(); ?> <span class="smally"><?php the_time('l, F j, Y'); ?></span></p>
        <p class="news-summary">
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="full-story">full story..</a>
        </p>
    </div>
</div>
        <!--Right Container-->
    <div class="catagory_container right">
        <ul class="news-list">
<?php
    
    $countee++;

            }
            }else{
    ?>
                    <a href="<?php the_permalink(); ?>" class=""><li class="each-news">
                    <ul class="each-news-inner">
                        <li class="news-images">
                            
                                        <?php
            if(has_post_thumbnail()){
                
            
            ?>
            
            <?php the_post_thumbnail( 'full', array('class' => 'thumbnail-image-news')); }?>
                            
                        </li>
                        <li class="news-expert">
                            <?php the_title(); ?>
                        </li>
                        <p class="clear"></p>
                    </ul>
                    
                </li>
            </a>    
            <?php
            $countee++;
            
            if ($countee >7){
                break;
            }
            }

endwhile;
?>
        </ul>
        
        <div class="show-sponsors">
            
            <img class="show-sponsors-image" src="http://www.thetimesofeverest.com/everest/wp-content/themes/theeverest/assets/images/add.jpg"/>
        </div>
        
    </div>
    <div class="clear"></div>
</div>
</div> 

    


<?php /*
                                                        <!--Home Page Video Gallery Starts-->
<div class="catagory_container left">
	<div class="catagory_header"><a class="cat_header" href="#">Videos</a></div>
	<iframe width="100%" height="315" src="https://www.youtube.com/embed/dW5kRBq30m4" frameborder="0" allowfullscreen></iframe>
	
	<!--<img class="category_img" src="./PHP Enter Demo_files/2011024716.jpg" alt="Android Runs on Hewlett-Packard TouchPad">-->
	<p> <span class="big_title">Michelle Obama: My challenge to you</span><br/>
		Tourism drives about 80 per cent of the demand for suborbital flights, which reach about 63 miles above the...
	</p>
</div>
<!--Home Page Video Gallery Ends-->
<div class="catagory_container left">
	<div class="catagory_header"><a class="cat_header" href="browsecat.php?catid=7">Health</a></div><li class="home_list">&nbsp;<a href="newsdetails.php?pid=65">The pharmaceutical industry mounted a new challenge o</a></li>
								<hr/><li class="home_list">&nbsp;<a href="newsdetails.php?pid=64">Makers of Generic Drugs Challenge F.D.A. Plan for Upd</a></li>
								<hr/></div>
<div class="catagory_container left">
	<div class="catagory_header">
		<a class="cat_header" href="#">Everest Photos</a></div><li class="none">
		<div class="home_gallary left">	
			<a href="photos.php?gallary=20"><img src="gallery/giraffe-718054_640.jpg"/></a>
		</div>
		<div class="gallary_title left">
			<a href="photos.php?gallary=20"><strong>Wildlife</strong></a>
		</div>
		<div class="clear"></div>
		</li><hr/><li class="none">
		<div class="home_gallary left">	
			<a href="photos.php?gallary=18"><img src="gallery/30967earth.jpg"/></a>
		</div>
		<div class="gallary_title left">
			<a href="photos.php?gallary=18"><strong>earth</strong></a>
		</div>
		<div class="clear"></div>
		</li><hr/><li class="none">
		<div class="home_gallary left">	
			<a href="photos.php?gallary=17"><img src="gallery/26001I am in depression.jpg"/></a>
		</div>
		<div class="gallary_title left">
			<a href="photos.php?gallary=17"><strong>I am in depression</strong></a>
		</div>
		<div class="clear"></div>
		</li><hr/><li class="none">
		<div class="home_gallary left">	
			<a href="photos.php?gallary=8"><img src="gallery/1113.jpg"/></a>
		</div>
		<div class="gallary_title left">
			<a href="photos.php?gallary=8"><strong>hello sathi</strong></a>
		</div>
		<div class="clear"></div>
		</li><hr/><li class="none">
		<div class="home_gallary left">	
			<a href="gallary.php?pid=7"><img src="gallery/4256.jpg"/></a>
		</div>
		<div class="gallary_title left">
			<a href="gallary.php?pid=7"><strong>wha</strong></a>
		</div>
		<div class="clear"></div>
	</li>
	</div><!--Photo Gallary Starts--
<div class="catagory_container left">
	<div class="catagory_header">
		<a class="cat_header" href="#">Everest Photos</a>
	</div>
	<li class="none">
		<div class="home_gallary left">	
			<a href="newsdetails.php?pid=18"><img src="gallery/30967earth.jpg"/></a>
		</div>
		<div class="gallary_title left">
			<a href="newsdetails.php?pid=18"><strong>earth</strong></a>
		</div>
	<div class="clear"></div>
	</li>
	<hr/>

</div>
<!--Photo Gallery Ends-->
<div class="catagory_container left">
	<div class="catagory_header"><a class="cat_header" href="browsecat.php?catid=8">Tech</a></div><p align="center" style="color:red"><strong>There is No Following News in this Category</strong></p></div>
<div class="catagory_container left">
	<div class="catagory_header">
		<a class="cat_header" href="browsecat.php?catid=29">Opinions</a></div><li class="none">
		<div class="home_gallary left">	
			<a href="newsdetails.php?pid=7"><img src="images/news_images/IMG_1012.JPG"/></a>
		</div>
		<div class="gallary_title left">
			<a href="newsdetails.php?pid=7"><strong>headeer is good</strong></a>
		</div>
		<div class="clear"></div>
	</li>
	<hr/><li class="none">
		<div class="home_gallary left">	
			<a href="newsdetails.php?pid=6"><img src="images/news_images/najj2.jpg"/></a>
		</div>
		<div class="gallary_title left">
			<a href="newsdetails.php?pid=6"><strong>headeer</strong></a>
		</div>
		<div class="clear"></div>
	</li>
	<hr/><li class="none">
		<div class="home_gallary left">	
			<a href="newsdetails.php?pid=5"><img src="images/news_images/najj1.jpg"/></a>
		</div>
		<div class="gallary_title left">
			<a href="newsdetails.php?pid=5"><strong>headeer 5</strong></a>
		</div>
		<div class="clear"></div>
	</li>
	<hr/><li class="none">
		<div class="home_gallary left">	
			<a href="newsdetails.php?pid=4"><img src="images/news_images/luxpo.jpg"/></a>
		</div>
		<div class="gallary_title left">
			<a href="newsdetails.php?pid=4"><strong>'Tiger heavyweight' Nepal host</strong></a>
		</div>
		<div class="clear"></div>
	</li>
	<hr/><li class="none">
		<div class="home_gallary left">	
			<a href="newsdetails.php?pid=2"><img src="images/news_images/luxpo2.jpg"/></a>
		</div>
		<div class="gallary_title left">
			<a href="newsdetails.php?pid=2"><strong>After a day of criticism over </strong></a>
		</div>
		<div class="clear"></div>
	</li>
	</div><!--Opinion Starts--
<div class="catagory_container left">
	<div class="catagory_header">
		<a class="cat_header" href="#">Opinions</a>
	</div>
	<li class="none">
		<div class="home_gallary left">	
			<a href="newsdetails.php?pid=18"><img src="gallery/30967earth.jpg"/></a>
		</div>
		<div class="gallary_title left">
			<a href="newsdetails.php?pid=18"><strong>earth</strong></a>
		</div>
		<div class="clear"></div>
	</li>
	<hr/>
	
</div>
<!--Opinion Ends-->
<div class="catagory_container left">
	<div class="catagory_header"><a class="cat_header" href="browsecat.php?catid=3">Politics</a></div><p align="center" style="color:red"><strong>There is No Following News in this Category</strong></p></div>
<div class="catagory_container left">
	<div class="catagory_header"><a class="cat_header" href="browsecat.php?catid=4">Sports</a></div><p align="center" style="color:red"><strong>There is No Following News in this Category</strong></p></div>
<div class="catagory_container left">
	<div class="catagory_header"><a class="cat_header" href="browsecat.php?catid=5">Entertainment and Living</a></div><p align="center" style="color:red"><strong>There is No Following News in this Category</strong></p></div>
<div class="catagory_container left">
	<div class="catagory_header"><a class="cat_header" href="browsecat.php?catid=6">Travel</a></div><p align="center" style="color:red"><strong>There is No Following News in this Category</strong></p></div><p class="big_text docy"><strong>From our partners</strong></p><br/>

<div class="catagory_container left">
	<div class="catagory_header"><a class="cat_header" href="browsecat.php?catid=5">Entertainment and Living</a></div><p align="center" style="color:red"><strong>There is No Following News in this Category</strong></p></div>

<div class="catagory_container left">
	<div class="catagory_header"><a class="cat_header" href="browsecat.php?catid=6">Travel</a></div><p align="center" style="color:red"><strong>There is No Following News in this Category</strong></p></div>
<!--Category Section Ends-->
 * 

 * 
 */ ?>


    
</section>
<?php get_sidebar(); ?>

<div class="clear"></div>

<!--Advertisement before Footer-->
<div class="beforefooter">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- BeforeFooter -->



</div>

<?php get_footer(); ?>