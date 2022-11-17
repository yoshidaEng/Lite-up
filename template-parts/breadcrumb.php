<!-- breadcrumb -->
<nav class="breadcrumb" aria-label="パンくずナビゲーション" typeof="BreadcrumbList" vocab="https://schema.org/">
    <div class="breadcrumb__inner">
        <?php
        if ( function_exists( 'bcn_display' ) ) {
            bcn_display();
            }
        ?>
    </div><!-- /.breadcrumb__inner -->
</nav>