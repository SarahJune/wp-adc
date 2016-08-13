<?php get_header(); ?>
  <?php $my_query = new WP_Query( $args )
  <?php if ($my_query->have_posts()) : ?>
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

      <hr>
      <article class="preview">
        <img src="<?php bloginfo('template_directory'); ?>/img/bottles.jpg" class="preview-image">
        <div class="preview-info">
          <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <h3><?php the_author(); ?> &nbsp; | &nbsp; <?php the_date(); ?></h3>
          <p><?php the_excerpt(); ?></p>
        </div>
      </article>

    <?php endwhile; ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    <?php get_footer(); ?>
  </body>
</html>
