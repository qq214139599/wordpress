<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kento-blog
 */

?>

	</div><!-- #content -->

	<!-- Footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-md-10">
					<div class="footer">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'kento-blog' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'kento-blog' ), 'WordPress' ); ?></a>
					</div>
				</div>
				<div class="col-md-2">
					<div class="back-home">
						<a href="#back-top"><i class="fa fa-chevron-circle-up"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- End Footer -->
<?php wp_footer(); ?>

</body>
</html>
