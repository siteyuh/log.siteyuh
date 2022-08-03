<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
  <meta charset="<?php bloginfo( 'charset' )?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
  <?php wp_body_open(); ?>

  <?php if( have_posts() ): while( have_posts() ):  the_post(); ?>
  
  <article <?php post_class(); ?>>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </article>

  <?php endwhile; endif; ?> 
  <?php wp_footer(); ?>
</body>
</html>