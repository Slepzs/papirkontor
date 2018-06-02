<?php include('backend/conn.php'); ?>
<?php include('includes/sessions.php'); ?>
<?php include('backend/sign-up.php'); ?>
<?php if(isset($_SESSION['id'])): ?>
<?php include ('includes/header.php'); ?>

<div class="admin-login-wrapper">
  <div class="admin-login">
      <div class="welcome-admins">
        <h1>Velkommen</h1>
      </div>

      <form class="admin-form" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <fieldset class="uk-fieldset">
          <div class="uk-block uk-margin">
            <span class="uk-form-icon" uk-icon="icon: user"></span>
            <input class="uk-input" type="text" name="username"  placeholder="Brugernavn">
          </div>
          <div class="uk-block uk-margin">
                <span class="uk-form-icon" uk-icon="icon: lock"></span>
                <input class="uk-input uk-form-password-toggle" type="password" placeholder="Password" name="password">
              </div>

              <div class="uk-block uk-margin">
                    <span class="uk-form-icon" uk-icon="icon: lock"></span>
                    <input class="uk-input uk-form-password-toggle" type="password" placeholder="Gentag Password" name="retypepassword">
                </div>
              <button class="uk-button uk-button-default admin-submit" uk-icon="icon: sign-in" type="submit" name="submit">Opret bruger</button>
              <a href="adminarea/admin-area.php">Tilbage til admin område</a>
            </form>
          </fieldset>
        </div>
      </div>
<?php include ('includes/footer.php'); ?>
<?php endif; ?>
