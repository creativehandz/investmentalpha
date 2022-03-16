<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Investment_Alpha
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,669;0,700;0,800;0,900;1,400;1,500;1,600;1,669;1,700;1,800;1,900&display=swap" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
         <div class="container">
         </div>
         <div class="container-fluid ">
            <div class="row mt-3 mb-3" style="    z-index: 2;
    position: relative;">
               <div class="col-lg-1 col-xs-12">
               </div>
               <div class="col-lg-4 col-xs-12">
				<div class="d-flex">
					<a class="navbar-brand" href="https://investment-alpha.com/"><img src="/wp-content/uploads/2022/02/logo1.png" alt="" /><span style=""></span></a>
					<nav id="site-navigation" class="navbar navbar-expand-lg navbar-dark bg-light pr-0">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'investment-alpha' ); ?></button>
				<div class="collapse navbar-collapse justify-content-md-end" id="navbarsExample07">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'menu_class'     => 'navbar-nav',
							)
						);
					?>
				</div>
			
		</nav><!-- #site-navigation -->
				</div>
                  
	
               </div>
			   <div class="col-lg-2 col-xs-12 text-center">
				<a href="https://docs.google.com/forms/d/e/1FAIpQLSfUGqYZ8F14BzwiGmmubb2IMkP1h4WD1vHZKtVsvM3J3uJnpQ/viewform" target="_blank" class="btn btn-primary btn-terquice" >Click for early app access</a>
                  
               </div>
               <div class="col-lg-4 col-xs-12 text-center text-lg-right pt-1">
				<a href="https://www.apple.com/ios/app-store/" target="_blank" class=" store-btn" ><img src="/wp-content/uploads/2022/02/app-store.png"/></a>  <a href="https://play.google.com/store" target="_blank" class="ml-4 store-btn" ><img src="/wp-content/uploads/2022/03/google-play.png"/></a>
                  
               </div>
               <div class="col-lg-1 col-xs-12">
               </div>
            </div>
			
         </div>
      </header>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'investment-alpha' ); ?></a>

	<header id="masthead" class="site-header" style="display:none;">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$investment_alpha_description = get_bloginfo( 'description', 'display' );
			if ( $investment_alpha_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $investment_alpha_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'investment-alpha' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->