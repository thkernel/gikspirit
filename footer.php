<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gikspirit
 */

?>

	<footer class="site-footer site-footer--inverse inverse-text">
	
	<div class="site-footer__section site-footer__section--flex site-footer__section--bordered-inner">
        <div class="container">
			<div class="site-footer__section-inner">
                <div class="site-footer__section-left">
                    <?php echo "Copyright " .date("Y") . " Gikspirit - Tous droits réservés."; ?>
                </div>
                <div class="site-footer__section-right">
					<nav class="footer-menu">
                        <div class="menu-footer-container">
                        	<?php
								wp_nav_menu( array(
									'theme_location' => 'footer-menu',
									'menu_id'        => 'footer-menu',
								) );
							?>
						</div>					
					</nav>
				</div>
            </div>
        </div>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
