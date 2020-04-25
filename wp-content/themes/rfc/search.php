<?php
/*
  Template Name: Search Page
 */
?>
<?php get_header(); ?>



<?php if (have_posts()) : ?>

    <!-- Header -->
    <header class="team-member">
        <div class="container" style="color: #DB2508;">
            <div class="row">
                <div class="col-lg-8 col-centered">
                    <div class="intro-text">
                        <h1 class="name"><?php printf(__('Résultats de recherche pour: %s', 'osereso'), get_search_query()); ?></h1>
                        <hr class="star-light">
                    </div>                  
                </div>                    
            </div>
        </div>
    </header>


    <section id="services" style="padding-top: 0;">
        <div class="container">


            <?php
            // Previous/next page navigation.
            the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => __('Page Précédente', 'osereso'),
                'next_text' => __('Page Suivante', 'osereso'),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'osereso') . ' </span>',
                'screen_reader_text' => 'Pagination'
            ));


            // Start the loop.
            while (have_posts()) : the_post();
                ?>


                <div class="row" style="background-color: white; margin-bottom: 40px;">                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <?php $img_src = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full', false); ?>
        <?php if ($img_src != '') : ?>
                            <img style="max-height: 150px; width: auto;" class="width-100" src="<?php echo $img_src[0]; ?>" alt="">                         
                        <?php else: ?>
                            <img class="width-100" src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="">  
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-top: 10px;">
                        <h4 style=""><?php echo get_the_title(); ?></h4>
                        <p style="font-size: 14px;">
        <?php echo get_the_excerpt(get_the_ID()); ?>
                        </p>
                        <a href="<?php echo get_permalink(get_the_ID()); ?>" style="color:#272727; font-weight: bold;text-transform: uppercase; border-bottom: 1px solid #DB2508;s">Lire plus</a>
                    </div>
                </div>            


        <?php
    // End the loop.
    endwhile;

    // Previous/next page navigation.
    the_posts_pagination(array(
        'mid_size' => 2,
        'prev_text' => __('Page Précédente', 'osereso'),
        'next_text' => __('Page Suivante', 'osereso'),
        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'osereso') . ' </span>',
        'screen_reader_text' => 'Pagination'
    ));
    ?>


        <?php else: ?>

            <!-- Header -->
            <header class="team-member">
                <div class="container" style="color: #DB2508;">
                    <div class="row">
                        <div class="col-lg-8 col-centered">
                            <div class="intro-text">
                                <span class="name"><?php printf(__('Résultats de recherche pour: %s', 'osereso'), get_search_query()); ?></span>
                                <hr class="star-light">
                            </div>                  
                        </div>                                            
                    </div>
                </div>
            </header>

<?php endif; ?>


    </div>
</section>

<?php
get_footer();
