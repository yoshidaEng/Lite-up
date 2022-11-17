<?php get_header(); ?>

    <!-- main -->
    <main class="main">

        <?php get_template_part( './template-parts/breadcrumb' ); ?>

        <!-- container -->
        <div class="container _widthNarrow">

            <!-- section -->
            <section class="section">
                <h1 class="section__title">お知らせ一覧</h1>

                <!-- verticalPost -->
                <div class="verticalPost">
                    <ul class="verticalPost__List">

                        <?php if( have_posts() ) : ?>
                            <?php while( have_posts() ) : the_post(); ?>

                                <li class="verticalPost__item">
                                    <div class="verticalPost__header">
                                        <time class="verticalPost__date" datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y-m-d'); ?></time>

                                        <!-- tag -->
                                        <span class="tag">
                                            <?php echo get_category_name(); ?>
                                        </span>

                                    </div><!-- /.verticalPost__header -->
                                    <a class="verticalPost__title" href="<?php the_permalink(); ?>">
                                        <h3><?php the_title(); ?></h3>
                                    </a>
                                </li>

                            <?php endwhile; ?>
                        <?php endif; ?>

                    </ul>

                </div><!-- /.verticalPost -->

                <?php echo get_template_part( './template-parts/pager' ); ?>

            </section>

        </div><!-- /.container -->

    </main>

    <?php get_footer(); ?>