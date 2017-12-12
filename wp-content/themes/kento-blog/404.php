<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kento-blog
 */

get_header(); ?>

	<!-- Content -->
	<div class="content-area">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="main-content">
						<header class="page-header">
							<h1 class="page-title">
							<div class="four-zero">
								<?php echo __( '404', 'kento-blog' );?>
							</div>							
							<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'kento-blog' ); ?></h1>
						</header><!-- .page-header -->
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'kento-blog' ); ?></p>

						<?php get_search_form(); ?>
					</div>
				</div>
				<div class="col-md-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
	<!-- End Content -->

<?php get_footer(); ?>

