<?php
/*
 * Single Post Template: News Post template
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
				<div class="col-lg-12 text-center">
					<div class="intro-text">
						<h3 class="titles text-blue" style="font-weight: initial;"><?php echo get_the_title(get_the_ID()) ?><span class="tiret blue-bg center-block"></span></h3>
						<p><?php echo get_the_excerpt(); ?></p>
					</div>                  
				</div>
				<div class="col-lg-12 text-center">
					<div class="sect-img blue-border-bottom" style="background-image:url(<?php echo get_the_post_thumbnail_url(get_the_ID(), "full") ?>)"></div>                 
				</div>
				<div class="col-lg-12 text-left">
					<article style="margin-top:50px;">
						<?php echo get_the_content(); ?>
					</article>
				</div>
            </div>			
        </div>
    </div>
</section>

<?php endwhile; ?>
<?php
get_footer();

