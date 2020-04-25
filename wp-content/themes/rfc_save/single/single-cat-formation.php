<?php
    /* Single Post Template: One Team Member Details */
    get_header();
    $oFormationData = get_post(get_the_ID());

?>

<!-- Header -->
<?php $img_src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full', false ) ;?>
<header class="service-article" style="background-image: url(<?php echo $img_src[0]; ?>); ">
    <div class="container" style="color: #DB2508;">
        <div class="row">
            <div class="col-lg-8 col-centered">
                <div class="intro-text">
                    <span class="name"><?php echo get_the_title(); ?></span>
                    <span class="skills"><?php echo get_the_excerpt(); ?></span>
                </div>  

            </div> 
        </div>
    </div>
</header>

<section style="background-color: white; padding-top: 60px;">
    <div class="container">
        <div class="row">
            <div class="text-uppercase col-lg-12 text-center m-10" style="color:#DB2508;">
                communication
            </div>
            <div class="text-uppercase col-lg-12 text-center m-10" style="font-size: 24px; ">
                <span style="font-weight: bold;">Le défit</span>
                <hr style="padding: 0; margin: 0 auto; border-bottom: 1px solid #DB2508; width: 5%; min-width: 75px;" />
            </div>
        </div>    

        <div class="row" style="margin-top: 20px;">
            <div class="col-lg-1">&nbsp;</div>
            <div class="col-lg-10 text-center m-10" style="line-height:35px; font-size: 24px;">
                <?php echo $oFormationData->post_content; ?>

            </div>
            <div class="col-lg-1">&nbsp;</div>
        </div>
    </div>           
</section>

<?php
get_footer();


