<?php
    /* Single Post Template: One Team Member Details */
    get_header();
    $oBlogData = get_post(get_the_ID());
    
?>

<!-- Header -->
<header class="service-article" style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/img/banner-bg.jpg); ">
    <div class="container" style="color: #DB2508;">
        <div class="row">
            <div class="col-lg-8 col-centered">
                <div class="intro-text">
                    <span class="name" style="color: white;"><?php echo get_the_title(); ?></span>
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


<section style="padding-top: 0;">
    <div class="container">
        <div class="row">
            <?php echo wpautop($oBlogData->post_content); ?>
        </div>
        
        <?php
        $idTeamMember = (int) get_post_meta(get_the_ID(), 'author_id', true);
        $args = array(
            'post__in' => $teamArray[$idTeamMember],
            'category' => 2
        );

        $team_member = get_posts($args);
        ?>
            <?php if ($team_members) : ?>
                <?php foreach ($team_members as $team_member) : ?>
                    <div class="row">
                        <hr style="padding: 0; margin: 10 auto; border-bottom: 1px solid #DB2508; width: 5%; min-width: 75px;" />
                        <div class="col-lg-12 text-center">
                            <div class="social-link-team-member"> 
                                <?php if(get_post_meta($team_member->ID, 'team_member_fb', true) != '') :?>
                                    <i data-href="<?php echo get_post_meta($team_member->ID, 'team_member_fb', true); ?>" class="fa fa-facebook-square" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
                                <?php endif; ?>

                                <?php if(get_post_meta($team_member->ID, 'team_member_linkedin', true) != '') :?>   
                                    <i data-href="<?php echo get_post_meta($team_member->ID, 'team_member_linkedin', true); ?>" class="fa fa-linkedin" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
                                <?php endif; ?>

                                <?php if(get_post_meta($team_member->ID, 'team_member_google', true) != '') :?>
                                    <i data-href="<?php echo get_post_meta($team_member->ID, 'team_member_google', true); ?>" class="fa fa-google-plus" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
                                <?php endif; ?>

                                <?php if(get_post_meta($team_member->ID, 'team_member_twitter', true) != '') :?>
                                    <i data-href="<?php echo get_post_meta($team_member->ID, 'team_member_twitter', true); ?>" class="fa fa-twitter" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
                                <?php endif; ?> 
                            </div>                         
                            <div style="font-size: 24px; font-weight: bold;"><?php echo $team_member->post_title; ?></div>
                            <div><?php echo get_the_excerpt($team_member->ID); ?></div>
                        </div>

                    </div>        
                <?php endforeach; ?>               
            <?php endif; ?> 
        
    </div>
</section>




<?php
get_footer();


