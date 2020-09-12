<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
							<div class="block-heading">
								<h4 class="block-heading__title">
									<span class="first-word">ARTICLES </span> RECENTS
								</h4>
							</div>
							<div class="posts-listing">
								<div class="row row--space-between">

									<?php
									if ( have_posts() ) :

										
									
										get_template_part( 'template-parts/post-layouts/layout-one', get_post_type() );


								
										wp_pagenavi(); 

									else :

										get_template_part( 'template-parts/content', 'none' );

									endif;
									?>

								
										<div class="bottom-navi" style="clear: both;">
											
											
										</div>
									</div>
							
						</div>
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
