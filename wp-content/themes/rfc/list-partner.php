<?php
/* Template Name: List of partners */
get_header();
?>

<!-- Header -->
<?php while(have_posts()): the_post(); ?>
	<header style="background-image:url(<?php echo get_post_meta(get_the_ID(), 'page_header_thumb', true) ?>);background-position: 0 44px;" class="container-fluid headers">
		
					                 
				
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
					<ul class="grid cs-style-3">
					<?php
					// Our services 
					$args = array(
						'numberposts' => -1,
						'category' => get_cat_ID('Nos partenaires'),
						'order' => "ASC",
						'orderby' => "ID"
					);

					$refrences = get_posts($args);
					
					foreach ($refrences as $key=>$refrence):
						if($key == 6){echo '<li class="col-lg-4 col-sm-6 col-xs-12"></li>';}
						?>
						<li class="col-lg-4 col-sm-6 col-xs-12">
							<figure>
								<a href="<?php echo get_post_meta($refrence->ID, 'link_partner', true)  ?>" target="_blank">
									<img src="<?php echo get_the_post_thumbnail_url($refrence->ID, "medium") ?>" alt="<?php echo $refrence->post_title; ?>" class="fixed-height">
								</a>
								<figcaption>
									<p>
										<a href="<?php echo get_post_meta($refrence->ID, 'link_partner', true)  ?>" target="_blank"><?php echo get_the_excerpt($refrence->ID); ?></a>
									</p>
								</figcaption>
							</figure>
						</li> 
						
						<?php
					endforeach;		
					?> 
					</ul>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; 
get_footer();