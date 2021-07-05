<?php
// Template Name: Anúncios
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <main class="page-content page-content--adverts">

    <div class="innerTitle container">
      <p class="innerTitle__text fadeInUp" data-anime="200">O imóvel certo pra você</p>
      <h2 class="innerTitle__title fadeInUp" data-anime="400">Nossos anúncios</h2>
    </div>

    <section class="advert container">
      <div class="advert__list flex row gutter flex--wrap">
        <div class="col-4 col-sm-12 col-lg-6 fadeInLeft" data-anime="500">
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
        <div class="col-4 col-sm-12 col-lg-6 fadeInLeft" data-anime="700">
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
        <div class="col-4 col-sm-12 col-lg-6 fadeInLeft" data-anime="800">
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
        <div class="col-4 col-sm-12 col-lg-6 fadeInRight" data-anime="500">
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
      </div>
    </section>

    <div class="cta flex flex--items-c flex--justify-c">
      <img
        src="https://images.unsplash.com/photo-1592595896551-12b371d546d5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80"
        alt="" class="cta__background">
      <div class="cta__content">
        <p class="cta__text">Anúncie seu imóvel conosco</p>
        <a href="contact.html" class="cta__button btn btn--radius flex flex--items-c flex--justify-c">Entre em
          contato</a>
      </div>
    </div>
  </main>

<?php endwhile; else: endif;?>
<?php get_footer(); ?>