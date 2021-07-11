<?php 
$contato = get_page_by_title('Contato')->ID;
?>
<footer class="footer">
    <div class="container">
      <div class="footer__logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-footer.svg" alt="<?php bloginfo('name'); ?>">
      </div>
      <div class="footer__inner flex flex--items-start flex--justify-sb flex--wrap">
        <div class="footer__left">
          <nav class="footer__nav">
          <?php
            $args = array(
              'menu' => 'footer',
              'theme_location' => 'footer-menu',
              'container' => false
            );
            wp_nav_menu( $args );
          ?>
          </nav>
        </div>
        <div class="footer__middle">
          <ul class="footer__infoList">
            <li class="footer__info flex flex--items-c">
              <span class="fas fa-map-marker-alt footer__icon"></span>
              <p class="footer__infoText"><a
                  href="<?php echo get_post_meta($contato, 'address-link', true); ?>"
                  target="_blank" rel="noopener noreferrer"><?php echo get_post_meta($contato, 'address', true); ?></a></p>
            </li>
            <li class="footer__info flex flex--items-c">
              <span class="fas fa-phone-alt footer__icon"></span>
              <p class="footer__infoText"><a href="https://api.whatsapp.com/send?phone=<?php echo get_post_meta($contato, 'ugly-phone-number', true); ?>" target="_blank"
                  rel="nooper noreferrer"><?php echo get_post_meta($contato, 'phone-number', true); ?></a></p>
            </li>
            <li class="footer__info flex flex--items-c">
              <span class="fas fa-envelope footer__icon"></span>
              <p class="footer__infoText"><a href="mailto:<?php echo get_post_meta($contato, 'email', true); ?>"><?php echo get_post_meta($contato, 'email', true); ?></a></p>
            </li>
          </ul>
        </div>
        <div class="footer__right">
          <ul class="footer__socials flex flex--items-c flex--justify-sb">
            <li class="footer__social">
              <a rel="noopener noreferrer" target="_blank" href="<?php echo get_post_meta($contato, 'facebook', true); ?>" class="footer__socialLink"><span
                  class="fab fa-facebook-square"></span></a>
            </li>
            <li class="footer__social">
              <a rel="noopener noreferrer" target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo get_post_meta($contato, 'ugly-phone-number', true); ?>" class="footer__socialLink"><span
                  class="fab fa-whatsapp"></span></a>
            </li>
            <li class="footer__social">
              <a rel="noopener noreferrer" target="_blank" href="<?php echo get_post_meta($contato, 'instagram', true); ?>" class="footer__socialLink"><span
                  class="fab fa-instagram"></span></a>
            </li>
            <li class="footer__social">
              <a rel="noopener noreferrer" target="_blank" href="<?php echo get_post_meta($contato, 'youtube', true); ?>" class="footer__socialLink"><span
                  class="fab fa-youtube"></span></a>
            </li>
          </ul>
        </div>
      </div>
      <p class="footer__copy"><?php bloginfo('name'); ?> © <?php echo date("Y"); ?> - Todos os direitos reservados.</p>
    </div>
  </footer>

  <!-- <script src="../js/libs.min.js"></script>
  <script src="../js/script.js"></script> -->

  <?php wp_footer(); ?>
</body>

</html>