<?php
defined('_JEXEC') or die;
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo $this->baseurl?>/favicon.ico" type="image/x-icon" />
    <jdoc:include type="head" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/styles.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/media.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/fonts.css">
    <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery-1.9.1.min.js" type="text/javascript" ></script>
    <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/easySlider1.7.js" type="text/javascript" ></script>
    <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.fancybox.pack.js" type="text/javascript" ></script>
    <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.scrollUp.js" type="text/javascript" ></script>
    <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/script.js" type="text/javascript" ></script>
    <script type="text/javascript">
      $(function () {
          $.scrollUp({
              scrollName: 'scrollUp',      // Element ID
              scrollDistance: 300,         // Distance from top/bottom before showing element (px)
              scrollFrom: 'top',           // 'top' or 'bottom'
              scrollSpeed: 300,            // Speed back to top (ms)
              easingType: 'linear',        // Scroll to top easing (see http://easings.net/)
              animation: 'fade',           // Fade, slide, none
              animationSpeed: 200,         // Animation speed (ms)
              scrollTrigger: false,        // Set a custom triggering element. Can be an HTML string or jQuery object
              scrollTarget: false,         // Set a custom target element for scrolling to. Can be element or number
              scrollText: 'Scroll to top', // Text for element, can contain HTML
              scrollTitle: false,          // Set a custom <a> title if required.
              scrollImg: true,            // Set true to use image
              activeOverlay: false,        // Set CSS color to display scrollUp active point, e.g '#00FFFF'
              zIndex: 2147483647           // Z-Index for the overlay
          });
      });
    </script>
  </head>

  <body>
  <div id="scrollUp"></div>
  <div class="popup-form">
    <div class="popup-form-bg"></div>
    <jdoc:include type="modules" name="popup-form" style="xhtml" />
  </div>
    <header class="header-main">
      <div class="container">
        <div class="row">
          <jdoc:include type="modules" name="header" style="xhtml" />
        </div>
      </div>
      <div class="header-menu clearfix">
        <div class="container">
          <div class="row">
            <jdoc:include type="modules" name="header-menu" style="xhtml" />
          </div>
        </div>
        <div class="moduletable_main_search">
          <div class="container">
            <div class="row">
              <jdoc:include type="modules" name="header-search" style="xhtml" />
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="content intro--background">
      <div class="container">
        <div class="row">
          <jdoc:include type="modules" name="intro" style="xhtml" />
        </div>
      </div>
    </section>
      <div class="container">
        <div class="row">
          <jdoc:include type="modules" name="advantages" style="xhtml" />
        </div>
      </div>
      <div class="container">
        <div class="row">
          <jdoc:include type="modules" name="income" style="xhtml" />
        </div>
      </div>



    <section class="main-content-section">
      <div class="container clearfix">
        <?php if ($this->countModules('left-sidebar')) : ?>
          <div class="left-sidebar">
            <jdoc:include type="modules" name="left-sidebar" style="xhtml" />
          </div>
          <div class="main-content-wrap w75">
            <div class="pre-main-content">
              <jdoc:include type="modules" name="pre-content" style="xhtml" />
            </div>
            <div class="main-content-bl">
              <jdoc:include type="component" />
            </div>
          </div>
        <?php else : ?>
          <div class="main-content-wrap">
            <div class="pre-main-content">
              <jdoc:include type="modules" name="pre-content" style="xhtml" />
            </div>
            <div class="main-content-bl">
              <jdoc:include type="component" />
            </div>
          </div>
        <?php endif; ?>
      </div>
    </section>

    <section class="content question--background">
      <div class="question--background-black">
        <div class="container">
          <div class="row">
            <jdoc:include type="modules" name="form" style="xhtml" />
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="google_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2347.7753059736306!2d27.676194014811585!3d53.953498690111275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbc931e5c8f25b%3A0x851ce23056ad5f94!2z0YPQuy4g0JvQvtC_0LDRgtC40L3QsCA3LCDQmtC-0L_QuNGJ0LU!5e0!3m2!1sru!2sby!4v1484312120668" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="footer__contacts">
        <div class="footer__contacts--title">Звоните и приезжайте</div>
        <p><a href="tel:+375445198240" style="color: #f3f6f7">Тел: +375 44 519-82-40</a></p>
        <p><a href="tel:+375173365117" style="color: #f3f6f7">Тел/Факс: +375 17 336-51-17</a></p>
        <p><a href="mailto:highcity@mail.ru" style="color: #f3f6f7">E-mail: highcity@mail.ru</a></p>
        <p>220125, Минская область, Минский район, </p>
        <p>Боровлянский с/с, деревня Копище</p>
        <p>ул. Лопатина, 7, оф. 902 (Бизнес центр "Премьер")</p>
        <!-- <div class="footer__media">
          <a href="#"><div class="media_fb"></div></a>
          <a href="#"><div class="media_vk"></div></a>
          <a href="#"><div class="media_inst"></div></a>
        </div> -->
      </div>
      <div class="copyright">© 2017 Все права защищены. ООО "Высокий город". Оснащения химических, микробиологических лабораторий в Республике Беларусь.</div>
    </footer>

  </body>

</html>