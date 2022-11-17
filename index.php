<?php get_header(); ?>

    <!-- main -->
    <main class="main">

        <?php get_template_part( './template-parts/breadcrumb' ); ?>

        <?php if( have_posts() ) : ?>
            <?php while( have_posts() ) : the_post(); ?>

                <!-- postHeader -->
                <div class="postHeader">
                    <time class="postHeader__date"><?php the_time( 'Y-m-d' ); ?></time>

                    <!-- tag -->
                    <span class="tag"><?php echo get_category_name(); ?></span>

                    <h1 class="postHeader__title"><?php the_title(); ?></h1>
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

                    <!-- section -->
                    <section class="section section--bgBlue">
                        <?php get_template_part( './template-parts/cta-contact-form' ); ?>
                    </section>

                </div><!-- /.container -->

            <?php endwhile; ?>
        <?php endif; ?>

    </main>

    <!-- addWhiteSpace -->
    <div class="addWhiteSpace"></div>

    <?php get_footer(); ?>