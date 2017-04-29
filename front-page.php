<?php get_template_part('partials/head'); ?>
<html>

<!-- Background image -->

  <?php $page = get_page_by_title ( 'Welcome' ); ?>
  <?php if ( $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ) ) : ?>

    <div style="background: url('<?php echo $background[0]; ?>') top right no-repeat; height:900px;" id="welcome-intro" class="clear">

  <?php endif; ?>

<body <?php body_class(); ?>>



<?php // get_template_part('partials/header'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



    <div class="main-image-container hero">

    </div>

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
