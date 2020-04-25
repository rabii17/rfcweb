<?php
/*
 * Single Post Template: Training Post template
 */
 get_header();  ?>
 <!-- Header -->
<?php while(have_posts()): the_post(); 
	$categories = get_the_category(get_the_ID());
?>

<header style="background-image:url(<?php echo get_post_meta(get_the_ID(), 'page_header_thumb', true) ?>)" class="container-fluid headers">

</header>
    <div class="container" style="text-align:center">
        <div class="row">
            <div class="col-lg-8 col-centered">
                <div class="intro-text">
				
                    <h1 class="head-title text-red text-center"><?php echo 'Formation : '.get_the_title(); ?></h1>
				
                </div>                  
            </div>                    
        </div>
    </div>
<section class="training">
	<div class="container-fluid">
        <div class="container">
            <div class="row">
				<div class="col-lg-12 text-left">
                    <div class="trains" style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>');"></div>
                    <div class="content text-center">
					<ul class="list-unstyled list-inline">
						<li><span class="lock">CODE <?php echo get_post_meta(get_the_ID(), 'code', true)  ?></span></li>
						<li><span class="calendar">du <?php echo get_post_meta(get_the_ID(), 'date_start', true)  ?> au <?php echo get_post_meta(get_the_ID(), 'date_end', true)  ?></span></li>
						
						<li><span class="clocks">5 jours</span></li>
					</ul>                                                
                    </div>            
				</div>	
				<div class="col-lg-12 text-left" style="margin-top: 2%;">
					<?php echo get_the_content(); ?>
				</div>
				<!--
				<div class="col-lg-12 text-left">
					<h5 class="text-uppercase" style="text-align:left !important;">CERTIFICATION : </h5>
					<div style="padding: 25px; border: 1px solid #ea582e">
						Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. 
					</div>
				</div>-->
				<div class="col-lg-12 text-right" style="margin-top:25px;">
					<a class="event-link red-bg" href="/contact">Nous contacter</a>
					<a class="event-link red-bg" href="<?php echo get_post_meta(get_the_ID(), 'datasheet', true)  ?>" target="_blank">Télécharger</a>
				</div>
            </div>
        </div>
    </div>
</section>

<section class="contact-block" style="z-index:1;">
<div class="bg_opacity_on_black"></div>
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<p class="text-white text-uppercase">télécharger notre Catalogue des formations 2018</p>
					<a class="event-link red-bg" href="/?media_dl=657">Télécharger</a>
				</div>
			<div>
		</div>
	<div>
</section>
<?php endwhile; ?>
<?php
get_footer();

