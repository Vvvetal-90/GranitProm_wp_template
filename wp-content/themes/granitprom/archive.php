<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package GranitProm
 */

get_header(); ?>

	<main class="container site-content">

		<?php
		if ( have_posts() ) : ?>
			<div class="row">
				<div class="col-md-12">
					<div class="post_cat_header clearfix">
						<header class="page-header">
							<?php single_cat_title( '<h1 class="page-title">', '</h1>' ); ?>
						</header><!-- .page-header -->
<!-- 						<div class="post_rating">
						</div> -->
					</div><!-- /.post_cat_header -->
				</div><!-- /.col-md-12 -->
			</div><!-- /.row -->
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
			?>
				<div class="row category_post">
					<div class="col-md-12">
						<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
							<div class="post_incat_header clearfix">
								<header class="entry-header">
									<?php
										the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
									?>
								</header><!-- .entry-header -->
								<div class="post_rating">
									<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
								</div>
							</div><!-- /.post_incat_header -->
							<div class="entry-content">
								<div class="row">
									<div class="col-sm-3 cat_thumbnail">
										<?php if ( has_post_thumbnail() ) {
											the_post_thumbnail('thumbnail');
											} else { ?>
											<img src="<?php bloginfo('template_directory'); ?>/assets/images/default-image-300x300.png" alt="<?php the_title(); ?>" />
										<?php } ?>
									</div><!-- /.col-sm-3 -->
									<div class="col-sm-9">
										<?php
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
									</div><!-- /.col-sm-9 -->
								</div><!-- /.row -->
							</div><!-- .entry-content -->
							<footer class="entry-footer">
								<?php granitprom_entry_meta(); ?>
								<?php edit_post_link( __( 'Edit', 'granitprom' ), '<span class="edit-link"><i class="fa fa-pencil" aria-hidden="true"></i>', '</span>' ); ?>
							</footer><!-- .entry-footer -->

							
						</article><!-- #post-## -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->

			<?php

			endwhile;
			?>
				<div class="row">
					<div class="col-md-12">

						<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>

					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			<?php
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

	</main><!-- .content -->

<?php

get_footer();
