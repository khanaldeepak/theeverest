<?php
/**
 * The template part for displaying results in search pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

    <article id="post-<?php the_ID(); ?>" class="search-result-con">
	<header class="search-header">
		<?php the_title( sprintf( '<p class="search-entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' ); ?>
	</header><!-- .entry-header -->
        
        <?php
        $width="full-width";
        if(has_post_thumbnail()){ ?>
        
        <a href="<?php the_permalink(); ?>">
            <div class="search-image-con">
            <?php the_post_thumbnail( 'full', array('class' => 'search-image')); ?>
            </div>
        </a>
        <?php
        $width='';
        }
        ?>
        
        <div class="search-text-con <?php echo $width; ?>">
        
	<?php the_excerpt(); ?>

	

	<footer class="search-entry-footer">
			
            <ul><li><?php the_author(); ?></li></ul><?php the_category(); ?><ul><li><?php the_time('l, F j, Y'); ?></li></ul>
            <ul class="full-story right"><li><a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">full story</a></li></ul>

	</footer><!-- .entry-footer -->
        
        </div>
                <div class="clear"></div>
</article>
<!-- #post-## -->

