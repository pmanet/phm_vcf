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
            <a class="navbar-brand" href="#"><i class="fas fa-home"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="jumbotron">
            <h1>Site de test</h1>
        </div> <!-- fin jumbotron -->
    </div> <!-- fin container -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/test.jpg" 
                    alt="texte alternatif" class="img-fluid">
                </div>
                <div class="col-10">
                    <h1>Titre de l'article</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sed doloremque doloribus.
                     Ab impedit incidunt adipisci magni? Laborum minus maxime, quis, a iste eveniet optio 
                     reprehenderit in eaque officia voluptatum.</p>
                </div>
            </div> <!-- fin row -->
        </div><!-- fin container -->
    </section>
    <?php wp_footer();?>
</body>
</html>