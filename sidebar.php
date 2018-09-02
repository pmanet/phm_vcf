<?php if ( is_active_sidebar( 'sidebar_right' ) ) : ?>
    <aside class="col-12 col-md-4">
        <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar_right' ); ?>
        </div><!-- #primary-sidebar -->
    </aside>
<?php endif; ?>
</div>