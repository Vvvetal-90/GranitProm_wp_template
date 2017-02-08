<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package GranitProm
 */

?>

<div class="row">
	<div class="col-md-12">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="row">
				<div class="col-md-12">
					<div class="post_header clearfix">
						<header class="page-header">
							<?php
							if ( is_single() ) :
								the_title( '<h1 class="entry-title">', '</h1>' );
							else :
								the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
							endif;

							if ( 'post' === get_post_type() ) : ?>
							<div class="entry-meta">
								<!--  granitprom_posted_on(1); -->
							</div><!-- .entry-meta -->
							<?php
							endif; ?>
						</header><!-- .page-header -->
						<div class="post_rating">
							<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
						</div>
					</div><!-- /.post_cat_header -->
				</div><!-- /.col-md-12 -->
			</div><!-- /.row -->

			<div class="entry-content">
				<?php
					the_post_thumbnail('medium');
					the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'granitprom' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'granitprom' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
			<footer class="entry-footer">
				<?php granitprom_entry_meta(); ?>
				<?php edit_post_link( __( 'Edit', 'granitprom' ), '<span class="edit-link"><i class="fa fa-pencil" aria-hidden="true"></i>', '</span>' ); ?>
			</footer><!-- .entry-footer -->

			
		</article><!-- #post-## -->
	</div><!-- /.col-md-12 -->
</div><!-- /.row -->
