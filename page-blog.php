<?php 
/* Template Name: Blog Template */
get_header(); 
?>

				<section class="blog">
					<div class="container-fluid">
						<div class="row">
<?php 
if(have_posts()):
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$the_query = new WP_Query( 'cat=1&paged=' . $paged ); 
	query_posts("cat=1&posts_per_page=".get_option("posts_per_page")."&paged=" . $paged);
while(have_posts()) : the_post();  
?>
							<div class="col-sm-6 col-lg-3 col-xs-12 grid-item hvr-grow">
								<div class="postThumbnail">
								<?php the_post_thumbnail(); 
								 ?>	
								</div>
								<article class="post">
									<h2 class="postTitle hvr-buzz-out"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
									<span><?php the_excerpt(); ?></span> 
								</article>
								<div class="date">
									<?php the_time(get_option('date_format')); ?>
								</div>

							</div>
<?php 		
endwhile; wp_reset_query() 
?>
							
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="nav-next nextPage hvr-bob"><?php next_posts_link('< Oudere Posts', $the_query->max_num_pages); ?></div>
							</div>
							<div class="col-md-6">
								<div class="nav-next prevPage hvr-bob"><?php previous_posts_link('Nieuwere Posts »', 0); ?></div>
							</div>
						</div>
					</div>
<?php 
endif; 
?>
				</section>

<?php 
get_footer(); 
?>