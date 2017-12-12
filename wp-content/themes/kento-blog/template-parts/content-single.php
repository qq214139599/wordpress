<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kento-blog
 */

?>



<article class="content-box-wraper" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
	if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		the_post_thumbnail('kento-blog-thumbnail');
	} 
	?>
	<div class="entry-header">
		<?php the_title( '<h1 class="entry-title-inner">', '</h1>' ); ?>
	</div>
	<div class="entry-header-inner">
		<div class="entry-meta">
			<span class="entry-author">
				<i class="fa fa-user"></i><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
			</span>
			<span class="entry-date">
				<i class="fa fa-clock-o"></i><?php kento_blog_posted_on(); ?>
			</span>
		</div>
		<div class="entry-summery">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kento-blog' ),
					'after'  => '</div>',
				) );
			?>
		</div>
	</div>
</article>