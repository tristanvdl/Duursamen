<?php 
/* Template Name: Blog Template */

$pictureUrl = 

get_header(); ?>

				<section class="blog">
					<div class="container">
						<div class="row">
	<?php query_posts('posts_per_page=9');
			while(have_posts()) : the_post();  ?>
							<div class="col-md-4 col-sm-6 col-xs-12 grid-item">
								<div class="postThumbnail">
								<?php the_post_thumbnail(); 
								 ?>	
								</div>
								<div class="post">
									<h2 class="postTitle"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
									<span><?php the_excerpt(); ?></span> 
								</div>
								
									<div class="poster">
										<div class="authorText"><h2>Auteur</h2></div>
										<span class="posterImage"><?php echo get_avatar(get_the_author_meta('ID'),70); ?></span>
										<div class="posterInfo">
											<span><?php the_author(); ?></span><br>
											<span>21-02-1016</span><br>
											<span>Geen cattegorie</span>
										</div>
									</div>
							</div>
	<?php endwhile; wp_reset_query() ?>
						</div>
					</div>
				</section>

<?php get_footer(); ?>