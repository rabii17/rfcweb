<?php
    /* Single Post Template: One Team Member Details */
    get_header();
    $oServiceData = get_post(get_the_ID());

?>

<!-- Header -->
<header class="service-article" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/img/banner-bg.jpg); ">
    <div class="container" style="color: #DB2508;">
        <div class="row">
            <div class="col-lg-8 col-centered">
                <div class="intro-text">
                    <span class="name"><?php echo get_the_title(); ?></span>
                    <span class="skills"><?php echo get_post_meta(get_the_ID(), 'service_inner_excerpt', true) ?></span>
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


<section style="padding-top: 0;">
    <div class="container">
        <div class="row">
            <?php echo wpautop($oServiceData->post_content); ?>
        </div>
    </div>
</section>

<section id="contact-expert" class="text-center" style="padding-top: 0;">
    <div class="container">
        <div class="row">
            <h1  style="margin-bottom: 40px;">Réserver votre espace</h1>
            <div class="col-lg-6 text-left contact-expert-text">
                <?php echo get_post_meta(get_the_ID(), 'expert_contact_text', true) ?>
            </div>
            <div class="col-lg-6 contact-expert-text">
                <a href="/contact-page" class="text-capitalize btn btn-lg btn-outline p-10" style="padding-left: 10%; padding-right: 10%; margin-top: 0;">
                    Contact
                </a>
            </div>
        </div>
    </div>


</section>


<?php
get_footer();


