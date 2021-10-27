<?php
// Template Name: Contato
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <main class="page-content page-content--contact">

    <div class="innerTitle container">
      <p class="innerTitle__text">Está interessado?</p>
      <h2 class="innerTitle__title">Entre em contato</h2>
    </div>

    <div class="content-container container">
      <div class="flex row gutter flex--wrap flex--justify-sb">
        <section class="form-section col-sm-12 col-6">
          <form action="" id="contactForm" class="form" autocomplete="on">
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
            <!-- <div class="form__group">
              <input type="email" class="form__input" placeholder="exemplo@gmail.com" id="email" name="email" required>
              <label for="email" class="form__label" data-content="E-mail">
                <div class="sr-only">E-mail</div>
              </label>
            </div> -->
            <div class="form__group form__group--textarea">
              <label for="message">Mensagem</label>
              <textarea name="message" id="message"></textarea>
            </div>
            <button type="submit" class="form__button btn btn--radius btn--bold btn--full">Enviar</button>
            <script>
            window.open('https://api.whatsapp.com/send?l=pt_BR&phone=55{{Telefone}}&text=Olá, gostaria de agendar uma visita no {{Telefone}}!', '_blank');"

form.addEventListener('submit', function() {
  var message = document.querySelector('message').value

  window.open('https://api.whatsapp.com/send?l=pt_BR&phone=55<?php the_field('telefone') ?>
  &text={{message}}!', '_blank');"
})
</script>
          </form>

          
        </section>
        <section class="contacts-section col-sm-12 col-6">
          <div class="contacts">
            <p class="contacts__label">Encontre-nos</p>
            <div class="contacts__map">
              <?php the_field('address-frame'); ?>
            </div>
            <div class="contacts__list-container">
              <p class="contacts__label">Lista de Contatos</p>
              <ul class="contacts__list">
                <li class="contacts__item">
                  <a href="https://api.whatsapp.com/send?phone=<?php the_field('ugly-phone-number'); ?>" target="_blank" rel="nooper noreferrer"
                    class="contacts__link flex flex--items-c">
                    <span class="fas fa-phone-alt contacts__icon"></span>
                    <p class="contacts__link-text"><?php the_field('phone-number'); ?></p>
                  </a>
                  <a href="mailto:<?php the_field('email'); ?>" class="contacts__link flex flex--items-c">
                    <span class="fas fa-envelope contacts__icon"></span>
                    <p class="contacts__link-text"><?php the_field('email'); ?></p>
                  </a>
                </li>
              </ul>
            </div>
            <div class="contacts__social-container">
              <p class="contacts__label">Redes Sociais</p>
              <ul class="contacts__social flex flex--items-c flex--wrap">
                <li class="contacts__social-item">
                  <a rel="noopener noreferrer" target="_blank" href="<?php the_field('facebook'); ?>"
                    class="contacts__social-link flex flex--items-c flex--justify-c">
                    <span class="fab fa-facebook-square contacts__social-icon"></span></a>
                </li>
                <li class="contacts__social-item">
                  <a rel="noopener noreferrer" target="_blank" href="https://api.whatsapp.com/send?phone=<?php the_field('ugly-phone-number'); ?>"
                    class="contacts__social-link flex flex--items-c flex--justify-c">
                    <span class="fab fa-whatsapp contacts__social-icon"></span></a>
                </li>
                <li class="contacts__social-item">
                  <a rel="noopener noreferrer" target="_blank" href="<?php the_field('instagram'); ?>"
                    class="contacts__social-link flex flex--items-c flex--justify-c">
                    <span class="fab fa-instagram contacts__social-icon"></span></a>
                </li>
                <li class="contacts__social-item">
                  <a rel="noopener noreferrer" target="_blank" href="<?php the_field('youtube'); ?>"
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
      <?php
        $faq = get_field('perguntas');
        if (isset($faq)) { foreach ($faq as $index => $pergunta) { ?>
          <details class="accordion__item" <?php if($index == 0) echo 'open' ?>>
            <summary class="accordion__title flex flex--items-c flex--justify-sb">
              <?php echo $pergunta['pergunta'] ?>
            </summary>
            <p class="accordion__description">
              <?php echo $pergunta['resposta'] ?>
            </p>
          </details>
      <?php } } ?>
    </div>
  </main>

  
<?php endwhile; else: endif;?>
<?php get_footer(); ?>
