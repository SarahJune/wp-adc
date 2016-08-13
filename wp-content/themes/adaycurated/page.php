<?php get_header(); ?>
  <h1><?php the_title(); ?></a></h1>
  <section class="blog_index">
    <?php
      $temp = $wp_query;
      $wp_query = null;
      $wp_query = new WP_Query();
      $wp_query->query('showposts=3'.'&paged='.$paged);

      while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>

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
  </section>

  <aside class="sidebar">
    <section class="hp-cats">
      <h4>Categories</h4>
      <hr>
      <?php
        $categories = get_categories( array(
          'orderby' => 'name',
        ) );

      foreach ( $categories as $category ) {
        printf( '<p><a href="%1$s">%2$s</a><br /></p>',
          esc_url( get_category_link( $category->term_id ) ),
          esc_html( $category->name )
        );
      }
      ?>

    </section>
  </aside>

  <section>
    <nav class="blog_nav">
      <?php echo paginate_links(' $args '); ?>
    </nav>
    <?php
      $wp_query = null;
      $wp_query = $temp;  // Reset
    ?>
    <?php wp_reset_postdata(); ?>
  </section>

    <?php get_footer(); ?>
  </body>
</html>
