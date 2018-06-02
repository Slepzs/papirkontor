<?php include('./includes/sessions.php');
      include('./backend/functions.php'); ?>
<?php $title = 'Produkter'; ?>
<?php include('./includes/header.php') ?>



<div class="wrapper">
  <div class="content-wrapper">
    <div class="uk-container">

    <div class="breadcrums">
      <p><a href="index.php">Forside</a>/<a href="ydelser.php"> Ydelser</a></p>
    </div>

    <h1><?= $title ?></h1>
    <hr class="uk-divider-small">

    <div class="uk-child-width-1-2@m" uk-grid>
      <div class="uk-card-body uk-card">
        <div class="produkt-tshirt">
          <img src="images/tshirt.jpg" alt="T-shirt">
        </div>
      </div>
      <div class="ydelse-tshirt uk-card-body uk-card">
        <h2>T-shirt</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor dui imperdiet nisl venenatis luctus. Sed vel dolor egestas, volutpat mi eu, hendrerit orci. Nam ac risus ultrices, euismod quam nec, pretium sapien. Sed nec nisl cursus, fringilla nunc non, molestie felis. Nulla aliquet elit eu risus luctus sagittis</p>

  <a class="ydelse-button" href="t-shirt.php" uk-icon="icon: arrow-right"> T-shirts</a>
  <hr class="uk-divider-icon">
        <ul uk-accordion>
    <li class="uk-open">
        <a class="uk-accordion-title" href="#">Produkt Detaljer</a>
        <div class="uk-accordion-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </li>
    <li>
        <a class="uk-accordion-title" href="#">Reviews</a>
        <div class="uk-accordion-content">
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
        </div>
    </li>
    <li>
        <a class="uk-accordion-title" href="#">Fragtinformation</a>
        <div class="uk-accordion-content">
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
        </div>
    </li>
</ul>
      </div>
    </div>

    <div class="uk-child-width-1-2@m" uk-grid>

      <div class="uk-card-body uk-card ydelse-hoodie">
        <h2>Hoodie</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor dui imperdiet nisl venenatis luctus. Sed vel dolor egestas, volutpat mi eu, hendrerit orci. Nam ac risus ultrices, euismod quam nec, pretium sapien. Sed nec nisl cursus, fringilla nunc non, molestie felis. Nulla aliquet elit eu risus luctus sagittis</p>
<div class="knap-kasse">
  <a class="omos-button" href="hoodies.php" uk-icon="icon: arrow-right">Hoodies</a>
</div>
    <hr class="uk-divider-icon">
        <ul uk-accordion>
    <li class="uk-open">
        <a class="uk-accordion-title" href="#">Produkt Detaljer</a>
        <div class="uk-accordion-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </li>
    <li>
        <a class="uk-accordion-title" href="#">Reviews</a>
        <div class="uk-accordion-content">
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
        </div>
    </li>
    <li>
        <a class="uk-accordion-title" href="#">Fragtinformation</a>
        <div class="uk-accordion-content">
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
        </div>
    </li>
</ul>
      </div>
      <div class="uk-card-body uk-card">
        <div class="produkt-tshirt">
          <img src="images/hoodie.jpg" alt="T-shirt">
        </div>
      </div>
    </div>


      <div class="uk-width-1-1@m">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor dui imperdiet nisl venenatis luctus. Sed vel dolor egestas, volutpat mi eu, hendrerit orci. Nam ac risus ultrices, euismod quam nec, pretium sapien. Sed nec nisl cursus, fringilla nunc non, molestie felis. Nulla aliquet elit eu risus luctus sagittis.</p>
      </div>

      <div class="uk-child-width-1-2@m" uk-grid>
        <div class="uk-card skiltebanner">
          <a href="/skilte.php"><div class="ydelse-header">
            <h3>Skilte</h3>
          </div>
          <img src="images/skilte.jpg" alt="T-shirt">
        </div></a>
        <div class="uk-card skiltebanner">
            <a href="/banner.php"><div class="ydelse-header">
            <h3>Banner</h3>
          </div>
          <div>
            <img src="images/banner.jpg" alt="T-shirt">
          </div></a>
        </div>
      </div>

    </div>
  </div> <!-- content-wrapper -->
</div>
<div class="totop">
  <div class="uk-width-1-1">
    <a href="#" uk-totop uk-scroll></a>
  </div>
</div>




<?php include('./includes/footer.php') ?>
