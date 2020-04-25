<?php
/*
 * Single Post Template: Service Post template
 */
 get_header();  ?>
 <!-- Header -->
<?php while(have_posts()): the_post(); 
	$categories = get_the_category(get_the_ID());
	
?>

<header style="background-image:url(<?php echo get_post_meta(get_the_ID(), 'page_header_thumb', true) ?>)" class="container-fluid headers">
    <div class="container" >
        <div class="row">
            <div class="col-lg-8 col-centered">
                <div class="intro-text">
				<?php 
					foreach($categories as $category):
				?>
                    <h1 class="head-title text-center"><?php echo $category->name; ?></h1>
                    <p><?php echo $category->description; ?></p>
				<?php break; endforeach;?>
                </div>                  
            </div>                    
        </div>
    </div>
</header>

<section class="">
	<div class="container-fluid">
        <div class="container">
            <div class="row">
				<div class="col-lg-12 text-left">
					<div class="intro-text">
						<h3 class="titles service-img" style = "background-image:url(<?php echo get_the_post_thumbnail_url($service->ID, "full") ?>); margin-bottom: 25px;"><?php echo get_the_title(); ?></h3>
						<?php echo get_the_content(); ?>
					</div>                  
				</div>				
            </div>
			<div class="row contrat" style="margin-top: 35px;">
				<div class="col-md-6" >
					<section class="sect-img <?php echo get_post_meta(get_the_ID(), 'service_css_class', true) ?>-border-bottom" style="background-image:url(<?php echo get_post_meta(get_the_ID(), 'first_service_thumb', true) ?>)"></section>
				</div>
				<div class="col-md-6" style="padding-left: 67px;padding-top: 44px;">
					<h3 class="text-uppercase"><?php echo get_post_meta(get_the_ID(), 'first_service_title', true) ?><span class="tiret <?php echo get_post_meta(get_the_ID(), 'service_css_class', true) ?>-bg "></span></h3>
					<p>
						<?php echo get_post_meta(get_the_ID(), 'first_service_description', true) ?>
					</p>
				</div>
			</div>
			
			<div class="row contrat">				
				<div class="col-md-6" style="padding-right: 67px;padding-top: 44px;">
					<h3 class="text-uppercase"><?php echo get_post_meta(get_the_ID(), 'sec_service_title', true) ?><span class="tiret <?php echo get_post_meta(get_the_ID(), 'service_css_class', true) ?>-bg "></span></h3>
					<p>
						<?php echo get_post_meta(get_the_ID(), 'sec_service_description', true) ?>
					</p>
				</div>
				<div class="col-md-6">
					<section class="sect-img <?php echo get_post_meta(get_the_ID(), 'service_css_class', true) ?>-border-bottom" style="background-image:url(<?php echo get_post_meta(get_the_ID(), 'sec_service_thumb', true) ?>)"></section>
				</div>
			</div>
			
        </div>
    </div>
</section>

<section class="contact-block">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<p class="text-white text-uppercase">Duis vitae purus iaculis, lobortis odio quis, molestie arcu.</p>
					<a class="event-link" href="/contact">contactez nous</a>
				</div>
			<div>
		</div>
	<div>
</section>
<?php endwhile; ?>
<?php
get_footer();

