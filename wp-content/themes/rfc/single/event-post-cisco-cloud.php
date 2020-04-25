<?php
/*
 * Single Post Template: Events Post template CC
 */
 get_header();  ?>
 <!-- Header -->
<?php while(have_posts()): the_post(); 
	$categories = get_the_category(get_the_ID());
?>

<header style="background-image:url(<?php echo get_post_meta(get_the_ID(), 'page_header_thumb', true) ?>);background-position: 0 104px;" class="container-fluid headers">

</header>
    <div class="container single_post_event" >
        <div class="row">
            <div class="col-lg-12 col-centered">
                <div class="intro-text">
				
                    <h1 class="head-title text-center">RFC ÉLU LE PARTENAIRE CISCO CLOUD ET DATACENTER DE L'ANNÉE 2018 SUR LA RÉGION NWCA</h1>
                    <p>RFC, a été reconnue partenaire Cisco Cloud et Datacenter de l’année 2018 sur la région NWCA (Nord, Ouest et centre Afrique) lors du Partner Summit Experience 2018, qui a eu lieu à Marrakech le 26 Septembre 2018.</p>
				
                </div>                  
            </div>                    
        </div>
    </div>
<section class="">
	<div class="container-fluid">
        <div class="container">
            <div class="row">
				<div class="col-lg-12 ">
					<div class="intro-text">
						<!--<h3 class="titles text-blue text-center" style="font-weight: initial;"><?php echo get_post_meta(get_the_ID(), 'page_header_desc', true) ?><span class="tiret blue-bg center-block"></span></h3>-->
                        <div class="col-md-12 center-block col-md-offset-2" style="margin-bottom: 15px;">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="Partenariat RFC et Cisco en Solutions Cloud" class="img-responsive center-block">
                        </div>
						<p>&nbsp;</p>
						
									<p>RFC, <a href="http://www.rfc.com.tn/">intégrateur IT</a>, fournisseur des solutions Cloud et des services managés à forte valeur ajoutée, leader dans son domaine en Tunisie avec un actif de 15 ans d'expertise confirmée sur les technologies de pointes : Microsoft, Cisco, Trend Micro et Veritas. RFC est aussi un centre officiel de formation et de certification Microsoft, offrant à ses clients partenaires des expériences à valeur unique et une richesse en savoir-faire.</p>
									<p>&nbsp;<br>
									</p><h2 class="text-uppercase text-blue" style="font-size: 18px; font-weight: 600;">RFC le partenaire Cisco Cloud et Datacenter en Afrique</h2>
									<p>&nbsp;</p>
									<p>Cisco, la référence mondiale incontournable dans l’industrie IT et plus précisément en matière de serveurs, réseau, et sécurité, a élu RFC en tant que son partenaire « <strong>Cisco Cloud et Datacenter</strong> » de l'année 2018 sur la région NWCA. Ce prix récompense un partenariat unique et met en évidence la compétence et la capacité de RFC à délivrer des <a href="http://www.rfc.com.tn/services/">services</a> de Cloud et Datacenter adaptés aux besoins spécifiques pour chaque entreprise, tels que : l’accompagnement des clients dans leurs transformations digitales, l’activation des avantages du Cloud Hybride aussi bien que public ou privé, la réalisation des objectifs business, en terme de gestion de coût, d’efficacité, agilité opérationnelle, sécurisation des données de l’entreprise et de croissance et expansion dans leurs marchés...</p>
									<p>&nbsp;</p>
									<p>En tant que partenaire de référence de Microsoft en Tunisie, RFC est un acteur stratégique dans l’extension de l’alliance mondiale entre Microsoft &amp; Cisco autour de Microsoft Azure cloud platform.</p>
									<p>En effet, RFC est le premier partenaire de ces deux leaders à construire une extension de Azure en Tunisie en se basant sur la solution Azure Stack de Microsoft et sur les technologies Datacenter de Cisco. Cette instance Azure sera une première dans notre région Africaine et une fierté pour notre Tunisie.</p>
									<p>Avec cette nouvelle offre, RFC est capable d’enrichir son offre Cloud Hybride avec des services Microsoft Azure fournies depuis un Datacenter Tunisien dont Cisco est le partenaire de choix.
									</p><p style="text-align: left;">Vidéo&nbsp;:</p>
									<p style="text-align: center;"><iframe src="https://www.youtube.com/embed/Z7FZ2nPH1B4" width="600" height="331" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
									<p style="text-align: left;">Photos du groupe&nbsp;:</p>
															
						
						<?php

						//echo get_the_content();
						
						//echo  [metaslider id=721];
						
						?>
                          <p style="text-align: center;">
						  <center>
						 <?php echo do_shortcode('[metaslider id=721]'); ?>
						 </center>
						 </p>
					</div>                  
				</div>	
				<div class="col-xs-12" style="margin: 19px auto;">
                     <!--<div id="myCarousel" class="carousel slide" data-ride="carousel">	
                        				
                       <div class="carousel-inner" role="listbox">
                            <div class="item active">  
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <img src="<?php //echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="" class="img-responsive center-block">
                                    </div> 
										
                                </div>
                            </div>

                            <div class="item">  
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <img src="img/Accueil-Corr_48.png" alt="" class="img-responsive center-block">
                                    </div> 
                                </div>
                            </div>

                        </div>
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"></a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"></a>
                    </div>-->
                </div>
				<div class="col-xs-12 text-center">
					<ul class="list-unstyled list-inline list-social" style="margin-top: 30px;">
    <li class="blue-bg"><a target="_blank" href="https://www.linkedin.com/company/rfc_2/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
    <li class="blue-bg"><a target="_blank" href="https://www.facebook.com/RFCTN/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    <li class="blue-bg"><a target="_blank" href="https://twitter.com/RFCTunisie"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    <li class="blue-bg"><a target="_blank" href="https://www.instagram.com/rfctunisie"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    <li class="blue-bg"><a target="_blank" href="https://www.youtube.com/channel/UCpn86T7sBas--kg7xK0HVkw/about"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
					</ul>
					<a class="event-link green-bg" href="/evenements" style="margin-top: 30px;">VOIR TOUS LES événements</a>
				</div>
            </div>
			
			
			
			
        </div>
    </div>
</section>

<?php endwhile; ?>
<?php
get_footer();

