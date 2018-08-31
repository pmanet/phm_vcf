<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure, consequuntur. Expedita quas rem itaque" />
    
    <?php wp_head();?> <!-- chargement de l'entete -->
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4"> <!-- navbar -->
            <a class="navbar-brand" href="<?php echo site_url(); ?>"><i class="fas fa-home"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <?php
                    wp_nav_menu([
                        'menu'            => 'primary',
                        'theme_location'  => 'primary',
                        'container'       => 'div',
                        'container_id'    => 'bs4navbar',
                        'container_class' => 'collapse navbar-collapse',
                        'menu_id'         => false,
                        'menu_class'      => 'navbar-nav mr-auto',
                        'depth'           => 2,
                        'fallback_cb'     => 'bs4navwalker::fallback',
                        'walker'          => new bs4navwalker()
                    ]);
                ?>
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Rechercher" aria-label="Rechercher">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
                </form>
        </nav> <!-- fin de navbar -->
    </header>
    <div class="container">
        <div class="jumbotron">
            <h1>Site de test</h1>
        </div> <!-- fin jumbotron -->
    </div> <!-- fin container -->

    <section>        
        <div class="container">
            <!-- Boucle WordPress -->
            <?php if (have_posts()): ?>        
                <?php while( have_posts()): the_post(); ?>
                    <div class="row">
                        <div class="col-2">
                            <?php the_post_thumbnail('thumbnail') ?>
                        </div>
                        <div class="col-10">                        
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div> <!-- fin row -->
                <?php endwhile; ?>
            <?php else: ?>
                <div class="row">
                    <div class="col-12">
                        <p>Aucun article trouvé</p>                            
                    </div>
                </div><!-- fin de row -->
            <?php endif; ?><!-- fin de la boucle Wordpress -->        
        </div><!-- fin container -->
    </section>
    <?php wp_footer();?>
</body>
</html>