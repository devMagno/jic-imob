<?php
// Template Name: Serviços
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <main class="page-content page-content--services">
    <div class="innerTitle container">
      <p class="innerTitle__text">Nossas especialidades</p>
      <h2 class="innerTitle__title">Serviços Prestados</h2>
    </div>
    <section class="container content" id="imobiliarios">
      <div class="flex row gutter flex--items-c flex--justify-sb flex--wrap">
        <div class="content__textual col-6 col-sm-12 flex--col">
          <h3 class="content__title page-title">Serviços imobiliários</h3>
          <div class="content__text">
            <?php echo wpautop(get_post_meta(get_the_ID(), 'texto-imobiliario', true)); ?>
          </div>
          <button class="content__cta btn btn--radius">Ver anúncios</button>
        </div>
        <div class="content__visual col-5 col-sm-12">
          <img
            src="<?php the_field('foto-imobiliario') ?>"
            alt="<?php the_field('foto-imobiliario-alt') ?>" class="content__img1">
        </div>
      </div>
    </section>

    <section class="container content" id="administrativos">
      <div class="flex row gutter flex--items-c flex--justify-sb flex--wrap">
        <div class="content__visual col-5 col-sm-12">
          <img
            src="<?php the_field('foto-administrativo') ?>"
            alt="<?php the_field('foto-administrativo-alt') ?>" class="content__img1">
        </div>
        <div class="content__textual content__textual--right col-6 col-sm-12 flex flex--col flex--items-end">
          <h3 class="content__title page-title">Serviços administrativos</h3>
          <div class="content__text content__text--right">
            <?php echo wpautop(get_post_meta(get_the_ID(), 'texto-administrativo', true)); ?>
          </div>
          <button class="content__cta btn btn--radius">Entre em contato</button>
        </div>
      </div>
    </section>

    <section class="container content" id="financeiros">
      <div class="flex row gutter flex--items-c flex--justify-sb flex--wrap">
        <div class="content__textual col-6 col-sm-12 flex--col">
          <h3 class="content__title page-title">Consultoria financeira</h3>
          <div class="content__text">
            <?php echo wpautop(get_post_meta(get_the_ID(), 'texto-financeiro', true)); ?>
          </div>
          <button class="content__cta btn btn--radius">Entre em contato</button>
        </div>
        <div class="content__visual col-5 col-sm-12">
          <img
            src="<?php the_field('foto-financeiro') ?>"
            alt="<?php the_field('foto-financeiro-alt') ?>" class="content__img1">
        </div>
      </div>
    </section>
  </main>

<?php endwhile; else: endif;?>
<?php get_footer(); ?>
