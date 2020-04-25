<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

    <?php while(have_posts()): the_post(); ?>

<header style="background-image:url(<?php echo get_post_meta(get_the_ID(), 'page_header_thumb', true) ?>)" class="container-fluid headers">

  

</header>

  <div class="container centred_text_banner" >
        <div class="row">
                <div class="intro-text">
                    <h1 class="head-title text-center"><?php the_title(); ?></h1>
                </div>                      
        </div>
   </div>

    <div class="container" >
        <div class="row">
                <div class="intro-text">
                    <?php the_content(); ?>
                </div>                   
        </div>
    </div>

    <?php
    $form = get_post_meta(get_the_ID(), 'form_condt', true);
    if(!empty($form))
    { ?> 
        <div class="container" id="condidature_form">
        <div class="row">
                <div class="intro-text">
                <h2 class="text-center">Merci de remplir le formulaire</h2>
                    <?php echo do_shortcode( $form );  ?>
                </div>                   
        </div>
    </div>
    <?php 
    }

     ?>

<?php endwhile; ?>

<?php get_footer(); ?>
