<?php get_header(); ?>

    <!-- main -->
    <main class="main">

        <?php get_template_part( './template-parts/breadcrumb' ); ?>

        <!-- container -->
        <div class="container _narrow">

            <!-- section -->
            <section class="section">

                <?php if( have_posts() ) : ?>
                    <?php while( have_posts() ) : the_post(); ?>

                        <!-- message -->
                        <div class="message">
                            <div class="message__text">
                                <?php the_content(); ?>
                            </div><!-- /.message__text -->
                            <div class="message__btn">
                                <a href="<?php esc_url( home_url() ); ?>">ホームへ戻る</a>
                            </div><!-- /.message__btn -->
                        </div><!-- /.message -->

                    <?php endwhile; ?>
                <?php endif; ?>

            </section>

        </div><!-- /.container -->

    </main>

    <?php get_footer(); ?>