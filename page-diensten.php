<?php get_header(); ?>



<section class="diensten">
<div class="container"> 
    <div class="introDiensten">
    <h2>   <?php 
        echo get_post_meta($post->ID, 'introdiensten', true); ?> </h2> 
        <hr class="hrDiensten">
    </div> 

         
    <div class="row itemsDiensten">
        <div class="onderzoek hvr-bounce-in">
        <?php 
        $imageOnderzoek = get_field('imageOnderzoek');
        $imagePresentatie = get_field('imagePresentatie');
        $imageWorkshop = get_field('imageWorkshop');
        ?>  <a href="volledigonderzoek">
                <img src="<?php echo $imageOnderzoek['url']; ?>" alt="<?php echo $imageOnderzoek['alt']; ?>" />
                <div class="content_diensten">
                        <h1>Volledig Onderzoek </h1>     
                </div>
            </a>
        </div>
        
        <div class="presentaties hvr-bounce-in"> 
            <img src="<?php echo $imagePresentatie['url']; ?>" alt="<?php echo $imagePresentatie['alt']; ?>" />
            <div class="content_diensten">
                <a href="presentatie">
                <h1> Presentaties </h1>
                </a>
            </div>
        </div>
        
        <div class="workshops hvr-bounce-in"> 
            <img src="<?php echo $imageWorkshop['url']; ?>" alt="<?php echo $imageWorkshop['alt']; ?>" />
            <div class="content_diensten">
                <a href="workshop">
                    <h1> Workshops </h1>
                </a>
            </div>
        </div>
    </div>
</div>
</section>

<?php get_footer(); ?>