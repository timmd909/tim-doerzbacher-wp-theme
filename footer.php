<?php
	$search_enabled = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value
?>
			<?php
				// If Single or Archive (Category, Tag, Author or a Date based page)
				if ( is_single() || is_archive() ) :
			?>
					</div><!-- /.col -->

					<?php
						get_sidebar();
					?>

				</div><!-- /.row -->
			<?php
				endif;
			?>
		</main><!-- /#main -->
		<footer id="footer" class="mt-2 bg-secondary border-top">
			<div class="container">
				<div class="row align-items-center flex-column-reverse flex-md-row">
					<div class="col-md-6">
						<p class="small text-white"><?php printf( __( '&copy; %1$s %2$s. All rights reserved.', 'tim-doerzbacher-wp-theme' ), esc_attr( date_i18n( 'Y' ) ), esc_attr( get_bloginfo( 'name', 'display' ) ) ); ?></p>
					</div>

					<?php if ( '1' === $search_enabled ) : ?>
						<div class="col-md-6">
							<form class="form-inline search-form my-2 my-lg-0 justify-content-start justify-content-md-end" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<input type="text" id="s" name="s" class="form-control mr-2 w-auto d-inline-block" placeholder="<?php _e( 'Search', 'tim-doerzbacher-wp-theme' ); ?>" title="<?php echo esc_attr( __( 'Search', 'tim-doerzbacher-wp-theme' ) ); ?>" />
								<button type="submit" id="searchsubmit" name="submit" class="btn btn-success border my-2 my-sm-0"><?php _e( 'Search', 'tim-doerzbacher-wp-theme' ); ?></button>
							</form>
						</div>
					<?php endif; ?>

					<?php
						if ( has_nav_menu( 'footer-menu' ) ) : // see function register_nav_menus() in functions.php
							/*
								Loading WordPress Custom Menu (theme_location) ... remove <div> <ul> containers and show only <li> items!!!
								Menu name taken from functions.php!!! ... register_nav_menu( 'footer-menu', 'Footer Menu' );
								!!! IMPORTANT: After adding all pages to the menu, don't forget to assign this menu to the Footer menu of "Theme locations" /wp-admin/nav-menus.php (on left side) ... Otherwise the themes will not know, which menu to use!!!
							*/
							wp_nav_menu(
								array(
									'theme_location'  => 'footer-menu',
									'container'       => 'nav',
									'container_class' => 'col-md-6',
									'fallback_cb'     => '',
									'items_wrap'      => '<ul class="menu nav justify-content-end">%3$s</ul>',
									//'fallback_cb'    => 'WP_Bootstrap4_Navwalker_Footer::fallback',
									'walker'          => new WP_Bootstrap4_Navwalker_Footer(),
								)
							);
						endif;

						if ( is_active_sidebar( 'third_widget_area' ) ) :
					?>
						<div class="col-md-12">
							<?php
								dynamic_sidebar( 'third_widget_area' );

								if ( current_user_can( 'manage_options' ) ) :
							?>
								<span class="edit-link"><a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>" class="badge badge-secondary"><?php _e( 'Edit', 'tim-doerzbacher-wp-theme' ); ?></a></span><!-- Show Edit Widget link -->
							<?php
								endif;
							?>
						</div>
					<?php
						endif;
					?>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</footer><!-- /#footer -->
	</div><!-- /#wrapper -->
	<?php
		wp_footer();
	?>
</body>
</html>
