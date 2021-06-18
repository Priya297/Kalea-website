<?php
/**
 * The template for displaying posts in the Quote post format
 *
 * @package WordPress
 * @subpackage kaleawebsite
 * @since kaleawebsite 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'kaleawebsite' ) ); ?>
		</div><!-- .entry-content -->

		<footer class="entry-meta">
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'kaleawebsite' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php echo get_the_date(); ?></a>
			<?php if ( comments_open() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'kaleawebsite' ) . '</span>', __( '1 Reply', 'kaleawebsite' ), __( '% Replies', 'kaleawebsite' ) ); ?>
			</div><!-- .comments-link -->
			<?php endif; // comments_open() ?>
			
			<?php //edit_post_link( __( 'Edit', 'kaleawebsite' ), '<span class="edit-link">', '</span>' ); ?>

		</footer><!-- .entry-meta -->
	</article><!-- #post -->
