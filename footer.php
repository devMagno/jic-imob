<footer class="footer">
    <div class="container">
      <div class="footer__logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-footer.svg" alt="<?php bloginfo('name'); ?>">
      </div>
      <div class="footer__inner flex flex--items-start flex--justify-sb flex--wrap">
        <div class="footer__left">
          <nav class="footer__nav">
            <ul class="footer__list">
              <li class="footer__item"><a href="/" class="footer__link footer__link--active">Início</a></li>
              <li class="footer__item"><a href="/sobre" class="footer__link">Sobre</a></li>
              <li class="footer__item"><a href="/servicos" class="footer__link">Serviços</a></li>
              <li class="footer__item"><a href="/anuncios" class="footer__link">Anúncios</a></li>
              <li class="footer__item"><a href="/contato" class="footer__link">Contato</a></li>
            </ul>
          </nav>
        </div>
        <div class="footer__middle">
          <ul class="footer__infoList">
            <li class="footer__info flex flex--items-c">
              <span class="fas fa-map-marker-alt footer__icon"></span>
              <p class="footer__infoText"><a
                  href="https://www.google.com/maps/place/Rua+do+Com%C3%A9rcio,+25+-+Centro,+Santos+-+SP,+11010-122/@-23.9333249,-46.333184,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce0483a3d5380d:0x31026716ad7a3f4e!8m2!3d-23.9333249!4d-46.3309953"
                  target="_blank" rel="noopener noreferrer">Rua do Comércio n° 25, sala 11 - Centro - Santos, SP</a></p>
            </li>
            <li class="footer__info flex flex--items-c">
              <span class="fas fa-phone-alt footer__icon"></span>
              <p class="footer__infoText"><a href="https://api.whatsapp.com/send?phone=551332845566" target="_blank"
                  rel="nooper noreferrer">(13) 3284-5566</a></p>
            </li>
            <li class="footer__info flex flex--items-c">
              <span class="fas fa-envelope footer__icon"></span>
              <p class="footer__infoText"><a href="mailto:jicassessoria@hotmail.com">jicassessoria@hotmail.com</a></p>
            </li>
          </ul>
        </div>
        <div class="footer__right">
          <ul class="footer__socials flex flex--items-c flex--justify-sb">
            <li class="footer__social">
              <a rel="noopener noreferrer" target="_blank" href="#" class="footer__socialLink"><span
                  class="fab fa-facebook-square"></span></a>
            </li>
            <li class="footer__social">
              <a rel="noopener noreferrer" target="_blank" href="#" class="footer__socialLink"><span
                  class="fab fa-whatsapp"></span></a>
            </li>
            <li class="footer__social">
              <a rel="noopener noreferrer" target="_blank" href="#" class="footer__socialLink"><span
                  class="fab fa-instagram"></span></a>
            </li>
            <li class="footer__social">
              <a rel="noopener noreferrer" target="_blank" href="#" class="footer__socialLink"><span
                  class="fab fa-youtube"></span></a>
            </li>
          </ul>
        </div>
      </div>
      <p class="footer__copy"><?php bloginfo('name'); ?> © <?php echo date("Y"); ?> - Todos os direitos reservados.</p>
    </div>
  </footer>

  <script src="../js/libs.min.js"></script>
  <script src="../js/script.js"></script>

  <?php wp_footer(); ?>
</body>

</html>