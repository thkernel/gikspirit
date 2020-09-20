<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gikspirit
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
<?php wp_body_open(); ?>

	<div class="home home-1 has-block-heading-line site-wrapper">
<header class="site-header">
	
					
					
								
			
			
	
				


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 	<div class="navbar-brand">
		<?php the_custom_logo();?>
	</div>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'container'      => false,
									'depth'          => 2,
									'menu_class'     => 'navbar-nav mr-auto',
									'walker'         => new Bootstrap_NavWalker(),
									'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
								) );
							?>
						</div>
</nav>


</header>
