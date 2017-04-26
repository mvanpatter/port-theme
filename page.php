<?php get_template_part('partials/head'); ?>
<html>
  <body class="<?php body_class(); ?>">
<?php get_template_part('partials/header'); ?>

</div>

<main class="container">
<div class="body">


  <?php
    while (have_posts()) : the_post();
  ?>

      <div class="row">
        <div class="col-sm-12">
          <div id="post-<?php the_ID(); ?>" class="content post-<?php the_ID(); ?>">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
          </div>

        </div>
      </div>

<?php
  endwhile;
?>
</div>
</main>

<?php the_posts_navigation(); ?>

<?php get_template_part('partials/footer'); ?>

  </body>
</html>
