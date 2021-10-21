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

  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>
  </div>

  <!-- <script src="../js/libs.min.js"></script>
  <script src="../js/script.js"></script> -->

  <?php wp_footer(); ?>
</body>

</html>