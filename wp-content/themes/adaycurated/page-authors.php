<?php define('WP_USE_THEMES', true); get_header(); ?>
    <section class="blog_index">
      <h1><?php the_title(); ?>
      <article class="preview">
        <div class="preview-info">
          <h2>author.php</h3>
          <p>index.php</p>
        </div>
        <?php the_excerpt(); ?>
      </article>
    </section>
    <aside class="sidebar">
      <section class="hp-authors">
        <h4>Authors</h4>
        <hr>
        <img src="<?php bloginfo('template_directory'); ?>/img/bottles.jpg" class="hp-author-image">
        <p>Lindy Merida Levinson<br /> &amp; <br />Sarah June Fischer</p>
      </section>
      <section class="hp-cats">
        <h4>Categories</h4>
        <hr>
        <p>Kitchen</p>
        <p>Closet</p>
        <p>Career</p>
        <p>Beauty</p>
        <p>Finance</p>
      </section>
    </aside>
  <?php get_footer(); ?>

