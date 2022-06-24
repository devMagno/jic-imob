<?php
// Template Name: Detalhes do Anúncio
?>
<?php
$contato = get_page_by_title('Contato')->ID;
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <main class="page-content page-content--single-advert">
    <div class="swiper-container images-carousel">
      <ul class="swiper-wrapper my-gallery">
          <?php
          foreach (get_field('images') as $index => $image) {
              ?>
            <li class="swiper-slide" id="<?php echo $index ?>">
              <a href="<?php echo $image['inner-image'] ?>" title="Clique ou aperte para aproximar"
                 data-size="1200x600">
                <img src="<?php echo get_template_directory_uri(); ?>/img/pixel.png"
                     data-src="<?php echo $image['inner-image'] ?>" alt="<?php the_title(); ?>" class="swiper-lazy">
                <span class="swiper-lazy-preloader swiper-lazy-preloader-white"></span>
              </a>
            </li>
          <?php } ?>
      </ul>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <section class="single container flex flex--justify-sb">
      <div class="single__content col-7 col-sm-12 flex--col">
        <h1 class="single__title"><?php the_title(); ?></h1>
        <div class="single__icons">
          <ul class="advert__info flex flex--justify-sb flex--wrap">
              <?php if (trim(get_field('dorms-quantity')) != "" && trim(get_field('dorms-quantity')) != 0) { ?>
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span class="advert__icon advert__icon--big fas fa-bed flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Dorms</p>
                  <p class="advert__info-quantity"><?php the_field('dorms-quantity') ?></p>
                </li>
              <?php } ?>

              <?php if (trim(get_field('suites-quantity')) != "" && trim(get_field('suites-quantity')) != 0) { ?>
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span class="advert__icon advert__icon--big fas fa-bath flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Suítes</p>
                  <p class="advert__info-quantity"><?php the_field('suites-quantity') ?></p>
                </li>
              <?php } ?>

              <?php if (trim(get_field('bathroom-quantity')) != "" && trim(get_field('bathroom-quantity')) != 0) { ?>
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span class="advert__icon advert__icon--big fas fa-shower flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Banheiros</p>
                  <p class="advert__info-quantity"><?php the_field('bathroom-quantity') ?></p>
                </li>
              <?php } ?>

              <?php if (trim(get_field('area-quantity')) != "" && trim(get_field('area-quantity')) != 0) { ?>
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span
                      class="advert__icon advert__icon--big fas fa-th-large flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Área total</p>
                  <p class="advert__info-quantity"><?php the_field('area-quantity') ?>m²</p>
                </li>
              <?php } ?>

              <?php if (trim(get_field('util-area-quantity')) != "" && trim(get_field('util-area-quantity')) != 0) { ?>
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span
                      class="advert__icon advert__icon--big fas fa-th-large flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Área Útil</p>
                  <p class="advert__info-quantity"><?php the_field('util-area-quantity') ?>m²</p>
                </li>
              <?php } ?>

              <?php if (trim(get_field('parking-quantity')) != "" && trim(get_field('parking-quantity')) != 0) { ?>
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span class="advert__icon advert__icon--big fas fa-car flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Vagas</p>
                  <p class="advert__info-quantity"><?php the_field('parking-quantity') ?></p>
                </li>
              <?php } ?>

              <?php if (get_field('allows-pet') == "standard") { ?>
                <li class="advert__info-item flex flex--col flex--items-c">
                  <span class="advert__icon advert__icon--big fas fa-dog flex flex--items-c flex--justify-c"></span>
                  <p class="advert__info-category">Aceita pet</p>
                </li>
              <?php } ?>
          </ul>
        </div>
          <?php
          if (is_array(get_field('features')) && count(get_field('features')) >= 1) { ?>
            <div class="single__features">
              <h2 class="single__features-title">Características</h2>
              <ul class="flex row gutter flex--wrap">
                  <?php foreach (get_field('features') as $featureItem) { ?>
                    <li class="col-6"><?php echo $featureItem['feature'] ?></li>
                  <?php } ?>
              </ul>
            </div>
          <?php } ?>

          <?php if (the_content() != null && trim(the_content()) != "") { ?>
            <div class="single__details">
              <h2 class="single__details-title">Detalhes do imóvel</h2>
              <div class="single__details-text">
                  <?php echo wpautop(the_content()); ?>
              </div>
            </div>
          <?php } ?>
      </div>
      <div class="single__price col-2 col-sm-12 flex--col" data-sticky-container>
        <div class="sticky" data-margin-top="40">
          <div class="sticky-icon flex flex--items-c flex--justify-c">
            <span class="fas fa-home"></span>
          </div>
            <?php if (trim(get_field('price')) != 0 && trim(get_field('price')) != "") { ?>
              <div class="flex flex--items-c flex--justify-sb">
                <span>Venda</span>
                <span>R$ <?php echo number_format(get_field('price'), 2, ',', '.') ?></span>
              </div>
            <?php } ?>

            <?php if (trim(get_field('rent')) != 0 && trim(get_field('rent')) != "") { ?>
              <div class="flex flex--items-c flex--justify-sb">
                <span>Aluguel</span>
                <span>R$ <?php echo number_format(get_field('rent'), 2, ',', '.') ?>/mês</span>
              </div>
            <?php } ?>

            <?php if (trim(get_field('iptu')) != "") { ?>
              <div class="flex flex--items-c flex--justify-sb smaller">
                <span>IPTU</span>
                <span>R$ <?php echo number_format(get_field('iptu'), 2, ',', '.') ?>/mês</span>
              </div>
            <?php } ?>

            <?php if (trim(get_field('condominium')) != "") { ?>
              <div class="flex flex--items-c flex--justify-sb smaller">
                <span>Condomínio</span>
                <span>R$ <?php echo number_format(get_field('condominium'), 2, ',', '.') ?>/mês</span>
              </div>
            <?php } ?>

          <button id="contact-button" class="btn btn--bold btn--radius flex flex--items-c flex--justify-c">
            <span class="fas fa-paper-plane"></span>
            Quero mais informações
          </button>
        </div>
      </div>
    </section>
  </main>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var clickEvents = ['touchstart', 'click']
      var stickyElement = new Sticky('.single__price .sticky')

      clickEvents.forEach(function (clickEvent) {
        document.getElementById("contact-button").addEventListener(clickEvent, function () {
          var a = navigator.userAgent || navigator.vendor || window.opera
          var isMobile = /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))

          var baseURL

          if (isMobile) {
            baseURL = "whatsapp://send?"
          } else {
            baseURL = "https://api.whatsapp.com/send?"
          }

          var message = encodeURIComponent('Gostaria de mais informações sobre o imóvel *<?php the_title() ?>*.')
          var url = baseURL + "l=pt_BR&phone=<?php echo get_post_meta($contato, 'ugly-phone-number', true);  ?>&text=" + message

          window.open(url, '_blank')
        })
      })

      const galleryCarousel = new Swiper('.images-carousel', {
        preloadImages: false,
        lazy: true,
        watchSlidesProgress: true,
        loop: true,
        autoplay: {
          delay: 6500,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          dynamicBullets: true,
          clickable: true,
        },
        allowTouchMove: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
            allowTouchMove: true,
          },
          768: {
            slidesPerView: 3,
            allowTouchMove: false,
          },
          1024: {
            slidesPerView: 4,
            allowTouchMove: false,
          },
        },
      });

      var initPhotoSwipeFromDOM = function (gallerySelector) {
        // parse slide data (url, title, size ...) from DOM elements
        // (children of gallerySelector)
        var parseThumbnailElements = function (el) {
          var thumbElements = el.childNodes,
            numNodes = thumbElements.length,
            items = [],
            figureEl,
            linkEl,
            size,
            item;

          for (var i = 0; i < numNodes; i++) {
            figureEl = thumbElements[i]; // <figure> element

            // include only element nodes
            if (figureEl.nodeType !== 1) {
              continue;
            }

            linkEl = figureEl.children[0]; // <a> element

            size = linkEl.getAttribute("data-size").split("x");

            // create slide object
            item = {
              src: linkEl.getAttribute("href"),
              w: parseInt(size[0], 10),
              h: parseInt(size[1], 10),
              title: linkEl.getAttribute('data-title')
            };

            if (figureEl.children.length > 1) {
              // <figcaption> content
              item.title = figureEl.children[1].innerHTML;
            }

            if (linkEl.children.length > 0) {
              // <img> thumbnail element, retrieving thumbnail url
              item.msrc = linkEl.children[0].getAttribute("src");
            }

            item.el = figureEl; // save link to element for getThumbBoundsFn
            items.push(item);
          }

          return items;
        };

        // find nearest parent element
        var closest = function closest(el, fn) {
          return el && (fn(el) ? el : closest(el.parentNode, fn));
        };

        // triggers when user clicks on thumbnail
        var onThumbnailsClick = function (e) {
          e = e || window.event;
          e.preventDefault ? e.preventDefault() : (e.returnValue = false);

          var eTarget = e.target || e.srcElement;

          // find root element of slide
          var clickedListItem = closest(eTarget, function (el) {
            return el.tagName && el.tagName.toUpperCase() === "LI";
          });

          if (!clickedListItem) {
            return;
          }

          // find index of clicked item by looping through all child nodes
          // alternatively, you may define index via data- attribute
          var clickedGallery = clickedListItem.parentNode,
            childNodes = clickedListItem.parentNode.childNodes,
            numChildNodes = childNodes.length,
            nodeIndex = 0,
            index;

          for (var i = 0; i < numChildNodes; i++) {
            if (childNodes[i].nodeType !== 1) {
              continue;
            }

            if (childNodes[i] === clickedListItem) {
              index = nodeIndex;
              break;
            }
            nodeIndex++;
          }

          if (index >= 0) {
            // open PhotoSwipe if valid index found
            openPhotoSwipe(index, clickedGallery);
          }
          return false;
        };

        // parse picture index and gallery index from URL (#&pid=1&gid=2)
        var photoswipeParseHash = function () {
          var hash = window.location.hash.substring(1),
            params = {};

          if (hash.length < 5) {
            return params;
          }

          var vars = hash.split("&");
          for (var i = 0; i < vars.length; i++) {
            if (!vars[i]) {
              continue;
            }
            var pair = vars[i].split("=");
            if (pair.length < 2) {
              continue;
            }
            params[pair[0]] = pair[1];
          }

          if (params.gid) {
            params.gid = parseInt(params.gid, 10);
          }

          return params;
        };

        var openPhotoSwipe = function (
          index,
          galleryElement,
          disableAnimation,
          fromURL
        ) {
          var pswpElement = document.querySelectorAll(".pswp")[0],
            gallery,
            options,
            items;

          items = parseThumbnailElements(galleryElement);

          // #################### 3/4 define photoswipe options (if needed) ####################
          // https://photoswipe.com/documentation/options.html //
          options = {
            /* "showHideOpacity" uncomment this If dimensions of your small thumbnail don't match dimensions of large image */
            //showHideOpacity:true,

            // Buttons/elements
            closeEl: true,
            captionEl: true,
            fullscreenEl: true,
            zoomEl: true,
            shareEl: false,
            counterEl: false,
            arrowEl: true,
            preloaderEl: true,
            // define gallery index (for URL)
            galleryUID: galleryElement.getAttribute("data-pswp-uid"),
            getThumbBoundsFn: function (index) {
              // See Options -> getThumbBoundsFn section of documentation for more info
              var thumbnail = items[index].el.getElementsByTagName("img")[0], // find thumbnail
                pageYScroll =
                  window.pageYOffset || document.documentElement.scrollTop,
                rect = thumbnail.getBoundingClientRect();

              return {
                x: rect.left,
                y: rect.top + pageYScroll,
                w: rect.width
              };
            }
          };

          // PhotoSwipe opened from URL
          if (fromURL) {
            if (options.galleryPIDs) {
              // parse real index when custom PIDs are used
              // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
              for (var j = 0; j < items.length; j++) {
                if (items[j].pid == index) {
                  options.index = j;
                  break;
                }
              }
            } else {
              // in URL indexes start from 1
              options.index = parseInt(index, 10) - 1;
            }
          } else {
            options.index = parseInt(index, 10);
          }

          // exit if index not found
          if (isNaN(options.index)) {
            return;
          }

          if (disableAnimation) {
            options.showAnimationDuration = 0;
          }

          // Pass data to PhotoSwipe and initialize it
          gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
          gallery.init();

          /* ########### PART 4 - EXTRA CODE  ########### */
          /* EXTRA CODE (NOT FROM photoswipe CORE) -
          1/2. UPDATE SWIPER POSITION TO THE CURRENT ZOOM_IN IMAGE (BETTER UI) */
          // photoswipe event: Gallery unbinds events
          // (triggers before closing animation)
          gallery.listen("unbindEvents", function () {
            // The index of the current photoswipe slide
            var getCurrentIndex = gallery.getCurrentIndex();
            // Update position of the slider
            galleryCarousel.slideTo(getCurrentIndex, 0, false);
            // 2/2. Start swiper autoplay (on close - if swiper autoplay is true)
            galleryCarousel.autoplay.start();
          });
          // 2/2. Extra Code (Not from photoswipe) - swiper autoplay stop when image in zoom mode (When lightbox is open) */
          gallery.listen('initialZoomIn', function () {
            if (galleryCarousel.autoplay.running) {
              galleryCarousel.autoplay.stop();
            }
          });
        };

        // loop through all gallery elements and bind events
        var galleryElements = document.querySelectorAll(gallerySelector);

        for (var i = 0, l = galleryElements.length; i < l; i++) {
          galleryElements[i].setAttribute("data-pswp-uid", i + 1);
          galleryElements[i].onclick = onThumbnailsClick;
        }

        // Parse URL and open gallery if it contains #&pid=3&gid=1
        var hashData = photoswipeParseHash();
        if (hashData.pid && hashData.gid) {
          openPhotoSwipe(hashData.pid, galleryElements[hashData.gid - 1], true, true);
        }
      };

      // execute above function
      initPhotoSwipeFromDOM(".my-gallery");
    });
  </script>

<?php endwhile;
else : endif; ?>
<?php get_footer(); ?>