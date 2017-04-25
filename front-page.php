<?php get_template_part('partials/head'); ?>
<html>
<body class="body">
<!--  <body <?php body_class(); ?> -->
<!-- <?php get_template_part('partials/header'); ?> -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="front-page-body">
  <div class="box">

    <div class="main-image-container hero">

      <?php

        if( has_post_thumbnail() ){
      ?>

        <div class="home-page-title" style="background-image: url(<?php the_post_thumbnail_url(''); ?>)">
          <h1><?php the_title(); ?></h1>
        </div>

      <?php } ?>
    </div>

    <div class="main-content">
        <div class="main-content-text"
          <?php the_content(); ?>
        </div>
    </div>

  </div>
</div>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

  </body>
</html>

<!-- // The Loop
<?php
while (have_posts()) : the_post();
?>

  <div class="row">
    <div class="col-sm-12">
      <div class="content">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>

    </div>
  </div>

<?php
endwhile;
?> -->
