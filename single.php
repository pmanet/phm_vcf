<?php get_header(); ?>
    <section>        
        <div class="container">
            <!-- Boucle WordPress -->
            <?php if (have_posts()): ?>        
                <?php while( have_posts()): the_post(); ?>
                    <div class="row">
                        <div class="col-4 col-lg-2">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array( 'class' => 'img-fluid img-thumbnail' )) ?></a>
                        </div>
                        <div class="col-8 col-lg-10">                        
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div> <!-- fin row -->
                <?php endwhile; ?>
                <div class="row"><!-- row -->
                    <div class="col-12">
                        <nav>
                            <ul class="navigation d-flex justify-content-between">
                                <li><?php previous_post_link(); ?></li>
                                <li><?php next_post_link(); ?></li>
                            </ul>
                        </nav>
                    </div>
                </div><!-- fin de row -->
                
            <?php else: ?>
                <div class="row">
                    <div class="col-12">
                        <p>Aucun article trouvé</p>                            
                    </div>
                </div><!-- fin de row -->
            <?php endif; ?><!-- fin de la boucle Wordpress -->        
        </div><!-- fin container -->
    </section>
<?php get_footer(); ?>