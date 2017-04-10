<?php get_template_part('partials/head'); ?>
<html>
<body>
<!--  <body <?php body_class(); ?>> -->
<!-- <?php get_template_part('partials/header'); ?> -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="body">
  <div class="box">
    <div class="main-image-container hero">
      <?php the_post_thumbnail('hero'); ?>
      <h1 class="home-page-title"><?php the_title(); ?></h1>

    </div>
    <div class="main-content">
      <?php the_content(); ?>
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
