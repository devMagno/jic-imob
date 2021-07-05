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
      <h1 class="banner__text container fadeInUp" data-anime="500">Lorem Ipsum dolor sit amet. Duis sed nibh orci. Maecenas in sem dolor.</h1>
    </section>

    <section class="container content">
      <div class="flex row gutter flex--justify-sb flex--wrap">
        <div class="content__textual col-6 col-sm-12 flex--col">
          <h2 class="content__title">Quem somos</h2>
          <div class="content__text">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, quod!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt necessitatibus cupiditate error dicta?
              Perferendis, aliquid.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi nihil veniam ab cumque eligendi totam
              blanditiis ducimus, tenetur, laudantium neque corporis aspernatur consectetur quos. Ex quibusdam optio
              commodi voluptas natus.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates temporibus, dignissimos iusto,
              adipisci doloremque et nulla ducimus minus perferendis quas sequi harum similique eligendi fuga?</p>
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
          <p class="innerTitle__text innerTitle__text--middlecontent">Conheça os serviços que prestamos<br>
            nos ramos imobiliário, financeiro e administrativo.</p>
        </div>
        <div class="middlecontent__images flex row gutter flex--wrap flex--justify-c">
          <div class="middlecontent__background col-12 col-sm-12 flex flex--items-end flex--justify-c">
            <img
              src="https://images.unsplash.com/photo-1564540574859-0dfb63985953?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
              alt="">
            <a href="services.html#imobiliarios" class="btn btn--bold middlecontent__btn">Imobiliário</a>
          </div>
          <div class="middlecontent__background col-6 col-sm-12 flex flex--items-end flex--justify-c">
            <img
              src="https://images.unsplash.com/photo-1511467687858-23d96c32e4ae?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
              alt="">
            <a href="services.html#administrativos" class="btn btn--bold middlecontent__btn">Administrativo</a>
          </div>
          <div class="middlecontent__background col-6 col-sm-12 flex flex--items-end flex--justify-c">
            <img
              src="https://images.unsplash.com/photo-1427751840561-9852520f8ce8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1055&q=80"
              alt="">
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
          <p class="innerTitle__text innerTitle__text--middlecontent">Veja nossos anúncios mais recentes e encontre o
            imóvel certo para você.</p>
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