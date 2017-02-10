
<?php
/**
 * Read up on the WP Template Hierarchy for
 * when this file is used
 *
 */
?>
<?php get_header(); ?>
<?php get_sidebar(); ?>

		<div class="content">
			<?php if ( have_posts() ) : ?>
				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', get_post_format() );
				// End the loop.
				endwhile;
				// Previous/next page navigation.
				the_posts_pagination( array(
					'prev_text'          => __( 'Previous page', 'portfolio_basic' ),
					'next_text'          => __( 'Next page', 'portfolio_basic' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'portfolio_basic' ) . ' </span>',
				) );

			// If no content, include the "No posts found" template.
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
		</div>

<?php get_footer(); ?>
