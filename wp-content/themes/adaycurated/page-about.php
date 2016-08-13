<?php /* Template Name: About Template */ ?>

<?php get_header(); ?>

<section class="about">
  <h1><?php the_title(); ?></h1>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
  <?php endwhile; else : ?>
  <?php endif; ?>
</section>
<?php get_footer(); ?>
