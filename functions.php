<?php
/*
    ==========================
    Vsebuje scripte
    ==========================
*/
function zakljucna_script_enqueue(){
    //css
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.5', 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/Zakljucna.css', array(), '1.0.0', 'all');
    
    
    ///js
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.5', true);
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/Zakljucna.js', array(), '1.0.0', true);
    
}

add_action('wp_enqueue_scripts', 'zakljucna_script_enqueue');

/*
    ==========================
    Activni meniji
    ==========================
*/
function zakljcna_theme_setup(){
    
    add_theme_support('menus');
    
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
    
}

/*
    ==========================
    Theme support funkcije
    ==========================
*/
add_action('init', 'zakljcna_theme_setup');
//custom komande za ozadje in header, ki jih lahko uporabljamo pri admin
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video', 'link', 'gallery', 'quote', 'audio'));

/*
    ==========================
    Sidebar function
    ==========================
*/
function zakljucna_widget_setup() {

    register_sidebar(
        array(
            'name' => 'Sidebar',
            'id' => 'sidebar-1',
            'class' => 'custom',
            'description' => 'Standard Sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        )
    );
}
add_action('widgets_init','zakljucna_widget_setup');






/*
    ==============================
            Print button
    ==============================
    // [print_button]
*/

function print_button_shortcode( $atts ){
return '<a class="print-link" href="javascript:window.print()">Natisni stran</a>';
}
add_shortcode( 'natisni_stran', 'print_button_shortcode' );




/*
    =============================
            Excerpt
    =============================
*/

function new_excerpt_lenght($lenght){
    return 100;
}
add_filter('excerpt_lenght', 'new_excerpt_lenght');

/*
    =============================
        Excerpt read more tag
    =============================
*/

/*
function new_excerpt_more($more){
    return ' Preberi več...';
}
add_filter('excerpt_more', 'new_excerpt_more');
*/


function new_excerpt_more( $more ) {
    return sprintf( '<a class="more-link" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( ' Preberi več...', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'new_excerpt_more' );



























