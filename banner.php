<?php include('./includes/sessions.php');
      include('./backend/functions.php'); ?>
<?php $title = 'Banner'; ?>
<?php include('./includes/header.php') ?>

<div class="wrapper">
  <div class="content-wrapper">
    <div class="uk-container">
    <div class="breadcrums">
      <p><a href="index.php">Forside</a>/<a href="ydelser.php"> Ydelser</a>/<a href="banner.php"> Banner</a></p>
    </div>

      <h1><?= $title ?></h1>
      <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</span> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <h2>Interesseret i at vide mere om vores Bannere?</h2>
      <ul class="uk-list uk-list-striped">
      <li><span class="bold">Længde:</span> 4.5m</li>
      <li><span class="bold">Bredde:</span> 2m</li>
      <li><span class="bold">Materiale:</span> Papir, Plastik</li>
      </ul>
      <div class="uk-grid-match uk-child-width-1-2@m uk-text-center" uk-grid>
          <div>
              <div class="uk-child-width-1-2 uk-text-center" uk-grid uk-lightbox="animation: slide">
                  <div>
                      <div><a class="uk-inline" href="images/skilte1.jpg"><img src="images/skilte1.jpg"></a></div>
                  </div>
                  <div>
                        <div><a class="uk-inline" href="images/skilte2.jpg"><img src="images/skilte2.jpg"></a></div>
                  </div>
                  <div>
                        <div><a class="uk-inline" href="images/skilte3.jpg"><img src="images/skilte3.jpg"></a></div>
                  </div>
                  <div>
                      <div><a class="uk-inline" href="images/skilte1.jpg"><img src="images/skilte1.jpg"></a></div>
                  </div>
                  <div>
                        <div><a class="uk-inline" href="images/skilte2.jpg"><img src="images/skilte2.jpg"></a></div>
                  </div>
                  <div>
                        <div><a class="uk-inline" href="images/skilte3.jpg"><img src="images/skilte3.jpg"></a></div>
                  </div>
              </div>
          </div>
          <div>
              <div class="uk-card uk-card-default uk-card-body uk-card-primary">
                <form id="minform" class="skiltekontakt" action="<?= $_SERVER["PHP_SELF"] ?>" method="POST">
                  <fieldset class="uk-fieldset">
                    <h1>Ring eller skriv og vi laver en aftale.</h1>
                    <div class="uk-margin-medium">
                        <input data-validation-error-msg="Indtast kun bogstaver" data-validation="alphanumeric" data-validation-allowing="-_" class="uk-input" type="text" placeholder="Navn" name="navn" required>
                    </div>
                    <div class="uk-margin-medium">
                        <input data-validation-error-msg="Indtast E-mail" data-validation="email" class="uk-input" type="email" placeholder="E-mail" name="email" required>
                    </div>
                    <div class="uk-margin-medium">
                        <input class="uk-input" data-validation-error-msg="Indtast kun tal" type="text" placeholder="Telefonnummer" name="telefonnummer" data-validation="number" min="8" max="10" required>
                    </div>
                    <div class="uk-margin-medium">
                        <textarea class="uk-textarea" data-validation-length="10-500" rows="5" placeholder="Kommentar" name="kommentar"></textarea>
                    </div>
                    <div class="uk-margin-medium submit-container">
                      <button id="submit" class="uk-button uk-button-default" type="submit" name="send">Send</button>
                    </div>
                  </fieldset>
                </form>
              </div>
          </div>



    </div>
  </div>
</div>
<?php include('./includes/footer.php') ?>
