<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package GranitProm
 */

get_header(); ?>

	<main class="container site-content">

		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( '%s', 'granitprom' ), single_cat_title( '', false ) ); ?></h1>
			</header><!-- .archive-header -->

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
			<?php endwhile; ?>


		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>

		<?php if ( category_description() ) : // Show an optional category description ?>
		<div class="archive-meta"><?php echo category_description(); ?></div>
		<?php endif; ?>
		<div class="post_rating">
			<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
		</div>

	</main><!-- .content -->

<?php get_footer(); ?>
