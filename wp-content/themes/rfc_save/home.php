<?php
/* Template Name: hooome */
get_header();
?>


<!-- Header -->
<?php $header = get_the_post_thumbnail_url(get_the_ID(), "full") ?>
<header class="container-fluid" style="<?php if($header) echo 'background-image:url('.$header.')' ?>">  
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 head-padd text-left" >
				<h2 class="head-title" style="color:#fff"><?php echo get_post_meta(get_the_ID(), 'page_header_title', true) ?></h2>
				<p class="desc">
					<?php echo get_post_meta(get_the_ID(), 'page_header_desc', true) ?>                        
				</p>
				<a class="learn-more" href="/qui-sommes-nous/">en savoir plus</a>					                
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12" ></div>
		</div>
	</div>
</header>

<section class="services">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h3 class="titles">nos SERVICES <span class="tiret blue-bg center-block"></span></h3>
                </div>
                <div class="col-xs-12">
                    <ul class="list-unstyled list-inline text-center">
						
                        <?php
                        // Our services 
                        $args = array(
                            'numberposts' => 5,
                            'category' => get_cat_ID('Services'),
                            'order' => "ASC",
                            'orderby' => "ID"
                        );

                        $services = get_posts($args);
                        foreach ($services as $service):
                            ?>
                            <li class="col-md-2 col-sm-6 col-xs-12 styled-li">
                                <img src="<?php echo get_the_post_thumbnail_url($service->ID, "full") ?>" alt="<?php echo $service->post_title; ?>">
                                <h4 class="ul-title"><?php echo $service->post_title; ?></h4>
                                <p class="ul-desc">
                                    <?php echo get_post_meta($service->ID, 'page_header_desc', true) ?> 
                                </p>
                                <a href="/services/#<?php echo $service->post_name; ?>" class="ul-more">Consulter</a>
                            </li>
                        <?php endforeach; ?>  
						
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="references">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h3 class="titles">nos références <span class="tiret blue-bg center-block"></span></h3>
                </div>
                <div class="col-xs-12 text-center">
                    <div id="Carousel" class="carousel slide">  
                        <!-- Carousel items -->
                        <div class="carousel-inner">	
                            <?php
                            // Our services 
                            $args = array(
                                'numberposts' => -1,
                                'category' => get_cat_ID('nos references'),
                                'order' => "ASC",
                                'orderby' => "ID"
                            );

                            $refrences = get_posts($args);
                            $isFirst = true;
                            $cpt = 0;
                            foreach ($refrences as $refrence):
                                if ($isFirst && $cpt == 0):
                                    echo '<div class="item active"><div class="row"><ul class="grid cs-style-3">';
                                elseif ($cpt == 0):
                                    echo '<div class="item"><div class="row"><ul class="grid cs-style-3">';
                                endif;
                                ?>
                                <li class="col-lg-4 col-sm-6 col-xs-12">
                                    <figure>
					<?php $url = get_post_meta($refrence->ID, 'url_site', true); ?>
    					<a <?php if($url) echo 'href="'.$url.'" target="_blank"' ?>>
                                        	<img src="<?php echo get_the_post_thumbnail_url($refrence->ID, "full") ?>" alt="<?php echo $refrence->post_title; ?>" class="fixed-height">
					</a>
                                        <figcaption>
                                            <p>
                                                <a <?php if($url) echo 'href="'.$url.'" target="_blank"' ?>><?php echo get_the_excerpt($refrence->ID); ?></a>
                                            </p>
                                        </figcaption>
                                    </figure>
                                </li> 
                                <?php
                                $cpt++;
                                if ($cpt == 6):
                                    $isFirst = FALSE;
                                    $cpt = 0;
                                    echo '</ul></div></div>';
                                endif;
                            endforeach;
                            if ($cpt > 0):
                                echo '</ul></div></div>';
                            endif;
                            ?> 
                        </div><!--.carousel-inner-->
                        <a data-slide="prev" href="#Carousel" class="left carousel-control"></a>
                        <a data-slide="next" href="#Carousel" class="right carousel-control"></a>
                    </div><!--.Carousel-->

                    <a class="see-all blue-bg" href="/references">Voir toutes nos références</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="training">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h3 class="titles">NOS PROCHAINES FORMATIONS <span class="tiret blue-bg center-block"></span></h3>
                </div>
            </div>
            <div class="row">
                <?php
                // Our services 
                $args = array(
                    'numberposts' => 3,
                    'category' => get_cat_ID('formations'),
                    'order' => "ASC",
                    'orderby' => "meta_value",
                    'meta_key' => 'date_start'
                );

                $formations = get_posts($args);
                foreach ($formations as $formation):
                ?>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="trains" style="background-image:url('<?php echo get_the_post_thumbnail_url($formation->ID) ?>')"></div>
                    <div class="content text-center">
                        <h5><?php echo $formation->post_title; ?></h5>
                        <span class="lock">CODE <?php echo get_post_meta($formation->ID, 'code', true)  ?></span>
                        <span class="calendar"><?php echo get_post_meta($formation->ID, 'date_start', true)  ?> <?php echo get_post_meta($formation->ID, 'date_end', true)  ?></span>
                        <span class="clocks">5 jours</span>
                        <a class="ul-more" href="<?php echo get_the_permalink($formation->ID); ?>">EN SAVOIR PLUS</a>
                    </div>
                </div>
                <?php endforeach; ?>
                
                <div class="col-xs-12 text-center">
                    <a class="see-all red-bg" href="/formations">Voir toutes nos formations</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="news">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h3 class="titles">Actualités <span class="tiret blue-bg center-block"></span></h3>
                </div>
                <div class="col-xs-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">	
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>                                                                                                         
                            <li data-target="#myCarousel" data-slide-to="1"></li>                                                                       
                        </ol>					
                        <div class="carousel-inner" role="listbox">
							<?php
                            // Our services 
                            $args = array(
                                'numberposts' => 2,
                                'category' => get_cat_ID('Actualités'),
                                'order' => "ASC",
                                'orderby' => "ID"
                            );

                            $news = get_posts($args);
                            
                            $class = 'active';
                            foreach ($news as $new):
                                
                                ?>
								<div class="item <?php echo $class ?>">  
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
											<img src="<?php echo get_the_post_thumbnail_url($new->ID, "full") ?>" alt="<?php echo $new->post_title; ?>" class="img-responsive">
										</div>

										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left">
											<div>
												<h4 style="padding-top: 2%; margin-top: 0;"><?php echo $new->post_title; ?></h4>
												<p>
													<?php echo get_the_excerpt($new->ID); ?>
												</p>                            
												<a class="see-all blue-bg" href="<?php echo get_the_permalink($new->ID); ?>">Lire la suite</a>
											</div>                                        
										</div>
									</div>
								</div>
                                <?php    
									$class="";
                            endforeach;
							?>                            

                        </div>
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"></a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="block">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h3 class="titles" style="font-size:21px;font-weight:100;">Débutants ou expérimentés, RFC vous offre un environnement de travail incubateur qui favorise la concrétisation de vos connaissances avec l’aide de nos experts consultants <span class="tiret blue-bg center-block"></span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 profil-h">
                    <img src="/wp-content/uploads/2017/07/Site-web-photo2.png" class="img-responsive center-block">
                    <div><a class="profils" href="/carriere/">Profils recherchés</a></div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 profil-h">
                    <img src="/wp-content/uploads/2017/07/Site-web-photo1.png" class="img-responsive center-block">
                    <div><a class="profils" href="/carriere/">Profils disponibles</a></div>
                </div>
                <div class="col-md-4 relative col-sm-4 col-xs-12 profil-h">
                    <div class="green-bg-big"><a class="profils" href="/carriere/" style="height: 45px;">Envoyer votre CV</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
    <div class="container-fluid contact">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="titles">contact <span class="tiret blue-bg center-block"></span></h3>
            </div>						
        </div>		
        <div class="row">
            <div id="map" style="height:500px;"></div>
        </div>
    </div>
    
<?php get_footer(); ?>