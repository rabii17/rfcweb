<?php

/* Template Name: Client template */

get_header();

?>


<!-- Header -->
<?php $header = get_the_post_thumbnail_url(get_the_ID(), "full") ?>
<header style="background-image:url(<?php echo get_post_meta(get_the_ID(), 'page_header_thumb', true) ?>)" class="container-fluid headers">
    
</header>

<section class="references">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h3 class="titles">nos références <span class="tiret blue-bg center-block"></span></h3>
                </div>
                <div class="col-xs-12 text-center">
                    <div id="Carousel" class="carousel slide">  
                        <!-- Carousel items -->
                        <div class="carousel-inner">	
                            <?php
                            // Our services 
                            $args = array(
                                'numberposts' => -1,
                                'category' => get_cat_ID('nos references'),
                                'order' => "ASC",
                                'orderby' => "ID"
                            );

                            $refrences = get_posts($args);
                            $isFirst = true;
                            $cpt = 0;
                            foreach ($refrences as $refrence):
                                if ($isFirst && $cpt == 0):
                                    echo '<div class="item active"><div class="row"><ul class="grid cs-style-3">';
                                elseif ($cpt == 0):
                                    echo '<div class="item"><div class="row"><ul class="grid cs-style-3">';
                                endif;
                                ?>
                                <li class="col-lg-4 col-sm-6 col-xs-12">
                                    <figure>
					<?php $url = get_post_meta($refrence->ID, 'url_site', true); ?>
    					<a <?php if($url) echo 'href="'.$url.'" target="_blank"' ?>>
                                        	<img src="<?php echo get_the_post_thumbnail_url($refrence->ID, "full") ?>" alt="<?php echo $refrence->post_title; ?>" class="fixed-height">
					</a>
                                        <figcaption>
                                            <p>
                                                <a <?php if($url) echo 'href="'.$url.'" target="_blank"' ?>><?php echo get_the_excerpt($refrence->ID); ?></a>
                                            </p>
                                        </figcaption>
                                    </figure>
                                </li> 
                                <?php
                                $cpt++;
                                if ($cpt == 6):
                                    $isFirst = FALSE;
                                    $cpt = 0;
                                    echo '</ul></div></div>';
                                endif;
                            endforeach;
                            if ($cpt > 0):
                                echo '</ul></div></div>';
                            endif;
                            ?> 
                        </div><!--.carousel-inner-->
                        <a data-slide="prev" href="#Carousel" class="left carousel-control"></a>
                        <a data-slide="next" href="#Carousel" class="right carousel-control"></a>
                    </div><!--.Carousel-->

                    
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>