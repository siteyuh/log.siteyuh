<?php
function mytheme_setup() {
  // タイトルタグを書かなくてもWPが自動で書く
  add_theme_support( 'title-tag' );
  // <style><script>をHTML5の書き方をする
  add_theme_support( 'html5', array( 'style', 'script' ) );
}

add_action( 'after_setup_theme', 'mytheme_setup' );

function themeslug_enqueue_style() {
  // 別のCSSを読み込む
  wp_enqueue_style( 'additional', get_theme_file_uri( '/additional.css' ) );
}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );

function themeslug_enqueue_script() {
  // 別のJSを読み込む
  wp_enqueue_script( 'main', get_theme_file_uri( '/main.js' ) );
}

add_action( 'wp_footer', 'themeslug_enqueue_script' );

function remove_css() {
  // style.min.cssを読み込まない
  wp_dequeue_style( 'wp-block-library' );
}

add_action( 'wp_enqueue_scripts', 'remove_css' );