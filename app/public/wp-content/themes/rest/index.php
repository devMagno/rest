<?php get_header(); ?>

  <section class="container sobre">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h2 class="subtitulo"><?php the_title(); ?></h1>
      <p><?php the_content(); ?></h1>
    <?php endwhile; else: ?>
      <section class="container sobre">
        <p><?php _e('Essa página não existe.'); ?></p>
      </section>
    <?php endif; ?>
  </section>
  
<?php get_footer(); ?>