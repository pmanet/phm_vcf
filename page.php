<?php get_header(); ?>
    <!-- Boucle WordPress -->
    <?php if (have_posts()): ?>        
        <?php while( have_posts()): the_post(); ?>
            <div class="row">
                <?php if (has_post_thumbnail()): 
                    $class1 = 'col-4 col-md-3 col-lg-2';
                    $class2 = 'col-8 col-md-9 col-lg-10';
                else:
                    $class1 = 'col-12';
                    $class2 = 'col-12';
                endif; ?>

                <div class="<?php echo $class1 ?>">
                    <?php the_post_thumbnail('thumbnail', array( 'class' => 'img-fluid rounded-circle' )) ?>
                </div>
                <div class="<?php echo $class2 ?>">                        
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                </div>
            </div> <!-- fin row -->
        <?php endwhile; ?>
        <div class="row"><!-- row -->
            <div class="col-6 offset-3">
                <ul class="nav navigation justify-content-between align-items-center">
                    <li class="nav-item"><?php previous_post_link('<strong><i class="fas fa-arrow-alt-circle-left"></i> %link</strong>'); ?></li>
                    <li class="nav-item"><?php next_post_link('<strong>%link <i class="fas fa-arrow-alt-circle-right"></i></strong>'); ?></li>
                </ul>                        
            </div>
        </div><!-- fin de row -->
        
    <?php else: ?>
        <div class="row">
            <div class="col-12">
                <p>Aucun article trouvé</p>                            
            </div>
        </div><!-- fin de row -->
    <?php endif; ?><!-- fin de la boucle Wordpress -->
    </div>       
<?php get_sidebar(); ?>            
<?php get_footer(); ?>