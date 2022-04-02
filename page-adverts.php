<?php
// Template Name: Anúncios
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <main class="page-content page-content--adverts">

    <div class="innerTitle container">
      <p class="innerTitle__text">O imóvel certo pra você</p>
      <h2 class="innerTitle__title">Nossos anúncios</h2>
    </div>

      <?php
      $args = array(
          'post_type' => 'imoveis',
          'order' => 'DESC'
      );
      $the_query = new WP_Query ($args);
      ?>
    <section class="advert container">
      <div class="flex row gutter flex--items-start">
        <div class="advert__filters col-2">
          <div class="flex flex--justify-c flex--col filter-button-group">
            <button class="flex flex--items-c active" data-filter="*">Todos</button>
          </div>
          <div class="flex flex--justify-c flex--col filter-button-group">
              <?php
              $terms = get_terms('categoria_imoveis');
              foreach ($terms as $term) { ?>
                <button class="flex flex--items-c"
                        data-url="categoria=<?php echo $term->slug; ?>"
                        data-filter=".<?php echo $term->slug; ?>">
                    <?php echo $term->name; ?>
                </button>
                  <?php
              }
              ?>
          </div>
          <div class="flex flex--justify-c flex--col filter-button-group">
              <?php
              $terms2 = get_terms('condicao_imoveis');
              foreach ($terms2 as $term) { ?>
                <button class="flex flex--items-c"
                        data-url="condicao=<?php echo $term->slug; ?>"
                        data-filter=".<?php echo $term->slug; ?>">
                    <?php echo $term->name; ?>
                </button>
                  <?php
              }
              ?>
          </div>
          <div class="flex flex--justify-c flex--col filter-button-group">
              <?php
              $terms3 = get_terms('tipo_imoveis');
              foreach ($terms3 as $term) { ?>
                <button class="flex flex--items-c"
                        data-url="tipo=<?php echo $term->slug; ?>"
                        data-filter=".<?php echo $term->slug; ?>">
                    <?php echo $term->name; ?>
                </button>
                  <?php
              }
              ?>
          </div>
        </div>
        <div class="grid advert__list flex row gutter flex--justify-c flex--wrap content col-10">
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
                ?>
              <div
                  class="grid-item col-5 <?php echo $termsSlugCategory; ?> <?php echo $termsSlugCondition ?> <?php echo $termsSlugType ?>">
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

                    <a href="<?php the_permalink(); ?>" class="advert__button btn btn--bold btn--full btn--small">Ver
                      mais</a>

                  </div>
                </div>
              </div>

            <?php endwhile; else:endif; ?>
            <?php wp_reset_query();
            wp_reset_postdata(); ?>
        </div>
      </div>
    </section>

    <div class="cta flex flex--items-c flex--justify-c">
      <img
          src="<?php the_field('foto-cta'); ?>"
          alt="<?php the_field('foto-cta-alt'); ?>" class="cta__background">
      <div class="cta__content">
        <p class="cta__text">Anúncie seu imóvel conosco</p>
        <a href="/contato" class="cta__button btn btn--radius flex flex--items-c flex--justify-c">Entre em
          contato</a>
      </div>
    </div>
  </main>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>