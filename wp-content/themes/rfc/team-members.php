<?php
/* Template Name: Team Members */
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
        <div class="row">    
            <!-- Team Members -->
            <?php
            $args = array(
                'numberposts' => 50,
                'category' => 2
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
                            <div style="margin:10px;">
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
            <h1  style="margin-bottom: 40px;">Contactez nos experts en Digital, Design et Développement</h1>
            <div class="col-lg-6 text-left contact-expert-text">
                Nos équipes de consultants accompagnent les marques et les institutions dans l’intégration des nouveaux enjeux du digital à travers leurs projets et leurs stratégies de communication.
            </div>
            <div class="col-lg-6 contact-expert-text">
                <a href="/contact/" class="text-capitalize btn btn-lg btn-outline p-10" style="padding-left: 10%; padding-right: 10%; margin-top: 0;">
                    Contact
                </a>
            </div>
        </div>
    </div>
</section>

<section id="contact-expert" class="text-center" style="padding-top: 0;">
    <div class="container">
        <div class="row">
            <h1  style="margin-bottom: 40px;">Nous rejoindre</h1>
            <div class="col-lg-6 text-left contact-expert-text">
                Prêt pour booster votre carrière professionnelle en Tunisie? Consultez nos offres d'emploi ou déposez votre candidature spontanée
            </div>
            <div class="col-lg-6 contact-expert-text">
                <a href="#" class="text-capitalize btn btn-lg btn-outline p-10" style="padding-left: 10%; padding-right: 10%; margin-top: 0;">
                    Voir les offres
                </a>
            </div>
        </div>
    </div>
</section> 

<?php
get_footer();


