<?php

function usertable() {

   include('conn.php');

   $sqlbrugere = ("SELECT id_kunde, kunde_email, kunde_navn, kunde_efternavn, kunde_adresse, kunde_telefonnummer FROM kunde, kunde_info WHERE id_kunde = kunde_id_kunde;");
   $stmtbruger = $conn->prepare($sqlbrugere);
   $stmtbruger->execute();
   $stmtbruger->bind_result($id_kunde, $kunde_email, $kunde_navn, $kunde_efternavn, $kunde_adresse, $kunde_telefonnummer);
   while($stmtbruger->fetch()) {
     ?>
            <tr>
                <td><?= $id_kunde; ?></td>
                <td><?= $kunde_email; ?></td>
                <td><?= $kunde_navn; ?></td>
                <td><?= $kunde_efternavn; ?></td>
                <td><?= $kunde_adresse; ?></td>
                <td><?= $kunde_telefonnummer; ?></td>
            </tr>

 <?php };


}

function userSubnav() {
  if(isset($_SESSION['id_kunde'])) {
  echo '<ul class="uk-subnav uk-subnav-pill" uk-margin>
      <li class="uk-active"><a href="min-side.php">Min Side</a></li>
      <li><a href="logud.php">Log ud</a></li>
    </ul>';
  } else {}
};



function checkudcart() {
  include('conn.php');
  $id_kunde = $_SESSION['id_kunde'];
  $sqlcheck = ("SELECT id_kunde, kundeprodukt_id FROM kunde k LEFT JOIN produkt p ON k.id_kunde = p.kundeprodukt_id WHERE k.id_kunde = $id_kunde;");
  $stmtcheck = $conn->prepare($sqlcheck);
  $stmtcheck->execute();
  $stmtcheck->store_result();

  $rows = $stmtcheck->num_rows();
  echo '&nbsp;' . $rows;
}
function daFarver() {
  include('conn.php');
  $id_kunde = $_SESSION['id_kunde'];
  $sqlfarve = ("SELECT produkt_farve FROM produkt WHERE kundeprodukt_id=$id_kunde;");
  $stmtfarve = $conn->prepare($sqlfarve);
  $stmtfarve->execute();
  $stmtfarve->bind_result($produkt_farve);
  while($stmtfarve->fetch()) {};
  switch ($produkt_farve) {
    case 'Rood';
    echo 'Rød';
    break;
    case 'Blaa';
    break;
    echo 'Blå';
    case 'Groon';
    echo 'Grøn';
    break;
    default:
    echo $produkt_farve;
  }
}


if(isset($_POST['slet'])) {
    $produkt_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT) or die();
    $sqlslet = ("DELETE FROM produkt WHERE id_produkt=$produkt_id;");
    $stmtslet = $conn->prepare($sqlslet);
    $stmtslet->execute();
  }

function minkurv() {
  include('conn.php');
  $id_kunde = $_SESSION['id_kunde'];
  $sqlcheck = ("SELECT * FROM produkt WHERE kundeprodukt_id=$id_kunde;");
  $stmtcheck = $conn->prepare($sqlcheck);
  $stmtcheck->execute();
  $stmtcheck->bind_result($id_produkt, $produkt_navn, $produkt_storrelse, $produkt_farve, $produkt_bryst, $produkt_ryg, $produkt_skulder, $produkt_billede, $produkt_antal, $_kundeprodukt_id);

  ?>


  <table class="uk-table">
    <caption><h1>Produkt i Kurv</h1></caption>
    <thead>
        <tr>
            <th>Produkt</th>
            <th>Størrelse</th>
            <th>Farve</th>
            <th>Antal</th>
            <th>Bryst</th>
            <th>Ryg</th>
            <th>Skulder</th>
            <th>Billede</th>
        </tr>
    </thead>
  <?php while($stmtcheck->fetch()) { ?>
    <tr>

       <td><?= $produkt_navn ?></td>
       <td><?= $produkt_storrelse ?></td>
       <td><?= daFarver() ?></td>
       <td><?= $produkt_antal ?></td>
       <td><?= $produkt_bryst ?></td>
       <td><?= $produkt_ryg ?></td>
       <td><?= $produkt_skulder ?></td>
       <td width="10%";><?php if(empty($produkt_billede)) { echo 'Intet Valgt'; } else { ?><img  src="kunde_billeder/<?= $produkt_billede ?>"></td><?php }; ?>
       <td><form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
         <input type="hidden" name="id" value="<?= $id_produkt ?>">
         <button class="uk-button uk-button-default" type="submit" name="slet">Fjern produkt</button>
       </form></td>
   </tr>
<?php
} ?>
  </tbody>
</table>
<?php }





 ?>
