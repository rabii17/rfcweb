<?php
/* Template Name: Contact Page */
get_header();
?>

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
<section id="contact" style="padding-top: 0;">
    <div class="container">
        <?php echo do_shortcode('[contact-form-7 id="39" title="Contact form 1"]'); ?> 
    </div>
</section>

	<div class="container-fluid">
		<div id="map"></div>
	</div>


<?php endwhile; ?>
<?php
get_footer();
