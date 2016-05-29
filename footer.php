<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MAS
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="social">
		<h2 class="footer-title">Social</h2>
		<img class="social-icon" src="http://localhost:8888/wordpressMAS/wp-content/uploads/2016/04/facebook-4-256.png" width= 3% height= 3% />
		<img class="social-icon" src="http://localhost:8888/wordpressMAS/wp-content/uploads/2016/04/instagram-4-256.png" width= 3% height= 3% />
		<img class="social-icon" src="http://localhost:8888/wordpressMAS/wp-content/uploads/2016/04/twitter-4-256.png" width= 3% height= 3% />
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mas' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'mas' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'mas' ), 'mas', '<a href="http://underscores.me/" rel="designer">Leo Melo</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
