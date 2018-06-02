<?php include('includes/sessions.php'); include('backend/conn.php'); ?>
<?php if(isset($_SESSION['id_kunde'])) { ?>
<?php include('backend/functions.php') ?>
<?php include('./kunder/kunde_info.php'); ?>
<?php $title = 'Min side'; ?>
<?php include('includes/header.php'); ?>

<?php global $user_id; $user_id = $_SESSION['id_kunde'];
       ?>

<div class="wrapper">
  <div class="content-wrapper">
    <div class="uk-container">
      <ul class="uk-subnav uk-subnav-pill" uk-margin>
        <li class="uk-active"><a href="min-side.php">Min Side</a></li>
        <li><a href="logud.php">Log ud</a></li>
      </ul>
      <ul class="uk-subnav uk-subnav-pill" uk-switcher>
          <li><a href="#">Oversigt</a></li>
          <li><a href="#">Din Information</a></li>
      </ul>

      <ul class="uk-switcher uk-margin">
          <li> <h1>Velkommen</h1> </li>
          <li><?php include('kunder/kunde_form.php'); ?></li>
      </ul>

    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
<?php } else { Header('Location: index.php'); } ?>
