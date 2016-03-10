<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href = "<?php bloginfo('stylesheet_url'); ?>" rel = "stylesheet">
		<?php wp_head(); ?>
	</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	   <!-- Navigatie -->
<div id="wrapper">
    <div id="header">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="http://school.tristanvdl.nl/duursamen/wordpress/home/">VerduurSamen</a>
                </div>
                
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                                    
                        <?php
                            wp_nav_menu( array(
                                'menu'              => 'primary',
                                'theme_location'    => 'primary',
                                'depth'             => 2,
                                'menu_class'        => 'nav navbar-nav navbar-right',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                            );
                        ?>
                               
                </div>
                <!-- / Einde .navbar-collapse -->
            </div>
            <!-- /Einde .container -->
        </nav>
            <?php if(is_page('home')){ ?>
            <section class="headerHome section-first" data-vidbg-bg="mp4: <?php bloginfo('stylesheet_directory'); ?>/video/div-video.mp4, webm:  <?php bloginfo('stylesheet_directory'); ?>/video/div-video.webm, poster:  <?php bloginfo('stylesheet_directory'); ?>/images/header-tablet.jpg" data-vidbg-options="loop: true, muted: true, overlay: false">
                <div class="text">
                    <h1><?php the_title(); ?></h1>
                    <h2>People | Planet | Profit</h2>
                    </div>
             </section>
            <?php } else { ?>
            <section id="intro" class="header">
                <div class="container">
                    <div class="row">
                        <h1><?php the_title(); ?></h1>                  
                    </div>
                </div>
            </section>  
            <?php }  ?>
    </div> 
    <div id=\"content\"> 