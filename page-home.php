<?php get_header(); ?>

      <section class="content-home">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <h2 class="intro">
                     Wat wij doen 
                     <hr class="watwijdoen">
                  </h2>
                  <div class="homeText">
                     <p><?php
                      while ( have_posts() ) : the_post(); ?>
                              <?php the_content(); ?> 
                      <?php
                      endwhile; 
                      wp_reset_query(); 
                      ?></p>
                  </div>
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