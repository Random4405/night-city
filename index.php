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
    <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/script.js" type="text/javascript" ></script>
  </head>

  <body>
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
        <p>Тел.: +375 22 333-44-55</p>
        <p>Факс: +375 22 333-44-55</p>
        <p>Email:  admin@youremail.com</p>
        <p>г. Минск</p>
        <p>ул. Лопатина, 7, оф. 902</p>
        <div class="footer__media"></div>
      </div>
      <div class="copyright">© Высокий город.</div>
    </footer>

  </body>

</html>