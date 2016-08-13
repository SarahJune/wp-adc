<?php /* Template Name: Authors Template */ ?>

<?php get_header(); ?>

<section class="authors">
  <h1><?php the_title(); ?></h1>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
  <?php endwhile; else : ?>
  <?php endif; ?>
    <div class="authors_lindy">
      <h2>Lindy Merida Levinson</h2>
      <div class="author_contact">
        <img class="contact-mail" src="<?php bloginfo('template_directory'); ?>/img/mail.png" alt="mail">
        <img class="contact-twitter" src="<?php bloginfo('template_directory'); ?>/img/twitter.png" alt="twitter">
      </div>
      <div>
        <img class="lindy_headshot" src="<?php bloginfo('template_directory'); ?>/img/lindy-merida-levinson.jpg" class="preview-image">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <div class="authors_sarah">
      <h2>Sarah June Fischer</h2>
      <div class="author_contact">
        <img class="contact-mail" src="<?php bloginfo('template_directory'); ?>/img/mail.png" alt="mail">
        <img class="contact-twitter" src="<?php bloginfo('template_directory'); ?>/img/twitter.png" alt="twitter">
      </div>
      <div>
        <img class="sarah_headshot" src="<?php bloginfo('template_directory'); ?>/img/sarah-june-fischer.jpg" class="preview-image">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
</section>
<?php get_footer(); ?>
