<?php get_header(); ?>

    <!-- main -->
    <main class="main">

        <?php get_template_part( './template-parts/page-header' ); ?>

        <?php get_template_part( './template-parts/breadcrumb' ); ?>

        <!-- section -->
        <section class="section">

            <!-- pageLead -->
            <div class="pageLead">
                <p class="pageLead__title">顧客が抱える課題に対して最適な施策を提案、その事例を紹介します。</p>
                <p class="pageLead__text">私たちが設立から20年、様々な業態・業種のプロジェクトに未来をつくるソリューションを提案して課題を解決して参りました。<br>その中で長年にわたって培い、経験に裏打ちされたノウハウが私たちの強みです。</p>
            </div><!-- /.pageLead -->

        </section>

        <!-- container -->
        <div class="container">

            <!-- section -->
            <section id="works-list" class="section section--bg section--bgGray">

                <!-- heading -->
                <h2 class="lv2Heading">
                    <span class="lv2Heading__main lv2Heading__main--uppercase">categories</span>
                    <span class="lv2Heading__sub">カテゴリー</span>
                </h2>

                <!-- termsWrapper -->
                <div class="termsWrapper">

                    <?php $achieves = get_terms( array( 'taxonomy' => 'achieve' ) );
                    if ( !empty( $achieves ) ) :
                    ?>

                        <!-- termsList -->
                        <ul class="termsList">

                            <?php foreach ( $achieves as $achieve ) : ?>
                                <li>
                                    <a href="<?php echo get_term_link( $achieve ); ?>"><?php echo $achieve->name ?></a>
                                </li>
                            <?php endforeach; ?>

                        </ul>

                    <?php endif; ?>

                </div><!-- /.termsWrapper -->

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