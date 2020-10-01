<?php 
	/* Start the Loop */
	while ( have_posts() ) :
		the_post(); ?>
		<div class="col-xs-12 col-sm-6">
			<article class="post post--vertical"> 
				<div class="img-short">
					<div class="post__thumb">
						<?php the_post_thumbnail('featured-small'); ?>

						<div id="categ" class="category overlay-item--top-left">
							<?php 
							$categories_list = get_the_category_list( esc_html__( ', ', 'gikspirit' ) );
							if ( $categories_list ) {
								
								echo $categories_list ; 
							}

						?>
							 
							
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
						
						

					</div>
				</div>
			</article>
			<hr>
		</div>

	<?php endwhile;

?>