<?php define('WP_USE_THEMES', true); get_header(); ?>
    <section class="blog_index">
      <h1>Latest Articles</h1>
      <?php $my_query = "showposts=5"; $my_query = new WP_Query($my_query); ?>
      <?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>

        <article class="preview">
          <img src="<?php bloginfo('template_directory'); ?>/img/bottles.jpg" class="preview-image">
          <div class="preview-info">
            <h2><?php the_title(); ?></h2>
            <h3><?php the_author(); ?> &nbsp; | &nbsp; <?php the_date(); ?></h3>
            <p><?php the_excerpt(); ?></p>
          </div>
        </article>
        <hr>

      <?php endwhile; // end of one post ?>
      <?php endif; //end of loop ?>
      <a href="/blog">Read More</a>
    </section>
    <aside class="sidebar">
      <section class="hp-authors">
        <h4>Authors</h4>
        <hr>
        <img class="hp-author-image" src="<?php bloginfo('template_directory'); ?>/img/sarah-and-lindy.jpg" class="preview-image">
        <p>Lindy Merida Levinson<br /> &amp; <br />Sarah June Fischer</p>
      </section>
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
