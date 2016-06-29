<?php define('WP_USE_THEMES', true); get_header(); ?>
    <section class="blog_index">
      <h1><?php the_title(); ?>
      <?php wp_list_authors('show_fullname=1&optioncount=1&orderby=post_count&order=DESC&number=3'); ?>
      <article class="preview">
        <img src="<?php bloginfo('template_directory'); ?>/img/bottles.jpg" class="preview-image">
        <div class="preview-info">
          <h2>index.php</h2>
          <h3>Date and Author</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>
        <?php the_excerpt(); ?>
      </article>
      <hr>
      <article class="preview">
        <img src="<?php bloginfo('template_directory'); ?>/img/bottles.jpg" class="preview-image">
        <div class="preview-info">
          <h2>Example Headline</h2>
          <h3>Date and Author</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>
        <?php the_excerpt(); ?>
      </article>
      <hr>
      <article class="preview">
        <img src="<?php bloginfo('template_directory'); ?>/img/bottles.jpg" class="preview-image">
        <div class="preview-info">
          <h2>Example Headline</h2>
          <h3>Date and Author</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>
      </article>
      <hr>
      <article class="preview">
        <img src="<?php bloginfo('template_directory'); ?>/img/bottles.jpg" class="preview-image">
        <div class="preview-info">
          <h2>Example Headline</h2>
          <h3>Date and Author</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>
        <?php the_excerpt(); ?>
      </article>
      <hr>
      <article class="preview">
        <img src="<?php bloginfo('template_directory'); ?>/img/bottles.jpg" class="preview-image">
        <div class="preview-info">
          <h2>Example Headline</h2>
          <h3>Date and Author</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
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

