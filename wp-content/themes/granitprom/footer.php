<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GranitProm
 */

?>

	<footer class="footer">
		<div class="footer-widget" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</div><!-- /.col-md-4 -->
					<div class="col-md-4">
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
					</div><!-- /.col-md-4 -->
					<div class="col-md-4">
						<?php dynamic_sidebar( 'sidebar-3' ); ?>
					</div><!-- /.col-md-4 -->
				</div>
			</div>
		</div><!-- /.footer-widget -->
		<div class="footer-copyright">
			<div class="container">
				<div class="copyright">
					<p class="copyright-text">
						<?php printf( esc_html__( 'Copyright © %s', 'granitprom' ), '2017' ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php printf( esc_html__( '%s', 'granitprom' ), 'GranitProm' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'granitprom' ), 'GranitProm', '<a href="https://oshchenkov.com/" rel="designer">Oshchenkov</a>' ); ?>
					</p>
				</div><!-- /.copyright -->
				<div class="counters">
					<a href="#">||||||||||||||||||</a>
				</div><!-- /.counters -->
			</div><!-- /.container -->
		</div><!-- /.footer-copyright -->
		<div class="go-top">
			<a href="#gotop"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
		</div><!-- /.go-top -->
	</footer>
	<!-- Custom HTML End -->
	<!-- Optimized loading JS Start -->
	<script>var scr = {"scripts":[
		{"src" : "<?php echo get_stylesheet_directory_uri(); ?>/assets/js/libs.min.js", "async" : false},
		{"src" : "<?php echo get_stylesheet_directory_uri(); ?>/assets/js/common.js", "async" : false}
		]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
	</script>
	<!-- Optimized loading JS End -->
	<?php wp_footer(); ?>

</body>
</html>
