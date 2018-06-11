<?php include('./includes/sessions.php');
include('backend/conn.php'); ?>
<?php include('backend/functions.php'); ?>
<?php include('includes/header.php'); ?>


<div class="wrapper">
  <div class="content-wrapper">
    <div class="uk-container">

      <?php minkurv(); ?>
      <div class="uk-margin">
        <a class="uk-button uk-button-default checkout-knapper" href="betaling.php">Gå til betaling <i class="fas fa-shopping-cart"></i></a>
        <a class="uk-button uk-button-default checkout-knapper" href="min-side.php">Min side <i class="far fa-address-card"></i></a>
        <a class="uk-button uk-button-default checkout-knapper" href="produkter.php">Forsæt med at handle <i class="fas fa-cart-arrow-down"></i></a>
      </div>

    </div>
  </div>
</div>


<?php include('includes/footer.php'); ?>
