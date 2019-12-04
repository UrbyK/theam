<?php get_header(); ?>

<div class="row">
    
    <div class="slider-row">
    
        <?php if( function_exists("get_smooth_slider") ){
            get_smooth_slider( $slider_id="2");
            } 
        ?>
     
    </div>

    <div class="col-xs-12 col-sm-8">
        <div class="post-in-cont">
            <!-- php komanda za osveževanje vseh "postov"-->
            <?php 
            if( have_posts() ):

                while( have_posts() ): the_post(); ?>

                    <?php get_template_part('content', get_post_format()); ?>


                <?php endwhile;

            endif;

            //PRINT OSTALE OBJAVE
            
            $lastBlog = new WP_Query('type=post&posts_per_page=4');

            if ($lastBlog->have_posts() ):

                while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

                    <?php get_template_part('content', get_post_format()); ?>

                <?php endwhile;

            endif;

            wp_reset_postdata();

            ?>
            
        </div> <!--class="post-in-count"-->

    </div>  <!-- class="col-xs-12 col-sm-8" --> 
     
     <div class="col-xs-12 col-sm-4">
        <?php get_sidebar(); ?>
    </div> <!--class="col-xs-12 col-sm-4"-->
    

</div>  <!--Div/class row -->
    

<?php get_footer(); ?>