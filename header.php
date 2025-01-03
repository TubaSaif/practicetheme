<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="author" content="<?php bloginfo( 'name' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php 
		if ( function_exists( 'wp_body_open' ) ) {
			wp_body_open(); 
		}
		?>
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'practicetheme' ); ?></a>

			<header id="pthead" class="site-header">
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
					$practicetheme_description = get_bloginfo( 'description', 'display' );
					if ( $practicetheme_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $practicetheme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation">
					<?php
					if ( has_nav_menu( 'primary' ) ) {
						$nav_menu = wp_nav_menu( array( 
							'container' 		=> '', 
							'echo'				=> false,
							'items_wrap' 		=> '%3$s',
							'theme_location' 	=> 'primary',
						) ); 
					} else {
						$nav_menu = wp_list_pages( array(
							'container'	=> '',
							'echo'		=> false,
							'title_li'	=> '',
						) );
					} 
					
					echo $nav_menu;
					?>
				</nav><!-- #site-navigation -->
				<button class="hamburger" aria-label="Toggle navigation">
					<!-- Hamburger Icon -->
					<span></span>
					<span></span>
					<span></span>
				</button>
			</header><!-- #pthead -->
