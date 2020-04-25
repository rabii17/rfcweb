<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <!--
   ____   _____ ______ _____  ______  _____  ____    _______ ______ _____ _    _    _____ _______       _____ _  __
  / __ \ / ____|  ____|  __ \|  ____|/ ____|/ __ \  |__   __|  ____/ ____| |  | |  / ____|__   __|/\   / ____| |/ /
 | |  | | (___ | |__  | |__) | |__  | (___ | |  | |    | |  | |__ | |    | |__| | | (___    | |  /  \ | |    | ' / 
 | |  | |\___ \|  __| |  _  /|  __|  \___ \| |  | |    | |  |  __|| |    |  __  |  \___ \   | | / /\ \| |    |  <  
 | |__| |____) | |____| | \ \| |____ ____) | |__| |    | |  | |___| |____| |  | |  ____) |  | |/ ____ \ |____| . \ 
  \____/|_____/|______|_|  \_\______|_____/ \____/     |_|  |______\_____|_|  |_| |_____/   |_/_/    \_\_____|_|\_\
                                                                                                                   
                                                                                                                   
        -->

        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <base href="<?php echo esc_url(get_template_directory_uri()); ?>/">
        <!--[if lt IE 9]>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js"></script>
        <![endif]-->
        <?php wp_head(); ?>

        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->        
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkmkL84zLD3NqTz9ljc_Ox8XHn78xnGI4&callback=initMap" type="text/javascript"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123147962-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-123147962-1');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TCNRK2B');</script>
<!-- End Google Tag Manager -->

    </head>
    <body id="page-top" class="index">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TCNRK2B"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

        <!-- Navigation -->
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a href="/"><img src="<?php echo get_template_directory_uri() ?>/img/logo.png" class="img-responsive" /></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse header-limiter" id="bs-example-navbar-collapse-1">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'nav navbar-nav pull-right',
                    ));
                    ?>  
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
