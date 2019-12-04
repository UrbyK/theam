<div id="article-post">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <header class="entry-header">
        <!-- Naslov objave -->
        <h1> <?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url(get_permalink() ) ),'</a></h1>'); ?> </h1>
        
        <!--Izpis kategorije-->
    <!--    <?php the_category(); ?> -->
    </header>
    
    <div class="row">       
        
        
        <?php if( has_post_thumbnail() ): ?>
        
        <div class="col-xs-12 col-sm-4">
            <!-- Slikca na objavi -->
            <div class="thumbnail"><?php the_post_thumbnail('tumbnail'); ?></div> <!-- class="thumbnail" izpis/izris slike na objavi -->     
        </div> <!-- class="col-xs-12 col-sm-4" -->
        <div class="col-xs-12 col-sm-8">
             <?php the_content(); ?>
        </div> <!-- class="col-xs-12 col-sm-8" -->
        
        <?php else: ?>
        
            <div class="col-xs-12 col-sm-12">
             <?php the_content(); ?>
            </div> <!-- class="col-xs-12 col-sm-12" -->
        
        <?php endif; ?>
    </div> <!-- class="row"  izpis objav v konternerju za enak izgled -->
            <!-- Izpis dnvea in ure objave-->
        <small>Objavljeno <?php the_time('F j, Y'); ?>, ob <?php the_time('G:i'); ?>  </small> <!-- izpis datuma in časa objave -->
    
   

</article> <!-- id="post-" izpiše objavo -->
</div> <!-- class="article-post" -->