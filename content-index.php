<?php
/**
 * The template for displaying content in the index.php template
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-12' ); ?>>
	<div class="card mb-4">
		<header class="card-body pb-0">
			<h3 class="card-title m-0"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'tim-doerzbacher-wp-theme' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>

			<?php if ( 'post' === get_post_type() ) : ?>
				<div class="card-text entry-meta">
					<?php
						tim_doerzbacher_wp_theme_article_posted_on();

						$num_comments = get_comments_number();
						if ( comments_open() && $num_comments >= 1 ) :
							echo ' <a href="' . get_comments_link() . '" class="badge badge-pill badge-secondary float-right" title="' . esc_attr( sprintf( _n( '%s Comment', '%s Comments', $num_comments, 'tim-doerzbacher-wp-theme' ), $num_comments ) ) . '">' . $num_comments . '</a>';
						endif;
					?>
				</div><!-- /.entry-meta -->
			<?php endif; ?>
		</header>

		<div class="card-body pt-2">
			<div class="card-text entry-content">
				<?php
					if ( has_post_thumbnail() ) :
						echo '<div class="post-thumbnail">' . get_the_post_thumbnail( get_the_ID(), 'large' ) . '</div>';
					endif;

					if ( is_search() ) :
						the_excerpt();
					else :
						the_content();
					endif;
				?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'tim-doerzbacher-wp-theme' ) . '</span>', 'after' => '</div>' ) ); ?>
			</div><!-- /.card-text -->

			<footer class="entry-meta">
				<a href="<?php echo get_the_permalink(); ?>" class="btn btn-outline-secondary">
					<?php _e( 'more', 'tim-doerzbacher-wp-theme' ); ?>
				</a>
			</footer><!-- /.entry-meta -->
		</div><!-- /.card-body -->
	</div><!-- /.col -->
</article><!-- /#post-<?php the_ID(); ?> -->
