<?php if( have_posts() ) : ?>
    <?php while( have_posts() ) : the_post(); ?>

        <div class="cards__item">

            <!-- card -->
            <a class="card card--link" href="<?php the_permalink(); ?>">
                <figure class="card__thumb">

                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'large' ); ?>
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/build/images/noimage.jpg" alt="">
                    <?php endif; ?>

                </figure>
                <div class="card__body">
                    <div class="card__companyName">

                        <?php echo get_companyName(); ?>

                    </div>
                    <h2 class="card__title"><?php the_title(); ?></h2>
                    <div class="card__tagWrapper">

                        <?php
                        $terms = get_the_terms( $post->ID, 'achieve' );
                        foreach( $terms as $term ) {
                            $term_name = $term->name;
                            echo '<span class="tag tag--round">'.esc_html( $term_name ).'</span>';
                        }
                        ?>

                    </div><!-- /.cards__aria -->
                </div><!-- /.cards__body -->
            </a>
        </div><!-- /.cards__item -->

    <?php endwhile; ?>
<?php endif; ?>