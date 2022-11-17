<?php if ( is_page( 'contact' ) ) {
    remove_filter( 'the_content', 'wpautop' );
}
?>

<?php get_header(); ?>

    <!-- main -->
    <main class="main">

        <?php get_template_part( './template-parts/page-header' ); ?>

        <?php get_template_part( './template-parts/breadcrumb' ); ?>

        <!-- container -->
        <div class="container _widthNarrow">

                <!-- pageContent -->
                <div class="pageContent">
                    <div class="pageContent__inner">
                        <?php if( have_posts() ) : ?>
                            <?php while( have_posts() ) : the_post(); ?>
                                <?php the_content(); ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div><!-- /.pageContent__inner -->

                </div><!-- /.pageContent -->

        </div><!-- /.container -->

    </main>

    <?php get_footer(); ?>