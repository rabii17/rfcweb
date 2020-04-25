<?php
    /* Single Post Template: One Team Member Details */
    get_header();
    $oServiceData = get_post(get_the_ID());
    
?>

<!-- Header -->
<header class="service-article"  style="background-image: url(<?php echo get_post_meta(get_the_ID(), 'page_header_background', true); ?>);">
    <div class="container" style="color: #DB2508;">
        <div class="row">
            <div class="col-lg-8 col-centered">
                <div class="intro-text">
                    <h1 class="name" style="color: white;margin-top:0;"><?php echo get_the_title(); ?> en Tunisie</h1>
                    <span class="skills" style="color: white;"><?php echo get_post_meta(get_the_ID(), 'service_inner_excerpt', true) ?></span>
                </div>  

            </div> 
        </div>
    </div>
</header>


<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2><?php echo get_post_meta(get_the_ID(), 'service_inner_accroche', true) ?></h2>                
            </div>
        </div>
    </div>
</section>


<section style="padding-bottom: 0 !important; padding-top:0 !important;">
    <div class="container">
        <div class="row">
            <?php echo wpautop($oServiceData->post_content); ?>
        </div>
    </div>
</section>

<?php

    $teamArray = array(
        '44' => array(25, 23, 21),
        '51' => array(21, 23, 25),
	'114' => array(407,405,23)
        
        );  

?>

<section id="services" style="padding-top: 0;">
    <div class="container">
        <div class="row">    
		<div class="col-lg-12 text-center" style="padding: 0 0 35px 0;"><h2>Collaborez avec</h2></div>		
            <!-- Team Members -->
            <?php
            $args = array(
                'post__in' => $teamArray[$oServiceData->ID],
                'category' => 2,
		'numberposts' => 3,
            );

            $team_members = get_posts($args);
            ?>

            <?php if ($team_members) : ?>
                <?php foreach ($team_members as $team_member) : ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                        <?php $img_src = wp_get_attachment_image_src(get_post_thumbnail_id($team_member->ID), 'full', false); ?>
                        <img class="width-100" src="<?php echo $img_src[0]; ?>" alt="">                    
                        <div class="col-centered col-lg-8 service-data text-center p-10">
                            <h4 style="margin-top: 10px; margin-bottom: 10px;"><?php echo $team_member->post_title; ?></h4>
                            <div style="margin: 10px;">
                                <?php echo get_the_excerpt($team_member->ID); ?>
                            </div>                            
                            <a href="<?php echo get_permalink($team_member->ID); ?>">Plus de détails
                                <i class="glyphicon glyphicon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>               
            <?php endif; ?>                                    
        </div>                
    </div>
</section>

<section id="contact-expert" class="text-center" style="padding-top: 0;">
    <div class="container">
        <div class="row">
            <h1  style="margin-bottom: 40px;">Contactez un expert</h1>
            <div class="col-lg-6 text-left contact-expert-text">
                <?php echo get_post_meta(get_the_ID(), 'expert_contact_text', true) ?>
            </div>
            <div class="col-lg-6 contact-expert-text">
                <a href="/contact/" class="text-capitalize btn btn-lg btn-outline p-10" style="padding-left: 10%; padding-right: 10%; margin-top: 0;">
                    Contact
                </a>
            </div>
        </div>
    </div>


</section>


<?php
get_footer();


