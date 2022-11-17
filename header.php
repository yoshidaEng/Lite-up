<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    <meta name="description" content="Lite upのホームページです。">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/body-scroll-lock/3.1.5/bodyScrollLock.min.js" integrity="sha512-HowizSDbQl7UPEAsPnvJHlQsnBmU2YMrv7KkTBulTLEGz9chfBoWYyZJL+MUO6p/yBuuMO/8jI7O29YRZ2uBlA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <!-- header -->
    <header id="js-header" class="header _fixed">
        <div class="header__inner">
            <div class="header__logo">
                <a href="<?php echo esc_url( home_url() ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/build/images/logo_01.svg" alt="株式会社Lite upのロゴ">
                </a>
            </div><!-- /.header_logo -->

            <!-- mobileMenuBtn -->
            <button id="mobileMenuBtn" class="mobileMenuBtn" aria-label="メニューを開く" aria-controls="menu" aria-expanded="false">
                <span class="mobileMenuBtn__line" aria-hidden="true"></span>
            </button>

            <!-- mobileMenu -->
            <nav id="mobileMenu" class="mobileMenu" aria-label="メニュー" aria-hidden="true">
                <div class="mobileMenu__inner">
                    <ul class="mobileMenu__list">
                        <li class="mobileMenu__item">
                            <a class="mobileMenu__link" href="<?php echo esc_url( home_url( '/service' ) ); ?>">service</a>
                        </li>
                        <li class="mobileMenu__item">
                            <a class="mobileMenu__link" href="<?php echo esc_url( home_url( '/works' ) ); ?>">works</a>
                        </li>
                        <li class="mobileMenu__item">
                            <a class="mobileMenu__link" href="<?php echo esc_url( home_url( 'outline' ) ); ?>">outline</a>
                        </li>
                        <li class="mobileMenu__item">
                            <a class="mobileMenu__link" href="<?php echo esc_url( home_url( 'recent' ) ); ?>">news</a>
                        </li>
                        <li class="mobileMenu__item">
                            <a class="mobileMenu__link" href="<?php echo esc_url( home_url( 'contact' ) ); ?>">contact</a>
                        </li>
                    </ul>
                </div><!-- /.mobileMenu__inner -->
            </nav>

            <!-- pcMenu -->
            <nav id="pcMenu" class="pcMenu" aria-label="メニュー" aria-hidden="true">
                <div class="pcMenu__inner">
                    <ul class="pcMenu__list">
                        <li class="pcMenu__item">
                            <a class="pcMenu__link" href="<?php echo esc_url( home_url( '/service' ) ); ?>">service</a>
                        </li>
                        <li class="pcMenu__item">
                            <a class="pcMenu__link" href="<?php echo esc_url( home_url( '/works' ) ); ?>">works</a>
                        </li>
                        <li class="pcMenu__item">
                            <a class="pcMenu__link" href="<?php echo esc_url( home_url( 'outline' ) ); ?>">outline</a>
                        </li>
                        <li class="pcMenu__item">
                            <a class="pcMenu__link" href="<?php echo esc_url( home_url( 'recent' ) ); ?>">news</a>
                        </li>
                        <li class="pcMenu__item">
                            <a class="pcMenu__link" href="<?php echo esc_url( home_url( 'contact' ) ); ?>">contact</a>
                        </li>
                    </ul>
                </div><!-- /.pcMenu__inner -->
            </nav>
        </div><!-- /.header__inner -->
    </header><!-- /.header -->
