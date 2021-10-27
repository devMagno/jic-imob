<?php
// Template Name: Página Inicial
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <main class="page-content page-content--index">

    <section class="banner flex flex--items-c flex--justify-c">
      <img
        src="<?php the_field('foto-banner') ?>"
        alt="" class="banner__background">
      <h1 class="banner__text container fadeInUp" data-anime="200"><?php the_field('slogan'); ?></h1>
    </section>

    <section class="container content">
      <div class="flex row gutter flex--justify-sb flex--wrap">
        <div class="content__textual col-6 col-sm-12 flex--col">
          <h2 class="content__title">Quem somos</h2>
          <div class="content__text">
            <?php echo wpautop(get_post_meta(get_the_ID(), 'quem-somos-texto', true)); ?>
          </div>
          <a class="content__cta btn btn--radius" href="about.html">Saiba mais</a>
        </div>
        <div class="content__visual col-5 col-sm-12">
          <img
            src="<?php the_field('foto-quem-somos-1'); ?>"
            alt="<?php the_field('foto-quem-somos-1-alt'); ?>" class="content__img1">
          <div class="content__visual2 flex row gutter">
            <img
              src="<?php the_field('foto-quem-somos-2'); ?>"
              alt="<?php the_field('foto-quem-somos-2-alt'); ?>" class="content__img2 col-7">
            <img
              src="<?php the_field('foto-quem-somos-3'); ?>"
              alt="<?php the_field('foto-quem-somos-3-alt'); ?>" class="content__img3 col-5">
          </div>
        </div>
      </div>
    </section>

    <section class="container">
      <div class="middlecontent">
        <div class="innerTitle">
          <h2 class="innerTitle__title innerTitle__title--middlecontent">Serviços Prestados</h2>
          <p class="innerTitle__text innerTitle__text--middlecontent">
            <?php the_field('servicos-prestados'); ?>
          </p>
        </div>
        <div class="middlecontent__images flex row gutter flex--wrap flex--justify-c">
          <div class="middlecontent__background col-12 col-sm-12 flex flex--items-end flex--justify-c">
            <!-- <picture>
              <source srcset="<?php echo wp_get_attachment_image_src(get_field('foto-imob_id'), 'medium')[0]; ?>" media="(max-width: 767px)"> -->
              <img src="<?php the_field('foto-imob'); ?>" alt="<?php the_field('foto-imob-alt'); ?>">
            <!-- </picture> -->
            <a href="/servicos#imobiliarios" class="btn btn--bold middlecontent__btn">Imobiliário</a>
          </div>
          <div class="middlecontent__background col-6 col-sm-12 flex flex--items-end flex--justify-c">
            <!-- <picture>
              <source srcset="<?php echo wp_get_attachment_image_src(get_field('foto-adm_id'), 'medium')[0]; ?>" media="(max-width: 767px)"> -->
              <img src="<?php the_field('foto-adm'); ?>" alt="<?php the_field('foto-adm-alt'); ?>">
            <!-- </picture> -->
            <a href="/servicos#administrativos" class="btn btn--bold middlecontent__btn">Administrativo</a>
          </div>
          <div class="middlecontent__background col-6 col-sm-12 flex flex--items-end flex--justify-c">
            <!-- <picture>
              <source srcset="<?php echo wp_get_attachment_image_src(get_field('foto-con_id'), 'medium')[0]; ?>" media="(max-width: 767px)"> -->
              <img src="<?php the_field('foto-con'); ?>" alt="<?php the_field('foto-con-alt'); ?>">
            <!-- </picture> -->
            <a href="/servicos#financeiros" class="btn btn--bold middlecontent__btn ">Consultoria</a>
          </div>
          </img>
        </div>
      </div>
    </section>

    <?php
      $args = array (
        'post_type' => 'imoveis',
        'order'   => 'DESC'
      );
      $the_query = new WP_Query ( $args );
      $i = 0;
    ?>
    <section class="container advert">
      <div class="middlecontent">
        <div class="innerTitle">
          <h2 class="innerTitle__title innerTitle__title--middlecontent">Anúncios Recentes</h2>
          <p class="innerTitle__text innerTitle__text--middlecontent">
            <?php the_field('anuncios-recentes'); ?>
          </p>
        </div>
      </div>

      <div class="advert__list flex row gutter flex--wrap">
      <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() && $i < 3 ) : $the_query->the_post(); ?>
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
      <?php $i++ ?>
      <?php endwhile; else: endif; ?>
    </div>
      <a href="/anuncios" class="adverts__cta btn btn--radius btn--full">Ver todos os anúncios</a>
    </section>

  </main>
  
<?php endwhile; else: endif;?>
<?php get_footer(); ?>