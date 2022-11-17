<?php if( have_posts() ) : ?>
    <?php while( have_posts() ) : the_post(); ?>

        <!-- pageLead -->
        <div class="pageLead">
            <?php the_content(); ?>
        </div><!-- /.pageLead -->

    <?php endwhile; ?>
<?php endif; ?>