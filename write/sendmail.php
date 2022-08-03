<?php
if ( $_POST['pw'] == 'な' ) {
  $subj = $_POST['subj'];
  $comm = $_POST['comm'];
  $from = 'From: siteyuh@gmail.com';
  $to = 'izNbmbno@log.siteyuh.com';

  $internal_enc = 'UTF-8';
  mb_language('ja');
  mb_internal_encoding($internal_enc);
  mb_send_mail( $to, $subj, $comm, $from );
  header ( 'Location: /x/wp-mail.php' );
} else {
  header ( 'Location: http://yahoo.co.jp' );
}