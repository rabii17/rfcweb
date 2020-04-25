<?php
/*
 * Single Post Template: Events Post template
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
<section class="">
	<div class="container-fluid">
        <div class="container">
            <div class="row">
				<div class="col-lg-12 ">
					<div class="intro-text">
						<h3 class="titles text-blue text-center" style="font-weight: initial;"><?php echo get_post_meta(get_the_ID(), 'page_header_desc', true) ?><span class="tiret blue-bg center-block"></span></h3>
                        <div class="col-md-12 center-block col-md-offset-2" style="margin-bottom: 15px;">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="" class="img-responsive center-block">
                        </div>
						<?php echo get_the_content(); ?>
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

