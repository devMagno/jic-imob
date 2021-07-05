<?php
// Template Name: Serviços
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <main class="page-content page-content--services">
    <div class="innerTitle container">
      <p class="innerTitle__text fadeInUp" data-anime="200">Nossas especialidades</p>
      <h2 class="innerTitle__title fadeInUp" data-anime="400">Serviços Prestados</h2>
    </div>
    <section class="container content" id="imobiliarios">
      <div class="flex row gutter flex--items-c flex--justify-sb flex--wrap">
        <div class="content__textual col-6 col-sm-12 flex--col">
          <h3 class="content__title page-title fadeInLeft" data-anime="500">Serviços imobiliários</h3>
          <div class="content__text fadeInLeft" data-anime="600">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores, nulla! Lorem ipsum, dolor sit amet
              consectetur adipisicing elit. Nostrum, nobis excepturi harum et assumenda
              doloribus laudantium quasi. Nisi minima architecto obcaecati temporibus?</p>
            <ul>
              <li> Aliquam tempor augue arcu, ac gravida eros congue nec. Duis nec nibh eu neque convallis varius. </li>
              <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
              <li> Duis nec nibh eu neque convallis varius.</li>
            </ul>
          </div>
          <button class="content__cta btn btn--radius fadeInLeft" data-anime="700">Ver anúncios</button>
        </div>
        <div class="content__visual col-5 col-sm-12 fadeInUp" data-anime="750">
          <img
            src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=666&q=80"
            alt="" class="content__img1">
        </div>
      </div>
    </section>

    <section class="container content" id="administrativos">
      <div class="flex row gutter flex--items-c flex--justify-sb flex--wrap">
        <div class="content__visual col-5 col-sm-12">
          <img
            src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
            alt="" class="content__img1">
        </div>
        <div class="content__textual content__textual--right col-6 col-sm-12 flex flex--col flex--items-end">
          <h3 class="content__title page-title">Serviços administrativos</h3>
          <div class="content__text content__text--right">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores, nulla! Lorem ipsum, dolor sit amet
              consectetur adipisicing elit. Nostrum, nobis excepturi harum et assumenda
              doloribus laudantium quasi. Nisi minima architecto obcaecati temporibus?</p>
            <ul>
              <li> Aliquam tempor augue arcu, ac gravida eros congue nec. Duis nec nibh eu neque convallis varius. </li>
              <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
              <li> Duis nec nibh eu neque convallis varius.</li>
            </ul>
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
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores, nulla! Lorem ipsum, dolor sit amet
              consectetur adipisicing elit. Nostrum, nobis excepturi harum et assumenda
              doloribus laudantium quasi. Nisi minima architecto obcaecati temporibus?</p>
            <ul>
              <li> Aliquam tempor augue arcu, ac gravida eros congue nec. Duis nec nibh eu neque convallis varius. </li>
              <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
              <li> Duis nec nibh eu neque convallis varius.</li>
            </ul>
          </div>
          <button class="content__cta btn btn--radius">Entre em contato</button>
        </div>
        <div class="content__visual col-5 col-sm-12">
          <img
            src="https://images.unsplash.com/photo-1457904375453-3e1fc2fc76f4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
            alt="" class="content__img1">
        </div>
      </div>
    </section>
  </main>

<?php endwhile; else: endif;?>
<?php get_footer(); ?>
