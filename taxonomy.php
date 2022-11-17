<?php get_header(); ?>

    <!-- main -->
    <main class="main">

        <!-- pageHeader -->
        <div class="pageHeader">
            <div class="pageHeader__inner">

                <!-- heading -->
                <h1 class="lv1Heading">

                    <span class="lv1Heading__main lv1Heading__main--uppercase"><?php echo get_page_mainTitle(); ?></span>
                    <!-- CPT ラベル 出力 -->
                    <span class="lvHeading__sub"><?php echo get_page_subTitle(); ?></span>
                </h1>

            </div><!-- /.pageHeader__inner -->
        </div><!-- /.pageHeader -->

        <?php get_template_part( './template-parts/breadcrumb' ); ?>

        <!-- container -->
        <div class="container">

            <!-- section -->
            <section id="works-list" class="section section--bg section--bgGray">

                <!-- heading -->
                <h2 class="lv2Heading">
                    <span class="lv2Heading__main"><?php single_term_title(); ?></span>
                </h2>

                <!-- cards -->
                <div class="cards cards--col3">

                    <?php get_template_part( './template-parts/loop', 'works' ); ?>

                </div><!-- /.cards -->
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