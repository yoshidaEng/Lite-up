<?php get_header(); ?>

    <!-- main -->
    <main class="main">

        <?php get_template_part( './template-parts/page-header' ); ?>

        <?php get_template_part( './template-parts/breadcrumb' ); ?>

        <!-- section -->
        <section class="section">
            <?php get_template_part( './/template-parts/page-lead' ); ?>
        </section>

        <!-- container -->
        <div class="container">

            <!-- section -->
            <section class="section section--bg section--bgGray">

                <!-- tabList -->
                <ul class="js-tab-list tabList" role="tablist">
                    <li  class="tabList__item">
                        <button class="js-tabButton tabButton tabButton--first" role="tab" aria-selected="true" aria-controls="tabpanel-01">企画・提案</button>
                    </li>
                    <li class="tab tabList__item">
                        <button class="js-tabButton tabButton tabButton--second" role="tab" aria-selected="false" aria-controls="tabpanel-02">制作・運用</button>
                    </li>
                    <li class="tab tabList__item">
                        <button class="js-tabButton tabButton tabButton--third" role="tab" aria-selected="false" aria-controls="tabpanel-03">検証・分析</button>
                    </li>
                </ul>

                <!-- tabpanelContent -->
                <div class="js-tab-panel-wrapper tabpanelContent">

                    <!-- tabpanel -->
                    <div id="tabpanel-01" class="js-tabpanel tabpanel tabpanel--first" role="tabpanel" aria-hidden="false">
                        <div class="tabpanel__header tabpanel__header--first">
                            <h2 class="tabpanel__heading">
                                <span class="tabpanel__mainTitle tabpanel__mainTitle--uppercase">plan</span>
                                <span class="tabpanel__subTitle">企画・提案</span>
                            </h2>
                            <div class="tabpanel__text">
                                <p>ヒアリングを通してお客様が持つ課題を明確にし、<br>解決のためのプロセスを提案します。</p>
                            </div><!-- /.tabpanel__text -->
                        </div><!-- /.tabpanel__header -->

                        <!-- mediaList -->
                        <ul class="mediaList">
                            <li class="mediaList__item">

                                <!-- media -->
                                <div id="content-plan" class="media">
                                    <div class="media__body">
                                        <h3 class="media__heading">
                                            <span class="media__mainTitle">コンテンツの企画</span>
                                        </h3>
                                        <div class="media__text">
                                            <p>コミュニケーションを重ねながら、お客様が抱える課題を明確にし、価値ある企画を提案を行います。コンテンツの企画・体制づくりを一貫してサポートします。</p>
                                        </div><!-- /.media__text -->
                                        <div class="media__btn">
                                            <a href="<?php echo get_term_link( 'content-planning', 'achieve' ); ?>" class="btn btn--animate-flow-right btn--arrowIcon"><span>このサービスの事例紹介はこちら</span></a>
                                        </div><!-- /.media__btn -->
                                    </div><!-- /.media__body -->
                                    <figure class="media__thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/build/images/image_04.jpg" alt="チームで情報を分析しながらコンテンツを企画している画像">
                                    </figure>
                                </div><!-- /.media -->

                            </li>
                            <li class="mediaList__item">

                                <!-- media -->
                                <div id="sns-support" class="media media--reverse">
                                    <div class="media__body">
                                        <h3 class="media__heading">
                                            <span class="media__mainTitle">SNS導入支援</span>
                                        </h3>
                                        <div class="media__text">
                                            <p>FacebookやTwitterをはじめとしたソーシャルメディア上での企業のサービスや商品のブランディング活動を支援します。<br>
                                                SNSはいまや企業のイメージを形作る重要な役割を担います。業種に関わらず様々な企業を支援してきた経験から、お客様に適したブランディング活動を提案して参ります。
                                            </p>
                                        </div><!-- /.media__text -->
                                        <div class="media__btn">
                                            <a href="<?php echo get_term_link( 'sns-support', 'achieve' ); ?>" class="btn btn--animate-flow-right btn--arrowIcon"><span>このサービスの事例紹介はこちら</span></a>
                                        </div><!-- /.media__btn -->
                                    </div><!-- /.media__body -->
                                    <figure class="media__thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/build/images/image_05.jpg" alt="携帯電話を左手に持ち画面を見ている男性の画像">
                                    </figure>
                                </div><!-- /.media -->

                            </li>
                            <li class="mediaList__item">

                                <!-- media -->
                                <div id="ad-support" class="media">
                                    <div class="media__body">
                                        <h3 class="media__heading">
                                            <span class="media__mainTitle">広告の企画・提案</span>
                                        </h3>
                                        <div class="media__text">
                                            <p>お客様のマーケティング戦略に合った最適なブランディング企画を提案します。<br>
                                                弊社が得意とするTwitterやInstagramにおいてはこれまでに蓄積されたノウハウより適切なターゲットユーザーに効果的なアプローチを行うことでオーガニックからのからのアクセス増加に繋げています。
                                            </p>
                                        </div><!-- /.media__text -->
                                        <div class="media__btn">
                                            <a href="<?php echo get_term_link( 'advertisement-planning', 'achieve' ); ?>" class="btn btn--animate-flow-right btn--arrowIcon btn--arrowIcon"><span>このサービスの事例紹介はこちら</span></a>
                                        </div><!-- /.media__btn -->
                                    </div><!-- /.media__body -->
                                    <figure class="media__thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/build/images/image_06.jpg" alt="チームで話し合いながら広告の企画を進めている人たちの画像">
                                    </figure>
                                </div><!-- /.media -->

                            </li>
                        </ul>

                    </div><!-- /.tabpanel -->

                    <!-- tabpanel -->
                    <div id="tabpanel-02" class="js-tabpanel tabpanel tabpanel--second" role="tabpanel" aria-hidden="true">
                        <div class="tabpanel__header tabpanel__header--second">
                            <h2 class="tabpanel__heading">
                                <span class="tabpanel__mainTitle tabpanel__mainTitle--uppercase">production</span>
                                <span class="tabpanel__subTitle">制作・運用</span>
                            </h2>
                            <div class="tabpanel__text">
                                <p>デジタルコンテンツの企画からライティング、SNS投稿の代行まで<br>顧客に必要な情報の発信を適切に行います。</p>
                            </div><!-- /.tabpanel__text -->
                        </div><!-- /.tabpanel__header -->

                        <!-- mediaList -->
                        <ul class="mediaList">
                            <li class="mediaList__item">
                                <!-- media -->
                                <div id="digital-content-production" class="media">
                                    <div class="media__body">
                                        <h3 class="media__heading">
                                            <span class="media__mainTitle">デジタルコンテンツの制作・運用</span>
                                        </h3>
                                        <div class="media__text">
                                            <p>これまでに蓄積されてきたノウハウを活かしクリエイティブなコンテンツを制作します自身の魅力ををどのように発信していくかお悩みのお客様にも取材を通してソーシャルメディア向けの魅力的なコンテンツを作り上げ、ユーザーに発信します。</p>
                                        </div><!-- /.media__text -->
                                        <div class="media__btn">
                                            <a href="<?php echo get_term_link( 'digital-content-production', 'achieve' ); ?>" class="btn btn--animate-flow-right btn--arrowIcon"><span>このサービスの事例紹介はこちら</span></a>
                                        </div><!-- /.media__btn -->
                                    </div><!-- /.media__body -->
                                    <figure class="media__thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/build/images/image_07.jpg" alt="デジタルコンテンツの素材を撮影するためのカメラが写っている画像">
                                    </figure>
                                </div><!-- /.media -->
                            </li>

                            <li class="mediaList__item">

                                <!-- media -->
                                <div id="ad-support" class="media media--reverse">
                                    <div class="media__body">
                                        <h3 class="media__heading">
                                            <span class="media__mainTitle">広告の制作・運用</span>
                                        </h3>
                                        <div class="media__text">
                                            <p>Twitter、Facebook、Instagram等のSNS向けに顧客のマーケティング戦略に沿った適切なターゲティングを行ないクリエイティブな広告を提案します。</p>
                                        </div><!-- /.media__text -->
                                        <div class="media__btn">
                                            <a href="<?php echo get_term_link( 'advertisement-production', 'achieve' ); ?>" class="btn btn--animate-flow-right btn--arrowIcon"><span>このサービスの事例紹介はこちら</span></a>
                                        </div><!-- /.media__btn -->
                                    </div><!-- /.media__body -->
                                    <figure class="media__thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/build/images/image_08.jpg" alt="PDCAサイクルの画像">
                                    </figure>
                                </div><!-- /.media -->
                            </li>

                            <li class="mediaList__item">

                            </li>
                        </ul>

                    </div><!-- /.tabpanel-->

                    <!-- tabpanel -->
                    <div id="tabpanel-03" class="js-tabpanel tabpanel tabpanel--third" role="tabpanel" aria-hidden="true">
                        <div class="tabpanel__header tabpanel__header--third">
                            <h2 class="tabpanel__heading">
                                <span class="tabpanel__mainTitle tabpanel__mainTitle--uppercase">analyze</span>
                                <span class="tabpanel__subTitle">検証・分析</span>
                            </h2>
                            <div class="tabpanel__text">
                                <p>運用結果を分析し、次の施作へとつなげます。</p>
                            </div><!-- /.tabpanel__text -->
                        </div><!-- /.tabpanel__header -->

                        <!-- mediaList -->
                        <ul class="mediaList">
                            <li class="mediaList__item">

                                <!-- media -->
                                <div id="access-analysis" class="media">
                                    <div class="media__body">
                                        <h3 class="media__heading">
                                            <span class="media__mainTitle">アクセス解析</span>
                                        </h3>
                                        <div class="media__text">
                                            <p>WEBサイトをリニューアル・改善する上で重要なものがWEBサイトの現状を把握するアクセス解析です。<br>目的に応じた行動分析ツールを使い分けユーザーの行動を詳細に分析し、WEBサイトの課題を抽出して改善へとつなげていきます。</p>
                                        </div><!-- /.media__text -->
                                    </div><!-- /.media__body -->
                                    <figure class="media__thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/build/images/image_09.jpg" alt="アクセス解析データの資料とパソコンが写っている画像">
                                    </figure>
                                </div><!-- /.media -->

                            </li>
                            <li class="mediaList__item">

                                <!-- media -->
                                <div id="effect" class="media media--reverse">
                                    <div class="media__body">
                                        <h3 class="media__heading">
                                            <span class="media__mainTitle">施策の効果測定</span>
                                        </h3>
                                        <div class="media__text">
                                            <p>広告効果と費用対効果を把握し、SNSマーケティング・WEB広告の施策の結果を要因分析し説得力あるレポーティングを行います。<br>施策に沿った最適な測定ツールを用いることでスピーディーに分析し効率的に改善策の実施を行います。</p>
                                        </div><!-- /.media__text -->
                                    </div><!-- /.media__body -->
                                    <figure class="media__thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/build/images/image_10.jpg" alt="男性と女性が資料を分析しながらデータを解析し、施策の効果を確かめている画像">
                                    </figure>
                                </div><!-- /.media -->

                            </li>
                        </ul>

                    </div><!-- /.tabpanel -->

                </div><!-- /.tabpanelContent -->

            </section>

            <!-- section -->
            <section class="section section--bgBlue">
                <?php get_template_part( './template-parts/cta-contact-form' ); ?>
            </section>

        </div><!-- /.container -->

    </main>

    <!-- addWhiteSpace -->
    <div class="addWhiteSpace"></div>

    <?php get_footer(); ?>