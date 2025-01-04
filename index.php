<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php get_header() ?>

  <main>
    <?php
    // The WordPress Loop to display posts
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
        ?>
        <article>
          <h2><?php //the_title(); ?></h2>
          <div>
            <?php // the_content(); ?>
          </div>
        </article>
        <?php
      endwhile;
    else :
      echo '<p>No posts found</p>';
    endif;
    ?>
  </main>

  <?php wp_footer(); ?>
</body>
</html>
