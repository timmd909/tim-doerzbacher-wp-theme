<?php
/**
 * The template for displaying "not found" content in the Blog Archives
 */

$search_enabled = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value

ob_start();
single_cat_title();
$single_cat_title = ob_get_clean();

?>
<article id="post-0" class="post no-results not-found">
	<header class="entry-header">
		<?php if ($single_cat_title == 'Free Time'): ?>
			<h1 class="entry-title">I wish I had free time...</h1>
		<?php else: ?>
			<h1 class="entry-title"><?php _e( 'Nothing Found', 'tim-doerzbacher-wp-theme' ); ?></h1>
		<?php endif; ?>
	</header><!-- /.entry-header -->
	<div class="entry-content">
		<?php if ($single_cat_title == 'Free Time'): ?>
			<p>There's not much time for this sort of thing. Maybe one day...</p>
		<?php else: ?>
			<p><?php _e( 'Apologies, but no results were found for the requested archive.', 'tim-doerzbacher-wp-theme' ); ?></p>
		<?php endif; ?>

		<?php
			if ( '1' === $search_enabled ) :
				get_search_form();
			endif;
		?>
	</div><!-- /.entry-content -->
</article><!-- /#post-0 -->
