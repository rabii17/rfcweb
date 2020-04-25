<?php

/* Template Name: Carriére_2v */

get_header();

?>





<!-- Header -->

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

    <div class="container-fluid" >
        <div class="row">
                <div class="intro-text">
                    <?php the_content(); ?>
                </div>                   
        </div>
    </div>

<?php endwhile; ?>

<?php

get_footer();