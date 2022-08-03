<?php get_header(); ?>

<body>
  <main class="thecontent wrapper">
    <div class="page">
      <div class="post">
<?php
  the_title( '<h1 class="title">', '</h1>' );

  the_content();
  echo '<footer class="post-footer">'.PHP_EOL;
  echo '  <ul>'.PHP_EOL;
  echo '    <li><a href="https://twitter.com/share?url='.get_the_permalink().'&text=@georgekawaii" rel="nofollow" target="_blank">Twitterでコメントする</a></li>'.PHP_EOL;
  echo '  </ul>'.PHP_EOL;
  echo '</footer>'.PHP_EOL;
?>
      </div>
    </div>
  </main>
  <?php //get_template_part( 'inc/window-close' ); ?>
  <?php get_template_part( 'inc/logo' ); ?>
  <script src="/assets/main.js"></script>
</body>
</html>