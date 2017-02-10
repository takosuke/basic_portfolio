<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package portfolio_basic
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="post__header">
		<?php
		if ( get_the_title() ) :
			if ( is_single() ) :
				the_title( '<h1 class="post__header-title">', '</h1>' );
			else :
				the_title( '<h2 class="post__header-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
		else:
			echo '<h1 class="post__header-title"> &nbsp </h1>';
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="post__content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'portfolio_basic' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'portfolio_basic' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
