<?php get_header(); ?>

<section id="intro" class="content-overons">
   <div class="container">
       <div class="row">
          <div class="col-lg-12 over-ons-item">
             <div class="col-lg-6">
                <p id="tekst" class="tekst"><?php
                while ( have_posts() ) : the_post(); ?>
                      <?php echo get_post_meta($post->ID, 'text1', true); ?> 
                </p>
             </div>
             <div class="col-lg-6">
                <div id="foto" class="foto"><?php 
                  $image1 = get_field('image1');
                  $image2 = get_field('image2');
                     ?><img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" /></div>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-12 over-ons-item">
             <div class="col-lg-6">
                <div id="foto2" class="foto"><img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" /></div>
             </div>
             <div class="col-lg-6">
                <p id="tekst2" class="tekst">
                   <?php
                    echo get_post_meta($post->ID, 'text2', true);
                      endwhile; 
                      wp_reset_query(); 
                   ?>
                </p>
             </div>
          </div>
       </div>
</section>

<?php get_footer(); ?>