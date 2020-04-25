<?php
/* Template Name: List of Training */
get_header();
?>


<?php
function display_formation($meta_key) 
{

	if (!empty($meta_key)) {
		$args = array(
		'numberposts' => -1,
		'category' => get_cat_ID('formations'),
    	'meta_query' => array(
	        'relation' => 'AND',
		        'date_cmp' => array(
		            'key' => 'date_start_frm',
		        	),
		        'month' => array(
		            'key' => 'id_mois',
		            'value' => $meta_key,
		            'compare' => '=',
		        ), 
				    ),
				    'orderby' => 'date_cmp', // Results will be ordered by 'city' meta values.
				    'order' => 'ASC'
				);	
	}
	else {
		$args = array(
		'numberposts' => -1,
		'category' => get_cat_ID('formations'),
    	'meta_key' => 'date_start_frm',
		'orderby' => 'meta_value', // Results will be ordered by 'city' meta values.
		'order' => 'ASC'
				);	
	}



			$formations = get_posts($args);
			$cpt = 0;
			foreach ($formations as $formation):

				$end_date = date('d-m-Y',$end_date);
				$meta_key = explode("/", $meta_key);
				$meta_key = $meta_key[1];


				$x = get_post_meta($formation->ID, 'date_start_frm', true);
				$x = date('d-m-Y',strtotime($x));
				
				/*$end_date = str_replace('/', '-', get_post_meta($formation->ID, 'date_end', true));
				$end_date = strtotime($end_date);
				$end_date = date('d-m-Y',$end_date);*/

				/*$start_date = explode("/", $start_date);
				$start_month = $start_date[0];
				$start_day = $start_date[1];*/

				if($cpt == 0)
				{
					echo '<div class="row">';
				}
				?>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="trains" style="background-image:url('<?php echo get_the_post_thumbnail_url($formation->ID); ?>')"></div>
						<div class="content text-center">
							<h5 style="font-size: 13px;"><?php echo $formation->post_title; ?></h5>
							<span class="lock">CODE <?php echo get_post_meta($formation->ID, 'code', true);  ?></span>
							<span class="calendar">du <?php echo get_post_meta($formation->ID, 'date_start', true);  ?> au <?php echo get_post_meta($formation->ID, 'date_end', true);  ?></span>
							<span class="clocks"><?php echo get_post_meta($formation->ID, 'dureé_frm', true);  ?> jours</span>
							<!-- <a class="ul-more" href="<?php //echo get_the_permalink($formation->ID); ?>">EN SAVOIR PLUS</a> -->
						</div>
				</div>
				<?php 
				$cpt++;
				if($cpt == 3)
				{
					echo '</div>';
					$cpt= 0;
				}
							
			endforeach; 
			if($cpt != 0)
			{
				echo '</div>';
			}

}

error_reporting(E_ERROR | E_PARSE);
 ?>


<!-- Header -->
<?php while(have_posts()): the_post(); ?>
<header style="background-image:url(<?php echo get_post_meta(get_the_ID(), 'page_header_thumb', true); ?>)" class="container-fluid headers">

</header>
    <div class="container" >
        <div class="row" style="text-align: center;">
            <div class="col-lg-8 col-centered">
                <div class="intro-text">
                    <h1 class="head-title text-center"><?php the_title(); ?></h1>
                    <p><?php echo get_post_meta(get_the_ID(), 'page_header_desc', true); ?>
						<?php// echo "tt".var_dump($formations);  ?>
					</p>
                </div>                  
            </div>                    
        </div>
    </div>
<section id="training" class="training">
    <div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-3">
					<h3 class="search">recherche avancée</h3>
					<ul class="nav nav-pills nav-stacked" style="border: 1px solid #eee;">
					  <li class="active"><a data-toggle="tab" href="#TOUT">TOUT</a></li>
					  <li><a data-toggle="tab" href="#JANVIER"><i class="fa fa-calendar" aria-hidden="true"></i> JANVIER 2018</a></li>
					  <li><a data-toggle="tab" href="#Fevrier"><i class="fa fa-calendar" aria-hidden="true"></i> Février 2018</a></li>
					  <li><a data-toggle="tab" href="#mars"><i class="fa fa-calendar" aria-hidden="true"></i> mars 2018</a></li>
					  <li><a data-toggle="tab" href="#avril"><i class="fa fa-calendar" aria-hidden="true"></i> avril 2018</a></li>
					  <li><a data-toggle="tab" href="#mai"><i class="fa fa-calendar" aria-hidden="true"></i> mai 2018</a></li>
					  <li><a data-toggle="tab" href="#juin"><i class="fa fa-calendar" aria-hidden="true"></i> juin 2018</a></li>
					  <li><a data-toggle="tab" href="#juillet"><i class="fa fa-calendar" aria-hidden="true"></i> juillet 2018</a></li>
					  <li><a data-toggle="tab" href="#aout"><i class="fa fa-calendar" aria-hidden="true"></i> août 2018</a></li>
					  <li><a data-toggle="tab" href="#septembre"><i class="fa fa-calendar" aria-hidden="true"></i> septembre 2018</a></li>
					  <li><a data-toggle="tab" href="#octobre"><i class="fa fa-calendar" aria-hidden="true"></i> octobre 2018</a></li>
					  <li><a data-toggle="tab" href="#novembre"><i class="fa fa-calendar" aria-hidden="true"></i> novembre 2018</a></li>
					  <li><a data-toggle="tab" href="#decembre"><i class="fa fa-calendar" aria-hidden="true"></i> décembre 2018</a></li>
					</ul>
				</div>
				<div class="col-md-9 col-sm-9 col-xs-9">
					<div class="tab-content">
					  <div id="TOUT" class="tab-pane fade in active">
						<?php display_formation(0) ;?>
					  </div>


					  <div id="JANVIER" class="tab-pane fade">						
						<?php display_formation(1) ;?>
					  </div>


					  <div id="Fevrier" class="tab-pane fade">
						<?php display_formation(2); ?>
					  </div>


					  <div id="mars" class="tab-pane fade">						
						<?php display_formation(3); ?>
					  </div>


					  <div id="avril" class="tab-pane fade">
						<?php display_formation(4); ?>
					  </div>


					  <div id="mai" class="tab-pane fade">						
						<<?php display_formation(5); ?>
					  </div>


					  <div id="juin" class="tab-pane fade">
						<?php display_formation(6); ?>
					  </div>


					  <div id="juillet" class="tab-pane fade">						
						<?php display_formation(7); ?>
					  </div>


					  <div id="aout" class="tab-pane fade">
						<?php display_formation(8); ?>
					  </div>


					  <div id="septembre" class="tab-pane fade">						
						<?php display_formation(9); ?>
					  </div>


					  <div id="octobre" class="tab-pane fade">
						<?php display_formation(10); ?>
					  </div>


					  <div id="novembre" class="tab-pane fade">						
						<?php display_formation(11); ?>
					  </div>


					  <div id="decembre" class="tab-pane fade">
						<?php display_formation(12); ?>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endwhile; ?>
<?php
get_footer();
