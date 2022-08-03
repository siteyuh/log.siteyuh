<?php
 if ( $_POST['pw'] !== 'adg' ) {
   header ( 'Location: /' );
  }
  date_default_timezone_set('Asia/Tokyo');
  // var_dump( $_SERVER );

  $filename = 'footprint.csv';

  $name = $_POST['name'];
  $from = $_POST['from'];
  $sex = $_POST['sex'];
  $target = $_POST['target'];
  $impression = $_POST['impression'];
  $comm = str_replace( "\r\n", '', $_POST['comm'] );

  $ipaddr = $_SERVER['REMOTE_ADDR'];
  $browser = str_replace( ',', '.', $_SERVER['HTTP_USER_AGENT'] );
  $person = $_SERVER['UNIQUE_ID'];
  
  // 時間
  $d = getdate();
  $date = $d['year'].'/'.$d['mon'].'/'.$d['mday'];
  $time = $d['hours'].':'.$d['minutes'];

  $array = compact( 'date', 'time', 'name', 'from', 'sex', 'target', 'impression', 'comm', 'ipaddr', 'browser', 'person' );
  $string = implode( ',', $array );

  $file = fopen ($filename, 'a' ) or die( 'error' );
  fputs( $file, $string.PHP_EOL );
  flock( $file, LOCK_EX );

  fclose( $file );

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thanks | log</title>
  <link rel="stylesheet" href="/assets/main.css">
</head>
<body>
  <main class="thecontent">
    <div class="wrapper">
      <p>
        アンケートにお答えいただき、まことにありがとうございます。
      </p>
    </div>
  </main>
</body>
</html>