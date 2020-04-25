<?php
/* Template Name: Qui sommes nous */
get_header();
?>
<style>
.grid figcaption p {
    /* font-size: 13px; */
    position: absolute;
    /* bottom: 50px; */
    left: 50%;
    transform: translateX(-50%);
    display: block;
    text-align: justify;
    width: 100%;
    border-top: 1px solid #000;
    color: #000;
}
</style>
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

<section class="references">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
				<div class="col-lg-12 text-center">
					<div class="intro-text">
						<h3 class="titles"><?php echo get_post_meta(get_the_ID(), 'page_header_title', true) ?> <span class="tiret blue-bg center-block"></span></h3>
						<p class="desc"><?php echo get_post_meta(get_the_ID(), 'page_description', true) ?></p>
					</div>                  
				</div> 
                <div class="col-xs-12 text-center">
                    <h4 class="mini-title"><span class="text-blue text-uppercase">RFC </span>est certifiée</h3>
                </div>
                <div class="col-xs-12 text-center">
                    <div id="Carousel" class="carousel slide">  
                        <!-- Carousel items -->
                        <div class="carousel-inner">	
                            <?php
                            // Our services 
                            $args = array(
                                'numberposts' => 0,
                                'category' => get_cat_ID('Certificat RFC'),
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
                                        <img src="<?php echo get_the_post_thumbnail_url($refrence->ID, "medium") ?>" alt="<?php echo $refrence->post_title; ?>" class="fixed-height">
                                        <figcaption>
                                            <p>
                                                <?php echo get_the_excerpt($refrence->ID); ?>
                                            </p>
                                        </figcaption>
                                    </figure>
                                </li> 
                                <?php
                                $cpt++;
                                if ($isFirst && $cpt == 6):
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
                    </div><!--.Carousel-->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="">
	<div class="container-fluid">
        <div class="container">
            <div class="row">
				<div class="col-lg-12 text-center">
					<div class="intro-text">
						<h3 class="titles">Engagements<span class="tiret blue-bg center-block"></span></h3>
						<p class="desc">
							Grâce à son sérieux, ses compétences et son savoir faire, RFC a réussi à fidéliser ses clients et à s’ouvrir sur le marché étranger et s’intégrer dans le secteur publique, financier et industriel. <br>
							<strong>Au fil du temps, RFC a bâti une véritable relation de partenariat avec ses clients se basant sur :</strong>
						</p>
					</div>                  
				</div>
				<div class="col-lg-12 text-left">
					<ul class="list-unstyled list-inline list-engagement">
						<li class="col-md-4">
							<h5 class="text-uppercase"><span>1</span> La satisfaction <h5>
							<p>Cette satisfaction repose sur une bonne compréhension des besoins de ses clients et une souplesse de gestion des incidents.</p>
						</li>
						<li class="col-md-4">
							<h5 class="text-uppercase"><span>2</span> La proximité <h5>
							<p>Pour répondre aux besoins de ses clients dans les plus bréfs délais et leurs fournir des solutions adaptées à leurs besoins.</p>
						</li>
						<li class="col-md-4">
							<h5 class="text-uppercase"><span>3</span> La disponibilité <h5>
							<p>Forte de son sérieux et de sa compétence, RFC privilégie les relations avec ses clients par l'esprit d’écoute et la disponibilité.</p>
						</li>
					</ul>
				</div>
            </div>
			
        </div>
    </div>
</section>
<section class="">
	<div class="container-fluid">
        <div class="container">
            <div class="row">
				<div class="col-lg-12 text-center">
					<div class="intro-text">
						<h3 class="titles">Contrats D'assistance<span class="tiret blue-bg center-block"></span></h3>
						<p class="desc">
							Nous confier la gestion de votre parc informatique est l'assurance pour bénéficier d'un service de qualité, disponibilité et de proximité. Selon la nature de vos besoins, 
							<span class="text-blue">RFC</span> met à votre disposition 3 types de contrats de maintenance :
						</p>
					</div>                  
				</div>				
            </div>
			<div class="row contrat">
				<div class="col-md-6">
					<section class="sect-img" style="background-image:url(/wp-content/uploads/2017/07/shutterstock_345111587.jpg)"></section>
				</div>
				<div class="col-md-6">
					<h3 class="text-uppercase">Le contrat Premium :</h3>
					<p>
						Est orienté vers les entreprises qui désirent bénéficier d’un suivi étroit, d’un transfert de compétence technique et d’un accompagnement dans la mise en place de nouveaux projets. Il propose :
					</p>
					<ul class="list-unstyled">
						<li>Un service Hotline tout au long de l’année</li>
						<li>Un service de Télémaintenance à travers une connexion sécurisée</li>
						<li>Un service de Conseil et d’assistance sur site</li>
					</ul>
					
				</div>
			</div>
			
			<div class="row contrat">				
				<div class="col-md-6">
					<h3 class="text-uppercase">Le contrat Availability :</h3>
					<p>
						Est orienté vers les entreprises qui disposent d’une équipe informatique mais qui souhaitent avoir une aide compétente et un service à haute valeur ajoutée. Il propose :
					</p>
					<ul class="list-unstyled">
						<li>Un service Hotline tout au long de l’année</li>
						<li>Un service de Conseil et d’assistance sur site</li>
					</ul>
					
				</div>
				<div class="col-md-6">
					<section class="sect-img" style="background-image:url(/wp-content/uploads/2017/07/shutterstock_558039283.jpg)"></section>
				</div>
			</div>
			
			<div class="row contrat">
				<div class="col-md-6">
					<section class="sect-img" style="background-image:url(/wp-content/uploads/2017/07/shutterstock_156554486.jpg)"></section>
				</div>
				<div class="col-md-6">
					<h3 class="text-uppercase">Le contrat Proximity :</h3>
					<p>
						est orienté vers les entreprises qui ne disposent pas d’informaticiens dédiés au sein de leurs structures. Il propose :
					</p>
					<ul class="list-unstyled">
						<li>Un service Hotline tout au long de l’année</li>
						<li>Un service de Télémaintenance à travers une connexion sécurisée</li>
						<li>Un service de Conseil et d’assistance sur site</li>
					</ul>
					
				</div>
			</div>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php
get_footer();
