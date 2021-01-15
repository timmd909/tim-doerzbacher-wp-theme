<?php
/**
 * The Template for displaying Archive pages.
 */

get_header();

if ( have_posts() ) :
?>
<header class="page-header">
	<h1 class="page-title">
		<?php if ( is_day() ) : ?>
			<?php printf( __( 'Daily Archives: %s', 'tim-doerzbacher-wp-theme' ), '<span>' . get_the_date() . '</span>' ); ?>
		<?php elseif ( is_month() ) : ?>
			<?php printf( __( 'Monthly Archives: %s', 'tim-doerzbacher-wp-theme' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'tim-doerzbacher-wp-theme' ) ) . '</span>' ); ?>
		<?php elseif ( is_year() ) : ?>
			<?php printf( __( 'Yearly Archives: %s', 'tim-doerzbacher-wp-theme' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'tim-doerzbacher-wp-theme' ) ) . '</span>' ); ?>
		<?php else : ?>
			<?php _e( 'Blog Archives', 'tim-doerzbacher-wp-theme' ); ?>
		<?php endif; ?>
	</h1>
</header>
<?php
	get_template_part( 'archive', 'loop' );

else :
	// 404
	get_template_part( 'content', 'none' );

endif;
wp_reset_postdata(); // end of the loop.

get_footer();
