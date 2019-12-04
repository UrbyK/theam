    


    </div> <!-- .container -->

        <footer class="row-fluid">
            <div class="container">
         <!--  <div class="noga">  -->
                <div class="modul">
                    <div class="modul-inner">
                        <div class="noga_levo">
                            <h5 class="noga_naslov">Povezave</h5>
                            <?php wp_nav_menu(array('theme_location'=>'secondary')); ?>
                        </div>
                    </div>
                </div>
                
                <div class="modul">
                    <div class="modul-inner">
                        <div class="noga_sredina">
                            
                            <h5>Center za socialno delo Trbovlje</h5>
                    
                            <p>Mestni trg 5a</p>
                            <p>1420 Trbovlje</p>
                            <p><strong>E-naslov</strong>: <a href="mailto:gpcsd.trbov@gov.si">gpcsd.trbov@gov.si</a></p>
                            <p><strong>Telefon</strong>: 03 777 33 06</p>
                            <p><strong>Telefaks</strong>: 03 56 29 342</p>
                        </div>
                    </div>
                </div>
                
                <div class="modul">
                    <div class="modul-inner">
                        <div class="noga_desno">
                            <h5>Uradne ure</h5></p>
                        <p><strong>PONEDELJEK:</strong> 8.00 - 12.00 in 13.00 - 15.00</p>
                        <p><strong>SREDA:</strong> 8.00 - 12.00 in 13.00 - 17.00</p>
                        <p><strong>PETEK:</strong> 8.00 - 12.00</p>
                            
                        </div>
                    </div>
                </div>
                
        <!--    </div> -->
                    
                </div>
<hr>

                <div class="noga-zahvala">
                    <div class="noga-zahvala-STPS_logo">
                    <?php
                        $image_url="http://www.stps-trbovlje.si/wp-content/themes/stps/images/logotip.png";
                        ?>
                        <img class="stps-logo" src="<?php echo $image_url;?>" width="auto" height="auto" alt="STPS logo">
                    </div>
                    
                    <div class="noga-zahvala-napis">
                        Avtor: Urban Klinc
                    </div>
                        
                </div>
        </footer>
    
    <?php wp_footer(); ?>

    </body>
</html>