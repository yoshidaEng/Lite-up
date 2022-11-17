<?php

/**
 * Register and Enqueue Styles
 */
function liteup_register_styles() {
    wp_enqueue_style( 'liteup-styles', get_theme_file_uri('assets/build/css/main.css'), array() );
}
add_action( 'wp_enqueue_scripts', 'liteup_register_styles' );

/**
 * Register and Enqueue Scripts
 */

function liteup_enqueue_scripts() {
    wp_enqueue_script(
      'main-script',
      get_template_directory_uri() . '/assets/build/js/main.js',
      array(),
      false,
      true
    );
  }
  add_action( 'wp_enqueue_scripts', 'liteup_enqueue_scripts' );

/**
 * Setting post_thumbnail
 */
add_theme_support( 'post-thumbnails' );

//カテゴリーの文字列を出力
function get_category_name() {
  $category_obj = get_the_category();
  return $category_obj[0]->cat_name;
}

//カスタムフィールドの値を取得

//固定ページメインタイトル
// function get_page_mainTitle() {
//   return get_field( 'main_title' );
// }
//固定ページサブタイトル
// function get_page_subTitle() {
//   return get_field( 'sub_title' );
// }

//企業名
function get_companyName() {
  return get_field( 'company_name' );
}

//投稿ページのカスタムフィールドの値を取得
//投稿ページメインタイトル
// function get_homePage_mainTitle() {
//   $home_page_id = get_option('page_for_posts');
//   return get_field('main_title', $home_page_id);
// }

//投稿ページサブタイトル
// function get_homePage_subTitle() {
//   $home_page_id = get_option('page_for_posts');
//   return get_field('sub_title', $home_page_id);
// }

function get_page_mainTitle() {
  if ( is_page() ) :
    return get_field( 'main_title' );

  elseif ( is_home() ) :
    $home_page_id = get_option('page_for_posts');
    return get_field('main_title', $home_page_id);

  elseif ( is_archive() ) :
    //CPT slug 出力
    return esc_html( get_post_type_object(get_post_type())->name );

  endif;
}

function get_page_subTitle() {
  if ( is_page() ) :
    return get_field( 'sub_title' );

  elseif ( is_home() ) :
    $home_page_id = get_option('page_for_posts');
    return get_field('sub_title', $home_page_id);

  elseif ( is_archive() ) :
    //CPT ラベル 出力
    return esc_html( get_post_type_object(get_post_type())->label );
  endif;
}




