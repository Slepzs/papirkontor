<?php include('./includes/sessions.php');
      include('./backend/functions.php'); ?>
<?php $title = 'Om Os'; ?>
<?php include('./includes/header.php') ?>

<div class="wrapper">
  <div class="content-wrapper">
      <div class="uk-container">
    <div class="breadcrums">
      <p><a href="index.php">Forside</a>/<a href="om-os.php"> Om os</a></p>
    </div>

    <h1><?= $title ?></h1>
    <hr class="uk-divider-small">

<div class="uk-child-width-expand@ uk-child-width-1-1@m uk-grid-match" uk-grid>
  <div class="uk-width-1-1@m">
    <div class="om-butikken">
      <h3>Papir & Kontorcenteret</h3>
    </div>
  </div>
  <div class="uk-width-1-2@m uk-margin-small">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  <div class="uk-width-1-2@m uk-margin-small">
    <iframe width="80%" height="315" src="https://www.youtube.com/embed/R8Je4uvqCes" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  </div>
  </div>
<div class="uk-child-width-expand@ uk-child-width-1-2@m uk-grid-match" uk-grid>
      <div class="om-os-billeder">
          <div class="uk-card">
            <h1>Frederik Magnussen</h1>
            <img src="images/frederik.jpg" alt="Frederik Magnussen">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor dui imperdiet nisl venenatis luctus. Sed vel dolor egestas, volutpat mi eu, hendrerit orci. Nam ac risus ultrices, euismod quam nec, pretium sapien. Sed nec nisl cursus, fringilla nunc non, molestie felis. Nulla aliquet elit eu risus luctus sagittis</p>
          </div>
      </div>
      <div class="om-os-billeder">
          <div class="uk-card">
            <h1>Lennart Magnussen</h1>
            <img src="images/lennart.jpg" alt="Lennart Magnussen">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor dui imperdiet nisl venenatis luctus. Sed vel dolor egestas, volutpat mi eu, hendrerit orci. Nam ac risus ultrices, euismod quam nec, pretium sapien. Sed nec nisl cursus, fringilla nunc non, molestie felis. Nulla aliquet elit eu risus luctus sagittis</p>
          </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php include('./includes/footer.php') ?>
