<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'template-parts/content', 'single' ); ?>

							<?php the_post_navigation(); ?>

							<?php
								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
							?>

						<?php endwhile; // End of the loop. ?>
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