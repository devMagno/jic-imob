<?php
// Template Name: Contato
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <main class="page-content page-content--contact">

    <div class="innerTitle container">
      <p class="innerTitle__text">Está interessado?</p>
      <h2 class="innerTitle__title">Entre em contato</h2>
    </div>

    <div class="content-container container">
      <div class="flex row gutter flex--wrap flex--justify-sb">
        <section class="form-section col-sm-12 col-6">
          <form id="contactForm" class="form" autocomplete="on">
            <div class="form__group">
              <input type="text" class="form__input" placeholder="Nome" id="name" name="name" required>
              <label for="name" class="form__label" data-content="Nome">
                <span class="sr-only">Nome</span>
              </label>
            </div>
            <div class="form__group">
              <input type="tel" class="form__input" placeholder="Telefone" id="phone" name="phone" required>
              <label for="phone" class="form__label" data-content="Telefone">
                <span class="sr-only">Telefone</span>
              </label>
            </div>
              <?php /*<div class="form__group">
              <input type="email" class="form__input" placeholder="exemplo@gmail.com" id="email" name="email" required>
              <label for="email" class="form__label" data-content="E-mail">
                <div class="sr-only">E-mail</div>
              </label>
            </div> */ ?>
            <div class="form__group form__group--textarea">
              <label for="message">Mensagem <span style="color: red">*</span></label>
              <textarea name="message" id="message" required></textarea>
            </div>
            <button type="submit" class="form__button btn btn--radius btn--bold btn--full">Enviar</button>
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
                  <a href="https://api.whatsapp.com/send?phone=<?php the_field('ugly-phone-number'); ?>" target="_blank"
                     rel="nooper noreferrer"
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
                  <a rel="noopener noreferrer" target="_blank"
                     href="https://api.whatsapp.com/send?phone=<?php the_field('ugly-phone-number'); ?>"
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
    </div>

    <div class="container accordion-container">
      <h2 class="innerTitle__title">Perguntas Frequentes</h2>
        <?php
        $faq = get_field('perguntas');
        if (isset($faq)) {
            foreach ($faq as $index => $pergunta) { ?>
              <details class="accordion__item" <?php if ($index == 0) echo 'open' ?>>
                <summary class="accordion__title flex flex--items-c flex--justify-sb">
                    <?php echo $pergunta['pergunta'] ?>
                </summary>
                <p class="accordion__description">
                    <?php echo $pergunta['resposta'] ?>
                </p>
              </details>
            <?php }
        } ?>
    </div>
  </main>

  <script>
    var form = document.getElementById('contactForm')
    form.addEventListener('submit', function (event) {
      event.preventDefault()

      var nameValue = document.getElementById('name').value.trim().replace(/\s\s+/g, ' ')
      var phoneValue = document.getElementById('phone').value.trim().replace(/\s\s+/g, ' ')
      var messageValue = document.getElementById('message').value.trim().replace(/\s\s+/g, ' ')

      if (nameValue && phoneValue && messageValue) {
        var a = navigator.userAgent || navigator.vendor || window.opera
        var isMobile = /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))

        var baseURL

        if (isMobile) {
          baseURL = "whatsapp://send?"
        } else {
          baseURL = "https://api.whatsapp.com/send?"
        }

        var message = encodeURIComponent(`Olá, meu nome é *${nameValue}*, meu telefone é *${phoneValue}*.\nMensagem: ${messageValue}`)

        window.open(`${baseURL}l=pt_BR&phone=<?php the_field('ugly-phone-number'); ?>&text=${message}`, '_blank')
      }
    })
  </script>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>
