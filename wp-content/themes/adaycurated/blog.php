<?php get_header(); ?>
    <section class="blog_index">
      <h1>Blog</h1>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article class="preview">
            <img src="<?php bloginfo('template_directory'); ?>/img/bottles.jpg" class="preview-image">
            <div class="preview-info">
              <h2><?php the_title(); ?></h2>
              <h3><?php the_author(); ?> &nbsp; | &nbsp; <?php the_date(); ?></h3>
              <p><?php the_excerpt(); ?></p>
            </div>
          </article>
          <hr>
        <?php endwhile; else: ?>
        <?php endif; ?>
    <?php get_posts(posts_per_page(1)) ?>
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
    <?php get_footer(); ?>
  </body>
</html>
