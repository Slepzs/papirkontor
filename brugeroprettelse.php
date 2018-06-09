<?php include('backend/conn.php'); ?>
<?php $userexist = ''; ?>
<?php include('backend/kunde-signup.php'); ?>
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
            <input class="uk-input" type="email" name="kunde_email"  placeholder="E-mail">
          </div>
          <div class="uk-block uk-margin">
                <span class="uk-form-icon" uk-icon="icon: lock"></span>
                <input class="uk-input uk-form-password-toggle" type="password" placeholder="Kodeord" name="kunde_kode">
              </div>

              <div class="uk-block uk-margin">
                    <span class="uk-form-icon" uk-icon="icon: lock"></span>
                    <input class="uk-input uk-form-password-toggle" type="password" placeholder="Gentag Kode" name="retypekode">
                </div>
              <button class="uk-button uk-button-default admin-submit" uk-icon="icon: sign-in" type="submit" name="submit">Opret bruger</button>
              <a href="login.php">Login</a><br />
              <?php echo $userexist ?>
            </form>
          </fieldset>
        </div>
      </div>

<?php include ('includes/footer.php'); ?>
