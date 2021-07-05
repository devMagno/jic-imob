<?php
// Template Name: Contato
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <main class="page-content page-content--contact">

    <div class="innerTitle container">
      <p class="innerTitle__text fadeInUp" data-anime="200">Está interessado?</p>
      <h2 class="innerTitle__title fadeInUp" data-anime="400">Entre em contato</h2>
    </div>

    <div class="content-container container">
      <div class="flex row gutter flex--wrap flex--justify-sb">
        <section class="form-section col-sm-12 col-6">
          <form action="" id="contactForm" class="form fadeInLeft" data-anime="500">
            <div class="form__group">
              <input type="text" class="form__input" placeholder="Nome" id="name" name="name" required>
              <label for="name" class="form__label" data-content="Nome">
                <div class="sr-only">Nome</div>
              </label>
            </div>
            <div class="form__group">
              <input type="tel" class="form__input" placeholder="Telefone" id="phone" name="phone" required>
              <label for="phone" class="form__label" data-content="Telefone">
                <div class="sr-only">Telefone</div>
              </label>
            </div>
            <div class="form__group">
              <input type="email" class="form__input" placeholder="exemplo@gmail.com" id="email" name="email" required>
              <label for="email" class="form__label" data-content="E-mail">
                <div class="sr-only">E-mail</div>
              </label>
            </div>
            <div class="form__group form__group--textarea">
              <label for="message">Mensagem</label>
              <textarea name="message" id="message"></textarea>
            </div>
            <button type="submit" class="form__button btn btn--radius btn--bold btn--full">Enviar</button>
          </form>
        </section>
        <section class="contacts-section col-sm-12 col-6 fadeInUp" data-anime="600">
          <div class="contacts">
            <p class="contacts__label">Encontre-nos</p>
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3646.7663940146986!2d-46.333183985015005!3d-23.93332488449953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce0483a3d5380d%3A0x31026716ad7a3f4e!2sRua%20do%20Com%C3%A9rcio%2C%2025%20-%20Centro%2C%20Santos%20-%20SP%2C%2011010-122!5e0!3m2!1spt-BR!2sbr!4v1624665514642!5m2!1spt-BR!2sbr"
                width="800" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="contacts__list-container">
              <p class="contacts__label">Lista de Contatos</p>
              <ul class="contacts__list">
                <li class="contacts__item">
                  <a href="https://api.whatsapp.com/send?phone=551332845566" target="_blank" rel="nooper noreferrer"
                    class="contacts__link flex flex--items-c">
                    <span class="fas fa-phone-alt contacts__icon"></span>
                    <p class="contacts__link-text">(13) 3284 - 5566</p>
                  </a>
                  <a href="mailto:jicassessoria@hotmail.com" class="contacts__link flex flex--items-c">
                    <span class="fas fa-envelope contacts__icon"></span>
                    <p class="contacts__link-text">jicassessoria@hotmail.com</p>
                  </a>
                </li>
              </ul>
            </div>
            <div class="contacts__social-container">
              <p class="contacts__label">Redes Sociais</p>
              <ul class="contacts__social flex flex--items-c flex--wrap">
                <li class="contacts__social-item">
                  <a rel="noopener noreferrer" target="_blank" href="#"
                    class="contacts__social-link flex flex--items-c flex--justify-c">
                    <span class="fab fa-facebook-square contacts__social-icon"></span></a>
                </li>
                <li class="contacts__social-item">
                  <a rel="noopener noreferrer" target="_blank" href="#"
                    class="contacts__social-link flex flex--items-c flex--justify-c">
                    <span class="fab fa-whatsapp contacts__social-icon"></span></a>
                </li>
                <li class="contacts__social-item">
                  <a rel="noopener noreferrer" target="_blank" href="#"
                    class="contacts__social-link flex flex--items-c flex--justify-c">
                    <span class="fab fa-instagram contacts__social-icon"></span></a>
                </li>
                <li class="contacts__social-item">
                  <a rel="noopener noreferrer" target="_blank" href="#"
                    class="contacts__social-link flex flex--items-c flex--justify-c">
                    <span class="fab fa-youtube contacts__social-icon"></span></a>
                </li>
              </ul>
            </div>
          </div>
      </div>
      </section>
    </div>

    <div class="container accordion-container">
      <h2 class="innerTitle__title">Perguntas Frequentes</h2>
      <details class="accordion__item" open>
        <summary class="accordion__title flex flex--items-c flex--justify-sb">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </summary>
        <p class="accordion__description">
          Duis sed nibh orci. Maecenas in sem dolor. Morbi vel felis odio. Nullam tincidunt tortor nulla, nec varius
          tortor congue eu. Integer ac magna pharetra, efficitur nunc eget, aliquam ante. Etiam ultrices laoreet dolor
          nec scelerisque. Pellentesque elementum aliquet eros eu molestie.
        </p>
      </details>
      <details class="accordion__item">
        <summary class="accordion__title flex flex--items-c flex--justify-sb">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </summary>
        <p class="accordion__description">
          Duis sed nibh orci. Maecenas in sem dolor. Morbi vel felis odio. Nullam tincidunt tortor nulla, nec varius
          tortor congue eu. Integer ac magna pharetra, efficitur nunc eget, aliquam ante. Etiam ultrices laoreet dolor
          nec scelerisque. Pellentesque elementum aliquet eros eu molestie.
        </p>
      </details>
      <details class="accordion__item">
        <summary class="accordion__title flex flex--items-c flex--justify-sb">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </summary>
        <p class="accordion__description">
          Duis sed nibh orci. Maecenas in sem dolor. Morbi vel felis odio. Nullam tincidunt tortor nulla, nec varius
          tortor congue eu. Integer ac magna pharetra, efficitur nunc eget, aliquam ante. Etiam ultrices laoreet dolor
          nec scelerisque. Pellentesque elementum aliquet eros eu molestie.
        </p>
      </details>
      <details class="accordion__item">
        <summary class="accordion__title flex flex--items-c flex--justify-sb">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </summary>
        <p class="accordion__description">
          Duis sed nibh orci. Maecenas in sem dolor. Morbi vel felis odio. Nullam tincidunt tortor nulla, nec varius
          tortor congue eu. Integer ac magna pharetra, efficitur nunc eget, aliquam ante. Etiam ultrices laoreet dolor
          nec scelerisque. Pellentesque elementum aliquet eros eu molestie.
        </p>
      </details>
    </div>
  </main>

  
<?php endwhile; else: endif;?>
<?php get_footer(); ?>
