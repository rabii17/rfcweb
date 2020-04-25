<html>
    <head>
        <base href="<?php echo esc_url(get_template_directory_uri()); ?>/">
        <?php
        /*
          Template Name: En construction
         */
        wp_head();
        ?>
    </head>
    <body>
        <div class="container-fluid underconstraction">
            <div class="container white-shad">
                <div class="row">
                    <div class="col-xs-12">
                        <a href="/"><img class="center-block" src="img/logo.png"></a>
                    </div>                    
                </div>
                <div class="row">                    
                    <div class="col-md-10 col-md-offset-1">
                        <section class=" text-center">                            
                            <h1>Site en construction</h1>
                            <span class="span">Nous serons bientôt là avec notre nouveau site, inscrivez-vous pour être averti.</span>
                            <div class="input-group newsletter">
                                <input type="text" class="form-control" placeholder="adresse e-mail">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary see-all" type="button">s'inscrire</button>
                                </span>
                            </div>                            
                        </section>
                    </div>
                </div>
                <footer class="row">
                    <div class="col-xs-12 text-center">
                        <ul class="list-unstyled list-inline">
                            <li><span class="map">Adresse :</span> Imm. SAADI Tour C-D, 4ème Etage, El Menzah IV, 1082 Tunis</li>
                            <li><span class="phone">Tél :</span> +216 36 060 606    Fax : +216 71 750 651  </li>
                            <li><span class="envelope">E-mail :</span> contact@rfc.com.tn</li>
                        </ul>
                    </div>

                </footer>
            </div>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>
