<?php
/* Template Name: Actualités */
get_header();
?>

<!-- Header -->
<?php while(have_posts()): the_post(); ?>
<header style="background-image:url(<?php echo get_post_meta(get_the_ID(), 'page_header_thumb', true) ?>)" class="container-fluid headers">
  
</header>

  <div class="container" >
        <div class="row">
            <div class="col-lg-8 col-centered">
                <div class="intro-text">
                    <h1 class="head-title text-center"><?php the_title(); ?></h1>
                    <p class="desc"><?php echo get_post_meta(get_the_ID(), 'page_header_desc', true) ?></p>
                </div>                  
            </div>                    
        </div>
    </div>
<section class="">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
				<div class="col-lg-12 text-center">
					<div class="intro-text">
						<h3 class="titles text-blue"><?php echo get_post_meta(get_the_ID(), 'page_header_title', true) ?> <span class="tiret blue-bg center-block"></span></h3>
						<p class="desc"><?php echo get_post_meta(get_the_ID(), 'page_description', true) ?></p>
					</div>                  
				</div>                
				
            </div>
			<div class="row">
				<div class="col-xs-12 text-center contrat">
                    <section class="sect-img" style="background-image:url(<?php echo get_the_post_thumbnail_url(get_the_ID(), "full") ?>)"></section>
                </div> 
			</div>
			<div class="row contrat">
				<div class="col-md-12">	
					<h3 class="text-uppercase">Inscription à un examen</h3>
					<hr class="blue-border">
					<ul class="list-unstyled">
						<li>Les examens doivent être commandés au minimum 48h à l'avance.</li>
						<li>Le passage d’examen n’est autorisé que suite à la présentation d’une pièce d'identité.</li>
						<li>La re-planification des examens n’est possible qu’après 24 heures de la date de passage.</li>
					</ul>
				</div>
			</div>
			<div class="row contrat">
				<div class="col-md-12">	
					<h3 class="text-uppercase">Horaires de passage d’examens</h3>
					<hr class="blue-border">
					<ul class="list-unstyled">
						<li>Du Lundi au Vendredi de 9h00 à 18h00, .</li>
						<li>Samedi Matin de 9h00 à 12h00.</li>
					</ul>
				</div>
			</div>
			<div class="row contrat">
				<div class="col-md-12">	
					<strong>
						Afin de vous aider à formuler votre requête et satisfaire votre demande de certification, notre service certification est à votre écoute par mail certification@rfc.com.tn ou par téléphone (+216) 36 06 06 06
					</strong>
				</div>
			</div>
        </div>
    </div>
</section>



<?php endwhile; ?>
<?php
get_footer();