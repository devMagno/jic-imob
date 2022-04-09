<?php
// Template Name: Página Inicial
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <main class="page-content page-content--index">

    <section class="banner flex flex--items-c flex--justify-c">
      <img
          src="<?php the_field('foto-banner') ?>"
          alt="" class="banner__background">
    </section>

      <?php
      $args = array(
          'post_type' => 'imoveis',
          'order' => 'DESC',
          'posts_per_page' => 9,
          'tax_query' => array(
              array(
                  'taxonomy' => 'exibicao',
                  'field' => 'slug',
                  'terms' => 'destaque'
              )
          )
      );
      $the_query = new WP_Query ($args);
      ?>
    <section class="container advert" style="margin-top: 70px; margin-bottom: 80px">
      <div class="middlecontent">
        <div class="innerTitle">
          <h2 class="innerTitle__title innerTitle__title--middlecontent">Anúncios em Destaque</h2>
        </div>
      </div>

      <div class="advert__list flex row gutter flex--wrap">
          <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
              $termsArrayCategory = get_the_terms($post->ID, 'categoria_imoveis');
              $termsSlugCategory = "";
              $termsCategoryLabel = "";
              foreach ($termsArrayCategory as $term) {
                  $termsSlugCategory .= $term->slug . ' ';
                  $termsCategoryLabel .= $term->slug . ' <span>e</span> ';
              }

              $termsArrayCondition = get_the_terms($post->ID, 'condicao_imoveis');
              $termsSlugCondition = "";
              foreach ($termsArrayCondition as $term) {
                  $termsSlugCondition .= $term->slug . ' ';
              }

              $termsArrayType = get_the_terms($post->ID, 'tipo_imoveis');
              $termsSlugType = "";
              foreach ($termsArrayType as $term) {
                  $termsSlugType .= $term->slug . ' ';
              }

              $exhibitionArray = get_the_terms($post->ID, 'exibicao');
              $exhibition = "";
              if ($exhibitionArray) {
                  foreach ($exhibitionArray as $item) {
                      $exhibition = $item->slug;
                  }
              }
              ?>
            <div class="col-4 col-sm-12 col-lg-6">
              <div class="advert__item">
                <div class="advert__top">
                  <div class="advert__badge"><?php echo $termsSlugCondition ?></div>
                    <?php if (trim(get_field('rent')) != 0 && trim(get_field('rent')) != "") { ?>
                      <div class="advert__badge advert__badge--right">
                        R$ <?php echo number_format(get_field('rent'), 2, ',', '.') ?> / mês
                      </div>
                    <?php } ?>

                    <?php if (trim(get_field('price')) != 0 && trim(get_field('price')) != "") { ?>
                      <div class="advert__badge advert__badge--right">
                        R$ <?php echo number_format(get_field('price'), 2, ',', '.') ?></div>
                    <?php } ?>

                  <div class="advert__img">
                    <img
                        src="<?php echo get_field('images')[0]["inner-image"] ?>"
                        alt="<?php the_title(); ?>">
                  </div>

                  <div class="advert__badge advert__badge--featured" title="Imóvel destaque">
                    <span class="fas fa-star"></span>
                  </div>
                </div>
                <div class="advert__bottom flex flex--col flex--justify-sb">
                  <div class="advert__location">
                    <p class="advert__category-container"><?php the_field('type') ?> para <span
                          class="advert__category"><?php echo $termsCategoryLabel ?></span></p>
                    <p class="advert__city-container">em <span class="advert__city"><?php the_field('city') ?></span>
                    </p>
                  </div>

                  <p class="advert__neighbourhood-container"><span class="fas fa-map-marker-alt advert__icon"></span>
                    <span
                        class="advert__neighbourhood"><?php the_field('neighbourhood') ?></span></p>

                  <ul class="advert__info flex flex--justify-sb flex--wrap">
                      <?php if (trim(get_field('dorms-quantity')) != "" && trim(get_field('dorms-quantity')) != 0) { ?>
                        <li class="advert__info-item flex flex--col flex--items-c">
                          <span
                              class="advert__icon advert__icon--big fas fa-bed flex flex--items-c flex--justify-c"></span>
                          <p class="advert__info-category">Dorms</p>
                          <p class="advert__info-quantity"><?php the_field('dorms-quantity') ?></p>
                        </li>
                      <?php } ?>

                      <?php if (trim(get_field('suites-quantity')) != "" && trim(get_field('suites-quantity')) != 0) { ?>
                        <li class="advert__info-item flex flex--col flex--items-c">
                          <span
                              class="advert__icon advert__icon--big fas fa-bath flex flex--items-c flex--justify-c"></span>
                          <p class="advert__info-category">Suítes</p>
                          <p class="advert__info-quantity"><?php the_field('suites-quantity') ?></p>
                        </li>
                      <?php } ?>

                      <?php if (trim(get_field('bathroom-quantity')) != "" && trim(get_field('bathroom-quantity')) != 0) { ?>
                        <li class="advert__info-item flex flex--col flex--items-c">
                          <span
                              class="advert__icon advert__icon--big fas fa-shower flex flex--items-c flex--justify-c"></span>
                          <p class="advert__info-category">Banheiros</p>
                          <p class="advert__info-quantity"><?php the_field('bathroom-quantity') ?></p>
                        </li>
                      <?php } ?>

                      <?php if (trim(get_field('area-quantity')) != "" && trim(get_field('area-quantity')) != 0) { ?>
                        <li class="advert__info-item flex flex--col flex--items-c">
                          <span
                              class="advert__icon advert__icon--big fas fa-th-large flex flex--items-c flex--justify-c"></span>
                          <p class="advert__info-category">Área</p>
                          <p class="advert__info-quantity"><?php the_field('area-quantity') ?>m²</p>
                        </li>
                      <?php } ?>

                      <?php if (trim(get_field('parking-quantity')) != "" && trim(get_field('parking-quantity')) != 0) { ?>
                        <li class="advert__info-item flex flex--col flex--items-c">
                          <span
                              class="advert__icon advert__icon--big fas fa-car flex flex--items-c flex--justify-c"></span>
                          <p class="advert__info-category">Vagas</p>
                          <p class="advert__info-quantity"><?php the_field('parking-quantity') ?></p>
                        </li>
                      <?php } ?>
                  </ul>

                  <a href="<?php the_permalink(); ?>" class="advert__button btn btn--bold btn--full btn--small">
                    Ver mais
                  </a>
                </div>
              </div>
            </div>
          <?php endwhile; else: endif; ?>
      </div>
      <a href="/anuncios" class="adverts__cta btn btn--radius btn--full">Ver todos os anúncios</a>
    </section>
      <?php wp_reset_postdata(); ?>


      <?php
      $args = array(
          'post_type' => 'imoveis',
          'order' => 'DESC',
          'posts_per_page' => 6,
      );
      $the_query = new WP_Query ($args);
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
          <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
              $termsArrayCategory = get_the_terms($post->ID, 'categoria_imoveis');
              $termsSlugCategory = "";
              $termsCategoryLabel = "";
              foreach ($termsArrayCategory as $term) {
                  $termsSlugCategory .= $term->slug . ' ';
                  $termsCategoryLabel .= $term->slug . ' <span>e</span> ';
              }

              $termsArrayCondition = get_the_terms($post->ID, 'condicao_imoveis');
              $termsSlugCondition = "";
              foreach ($termsArrayCondition as $term) {
                  $termsSlugCondition .= $term->slug . ' ';
              }

              $termsArrayType = get_the_terms($post->ID, 'tipo_imoveis');
              $termsSlugType = "";
              foreach ($termsArrayType as $term) {
                  $termsSlugType .= $term->slug . ' ';
              }

              $exhibitionArray = get_the_terms($post->ID, 'exibicao');
              $exhibition = "";
              if ($exhibitionArray) {
                  foreach ($exhibitionArray as $item) {
                      $exhibition = $item->slug;
                  }
              }
              ?>
            <div class="col-4 col-sm-12 col-lg-6">
              <div class="advert__item">
                <div class="advert__top">
                  <div class="advert__badge"><?php echo $termsSlugCondition ?></div>
                    <?php if (trim(get_field('rent')) != 0 && trim(get_field('rent')) != "") { ?>
                      <div class="advert__badge advert__badge--right">
                        R$ <?php echo number_format(get_field('rent'), 2, ',', '.') ?> / mês
                      </div>
                    <?php } ?>

                    <?php if (trim(get_field('price')) != 0 && trim(get_field('price')) != "") { ?>
                      <div class="advert__badge advert__badge--right">
                        R$ <?php echo number_format(get_field('price'), 2, ',', '.') ?></div>
                    <?php } ?>

                  <div class="advert__img">
                    <img
                        src="<?php echo get_field('images')[0]["inner-image"] ?>"
                        alt="<?php the_title(); ?>">
                  </div>

                    <?php if ($exhibition == "destaque") { ?>
                      <div class="advert__badge advert__badge--featured" title="Imóvel destaque">
                        <span class="fas fa-star"></span>
                      </div>
                    <?php } ?>
                </div>
                <div class="advert__bottom flex flex--col flex--justify-sb">
                  <div class="advert__location">
                    <p class="advert__category-container"><?php the_field('type') ?> para <span
                          class="advert__category"><?php echo $termsCategoryLabel ?></span></p>
                    <p class="advert__city-container">em <span class="advert__city"><?php the_field('city') ?></span>
                    </p>
                  </div>

                  <p class="advert__neighbourhood-container"><span class="fas fa-map-marker-alt advert__icon"></span>
                    <span
                        class="advert__neighbourhood"><?php the_field('neighbourhood') ?></span></p>

                  <ul class="advert__info flex flex--justify-sb flex--wrap">
                      <?php if (trim(get_field('dorms-quantity')) != "" && trim(get_field('dorms-quantity')) != 0) { ?>
                        <li class="advert__info-item flex flex--col flex--items-c">
                          <span
                              class="advert__icon advert__icon--big fas fa-bed flex flex--items-c flex--justify-c"></span>
                          <p class="advert__info-category">Dorms</p>
                          <p class="advert__info-quantity"><?php the_field('dorms-quantity') ?></p>
                        </li>
                      <?php } ?>

                      <?php if (trim(get_field('suites-quantity')) != "" && trim(get_field('suites-quantity')) != 0) { ?>
                        <li class="advert__info-item flex flex--col flex--items-c">
                          <span
                              class="advert__icon advert__icon--big fas fa-bath flex flex--items-c flex--justify-c"></span>
                          <p class="advert__info-category">Suítes</p>
                          <p class="advert__info-quantity"><?php the_field('suites-quantity') ?></p>
                        </li>
                      <?php } ?>

                      <?php if (trim(get_field('bathroom-quantity')) != "" && trim(get_field('bathroom-quantity')) != 0) { ?>
                        <li class="advert__info-item flex flex--col flex--items-c">
                          <span
                              class="advert__icon advert__icon--big fas fa-shower flex flex--items-c flex--justify-c"></span>
                          <p class="advert__info-category">Banheiros</p>
                          <p class="advert__info-quantity"><?php the_field('bathroom-quantity') ?></p>
                        </li>
                      <?php } ?>

                      <?php if (trim(get_field('area-quantity')) != "" && trim(get_field('area-quantity')) != 0) { ?>
                        <li class="advert__info-item flex flex--col flex--items-c">
                          <span
                              class="advert__icon advert__icon--big fas fa-th-large flex flex--items-c flex--justify-c"></span>
                          <p class="advert__info-category">Área</p>
                          <p class="advert__info-quantity"><?php the_field('area-quantity') ?>m²</p>
                        </li>
                      <?php } ?>

                      <?php if (trim(get_field('parking-quantity')) != "" && trim(get_field('parking-quantity')) != 0) { ?>
                        <li class="advert__info-item flex flex--col flex--items-c">
                          <span
                              class="advert__icon advert__icon--big fas fa-car flex flex--items-c flex--justify-c"></span>
                          <p class="advert__info-category">Vagas</p>
                          <p class="advert__info-quantity"><?php the_field('parking-quantity') ?></p>
                        </li>
                      <?php } ?>
                  </ul>

                  <a href="<?php the_permalink(); ?>" class="advert__button btn btn--bold btn--full btn--small">
                    Ver mais
                  </a>
                </div>
              </div>
            </div>
          <?php endwhile; else: endif; ?>
      </div>
      <a href="/anuncios" class="adverts__cta btn btn--radius btn--full">Ver todos os anúncios</a>
    </section>
      <?php wp_reset_postdata(); ?>

  </main>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>