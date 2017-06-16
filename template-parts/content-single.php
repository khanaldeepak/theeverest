<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
           
		<?php the_title( '<p class="entry-title">', '</p>' ); ?>
                <p class="author-infomation"><?php the_author(); ?></p>
	</header><!-- .entry-header -->
        
        <!--Adwords Section Starts-->
        <div class="adwords-top"></div>
        <!--Adwords Section Ends-->
        

	<div class="entry-content">
            	<?php  

	            if(has_post_thumbnail()){
                
            
             the_post_thumbnail( 'full', array('class' => 'news-single-image')); }?>
		<?php
			the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<span class="smally right mr5">Published: <?php the_time('l, F j, Y'); ?></span>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
<div class="add-after-post">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/add3.jpg" class="" alt="">
</div>
