<?php get_template_part('partials/head'); ?>
<html>



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
  <?php get_template_part('partials/footer'); ?>
  </body>
</html>
