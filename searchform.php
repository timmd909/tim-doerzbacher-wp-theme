<?php
/**
 * The template for displaying search forms
 */
?>
<form class="search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<!--label for="s" class="assistive-text"><?php _e( 'Search', 'tim-doerzbacher-wp-theme' ); ?></label-->
	<div class="row">
		<div class="col-auto">
			<div class="input-group">
				<input type="text" name="s" id="s" class="form-control" placeholder="<?php _e( 'Search', 'tim-doerzbacher-wp-theme' ); ?>" />
				<div class="input-group-append">
					<button type="submit" class="btn btn-secondary" name="submit" id="searchsubmit"><?php _e( 'Search', 'tim-doerzbacher-wp-theme' ); ?></button>
				</div><!-- /.input-group-append -->
			</div><!-- /.input-group -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</form>
