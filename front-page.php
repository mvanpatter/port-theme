<?php get_template_part('partials/head'); ?>
<html>
<<<<<<< HEAD
=======
<body class="body">
<!--  <body <?php body_class(); ?> -->
<!-- <?php get_template_part('partials/header'); ?> -->
>>>>>>> parent of 2c6ee53... Centered Nav



<body <?php body_class(); ?>>



<!-- Retrieves a post given its title -->

    <?php $page = get_page_by_title ( 'Welcome' ); ?>

    <div class="square">
    </div>

<?php // get_template_part('partials/header'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



    <div class="main-content">
        <div class="main-content-text"
          <?php the_content(); ?>
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
