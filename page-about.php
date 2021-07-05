<?php
// Template Name: Sobre
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <main class="page-content page-content--about">

    <div class="innerTitle container">
      <p class="innerTitle__text fadeInUp" data-anime="200">Conheça a empresa</p>
      <h2 class="innerTitle__title fadeInUp" data-anime="400">Quem somos</h2>
    </div>

    <section class="container">
      <div class="info flex flex--items-c flex--justify-sb flex--wrap row gutter">
        <div class="info__left col-6 col-sm-12">
          <h3 class="page-title fadeInUp" data-anime="450">A empresa</h3>
          <div class="info__content fadeInLeft" data-anime="550">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quibusdam quam molestias autem
              commodi voluptatibus nisi hic corporis omnis. Id!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis consectetur, qui eum inventore
              incidunt quia quam totam, excepturi magni sed dolorum, dolores itaque nemo. Cumque alias tenetur adipisci
              dignissimos eligendi amet odio, neque obcaecati similique cum doloremque ipsum quisquam beatae ea fuga.
              Consequatur, necessitatibus dolor?</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit, corrupti quae! Quae provident
              reprehenderit laudantium.</p>
          </div>
          <h3 class="page-title fadeInUp" data-anime="800">O conceito</h3>
          <div class="info__content fadeInLeft" data-anime="1000">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, atque, itaque consequatur optio autem
              praesentium doloremque iusto, eligendi laborum animi accusantium? Ut odio eaque optio quae suscipit,
              quisquam porro soluta.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum ipsam asperiores rem perferendis!
              Reprehenderit distinctio iusto similique eveniet architecto fuga voluptate repudiandae ipsam impedit
              voluptas a corporis possimus, quia nulla ratione sequi? Quidem, veritatis autem.</p>
          </div>
        </div>
        <div class="info__right col-6 col-sm-12">
          <img class="fadeInRight" data-anime="700"
            src="https://images.unsplash.com/photo-1497032628192-86f99bcd76bc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
            alt="">
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
          <p class="values__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam, doloribus.
            Necessitatibus, recusandae.</p>
        </div>
        <div class="values__item flex flex--col flex--items-c col-4 col-sm-12">
          <div class="values__icon-container flex flex--items-c flex--justify-c">
            <span class="values__icon far fa-eye"></span>
          </div>
          <p class="values__title">Visão</p>
          <p class="values__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam, doloribus.
            Necessitatibus, recusandae.</p>
        </div>
        <div class="values__item flex flex--col flex--items-c col-4 col-sm-12">
          <div class="values__icon-container flex flex--items-c flex--justify-c">
            <span class="values__icon far fa-gem"></span>
          </div>
          <p class="values__title">Valores</p>
          <p class="values__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam, doloribus.
            Necessitatibus, recusandae.</p>
        </div>
      </div>
    </section>

    <section class="container">
      <h3 class="page-title">Nossa equipe</h3>
      <div class="staff flex flex--justify-c flex--wrap row gutter">
        <div class="staff__container col-4 col-sm-12">
          <div class="staff__member">
            <div class="staff__photo">
              <img
                src="https://images.unsplash.com/photo-1537511446984-935f663eb1f4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                alt="">
            </div>
            <div class="staff__content">
              <p class="staff__name">Joãozinho da Silva</p>
              <p class="staff__text">Lorem ipsum sic amet. Lorem ipsum sic amet. Lorem ipsum sic amet. Lorem ipsum sic
                amet. Lorem ipsum sic amet. Lorem ipsum sic amet.</p>
            </div>
          </div>
        </div>
        <div class="staff__container col-4 col-sm-12">
          <div class="staff__member">
            <div class="staff__photo">
              <img
                src="https://images.unsplash.com/photo-1573497019236-17f8177b81e8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                alt="">
            </div>
            <div class="staff__content">
              <p class="staff__name">Mariazinha da Silva</p>
              <p class="staff__text">Lorem ipsum sic amet. Lorem ipsum sic amet. Lorem ipsum sic amet. Lorem ipsum sic
                amet. Lorem ipsum sic amet. Lorem ipsum sic amet.</p>
            </div>
          </div>
        </div>
        <div class="staff__container col-4 col-sm-12">
          <div class="staff__member">
            <div class="staff__photo">
              <img
                src="https://images.unsplash.com/photo-1613592237025-5382001c5c9d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                alt="">
            </div>
            <div class="staff__content">
              <p class="staff__name">Fulaninho da Silva</p>
              <p class="staff__text">Lorem ipsum sic amet. Lorem ipsum sic amet. Lorem ipsum sic amet. Lorem ipsum sic
                amet. Lorem ipsum sic amet. Lorem ipsum sic amet.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="cta flex flex--items-c flex--justify-c">
      <img
        src="https://images.unsplash.com/photo-1565402170291-8491f14678db?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=704&q=80"
        alt="" class="cta__background">
      <div class="cta__content">
        <p class="cta__text">Conheça nossos serviços</p>
        <a href="services.html" class="cta__button btn btn--radius flex flex--items-c flex--justify-c">Saiba mais</a>
      </div>
    </div>
  </main>


<?php endwhile; else: endif;?>
<?php get_footer(); ?>
