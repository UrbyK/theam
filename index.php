<?php get_header(); ?>

<div class="row">
    
    <div class="col-xs-12 col-sm-8">
        <div class="post-in-cont">
            <!-- php komanda za osveževanje vseh "postov"-->
            <?php 
            if( have_posts() ):

                while( have_posts() ): the_post(); ?>
            
                    <!-- Print option -->
                    <?php if(function_exists('wp_print')) { print_link(); } ?> 
                    

                    <?php get_template_part('content', get_post_format()); ?>


                <?php endwhile;

            endif;

            ?>
        </div>

    </div>  <!-- class="col-xs-12 col-sm-8" --> 
    
    <div class="col-xs-12 col-sm-4">
        <?php get_sidebar(); ?>
    </div>

    
</div> <!-- Div/class row -->

<?php get_footer(); ?>