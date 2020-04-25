<?php

/* Template Name: List of Events */

get_header();

?>



<!-- Header -->

<?php while(have_posts()): the_post(); ?>

<header style="background-image:url(<?php echo get_post_meta(get_the_ID(), 'page_header_thumb', true) ?>);background-position: 0 104px;" class="container-fluid headers">

   

                 



</header>

 <div class="container centred_text_banner" >

        <div class="row">

            <div class="col-lg-8 col-centered">

                <div class="intro-text">

                    <h1 class="head-title text-center"><?php the_title(); ?></h1>

                    <p><?php echo get_post_meta(get_the_ID(), 'page_header_desc', true) ?></p>

                </div> 

            </div>                    

        </div>

    </div>

<section id="services">

    <div class="container">

        <div class="row">                    

            

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="row">

                    <!-- Team Members -->

                    <?php

                    $args = array(

                        'numberposts' => 0,

                        'category' => get_cat_ID("Evenements")

                    );



                    $trainings = get_posts($args);

                    ?>



                    <?php if ($trainings) : ?>

                        <?php foreach ($trainings as $training) : ?>

                            <div class="row events">

							<?php $var = get_post_meta($training->ID, 'page_header_desc', true);

							if (!empty($var)) {  ?>

							<div class="col-md-6 event-img"><?php echo do_shortcode(get_post_meta($training->ID, 'slider_event', true)); ?></div>

							<?php } 

							else if(empty($var)) {?>

							<div class="col-md-6 event-img" style="background-image:url(<?php echo get_the_post_thumbnail_url($training->ID, "full") ?>)"></div> <?php } ?>

								<div class="col-md-6 event-content">

									<!-- <h5 class="event-title text-uppercase text-blue"><?php /*echo get_the_title($training->ID) */ ?></h5> -->

									<p class="event-desc"><?php echo get_post_meta($training->ID, 'page_header_desc', true) ?></p>

									<p class="event-excerpt">

										<?php echo get_the_excerpt($training->ID); ?>

									</p>

									<a class="event-link pull-left" href="<?php echo get_the_permalink($training->ID); ?>" style="font-size: 13px;padding: 9px 25px;">Lire la suite</a>

									<ul class="list-unstyled list-inline list-social pull-right" style="margin-bottom: 25px;">

	<li class="blue-bg"><a target="_blank" href="https://www.linkedin.com/company/rfc_2/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
    <li class="blue-bg"><a target="_blank" href="https://www.facebook.com/RFCTN/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    <li class="blue-bg"><a target="_blank" href="https://twitter.com/RFCTunisie"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    <li class="blue-bg"><a target="_blank" href="https://www.instagram.com/rfctunisie"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    <li class="blue-bg"><a target="_blank" href="https://www.youtube.com/channel/UCpn86T7sBas--kg7xK0HVkw/about"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>

									</ul>

								</div>

							</div>    

                        <?php endforeach; ?>

                    <?php endif; ?>                    

                </div>

            </div>

        </div>

    </div>

</section>

<?php endwhile; ?>

<?php

get_footer();

