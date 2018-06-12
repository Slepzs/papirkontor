<?php
include('backend/conn.php');
$sql = ("SELECT id_kunde, id_kunde_info, kunde_navn, kunde_efternavn, kunde_adresse, kunde_adresse_to, kunde_telefonnummer, kunde_by, kunde_postnummer, kunde_id_kunde FROM kunde, kunde_info WHERE id_kunde=$user_id AND kunde_id_kunde = $user_id;");
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->bind_result($id_kunde, $id_kunde_info, $kunde_navn, $kunde_efternavn, $kunde_adresse, $kunde_adresse_to, $kunde_telefonnummer, $kunde_by, $kunde_postnummer, $kunde_id_kunde);
while($stmt->fetch()) { };
if($id_kunde_info > 0) {
?>
<h1>Oplysninger</h1>
<form class="" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
<fieldset class="uk-fieldset">
  <div class="uk-margin">
      <label>Navn<input class="uk-input" type="text" placeholder="<?= $kunde_navn; ?>" name="kunde_navn" value="<?= $kunde_navn; ?>"></label>
  </div>
  <div class="uk-margin">
      <label>Efternavn<input class="uk-input" required type="text" placeholder="<?= $kunde_efternavn; ?>" value="<?= $kunde_efternavn; ?>" name="kunde_efternavn"></label>
  </div>
  <div class="uk-margin">
      <label>Adresse<input class="uk-input" type="text" placeholder="<?= $kunde_adresse; ?>" value="<?= $kunde_adresse; ?>" name="kunde_adresse"></label>
  </div>
  <div class="uk-margin">
      <label>Adresse 2<input class="uk-input" type="text" placeholder="<?= $kunde_adresse_to ?>" value="<?= $kunde_adresse_to ?>" name="kunde_adresse_to"></label>
  </div>
  <div class="uk-margin">
      <label>Telefonnummer<input class="uk-input" type="text" placeholder="<?= $kunde_telefonnummer; ?>" value="<?= $kunde_telefonnummer; ?>" name="kunde_telefonnummer"></label>
  </div>
  <div class="uk-margin">
      <label>By<input class="uk-input" type="text" placeholder="<?= $kunde_by; ?>" value="<?= $kunde_by; ?>" name="kunde_by"></label>
  </div>
  <div class="uk-margin">
      <label>Postnummer<input class="uk-input" type="text" placeholder="<?= $kunde_postnummer; ?>" value="<?= $kunde_postnummer; ?>" name="kunde_postnummer"></label>
  </div>
  <input type="hidden" name="id_kunde_info" value="<?= $id_kunde_info ?>">
  <button class="uk-margin-small uk-button-default uk-button" type="submit" name="update_info">Opdater Information</button> <!-- Opdater kode mangler -->
<?php
} else {
?>
<h1>Udfyld venligst</h1>
<form class="" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
<fieldset class="uk-fieldset">
  <legend class="uk-legend">Information</legend>
  <div class="uk-margin">
      <input class="uk-input" type="text" placeholder="Fornavn" name="kunde_navn">
  </div>
  <div class="uk-margin">
      <input class="uk-input" type="text" placeholder="Efternavn" name="kunde_efternavn">
  </div>
  <div class="uk-margin">
      <input class="uk-input" type="text" placeholder="Adresse" name="kunde_adresse">
  </div>
  <div class="uk-margin">
      <input class="uk-input" type="text" placeholder="Anden Adresse" name="kunde_adresse_to">
  </div>
  <div class="uk-margin">
      <input class="uk-input" type="text" placeholder="Telefon nummer" name="kunde_telefonnummer">
  </div>
  <div class="uk-margin">
      <input class="uk-input" type="text" placeholder="By" name="kunde_by">
  </div>
  <div class="uk-margin">
      <input class="uk-input" type="text" placeholder="Postnummer" name="kunde_postnummer">
  </div>
  <input type="hidden" name="kunde_id_kunde" value="<?= $_SESSION['id_kunde']; ?>">
  <button class="uk-button uk-button-default" type="submit" name="insert_info">Send</button><br/><br/>
<?php }; ?>
</fieldset>
</form>
