<!DOCTYPE html>
<html lang="dk" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="<?php if(isset($content)) { echo $content; } else { echo 'PK Tryk & Print laver alt fra skilte og bannere til T-shirts og Hoodies til dig'; } ?>">
    <title><?php if(isset($title)) { echo $title; } else { echo 'Papir & Kontorcenteret'; } ?></title>
    <link rel="stylesheet" href="<?php if(isset($css)) { echo $css; } else { echo 'css/master.css'; } ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-92008464-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-92008464-1');
</script>

    <script
  src="https://code.jquery.com/jquery-3.3.1.slim.js"
  integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA="
  crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
  </head>
  <body>
  <div class="nav-wrapper">
    <div class="content-wrapper">
    <!-- <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky"> -->
    <nav class="uk-navbar-container"  uk-navbar="dropbar: false">
      <div class="uk-navbar-left">
        <div class="logo">
          <a class="uk-logo" href="index.php"><img src="<?php if(isset($image)) { echo $image; } else { echo 'images/logoclose.png'; } ?>" alt="Logo"></a>
        </div>
      </div>
      <button class="mobile-canvas uk-button uk-button-default" type="button" uk-toggle="target: #offcanvas-nav"><i class="fas fa-bars"></i></button>
      <div class="uk-navbar-right">
          <ul class="uk-navbar-nav box-animation aktive">
              <li><a class="box-target <?= ($title == 'Forsiden') ? "uk-active uk-animation-fade" : ""; ?>" href="index.php">Forside</a></li>
              <li>
                  <a class="box-target <?= ($title == 'Produkter') ? "uk-active uk-animation-fade" : ""; ?>" href="produkter.php">Produkter</a>
                  <div class="uk-navbar-dropdown uk-navbar-dropdown-width-1">
                    <div class="uk-navbar-dropdown-grid uk-child-width-1-1" uk-grid>
                      <ul class="uk-nav uk-navbar-dropdown-nav">
                          <li><a class="<?= ($title == 'T-shirt') ? "uk-active uk-animation-fade" : ""; ?>" href="t-shirt.php">T-shirt</a></li>
                          <li><a class="<?= ($title == 'Hoodies') ? "uk-active uk-animation-fade" : ""; ?>" href="hoodies.php">Hoodies</a></li>
                          <li><a class="<?= ($title == 'Skilte') ? "uk-active uk-animation-fade" : ""; ?>" href="skilte.php">Skilte</a></li>
                          <li><a class="<?= ($title == 'Bannere') ? "uk-active uk-animation-fade" : ""; ?>" href="banner.php">Banner</a></li>
                      </ul>
                    </div>
                  </div>
              </li>
              <li><a class="box-target <?= ($title == 'Om os') ? "uk-active uk-animation-fade" : ""; ?>" href="om-os.php">Om os</a></li>
              <li><a class="box-target <?= ($title == 'Kontakt') ? "uk-active uk-animation-fade" : ""; ?>" href="kontakt.php">Kontakt</a></li>
              <?php  if(isset($_SESSION['id_kunde'])) { ?><li><a class="box-target <?= ($title == 'Check ud') ? "uk-active uk-animation-fade" : ""; ?>" href="checkout.php"><i class="fas fa-shopping-cart"></i><?php checkudcart(); ?></a></li><?php }; ?>
          </ul>
      </div>
  <!--  </div> -->
  </div>
</div>
    <div class="mobile-navigation">
      <div class="uk-offcanvas-content">

          <div id="offcanvas-nav" uk-offcanvas="flip: true">
              <div class="uk-offcanvas-bar">
                  <button class="uk-offcanvas-close" type="button" uk-close></button>
                  <ul class="uk-nav uk-nav-default">
                      <li class="<?= ($title == 'Forsiden') ? "uk-active" : ""; ?>"><a href="index.php"><span class="uk-margin-small-right" uk-icon="icon: home"></span>Forside</a></li>
                      <li <?= ($title == 'Produkter') ? "uk-active" : ""; ?> class="uk-parent">
                          <a href="produkter.php">Produkter</a>
                          <ul class="uk-nav-sub">
                            <li><a class="<?= ($title == 'T-shirt') ? "uk-active" : ""; ?>" href="t-shirt.php">T-shirt</a></li>
                            <li><a class="<?= ($title == 'Hoodies') ? "uk-active" : ""; ?>" href="hoodies.php">Hoodies</a></li>
                            <li><a class="<?= ($title == 'Skilte') ? "uk-active" : ""; ?>" href="skilte.php">Skilte</a></li>
                            <li><a class="<?= ($title == 'Bannere') ? "uk-active" : ""; ?>" href="banner.php">Banner</a></li>
                          </ul>
                      </li>
                      <li class="<?= ($title == 'Om os') ? "uk-active" : ""; ?>"><a href="om-os.php">Om os</a></li>
                      <li class="<?= ($title == 'Kontakt') ? "uk-active" : ""; ?>"><a href="kontakt.php">Kontakt</a></li>
                      <li class="uk-nav-divider"></li>
                      <li class="uk-nav-header">Andet</li>
                      <li><a href="sitemap.php" class="<?= ($title == 'Sitemap') ? "uk-active" : ""; ?>"><span class="uk-margin-small-right" uk-icon="icon: settings"></span>Sitemap</a></li>
                      <li><a href="Forhandlingsbetingelser.php" class="<?= ($title == 'Forhandlingsbetingelser') ? "uk-active" : ""; ?>"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span> Forhandlingsbetingelsers</a></li>

                  </ul>

              </div>
          </div>
      </div>
</div>
  </nav>
