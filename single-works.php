<?php get_header(); ?>

    <!-- main -->
    <main class="main">

        <?php get_template_part( './template-parts/breadcrumb' ); ?>

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <!-- postHeader -->
                <div class="postHeader">

                    <?php
                        $terms = get_the_terms( $post->ID, 'achieve' );
                        foreach( $terms as $term ) {
                            $term_name = $term->name;
                            echo '<span class="tag tag--round">'.esc_html( $term_name ).'</span>';
                        }
                    ?>

                    <h1 class="postHeader__title"><?php the_title(); ?></h1>

                    <!-- field -->
                    <div class="field">
                        <div class="field__label">cliemt</div>
                        <div class="field__name"><?php echo get_companyName(); ?></div>
                    </div><!-- /.field -->

                </div><!-- /.postHeader -->

                <!-- container -->
                <div class="container _widthNarrow">

                    <!-- postContent -->
                    <div class="postContent">

                        <!-- postBody -->
                        <div class="postBody">
                            <?php the_content(); ?>
                        </div><!-- /.postBody -->

                    </div><!-- /.postContent -->

            <?php endwhile; ?>
        <?php endif; ?>

            <!-- section -->
            <section id="works-list" class="section section--bg section--bgGray">

                <!-- heading -->
                <h2 class="lv2Heading">
                    <span class="lv2Heading__main">関連記事</span>
                </h2>

                <?php
                $terms = get_the_terms( $post->ID, 'achieve' );

                foreach ( $terms as $term ) :
                    $term_slug = $term->slug;
                endforeach;

                $args = array(
                    'post_type' => 'works',
                    'post_not_in' => array( $post->ID ),
                    'posts_per_page' => 3,
                    'orderby' => 'rand',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'achieve',
                            'field' => 'slug',
                            'terms' => $term_slug,
                        )
                    )
                );

                $common_posts = new WP_Query( $args );

                if ( $common_posts->have_posts() ) :
                ?>

                    <!-- cards -->
                    <div class="cards cards--col3">
                        <?php while ( $common_posts->have_posts() ) : $common_posts->the_post(); ?>
                            <div class="cards__item">

                                <!-- card -->
                                <a class="card card--link" href="<?php the_permalink(); ?>">
                                    <figure class="card__thumb">
                                        <?php the_post_thumbnail(); ?>
                                    </figure>
                                    <div class="card__body">
                                        <div class="card__companyName"><?php echo get_companyName(); ?></div>
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
                        <?php wp_reset_postdata(); ?>

                    </div><!-- /.cards -->

                <?php endif; ?>

            </section>

            <!-- section -->
            <section class="section section--bgBlue">
                <?php echo get_template_part( './template-parts/cta-contact-form' ); ?>
            </section>

        </div><!-- /.container -->

    </main>

    <!-- addWhiteSpace -->
    <div class="addWhiteSpace"></div>

    <?php get_footer(); ?>