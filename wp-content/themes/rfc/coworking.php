<?php
/* Template Name: Coworking */
get_header();
?>


<!-- Header -->
<header>
    <div class="container" style="color: #DB2508;">
        <div class="row">
            <div class="col-lg-8 col-centered">
                <div class="intro-text">
                    <h1 class="name"><?php echo get_post_meta(get_the_ID(), 'page_header_title', true) ?></h1>
                    <span class="skills"><?php echo get_post_meta(get_the_ID(), 'page_header_subs', true) ?></span>
                </div>                  
            </div>                    
        </div>

    </div>
</header>



<section id="services" style="padding-top: 0;">
    <div class="container">
        <!-- Team Members -->
        <?php
        $args = array(
            'numberposts' => 0,
            'category' => 15
        );

        $works = get_posts($args);
        ?>
        
        <?php if ($works) : ?>
            <?php foreach ($works as $work) : ?>
                <div class="row" style="background-color: white; margin-bottom: 40px;">                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p-0">
                        <?php $img_src = wp_get_attachment_image_src(get_post_thumbnail_id($work->ID), 'full', false); ?>
                        <img class="width-100" src="<?php echo $img_src[0]; ?>" alt="">                         
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-top: 10px;">
                        <span style="color: #DB2508; font-size: 14px;"><?php echo get_post_meta($work->ID, 'work_type', true) ?></span>
                        <h4 style=" "><?php echo $work->post_title; ?></h4>
                        <p style="font-size: 14px;  ">
                            <?php echo get_the_excerpt($work->ID); ?>
                        </p>
                        <a href="<?php echo get_permalink($work->ID); ?>" style="color:#272727; font-weight: bold;text-transform: uppercase; border-bottom: 1px solid #DB2508;">Réservez</a>
                    </div>
                </div>
            <?php endforeach; ?>      
        <?php endif; ?>

    </div>
</section>


<?php
get_footer();