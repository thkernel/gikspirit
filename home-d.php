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

											$category_name = "Politique";
											//$posts = get_posts(array('numberposts' => 4, 'category_name' => $category_name));
											$posts = get_posts(array('numberposts' => 4));

											if ($posts){
												foreach ($posts as $post) {
													setup_postdata($post); ?>

													<div class="col-xs-12 col-sm-6">
														<article class="post post--vertical"> 
															<div class="img-short">
																<div class="post__thumb">
																	<?php gikspirit_post_thumbnail(); ?>

						 											<div id="categ" class="category overlay-item--top-left">
						 												<a href="https://www.wplocker.com/wordpress-plugins/">Plugins</a> / <a href="https://www.wplocker.com/wordpress-plugins/codecanyon/">Codecanyon</a> 
						 												<span class="nulleds">  </span>
					 												</div>
																</div> 
															</div> 
															<div class="post__text">
																<h3 class="post__title typescale-2">
																	<?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
																		?>
																</h3>
																<div class="post__excerpt">
																	<?php the_excerpt(); ?>
																</div>
																<div class="post__meta">
																	
																	<?php gikspirit_posted_by(); ?>
																		<time class="time published">
																			<?php gikspirit_posted_on(); ?>
																		</time>
																	
																	<a href="https://www.wplocker.com/wordpress-plugins/codecanyon/67589878-ai-related-posts-v101-ai-for-wordpress.html#comment">
																		<span title="Comment"><i class="fa fa-comments" style="font-size:14px;color:#999999;"></i> 0</span>
																	</a>
																	<span title="Views">
																		<i class="fa fa-eye" style="font-size:14px;color:#999999;"></i> 252
																	</span>

																</div>
															</div>
														</article>
														<hr>
													</div>

													
												<?php }

												wp_reset_postdata();}
													wp_pagenavi(); 
											?>
<div class="nav-previous alignleft"><?php previous_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php next_posts_link( 'Newer posts' ); ?></div>
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

