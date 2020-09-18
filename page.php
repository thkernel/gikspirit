<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gikspirit
 */

get_header();
?>

	<div class="site-content bott">
		<div class="mnmd-layout-split mnmd-block mnmd-block--fullwidth">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
					
						<center>
							<!-- Google ads -->
						</center>
						<br>
						<div class="mnmd-block">
							
							<?php
							while ( have_posts() ) :
								the_post();

								get_template_part( 'template-parts/content', 'page' );

								
							endwhile; // End of the loop.
							?>
						</div>
								
							
						
					
				</div>

				<div class="col-md-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>	
</div>


<?php

get_footer();
