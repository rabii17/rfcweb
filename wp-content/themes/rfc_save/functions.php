<?php

remove_filter( 'the_content', 'wpautop' );

remove_filter( 'the_excerpt', 'wpautop' );



add_theme_support('post-thumbnails');

add_theme_support('title-tag');



/*

 * Switch default core markup for search form, comment form, and comments

 * to output valid HTML5.

 */

add_theme_support('html5', array(

    'search-form',

    'comment-form',

    'comment-list',

    'gallery',

    'caption',

));



/*

 * Enable support for Post Formats.

 *

 * See: https://codex.wordpress.org/Post_Formats

 */

add_theme_support('post-formats', array(

    'aside',

    'image',

    'video',

    'quote',

    'link',

    'gallery',

    'status',

    'audio',

    'chat',

));



function add_theme_scripts() {



    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '5.0', 'all');

    /* wp_enqueue_style('common-style', get_template_directory_uri() . '/css/common.css', array(), null, 'all'); */

    wp_enqueue_style('component-style', get_template_directory_uri() . '/css/min/component.min.css', array(), null, 'all');

    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/min/main.min.css', array(), null, 'all');





    wp_enqueue_style('responsive-style', get_template_directory_uri() . '/css/c-responsive.css', array(), '2.1', 'all');

    wp_enqueue_style('font-awesome-style', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css', array(), null, 'all');

    wp_enqueue_style('default-style', get_template_directory_uri() . '/style.css', array(), '2.0', 'all');



    wp_enqueue_script('vendorjquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array(), null, true);

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array(), null, true);

    wp_enqueue_script('validation', get_template_directory_uri() . '/js/min/jqBootstrapValidation.min.js', array(), null, true);

    wp_enqueue_script('contact-me', get_template_directory_uri() . '/js/min/contact_me.min.js', array(), null, true);

    wp_enqueue_script('main', get_template_directory_uri() . '/js/min/main.min.js', array(), null, true);

    wp_enqueue_script('custom', get_template_directory_uri() . '/js/modernizr.custom.js', array(), null, true);

    wp_enqueue_script('touch-effects', get_template_directory_uri() . '/js/min/toucheffects.min.js', array(), null, true);

    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), null, true);

    wp_enqueue_script('google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBRC5HaG99Hg-tdQQaJlpQT8GS7DH3sz_k&callback=initMap', array(), null, true);

    wp_enqueue_script('map', get_template_directory_uri() . '/js/map.js', array(), null, true);

}



add_action('wp_enqueue_scripts', 'add_theme_scripts');



/* ASYNC */



function add_async_attribute($tag, $handle) {



    // add script handles to the array below

    $scripts_to_async = array('clock', 'clock-casa', 'picturefill', 'clock-antananarivo', 'main', 'contact-me');



    //Loop through each file and add the async value

    // You can switch async to defer here if needed.

    foreach ($scripts_to_async as $async_script) {

        if ($async_script === $handle) {

            return str_replace(' src', ' defer src', $tag);

        }

    }

    return $tag;

}



add_filter('script_loader_tag', 'add_async_attribute', 10, 2);



/* ASYNC */



/**

 * Define a constant path to our single template folder

 */

@define(SINGLE_PATH, TEMPLATEPATH . '/single');



/**

 * Filter the single_template with our custom function

 */

add_filter('single_template', 'my_single_template');



/**

 * Single template function which will choose our template

 */

function my_single_template($single) {

    global $wp_query, $post;



    /**

     * Checks for single template by category

     * Check by category slug and ID

     */

    foreach ((array) get_the_category() as $cat) :



        if (file_exists(SINGLE_PATH . '/single-cat-' . $cat->slug . '.php'))

            return SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';



        elseif (file_exists(SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php'))

            return SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php';



    endforeach;

}



function SearchFilter($query) {

    if ($query->is_search) {

        $query->set('post_type', 'post');

    }

    return $query;

}



add_filter('pre_get_posts', 'SearchFilter');



// This theme uses wp_nav_menu() in two locations.

register_nav_menus(array(

    'primary' => __('Primary Menu', 'twentysixteen'),

    'social' => __('Social Links Menu', 'twentysixteen'),

    'footer' => __('Footer Menu', 'twentysixteen'),

));

function footer_1() {
 
 register_sidebar( array(

 'name' => 'footer_1',
 'id' => 'footer_1',
 'before_widget' => '<div class="nwa-widget ">',
 'after_widget' => '</div>',
 'before_title' => '<h4>',
 'after_title' => '</h4>',
 ) );
}

add_action( 'widgets_init', 'footer_1' );

function footer_2() {
 
 register_sidebar( array(

 'name' => 'footer_2',
 'id' => 'footer_2',
 'before_widget' => '<div class="nwa-widget ">',
 'after_widget' => '</div>',
 'before_title' => '<h4>',
 'after_title' => '</h4>',
 ) );
}

add_action( 'widgets_init', 'footer_2' );

function footer_3() {
 
 register_sidebar( array(

 'name' => 'footer_3',
 'id' => 'footer_3',
 'before_widget' => '<div class="nwa-widget ">',
 'after_widget' => '</div>',
 'before_title' => '<h4>',
 'after_title' => '</h4>',
 ) );
}

add_action( 'widgets_init', 'footer_3' );


function footer_4() {
 
 register_sidebar( array(

 'name' => 'footer_4',
 'id' => 'footer_4',
 'before_widget' => '<div class="nwa-widget ">',
 'after_widget' => '</div>',
 'before_title' => '<h4>',
 'after_title' => '</h4>',
 ) );
}

add_action( 'widgets_init', 'footer_4' );

add_filter('acf/settings/remove_wp_meta_box', '__return_false');

add_action( 'wp_footer', 'redirect_cf7' );
 
function redirect_cf7() {
?>
<script type="text/javascript">
document.addEventListener( 'wpcf7mailsent', function( event ) {
   if ( '39' == event.detail.contactFormId ) { // Sends sumissions on form 947 to the first thank you page
    location = 'https://rfcsa.azurewebsites.net/merci-contact/';
    } 
}, false );
</script>
<?php
}