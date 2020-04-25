<?php
    /* Single Post Template: One Team Member Details */
    get_header();
    $oWorkData = get_post(get_the_ID());

?>


<!-- Header -->
<header class="team-member">
    <div class="container" style="color: #DB2508;">
        <div class="row">
            <div class="col-lg-8 col-centered">
                <div class="intro-text">
                    <span class="name"><?php echo get_the_title(); ?></span>
                    <hr class="star-light">
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
                <?php echo get_post_meta(get_the_ID(), 'work_type', true) ?>
            </div>

        </div>    

        <div class="row" style="margin-top: 20px;">
            <div class="col-lg-1">&nbsp;</div>
            <div class="col-lg-10 text-center m-10" style="line-height:35px; font-size: 24px;">              
                <?php echo wpautop($oWorkData->post_content); ?>
            </div>
            <div class="col-lg-1">&nbsp;</div>
        </div>
    </div>           
</section>

<?php
get_footer();
