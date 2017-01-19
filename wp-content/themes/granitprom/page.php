<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- .content -->

<?php

get_footer();
