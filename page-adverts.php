<?php
// Template Name: Anúncios
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <main class="page-content page-content--adverts">

    <div class="innerTitle container">
      <p class="innerTitle__text">O imóvel certo pra você</p>
      <h2 class="innerTitle__title">Nossos anúncios</h2>
    </div>

    
    <?php
      $args = array (
        'post_type' => 'imoveis',
        'order'   => 'DESC'
      );
      $the_query = new WP_Query ( $args );
    ?>
    <section class="advert container">
    <div class="advert__list flex row gutter flex--wrap">
      <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <div class="col-4 col-sm-12 col-lg-6">
          <div class="advert__item">
            <div class="advert__top">
              <div class="advert__badge"><?php the_field('state') ?></div>
              <div class="advert__img">
                <img
                  src="<?php the_field('image'); ?>"
                  alt="<?php the_title(); ?>">
              </div>
            </div>
            <div class="advert__bottom flex flex--col flex--justify-sb">
              <div class="advert__location">
                <p class="advert__category-container"><?php the_field('type') ?> para <span class="advert__category"><?php the_field('advert-type') ?></span></p>
                <p class="advert__city-container">em <span class="advert__city"><?php the_field('city') ?></span></p>
              </div>

              <p class="advert__neighbourhood-container"><span class="fas fa-map-marker-alt advert__icon"></span> <span
                  class="advert__neighbourhood"><?php the_field('neighbourhood') ?></span></p>

              <ul class="advert__info flex flex--justify-sb flex--wrap">
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span class="advert__icon advert__icon--big fas fa-bed flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Dorms</p>
                  <p class="advert__info-quantity"><?php the_field('dorms-quantity') ?></p>
                </li>
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span class="advert__icon advert__icon--big fas fa-bath flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Suítes</p>
                  <p class="advert__info-quantity"><?php the_field('suites-quantity') ?></p>
                </li>
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span class="advert__icon advert__icon--big fas fa-shower flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Banheiros</p>
                  <p class="advert__info-quantity"><?php the_field('bathroom-quantity') ?></p>
                </li>
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span
                    class="advert__icon advert__icon--big fas fa-th-large flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Área</p>
                  <p class="advert__info-quantity"><?php the_field('area-quantity') ?></p>
                </li>
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span class="advert__icon advert__icon--big fas fa-car flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Vagas</p>
                  <p class="advert__info-quantity"><?php the_field('parking-quantity') ?></p>
                </li>
              </ul>

              <a href="<?php the_permalink(); ?>" class="advert__button btn btn--bold btn--full btn--small">Ver mais</a>

            </div>
          </div>
        </div>
      <?php endwhile; else: endif; ?>
      <?php wp_reset_query(); wp_reset_postdata(); ?>
    </div>
    </section>

    <div class="cta flex flex--items-c flex--justify-c">
      <img
        src="<?php the_field('foto-cta'); ?>"
        alt="<?php the_field('foto-cta-alt'); ?>" class="cta__background">
      <div class="cta__content">
        <p class="cta__text">Anúncie seu imóvel conosco</p>
        <a href="contact.html" class="cta__button btn btn--radius flex flex--items-c flex--justify-c">Entre em
          contato</a>
      </div>
    </div>
  </main>

<?php endwhile; else: endif;?>
<?php get_footer(); ?>