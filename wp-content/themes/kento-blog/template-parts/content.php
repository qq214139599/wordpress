<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kento-blog
 */

?>

<article class="content-box-wraper" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
$feat_image ='';

if( has_post_thumbnail()){
	$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
}

?>


	<div class="entry-header"<?php if( ! empty( $feat_image));?> style="background:url(<?php echo esc_url($feat_image);?>)no-repeat center center / 100% auto;">
	
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		
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
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'kento-blog' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kento-blog' ),
					'after'  => '</div>',
				) );
			?>			
			
		</div>
	</div>
</article>
