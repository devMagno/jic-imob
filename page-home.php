<?php
// Template Name: Página Inicial
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <main class="page-content page-content--index">

    <section class="banner flex flex--items-c flex--justify-c">
      <img
        src="https://images.unsplash.com/photo-1582407947304-fd86f028f716?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1159&q=80"
        alt="" class="banner__background">
      <!-- <h1 class="banner__text container fadeInUp" data-anime="500"></h1> -->
      <h1 class="banner__text container"><?php the_field('slogan'); ?></h1>
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
            src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
            alt="" class="content__img1">
          <div class="content__visual2 flex row gutter">
            <img
              src="https://images.unsplash.com/photo-1558036117-15d82a90b9b1?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
              alt="" class="content__img2 col-7">
            <img
              src="https://images.unsplash.com/photo-1494526585095-c41746248156?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
              alt="" class="content__img3 col-5">
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
            <picture>
              <source srcset="<?php echo wp_get_attachment_image_src(get_field('foto-imob_id'), 'medium')[0]; ?>" media="(max-width: 767px)">
              <img src="<?php the_field('foto-imob'); ?>" alt="<?php the_field('foto-imob-alt'); ?>">
            </picture>
            <a href="services.html#imobiliarios" class="btn btn--bold middlecontent__btn">Imobiliário</a>
          </div>
          <div class="middlecontent__background col-6 col-sm-12 flex flex--items-end flex--justify-c">
            <picture>
              <source srcset="<?php echo wp_get_attachment_image_src(get_field('foto-adm_id'), 'medium')[0]; ?>" media="(max-width: 767px)">
              <img src="<?php the_field('foto-adm'); ?>" alt="<?php the_field('foto-adm-alt'); ?>">
            </picture>
            <a href="services.html#administrativos" class="btn btn--bold middlecontent__btn">Administrativo</a>
          </div>
          <div class="middlecontent__background col-6 col-sm-12 flex flex--items-end flex--justify-c">
            <picture>
              <source srcset="<?php echo wp_get_attachment_image_src(get_field('foto-con_id'), 'medium')[0]; ?>" media="(max-width: 767px)">
              <img src="<?php the_field('foto-con'); ?>" alt="<?php the_field('foto-con-alt'); ?>">
            </picture>
            <a href="services.html#financeiros" class="btn btn--bold middlecontent__btn ">Consultoria</a>
          </div>
          </img>
        </div>
      </div>
    </section>

    <section class="container advert">
      <div class="middlecontent">
        <div class="innerTitle">
          <h2 class="innerTitle__title innerTitle__title--middlecontent">Anúncios Recentes</h2>
          <p class="innerTitle__text innerTitle__text--middlecontent">
            <?php the_field('anuncios-recentes'); ?>
          </p>
        </div>
      </div>

      <div class="advert__list flex gutter row flex--wrap">
        <div class="col-4 col-sm-12 col-lg-6">
          <div class="advert__item">
            <div class="advert__top">
              <div class="advert__badge">Usado</div>
              <div class="advert__img">
                <img
                  src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                  alt="">
              </div>
            </div>
            <div class="advert__bottom flex flex--col flex--justify-sb">
              <div class="advert__location">
                <p class="advert__category-container">Apartamento para <span class="advert__category">Venda</span></p>
                <p class="advert__city-container">em <span class="advert__city">São Vicente</span></p>
              </div>

              <p class="advert__neighbourhood-container"><span class="fas fa-map-marker-alt advert__icon"></span> <span
                  class="advert__neighbourhood">Náutica III</span></p>

              <ul class="advert__info flex flex--justify-sb flex--wrap">
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span class="advert__icon advert__icon--big fas fa-bed flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Dorms</p>
                  <p class="advert__info-quantity">2</p>
                </li>
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span class="advert__icon advert__icon--big fas fa-bath flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Suítes</p>
                  <p class="advert__info-quantity">--</p>
                </li>
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span class="advert__icon advert__icon--big fas fa-shower flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Banheiros</p>
                  <p class="advert__info-quantity">2</p>
                </li>
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span
                    class="advert__icon advert__icon--big fas fa-th-large flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Área</p>
                  <p class="advert__info-quantity">55</p>
                </li>
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span class="advert__icon advert__icon--big fas fa-car flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Vagas</p>
                  <p class="advert__info-quantity">1</p>
                </li>
              </ul>

              <a href="#" class="advert__button btn btn--bold btn--full btn--small">Entrar em contato</a>

            </div>
          </div>
        </div>
        <div class="col-4 col-sm-12 col-lg-6">
          <div class="advert__item">
            <div class="advert__top">
              <div class="advert__badge">Usado</div>
              <div class="advert__img">
                <img
                  src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                  alt="">
              </div>
            </div>
            <div class="advert__bottom flex flex--col flex--justify-sb">
              <div class="advert__location">
                <p class="advert__category-container">Apartamento para <span class="advert__category">Venda</span></p>
                <p class="advert__city-container">em <span class="advert__city">São Vicente</span></p>
              </div>

              <p class="advert__neighbourhood-container"><span class="fas fa-map-marker-alt advert__icon"></span> <span
                  class="advert__neighbourhood">Náutica III</span></p>

              <ul class="advert__info flex flex--justify-sb flex--wrap">
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span class="advert__icon advert__icon--big fas fa-bed flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Dorms</p>
                  <p class="advert__info-quantity">2</p>
                </li>
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span class="advert__icon advert__icon--big fas fa-bath flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Suítes</p>
                  <p class="advert__info-quantity">--</p>
                </li>
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span class="advert__icon advert__icon--big fas fa-shower flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Banheiros</p>
                  <p class="advert__info-quantity">2</p>
                </li>
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span
                    class="advert__icon advert__icon--big fas fa-th-large flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Área</p>
                  <p class="advert__info-quantity">55</p>
                </li>
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span class="advert__icon advert__icon--big fas fa-car flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Vagas</p>
                  <p class="advert__info-quantity">1</p>
                </li>
              </ul>

              <a href="#" class="advert__button btn btn--bold btn--full btn--small">Entrar em contato</a>

            </div>
          </div>
        </div>
        <div class="col-4 col-sm-12 col-lg-6">
          <div class="advert__item">
            <div class="advert__top">
              <div class="advert__badge">Usado</div>
              <div class="advert__img">
                <img
                  src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                  alt="">
              </div>
            </div>
            <div class="advert__bottom flex flex--col flex--justify-sb">
              <div class="advert__location">
                <p class="advert__category-container">Apartamento para <span class="advert__category">Venda</span></p>
                <p class="advert__city-container">em <span class="advert__city">São Vicente</span></p>
              </div>

              <p class="advert__neighbourhood-container"><span class="fas fa-map-marker-alt advert__icon"></span> <span
                  class="advert__neighbourhood">Náutica III</span></p>

              <ul class="advert__info flex flex--justify-sb flex--wrap">
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span class="advert__icon advert__icon--big fas fa-bed flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Dorms</p>
                  <p class="advert__info-quantity">2</p>
                </li>
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span class="advert__icon advert__icon--big fas fa-bath flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Suítes</p>
                  <p class="advert__info-quantity">--</p>
                </li>
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span class="advert__icon advert__icon--big fas fa-shower flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Banheiros</p>
                  <p class="advert__info-quantity">2</p>
                </li>
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span
                    class="advert__icon advert__icon--big fas fa-th-large flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Área</p>
                  <p class="advert__info-quantity">55</p>
                </li>
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span class="advert__icon advert__icon--big fas fa-car flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Vagas</p>
                  <p class="advert__info-quantity">1</p>
                </li>
              </ul>

              <a href="#" class="advert__button btn btn--bold btn--full btn--small">Entrar em contato</a>

            </div>
          </div>
        </div>
      </div>
      <a href="adverts.html" class="adverts__cta btn btn--radius btn--full">Ver todos os anúncios</a>
    </section>

  </main>
  
<?php endwhile; else: endif;?>
<?php get_footer(); ?>