<?php
/**
 * Gwangi template functions.
 *
 * @package gwangi
 */

if ( ! function_exists( 'gwangi_header_not_logged_in' ) ) :
	/**
	 * Prints HTML for the header.
	 *
	 * @since 1.0.0
	 */
	function gwangi_header_not_logged_in() {
		?>
		<header>
			<div class="header-container">
				<div class="logo-container">
						<?php
						if ( function_exists( 'has_custom_logo' ) && function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
							the_custom_logo();
						}
					   ?>
				</div>
				<div class="menu-container">
					<div class="hamburger-container">
						<a id="nav-toggle" href="#"><span></span></a>
					</div>
					 <?php
							if ( has_nav_menu( 'primary' ) ) {
								wp_nav_menu( array(
									'theme_location' => 'primary',
									'menu_id'        => 'primary-menu',
									'container'      => false,
								) );
							}
						?>
				</div>
				<div class="user-menu-container">
						 
				</div>
			</div>
			<?php if(!is_front_page()):?>
				<div class="header-banner-container">
					<div class="container">
						<h1><?php echo wp_title('')?></h1>
					</div>
				</div>
			<?php endif;?>
		</header>
		<?php
	}
endif;

if ( ! function_exists( 'gwangi_header_logged_in' ) ) :
	/**
	 * Prints HTML for the header.
	 *
	 * @since 1.0.0
	 */
	function gwangi_header_logged_in() {
		?>
		<header>
			<div class="header-container">
				<div class="logo-container">
					<?php
						if ( function_exists( 'has_custom_logo' ) && function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
							the_custom_logo();
						}
					?>
				</div>
				<div class="menu-container">
					<div class="hamburger-container">
						<a id="nav-toggle" href="#"><span></span></a>
					</div>
					 <?php
					       //add if later
					        wp_nav_menu( array(
								'menu'           => 'EmployeeUserMenu',
								'menu_id'        => 'user-menu-mobile',
								'container'      => false,
							) );
							
							if ( has_nav_menu( 'primary' ) ) {
								wp_nav_menu( array(
									'theme_location' => 'primary',
									'menu_id'        => 'primary-menu',
									'container'      => false,
								) );
							}
						?>
				</div>
				<div class="user-menu-container">
					<?php 
						wp_nav_menu( array(
							'menu'           => 'EmployeeUserMenu',
							'menu_id'        => 'user-menu',
							'container'      => false,
							'theme_location' => 'secondary'
						) );
					?>
				</div>
			</div>
			<?php if(!is_front_page()):?>
				<div class="header-banner-container">
					<div class="container">
						<h1><?php echo wp_title('')?></h1>
					</div>
				</div>
			<?php endif;?>

		</header>
		<?php
	}
endif;