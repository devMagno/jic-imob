<?php
// Template Name: Detalhes do Anúncio
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <main class="page-content page-content--adverts">
    <?php the_title(''); ?>
    <img src="<?php the_field('image'); ?>" alt="">
  </main>

<?php endwhile; else: endif;?>
<?php get_footer(); ?>