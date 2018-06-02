<?php include('./includes/sessions.php');
include('backend/conn.php'); ?>
<?php include('backend/functions.php'); ?>
<?php $title = 'T-shirt'; ?>
<?php include('./includes/header.php') ?>
<?php if(isset($_SESSION['id_kunde'])) { $user_id = $_SESSION['id_kunde']; }; ?>
<div class="wrapper">
  <div class="content-wrapper">
    <div class="uk-container">
    <div class="breadcrums">
      <p><a href="index.php">Forside</a>/<a href="produkter.php"> Produkter</a>/<a href="t-shirt.php"> T-shirt</a></p>
    </div>
    <?php userSubnav(); ?>
    <h1><?= $title ?></h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      <div class="tshirt" uk-grid>
        <div class="uk-width-1-2@m tshirt-showcase uk-margin">
        <div class="t-slider">
          <ul class="lightslide-tshirt">
            <li data-thumb="images/tfront.jpg">
                <img src="images/tfront.jpg" alt="T-shirt Front">
            </li>
            <li data-thumb="images/tback.jpg">
                <img src="images/tback.jpg" alt="T-shirt Bagside">
            </li>
            <li data-thumb="images/tside.jpg">
                <img src="images/tside.jpg" alt="T-shirt Siden">
            </li>
          </ul>
          </div>
        </div>
        <div class="uk-width-1-2@m tshirt-options">
          <form action="kunder/kurv.php" method="post" enctype="multipart/form-data">
            <h2>Basic T-shirt</h2>
            <hr>
            <p>Pris: 100 Kr.<br />20 kr. per sted - et mærke skal sidde.</p>
            <input type="hidden" name="produkt_navn" value="T-Shirt Basic">
            <div class="form-storrelse uk-margin uk-grid-small uk-child-width-auto uk-grid">
            <input id="1" class="uk-radio" type="radio" name="radio1" value="XS">
            <label for="1" class="size ">XS</label>
            <input id="2" class="uk-radio" type="radio" name="radio1" value="S">
            <label for="2" class="size "> S </label>
            <input id="3" class="uk-radio" type="radio" name="radio1" value="M">
            <label for="3" class="size "> M</label>
            <input id="4" class="uk-radio" type="radio" name="radio1" value="L">
            <label for="4" class="size "> L</label>
            <input id="5"class="uk-radio" type="radio" name="radio1" value="XL">
            <label for="5" class="size"> XL</label>
            </div>
            <p class="size-guide"><a href="/">Størrelseguide</a></p>
            <p>Vælg farve</p>
            <div class="colors">
            <input id="red" class="uk-radio" type="radio" name="radio2" value="Rood">
            <label uk-tooltip="title: Rød" for="red" class="labcolor"></label>
            <input id="blue" class="uk-radio" type="radio" name="radio2" value="Blaa">
            <label uk-tooltip="title: Blå" for="blue" class="labcolor"></label>
            <input id="green" class="uk-radio" type="radio" name="radio2" value="Groon">
            <label uk-tooltip="title: Grøn" for="green" class="labcolor"></label>
            <input id="orange" class="uk-radio" type="radio" name="radio2" value="Orange">
            <label uk-tooltip="title: Orange" for="orange" class="labcolor"></label>
            <input id="purple" class="uk-radio" type="radio" name="radio2" value="Lilla">
            <label uk-tooltip="title: Lilla" for="purple" class="labcolor"></label>
            <input id="white" class="uk-radio" type="radio" name="radio2" value="Hvid">
            <label uk-tooltip="title: Hvid" for="white" class="labcolor"></label>
            <input id="black" class="uk-radio" type="radio" name="radio2" value="Sort">
            <label uk-tooltip="title: Sort" for="black" class="labcolor"></label>
            </div>
            <p>Ved valg af billede/mærke, skal der også vælges placering</p>
            <input type="file" name="image">
            <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>

            <div class="uk-width-1-1@m maerke">
            <span class="maerkepris">OBS: Hvert placering koster 20 kr.</span>
            <div id="calc" class="uk-margin uk-grid-small uk-child-width-auto uk-grid">

              <input for="brystone" id="bryst" class="uk-checkbox" type="checkbox" name="bryst" value="Ja" onclick="totalIt()">
              <label for="bryst">Bryst <i for="bryst" class="fas fa-check check"></i></label>

              <input id="ryg" class="uk-checkbox" type="checkbox" name="ryg" value="Ja" onclick="totalIt()">
              <label for="ryg">Ryg <i for="ryg" class="fas fa-check check"></i></label>

              <input  id="skulder" class="uk-checkbox" type="checkbox" name="skulder" value="Ja" onclick="totalIt()">
              <label for="skulder">Skulder <i for="skulder" class="fas fa-check check"></i></label>
            </div>
        </div>
        <div class="uk-margin">
            <label><input class="uk-range" name="antal" id="ageInputId" type="range" value="1" min="0" max="10" step="1" oninput="ageOutputId.value = ageInputId.value"><output name="ageOutputName" id="ageOutputId">1</output> Antal</label>
        </div>
        <label>
            Pris:
            <input value="100" type="text" id="total"/>
        </label>
        <div class="uk-margin">
            <textarea class="uk-textarea" data-validation-length="10-500" rows="3" placeholder="Kommentar" name="kommentar"></textarea>
        </div>
          <?php if (isset($_SESSION['id_kunde'])) { ?>
            <div class="uk-width-1-1@m laeg-kurv">
                <input type="hidden" name="id_kunde" value="<?= $user_id ?>">
                <button class="uk-button uk-button-default" type="submit" name="ikurv">Tilføj til kurv</button>
            </div>
        <?php  } else { ?>
            <div class="uk-width-1-1@m laeg-kurv">
                <a href="login.php"><button class="uk-button uk-button-default" type="button" name="button">Log ind</button></a>
            </div>
        <?php }; ?>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
</div>
<?php include('./includes/footer.php') ?>
