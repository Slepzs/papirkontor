<?php include('backend/conn.php');
      include('./includes/sessions.php');
      include('./backend/functions.php'); ?>
<?php $title = 'Forsiden'; ?>
<?php include('./includes/header.php') ?>

<div class="wrapper">
  <div class="content-wrapper">
    <div class="uk-container">
    <div class="hero-image">
      <ul id="lightSlider">
        <li>
          <img src="images/hero-retouched.jpg" alt="Papir & Kontorcenteret">
        </li>
        <li>
          <img src="images/facade.jpg" alt="Papir & Kontorcenteret facade">
        </li>
        <li>
          <img src="images/printeret.jpg" alt="Printer rum">
        </li>
        <li>
          <img src="images/printerto.jpg" alt="Printer rum">
        </li>
      </ul>
    </div>
    <h1 class="hero-image-text">Vi trykker alt fra <a href="produkter.php">t-shirts</a> til <a href="skilte.php">skilte</a> for dig</h1>
    <div class="uk-child-width-expand@s" uk-grid>
        <div class="uk-width-1-4@m">
          <a class="ydelse-button" href="produkter.php" uk-icon="icon: arrow-right"> Produkter</a>
        </div>
        <div class="uk-width-1-4@m">
          <a class="omos-button" href="om-os.php" uk-icon="icon: arrow-right">Om os</a>
        </div>
        <div class="uk-width-expand@m"></div>
      </div>
      <div class="uk-child-width-expand@s" uk-grid>
      <div class="uk-width-1-2@m">
        <div class="landingpage-text">
          <?php $sqlgettext = ("SELECT post_text FROM posts WHERE id_posts=2");
          $stmttext = $conn->prepare($sqlgettext);
          $stmttext->execute();
          $stmttext->bind_result($post_text);
          while( $stmttext->fetch()) {}; ?>
            <p><?= $post_text; ?></p>
        </div>
      </div>
      <div class="uk-width-1-8@m">
      </div>

    </div>
      <div class="landindpage-images">
        <div class="uk-child-width-expand@s" uk-grid>
          <div class="uk-width-1-2@m">
            <a class="image-box-link" href="t-shirt.php"><div class="image-boxes-en">
                <div class="hover-text">
                  <h3>T-shirt</h3>
                </div>
            </div></a>
          </div>
          <div class="uk-width-1-2@m">
            <a class="image-box-link" href="hoodies.php"><div class="image-boxes-to">
              <div class="hover-text uk-overlay"><h3>Hoodies</h3></div>
            </div></a>
          </div>
          <div class="uk-width-1-2@m">
            <a class="image-box-link" href="skilte.php"><div class="image-boxes-tre">
                  <div class="hover-text uk-overlay"><h3>Skilte</h3></div>
            </div></a>
          </div>
          <div class="uk-width-1-2@m">
          <a class="image-box-link" href="banner.php"><div class="image-boxes-fire">
                <div class="hover-text uk-overlay"><h3>Banner</h3></div>
            </div></a>
          </div>
      </div>
    </div>
    </div>
    </div>
  </div>
</div>
<div class="totop">
  <div class="uk-width-1-1">
    <a href="#" uk-totop uk-scroll></a>
  </div>
</div>



<?php include('./includes/footer.php') ?>
