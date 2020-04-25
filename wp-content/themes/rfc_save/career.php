<?php
/* Template Name: Carriére */
get_header();
?>


<!-- Header -->
<?php while(have_posts()): the_post(); ?>
<header style="background-image:url(<?php echo get_post_meta(get_the_ID(), 'page_header_thumb', true) ?>)" class="container-fluid headers">
  
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
<section style="padding-top:20px !important;">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="intro-text">
                        
                        <p class="desc"><?php echo get_post_meta(get_the_ID(), 'page_description', true) ?></p>
                    </div>                  
                </div> 
            </div>
            <div class="row">
                <div class="col-xs-12 text-center">
                    
                </div>
            </div>
            <div class="row" style=" display:none;">
                <div class="col-md-4">
                    <img src="/rfc_v2/wp-content/uploads/2017/07/car_1.jpg" class="img-responsive" style="height:252px;">
                    <div><a class="profils" style="font-size:15px;padding: 38px 19px;">Des perspectives d'évolution</a></div>
                </div>
                <div class="col-md-4">
                    <img src="/rfc_v2/wp-content/uploads/2017/07/car_2.jpg" class="img-responsive"  style="height:252px;">
                    <div><a class="profils" style="font-size:15px">Une formation métier professionnelle et intéressante</a></div>
                </div>
                <div class="col-md-4">
                    <img src="/rfc_v2/wp-content/uploads/2017/07/car_3.jpg" class="img-responsive"  style="height:252px;">
                    <div><a class="profils" style="font-size:15px">Un plan de carrière et un climat de travail favorables et motivants</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="newsletter-block">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="intro-text">
                        <h4 class="text-uppercase">saisissez l’occasion de vous joindre à l'équipe RFC <br> Envoyez votre CV</h4>       
                        <!--<div class="custom-file-upload">                        
                            <input type="file" id="file" name="myfiles" />                      
                        </div>
                        <button class="btn btn-secondary send" type="button"><i class="fa fa-angle-right"></i></button>-->
                                                <?php echo do_shortcode('[contact-form-7 id="431" title="Envoi CV"]') ?>
                    </div>                  
                </div> 
            </div>          
        </div>
    </div>
</section>

<section style="padding-top:20px !important;">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="intro-text">
                        <h3 class="titles"><?php echo get_post_meta(get_the_ID(), 'page_header_title_2', true) ?> <span style="display:none;" class="tiret blue-bg center-block"></span></h3>
                        <p class="desc"><?php echo get_post_meta(get_the_ID(), 'page_description_2', true) ?></p>
                    </div>                  
                </div> 
            </div>          
         
        </div>
    </div>
</section>



<?php endwhile; ?>
<?php
get_footer();