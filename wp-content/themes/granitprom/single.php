<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package GranitProm
 */

get_header(); ?>

	<main class="container site-content">
		<div class="row breadcrumbs">
			<div class="col-md-12 ">
				<?php do_action('icl_navigation_breadcrumb', ['separator']); ?>
			</div><!-- /.col-md-12 -->
		</div><!-- /.row -->

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- .content -->

<?php

get_footer();
