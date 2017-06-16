<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php _e( 'We don\'t have any News on this category to display yet.
                                                Instead Browse By Categories', 'theeverest' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_search() ) : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'theeverest' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'theeverest' ); ?></p>
			<?php //get_search_form(); ?>

		<?php endif; ?>
                        
                        <?php get_template_part( 'template-parts/content', 'trending' ); ?>
                        
                        
	</div><!-- .page-content -->
</section><!-- .no-results -->
