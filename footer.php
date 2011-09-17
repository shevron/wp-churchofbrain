<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 0.1
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div id="site-generator">
			<?php do_action( 'toolbox_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'toolbox' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'toolbox' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'toolbox' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			Theme: <a href="http://github.com/shevron/wp-churchofbrain">Church of Brain</a>, based on Toolbox by <a href="http://automattic.com/" rel="designer">Automattic</a>
		</div>
		<div id="copyright">
		    <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License</a>.
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>