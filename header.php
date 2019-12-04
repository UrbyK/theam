<!doctype>
<html>
    <head>
        <meta charset="utf-8">
        <title>CSD Trbovlje</title>
        <?php wp_head(); ?>
    </head>
    
    <?php

        if( is_front_page() ):
            $zakljucna_classes = array('Zakljucna-class', 'my-class');
        else:
            $zakljucna_classes = array('ni-zaklkjucna-class');
        endif;
           
    ?>
    <!--         <div class="container">  če želimo vse imeti na sredi-->

        
        <div class="banner">
           <!--Kje se nahaja slika od "custom_header" trenutno nad nagavicijskim menijam-->
            <div class="banner-img">
            <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
            </div> <!-- banner-img -->
            <div class="banner-text">
                <h1 class="naslov">Center za socialno delo Trbovlje</h1> <br>
                <a target="_blank" href="https://goo.gl/maps/Rk1RsXs5kBm">Mestni trg 5a, 1420 Trbovlje </a><br>
                Telefon: <b>03 777 33 06</b> Telefaks: <b>03 56 29 342</b><br>
                E-naslov: <a href="mailto:gpcsd.trbov@gov.si">gpcsd.trbov@gov.si</a>
            </div> <!-- class="banner-text" -->
        </div> <!-- class="banner" -->
    
    <body <?php body_class($zakljucna_classes); ?>>
            
                
                <div class="col-xs-12">
                    
                    <nav class="navbar navbar-default">
                        
                        <div class="navbar-container">
<!--                          <div class="container-fluid">-->
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                              <a class="navbar-brand" href="#">Center za socialno delo</a>
                            </div> <!-- class="navbar-header" -->
                              
                              <!-- Navigacijski menu komanda-->
                              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                  <?php wp_nav_menu(array(
                                        'theme_location' => 'primary', 
                                        'container' => false,
                                        'menu_class' => 'nav navbar-nav navbar-right'
                                        )
                                    ); ?>
                              </div> <!-- class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" -->
<!--                          </div> /.container-fluid -->
                            
                        </div> <!-- class="navbar-container" -->
                            
                            </nav> <!-- class="navbar navbar-default" -->
                    <div class="container">
                    
<!--                </div>-->
                
<!--            <div class="container">-->

        

        

        
        