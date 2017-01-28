<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package GranitProm
 */

get_header(); ?>

	<main class="container site-content">
		<div class="row">
			<div class="col-md-12 ">

				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'granitprom' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'granitprom' ); ?></p>

						<?php
							get_search_form();

							the_widget( 'WP_Widget_Recent_Posts' );


						?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->
			</div><!-- .col-md-12 -->
		</div><!-- .row -->
	</main><!-- .content -->

<?php
get_footer();
