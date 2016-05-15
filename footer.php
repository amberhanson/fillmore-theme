<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fillmore
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
            
<!--                <nav id="footer-navigation" class="footer-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="footer-menu" aria-expanded="false"><?php esc_html_e( 'Footer Menu', 'fillmore' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_id' => 'footer-menu', 'menu_class' => 'footer-navigation' ) ); ?>
		</nav> #site-navigation -->
            
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'fillmore' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'fillmore' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'fillmore' ), 'fillmore', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
