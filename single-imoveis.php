<?php
// Template Name: Detalhes do Anúncio
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <main class="page-content page-content--single-advert">
    <?php
    foreach (get_field('images') as $image) {
    ?>
      <img src="<?php echo $image['inner-image'] ?>" alt="">
    <?php } ?>
  </main>
<section class="single container">
  <div class="innerTitle_title">
    <?php echo get_field(the_title)?>
    
  </div>

<?php endwhile; else: endif;?>
<?php get_footer(); ?>