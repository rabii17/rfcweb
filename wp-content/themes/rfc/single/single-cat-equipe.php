<?php
    /* Single Post Template: One Team Member Details */
    get_header();
    $oTeamMember = get_post(get_the_ID());

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
            <div class="team-img col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
                <?php $img_src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full', false ) ;?>
                <img class="" style="width: 80%; " src="<?php echo $img_src[0]; ?>" alt="" />                        
            </div>
            <div class="team-bio col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-6" style="font-size: 18px;">
                <p>
                    <?php echo $oTeamMember->post_content; ?>
                </p>
                
                
                <!--<p style="font-style: italic; width: 60%;">This is again some random shit, This is again some random shit  </p> -->
                <div class="social-link-team-member"> 
                                                       
                    <?php if(get_post_meta(get_the_ID(), 'team_member_linkedin', true) != '') :?>   
                       <a style="color:#000;" target="_blank" rel ="me nofollow" href="<?php echo get_post_meta(get_the_ID(), 'team_member_linkedin', true); ?> "> <i data-href="<?php echo get_post_meta(get_the_ID(), 'team_member_linkedin', true); ?>" class="fa fa-linkedin" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
                    <?php endif; ?>
                    
                    <?php if(get_post_meta(get_the_ID(), 'team_member_google', true) != '') :?>
                        <a style="color:#000;" target="_blank" rel ="me nofollow" href="<?php echo get_post_meta(get_the_ID(), 'team_member_google', true); ?> "><i data-href="<?php echo get_post_meta(get_the_ID(), 'team_member_google', true); ?>" class="fa fa-google-plus" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
                    <?php endif; ?>
                    
                    <?php if(get_post_meta(get_the_ID(), 'team_member_twitter', true) != '') :?>
                        <a style="color:#000;" target="_blank" rel ="me nofollow" href="<?php echo get_post_meta(get_the_ID(), 'team_member_twitter', true); ?> "><i data-href="<?php echo get_post_meta(get_the_ID(), 'team_member_twitter', true); ?>" class="fa fa-twitter" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
                    <?php endif; ?>                    
                   	
			<?php if(get_post_meta(get_the_ID(), 'team_member_fb', true) != '') :?>
                        <a style="color:#000;" target="_blank" rel ="me nofollow" href="<?php echo get_post_meta(get_the_ID(), 'team_member_fb', true); ?> "> <i data-href="<?php echo get_post_meta(get_the_ID(), 'team_member_fb', true); ?>" class="fa fa-facebook-square" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
                    <?php endif; ?> 
                    
                    
                </div>
            </div>
        </div>                                 
    </div>           
</section>

<section style="padding-top: 60px;">
    <div class="container">
        <div class="row text-center">
            <h3>Certifications Acquises</h3>
            <div class="col-lg-8 col-centered">
                 <?php echo get_post_meta(get_the_ID(), 'team_member_certif', true); ?>
            </div>                        
        </div>
    </div>            
</section>


<section style="background-color: white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>L'équipe <span class="red-higlight">OSERESO Tunisie</span>, créatrice de performance, qualité & valeur ajoutée</h2>
                <p>
                    Nous avons développé une méthodologie nous permettant de maîtriser l’ensemble des projets de nos clients, pour leur assurer des résultats visibles et mesurables. 
                </p>
            </div>
        </div>
    </div>
</section>        

<?php

    $teamArray = array(
        '44' => array(25, 23, 21),
        '51' => array(21, 23, 25)
        
        );  

?>


<!-- Client Section -->
<?php
    $args = array(
        'post__in' => $teamArray[$oTeamMember->ID],
        'numberposts' => 3,
        'category' =>  3,
        'meta_key'			=> 'order',
        'orderby'			=> 'meta_value',
        'order'				=> 'ASC'         
    );

    $clients = get_posts( $args );
?>
<?php if($clients) : ?>
    <section>
        <div class="container">
            <ul class="grid-client grid cs-style-3">
            <?php foreach ($clients as $client) : ?>
                <li class="col-lg-4">
                    <figure class="client-figure" style="padding: 10%;">
                        <?php $img_src = wp_get_attachment_image_src( get_post_thumbnail_id($client->ID), 'full', false ) ;?>
                        <img style="height: 200px;" class="elem01 show" src="<?php echo $img_src[0]; ?>" alt="">
                        <img style="height: 200px;" class="elem02 hidden" src="<?php echo get_post_meta($client->ID, 'client_over_image', true) ?>" alt="">
                        <figcaption>
                            <p><?php echo get_the_excerpt($client->ID); ?></p>
                        </figcaption>
                    </figure>
                </li>
            <?php endforeach; ?>                
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center p-20">
                    <a href="/contact/" class="text-capitalize btn btn-lg btn-outline m-10">Rejoignez OSERESO Tunisie!</a>          
                </div>
            </div>   
        </div>        
    </section>
<?php endif; ?>


<?php
get_footer();


