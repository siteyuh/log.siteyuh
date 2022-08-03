<?php
// 現在のページ数
global $paged;
if ( empty( $paged ) ) $paged = 1;
    
// 総ページ数
global $wp_query;
$pages = $wp_query -> max_num_pages;
if ( ! $pages ) {
  $pages = 1;
}

// ページが1ページしかない場合は出力しない・最後のページでも出力しない
if ( $pages != 1 && $paged < $pages ) {
  echo '
  <button id="more-button" type="button">もっと見る</button>
  <div class="scroller-status">
    <div class="infinite-scroll-request"></div>
    <p class="infinite-scroll-last text-centered">これ以上は記事がありません</p>
    <p class="infinite-scroll-error text-centered">読み込むページがありません</p>
  </div>
  ';
}