<?php
/*

続きを読むのカスタマイズ
参考URL: http://kwski.net/wordpress/1095/

*/

function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );

function remove_more_jump_link( $link ) {
  $offset = strpos( $link, '#more-' );
  if ($offset) {
      $end = strpos( $link, '"', $offset );
  }
  if ($end) {
      $link = substr_replace( $link, '', $offset, $end-$offset );
  }
  return $link;
}
add_filter( 'the_content_more_link', 'remove_more_jump_link' );

function my_more_jump_link( $link ) {
  $offset = strpos( $link, 'a href' );
  if ($offset) {
    $link = substr_replace( $link, 'a target="_blank" href', $offset, 6 );
  }
  
  return $link;
}
add_filter( 'the_content_more_link', 'my_more_jump_link' );