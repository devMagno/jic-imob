<?php
// Template Name: Serviços
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <main class="page-content page-content--services">
    <div class="innerTitle container">
      <p class="innerTitle__text">Nossas especialidades</p>
      <h2 class="innerTitle__title">Serviços Prestados</h2>
    </div>
    <section class="container content">
      <div class="flex row gutter flex--items-c flex--justify-sb flex--wrap">
        <div class="content__textual col-6 col-sm-12 flex--col">
          <h3 class="content__title page-title">Compra e venda</h3>
          <div class="content__text">
              <?php echo wpautop(get_post_meta(get_the_ID(), 'texto-compra-e-venda', true)); ?>
          </div>
          <a href="/anuncios" class="content__cta btn btn--radius">Ver anúncios</a>
        </div>
        <div class="content__visual col-5 col-sm-12">
          <img
              src="<?php the_field('foto-compra-e-venda') ?>"
              alt="<?php the_field('foto-compra-e-venda-alt') ?>" class="content__img1">
        </div>
      </div>
    </section>

    <section class="container content">
      <div class="flex row gutter flex--items-c flex--justify-sb flex--wrap">
        <div class="content__textual col-6 col-sm-12 flex--col">
          <h3 class="content__title page-title">Locação</h3>
          <div class="content__text">
              <?php echo wpautop(get_post_meta(get_the_ID(), 'texto-locacao', true)); ?>
          </div>
          <a href="/contato" class="content__cta btn btn--radius">Entre em contato</a>
        </div>
        <div class="content__visual col-5 col-sm-12">
          <img
              src="<?php the_field('foto-locacao') ?>"
              alt="<?php the_field('foto-locacao-alt') ?>" class="content__img1">
        </div>
      </div>
    </section>
  </main>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>
