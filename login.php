<?php include('includes/sessions.php');
      include('backend/functions.php'); ?>
<?php include('backend/conn.php'); ?>
<?php $loginSucess = ''; ?>
<?php include('backend/kunde-login.php'); ?>

<?php include('includes/header.php'); ?>

<?php if(!isset($_SESSION['id_kunde'])) { ?>
<div class="admin-login-wrapper">
  <div class="admin-login">
    <div class="login">
      <div class="login-logo">
      <a class="uk-logo"><img src="<?php if(isset($image)) { echo $image; } else { echo 'images/trykprintlogo.svg'; } ?>" alt="Logo"></a>
      </div>
      <div class="welcome-admins">
        <h1>Bruger log ind</h1>
      </div>
      <form class="admin-form" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <fieldset class="uk-fieldset">
          <div class="uk-block uk-margin">
            <span class="uk-form-icon" uk-icon="icon: user"></span>
            <input class="uk-input" type="email" name="kunde_email"  placeholder="E-mail">
          </div>
          <div class="uk-block uk-margin">
                <span class="uk-form-icon" uk-icon="icon: lock"></span>
                <input class="uk-input uk-form-password-toggle" type="password" placeholder="Kodeord" name="kunde_kode">
              </div>
              <button class="uk-button uk-button-default admin-submit" uk-icon="icon: sign-in" type="submit" name="login">Log ind</button>
              <a href="brugeroprettelse.php">Opret bruger</a>
              <?= $loginSucess ?>
            </form>
          </fieldset>
          </div>
        </div>
      </div>
<?php } else {}; ?>
<?php include ('includes/footer.php'); ?>
