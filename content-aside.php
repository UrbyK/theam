<!-- Naslov objave -->
            <h3> <?php the_title(); ?> </h3>
            <?php the_category(); ?>
            <!-- Slikca na objavi -->
            <div class="thumbnail-img"><?php the_post_thumbnail('thumbnail'); ?></div> 
            <!-- Izpis texta na objavi -->
    <p> <?php the_excerpt(); ?> <a href="<?php echo get_permalink(); ?>">Preberi več...</a> </p>
            <!-- Izpis dneva in časa objavitve objave -->
            <small>Objavljeno <?php the_time('F j, Y'); ?>, ob <?php the_time('G:i'); ?>  </small>
            <hr>
