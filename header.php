<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
</head>

<?php
	$navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar-light bg-light' ); // Get custom meta-value
	$navbar_position = get_theme_mod( 'navbar_position', 'static' ); // Get custom meta-value

	$search_enabled  = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value
?>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a href="#main" class="sr-only sr-only-focusable"><?php _e( 'Skip to main content', 'tim-doerzbacher-wp-theme' ); ?></a>

<div id="wrapper">

	<header>
		<nav id="header" class="navbar navbar-expand-md <?php echo $navbar_scheme; if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' fixed-top'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' fixed-bottom'; endif; if ( is_home() || is_front_page() ) : echo ' home'; endif; ?>">
			<div class="container">
				<div class="d-flex flex-nowrap flex-grow-1 text-truncate">
					<div class="d-flex flex-nowrap text-truncate flex-grow-1">
						<a class="navbar-brand text-truncate" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<?php
								$header_logo = get_theme_mod( 'header_logo' ); // Get custom meta-value

								if ( ! empty( $header_logo ) ) :
									?><img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
										class="mr-2"/><?php
								endif;

								echo esc_attr( get_bloginfo( 'name', 'display' ) );

							?>
						</a>
					</div>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="<?php _e( 'Toggle navigation', 'tim-doerzbacher-wp-theme' ); ?>">
						<span class="navbar-toggler-icon"></span>
					</button>
				</div>


				<div id="navbar" class="collapse navbar-collapse flex-wrap justify-content-end">
					<?php
						/** Loading WordPress Custom Menu (theme_location) **/
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'container'      => '',
								'menu_class'     => 'navbar-nav text-nowrap',
								'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
								'walker'         => new WP_Bootstrap_Navwalker(),
							)
						);

						// disable this for now
						if ( FALSE && '1' === $search_enabled ) :
					?>
							<div class="flex-grow-1"><!-- spacer --></div>
							<form class="form-inline search-form my-2 my-lg-0" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<input type="text" id="s" name="s" class="form-control mr-sm-2" placeholder="<?php _e( 'Search', 'tim-doerzbacher-wp-theme' ); ?>" title="<?php echo esc_attr( __( 'Search', 'tim-doerzbacher-wp-theme' ) ); ?>" />
								<button type="submit" id="searchsubmit" name="submit" class="btn btn-outline-secondary my-2 my-sm-0"><?php _e( 'Search', 'tim-doerzbacher-wp-theme' ); ?></button>
							</form>
					<?php
						endif;
					?>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav><!-- /#header -->
	</header>

	<main id="main" class="container flex-grow-1"<?php
		if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) :
			echo ' style="padding-top: 70px;"';
		elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) :
			echo ' style="padding-bottom: 100px;"';
		endif; ?>>

		<?php
			// If Single or Archive (Category, Tag, Author or a Date based page)
			if ( is_single() || is_archive() ) :
		?>
			<div class="row">
				<div class="col-12 col-lg-9">
		<?php
			endif;
		?>
