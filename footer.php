    <!-- footer -->
    <footer class="footer">
        <div class="footer__inner">
            <div class="footer__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/build/images/logo_02.svg" alt="株式会社Lite upのロゴ">
            </div><!-- /.footer__logo -->

            <!-- footerMebu -->
            <div class="footerMenu">

                <!-- footerMenuTop -->
                <ul class="footerMenuTop">
                    <li class="footerMenuTop__item">
                        <a class="footerMenuTop__link" href="<?php echo esc_url( home_url( '/service' ) ); ?>">
                            <span class="footerMenuTop__mainTitle">SERVICE</span>
                            <span class="footerMenuTop__subTitle">サービス紹介</span>
                        </a>
                    </li>
                    <li class="footerMenuTop__item">
                        <a class="footerMenuTop__link" href="<?php echo esc_url( home_url( '/works' ) ); ?>">
                            <span class="footerMenuTop__mainTitle">WORKS</span>
                            <span class="footerMenuTop__subTitle">実績</span>
                        </a>
                    </li>
                    <li class="footerMenuTop__item">
                        <a class="footerMenuTop__link" href="<?php echo esc_url( home_url( '/outline' ) ); ?>">
                            <span class="footerMenuTop__mainTitle">OUTLINE</span>
                            <span class="footerMenuTop__subTitle">会社概要</span>
                        </a>
                    </li>
                    <li class="footerMenuTop__item">
                        <a class="footerMenuTop__link" href="<?php echo esc_url( home_url( '/recent' ) ); ?>">
                            <span class="footerMenuTop__mainTitle">NEWS</span>
                            <span class="footerMenuTop__subTitle">お知らせ</span>
                        </a>
                    </li>
                    <li class="footerMenuTop__item">
                        <a class="footerMenuTop__link" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
                            <span class="footerMenuTop__mainTitle">CONTACT</span>
                            <span class="footerMenuTop__subTitle">お問い合わせ</span>
                        </a>
                    </li>
                </ul>

                <!-- footerMenuBottom -->
                <ul class="footerMenuBottom">
                    <li class="footerMenuBottom__item">
                        <a class="footerMenuBottom__link" href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>">個人情報保護方針</a>
                    </li>
                    <li class="footerMenuBottom__item">
                        <small lang="en">&copy; © Lite All Rights Reserved. 2001</small>
                    </li>
                </ul>

            </div><!-- /.footerMenu -->

        </div><!-- /.footer__inner -->
    </footer>

<?php wp_footer(); ?>

<?php if ( is_page( 'contact' ) ) : ?>

    <script>
        (function() {
            const el = document.querySelector('.js-privacybox-link');
            el.setAttribute('href', '<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>');
        }());
    </script>

<?php endif; ?>

</body>

</html>