<?php get_header(); ?>

      <section class="content-home">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <h2 class="intro">
                     Wat wij doen 
                     <hr class="watwijdoen">
                  </h2>
                  <div class="homeText col-md-6">
                     <p><?php
                      while ( have_posts() ) : the_post(); ?>
                              <?php echo get_post_meta($post->ID, 'quote1', true); ?> 
                     </p>
                  </div>
                  <div class="homeText col-md-6">
                        <p>
                        <?php echo get_post_meta($post->ID, 'quote2', true); ?> 
                        </p>
                  </div>
                   <?php
                      endwhile; 
                      wp_reset_query(); 
                      ?>
               </div>
            </div>
            <div class="col-sm-6">
               <img id="presentatie" class="icons" src="<?php bloginfo('template_directory'); ?>/images/presentatie.png" alt="presentatie">
            </div>
            <div class="col-sm-6">
               <img id="onderzoek" class="icons" src="<?php bloginfo('template_directory'); ?>/images/onderzoek.png" alt="onderzoek" >
            </div>
         </div>
         </div>
      </section>

<?php get_footer(); ?>