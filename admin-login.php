<?php include('backend/conn.php'); ?>
<?php include('backend/log-in.php'); ?>
<?php include('includes/header.php'); ?>
<?php $succes = ''; ?>
<div class="admin-login-wrapper">
  <div class="admin-login">
    <div class="login">
      <div class="welcome-admins">
        <h1>Velkommen</h1>
      </div>
      <form class="admin-form" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <fieldset class="uk-fieldset">
          <div class="uk-block uk-margin">
            <span class="uk-form-icon" uk-icon="icon: user"></span>
            <input class="uk-input" type="text" name="admin_username"  placeholder="Brugernavn">
          </div>
          <div class="uk-block uk-margin">
                <span class="uk-form-icon" uk-icon="icon: lock"></span>
                <input class="uk-input uk-form-password-toggle" type="password" placeholder="Password" name="user_password">
              </div>
              <button class="uk-button uk-button-default admin-submit" uk-icon="icon: sign-in" type="submit" name="login">Log ind</button>
              <?= $succes; ?>
            </form>
          </fieldset>
          </div>
        </div>
      </div>

<?php include ('includes/footer.php'); ?>
