<?php
// Template Name: Sobre
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <main class="page-content page-content--about">

    <div class="innerTitle container">
      <p class="innerTitle__text">Conheça a empresa</p>
      <h2 class="innerTitle__title">Quem somos</h2>
    </div>

    <section class="container">
      <div class="info flex flex--items-c flex--justify-sb flex--wrap row gutter">
        <div class="info__left col-6 col-sm-12">
          <h3 class="page-title">A empresa</h3>
          <div class="info__content">
            <?php echo wpautop(get_post_meta(get_the_ID(), 'empresa-texto', true)); ?>
          </div>
          <h3 class="page-title">O conceito</h3>
          <div class="info__content">
            <?php echo wpautop(get_post_meta(get_the_ID(), 'conceito-texto', true)); ?>
          </div>
        </div>
        <div class="info__right col-6 col-sm-12">
          <img
            src="<?php the_field('foto-sobre') ?>"
            alt="<?php the_field('foto-sobre-alt') ?>">
        </div>
      </div>
    </section>

    <section class="container">
      <div class="values flex flex--wrap row gutter">
        <div class="values__item flex flex--col flex--items-c col-4 col-sm-12">
          <div class="values__icon-container flex flex--items-c flex--justify-c">
            <span class="values__icon fas fa-bullseye"></span>
          </div>
          <p class="values__title">Missão</p>
          <p class="values__text"><?php the_field('missao-texto'); ?></p>
        </div>
        <div class="values__item flex flex--col flex--items-c col-4 col-sm-12">
          <div class="values__icon-container flex flex--items-c flex--justify-c">
            <span class="values__icon far fa-eye"></span>
          </div>
          <p class="values__title">Visão</p>
          <p class="values__text"><?php the_field('visao-texto'); ?></p>
        </div>
        <div class="values__item flex flex--col flex--items-c col-4 col-sm-12">
          <div class="values__icon-container flex flex--items-c flex--justify-c">
            <span class="values__icon far fa-gem"></span>
          </div>
          <p class="values__title">Valores</p>
          <p class="values__text"><?php the_field('valores-texto'); ?></p>
        </div>
      </div>
    </section>

    <section class="container">
      <h3 class="page-title">Nossa equipe</h3>
      <div class="staff flex flex--justify-c flex--wrap row gutter">
      <?php
        $equipe = get_field('equipe');
        if (isset($equipe)) { foreach ($equipe as $membro) { ?>
          <div class="staff__container col-4 col-sm-12">
            <div class="staff__member">
              <div class="staff__photo">
                <img
                  src="<?php echo $membro['foto']; ?>"
                  alt="<?php echo $membro['nome']; ?>">
              </div>
              <div class="staff__content">
                <p class="staff__name"><?php echo $membro['nome']; ?></p>
                <p class="staff__text"><?php echo $membro['descricao']; ?></p>
              </div>
            </div>
          </div>
      <?php } } ?>
      </div>
    </section>

    <div class="cta flex flex--items-c flex--justify-c">
      <img
        src="<?php the_field('foto-cta') ?>"
        alt="<?php the_field('foto-cta-alt') ?>" class="cta__background">
      <div class="cta__content">
        <p class="cta__text">Conheça nossos serviços</p>
        <a href="services.html" class="cta__button btn btn--radius flex flex--items-c flex--justify-c">Saiba mais</a>
      </div>
    </div>
  </main>


<?php endwhile; else: endif;?>
<?php get_footer(); ?>
