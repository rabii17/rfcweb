<?php
/* Template Name: Services pages */
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
<section id="services">
    <div class="container">
        <div class="row">                    
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <!-- Team Members -->
                    <?php
                    $args = array(
                        'numberposts' => 5,
                        'category' => get_cat_ID("services"),
						'orderby'	=> 'ID',
						'order'	=> 'ASC'
                    );
                    $services= get_posts($args);
                    ?>
                    <?php if ($services) : ?>
                        <?php foreach ($services as $key=>$service) : ?>
						<section class="" id="<?php echo $service->post_name ?>">
							<div class="container-fluid">
								<div class="container">
									
									<?php
									if(get_post_meta($service->ID, 'first_service_title', true)):
									
									?>
									<div class="row contrat" style="margin-top: 35px;">
									<?php if($key%2 == 0){ ?>
										<div class="col-md-6" >
											<section class="sect-img <?php echo get_post_meta($service->ID, 'service_css_class', true) ?>-border-bottom" style="background-image:url(<?php echo get_post_meta($service->ID, 'first_service_thumb', true) ?>)"></section>
										</div>
										<div class="col-md-6" style="padding-left: 67px;padding-top: 0px;">
											<div class="col-lg-12 text-left">
											<div class="intro-text">
												<h3 class="titles service-img" style = "background-image:url(<?php echo get_the_post_thumbnail_url($service->ID, "full") ?>); margin-bottom: 25px;"><?php echo get_the_title($service->ID); ?></h3>
												<?php echo $service->post_content; ?>
											</div>                  
										</div>
										</div>
									<?php }
									else { 
									?>
										<div class="col-md-6" style="padding-left: 67px;padding-top: 0px;">
											<div class="col-lg-12 text-left">
											<div class="intro-text">
												<h3 class="titles service-img" style = "background-image:url(<?php echo get_the_post_thumbnail_url($service->ID, "full") ?>); margin-bottom: 25px;"><?php echo get_the_title($service->ID); ?></h3>
												<?php echo $service->post_content; ?>
											</div>                  
										</div>
										</div>
										<div class="col-md-6" >
											<section class="sect-img <?php echo get_post_meta($service->ID, 'service_css_class', true) ?>-border-bottom" style="background-image:url(<?php echo get_post_meta($service->ID, 'first_service_thumb', true) ?>)"></section>
										</div>
									<?php } ?>
									
									</div>

									
									<?php 
									
									endif; ?>
									
									
								</div>
							</div>
						</section>

                                         
                </div>
            </div>
        </div>
    </div>
</section>
   									<?php if ($key == 1){ ?> 
		<div style="text-align:center">
			<a href="/formations"> <button class="button-service">VOIR TOUTES NOS FORMATIONS </button></a>
		</div>	

<section class="newsletter-block">
<div class="bg_opacity_on_black">	</div>	
    <div class="container-fluid">
        <div class="container">
            <div class="row">
				<div class="col-lg-12 text-center">
					<div class="intro-text">
						<h4 class="text-uppercase">télécharger notre catalogue des formations 2018 </h4>		
						<div class="custom-file-upload">
							<a href="/wp-content/uploads/2018/08/RFC_CATALOGUE_2018.pdf" target="_blank"><button class="button-service"> <img src="img/pdf.png" style="margin-right: 15px;">TÉLÉCHARGER</button></a>						
											
						</div>
						
					</div>                  
				</div> 
            </div>			
        </div>
    </div>
</section>

<?php }   endforeach; ?>
                    <?php endif; ?>  
<?php endwhile; ?>

<section class="newsletter-block">
<div class="bg_opacity_on_black"></div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
				<div class="col-lg-12 text-center">
					<div class="intro-text">
								
						<div class="custom-file-upload">
							<a href="/contact/"><button class="button-service_2">CONTACTEZ NOUS</button></a>							
						</div>
						
					</div>                  
				</div> 
            </div>			
        </div>
    </div>
</section>

<?php
get_footer();
