<?php
/**
 * The template for displaying archive pages
*/

get_header(); ?>

<div class="top-category-ad">
    <img alt="" title="" class="" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/add2.jpg">
</div>

<section class="main_body">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
                
                
                if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					single_cat_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
                        
			// Start the Loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */                 
                            
                        
				get_template_part( 'template-parts/content', 'category' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'theeverest' ),
				'next_text'          => __( 'Next page', 'theeverest' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'theeverest' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->
</section>
<?php get_sidebar('category'); ?>
<div class="clear"></div>
<?php get_footer(); ?>
