<?php
if(isset($_POST['insert_info'])) {
$kunde_navn = filter_input(INPUT_POST, 'kunde_navn', FILTER_SANITIZE_STRING) or die('Navn forkert');
$kunde_efternavn = filter_input(INPUT_POST, 'kunde_efternavn', FILTER_SANITIZE_STRING) or die('efternavn forkert');
$kunde_adresse = filter_input(INPUT_POST, 'kunde_adresse', FILTER_SANITIZE_STRING) or die('adresse forkert');
if($_POST['kunde_adresse_to']) { $kunde_adresse_to = filter_input(INPUT_POST, 'kunde_adresse_to', FILTER_SANITIZE_STRING) or die('adresse to forkert'); } else {};
$kunde_telefonnummer = filter_input(INPUT_POST, 'kunde_telefonnummer', FILTER_SANITIZE_NUMBER_INT) or die('adresse to forkert');
$kunde_by = filter_input(INPUT_POST, 'kunde_by', FILTER_SANITIZE_STRING) or die('By illegal');
$kunde_postnummer = filter_input(INPUT_POST, 'kunde_postnummer', FILTER_SANITIZE_NUMBER_INT) or die('By illegal');
$kunde_id_kunde = filter_input(INPUT_POST, 'kunde_id_kunde', FILTER_SANITIZE_NUMBER_INT) or die('ID illegal');

if( empty($kunde_navn) || empty($kunde_efternavn) || empty($kunde_adresse) || empty($kunde_telefonnummer) || empty($kunde_by) || empty($kunde_postnummer) ) {
  echo 'du mangler at udfylde disse felter';
} else {

  $stmt = $conn->prepare('INSERT INTO kunde_info(kunde_navn, kunde_efternavn, kunde_adresse, kunde_adresse_to, kunde_telefonnummer, kunde_by, kunde_postnummer, kunde_id_kunde) VALUES(?, ?, ?, ?, ?, ?, ?, ?)');
  $stmt->bind_param('ssssiisi', $kunde_navn, $kunde_efternavn, $kunde_adresse, $kunde_adresse_to, $kunde_telefonnummer, $kunde_by, $kunde_postnummer, $kunde_id_kunde);
  $stmt->execute();
  }
};
?>
<?php
if(isset($_POST['update_info'])) {
$kunde_navn = filter_input(INPUT_POST, 'kunde_navn', FILTER_SANITIZE_STRING) or die('Navn forkert');
$kunde_efternavn = filter_input(INPUT_POST, 'kunde_efternavn', FILTER_SANITIZE_STRING) or die('efternavn forkert');
$kunde_adresse = filter_input(INPUT_POST, 'kunde_adresse', FILTER_SANITIZE_STRING) or die('adresse forkert');
if($_POST['kunde_adresse_to']) {$kunde_adresse_to = filter_input(INPUT_POST, 'kunde_adresse_to', FILTER_SANITIZE_STRING) or die('adresse to forkert'); } else {};
$kunde_telefonnummer = filter_input(INPUT_POST, 'kunde_telefonnummer', FILTER_SANITIZE_NUMBER_INT) or die('adresse to forkert');
$kunde_by = filter_input(INPUT_POST, 'kunde_by', FILTER_SANITIZE_STRING) or die('By illegal');
$kunde_postnummer = filter_input(INPUT_POST, 'kunde_postnummer', FILTER_SANITIZE_NUMBER_INT) or die('By illegal');
$id_kunde_info = filter_input(INPUT_POST, 'id_kunde_info', FILTER_SANITIZE_NUMBER_INT) or die('ID illegal');


  $stmt = $conn->prepare("UPDATE kunde_info SET kunde_navn=?, kunde_efternavn=?, kunde_adresse=?, kunde_adresse_to=?, kunde_telefonnummer=?, kunde_by=?, kunde_postnummer=? WHERE id_kunde_info = '$id_kunde_info'");
  $stmt->bind_param('ssssisi', $kunde_navn, $kunde_efternavn, $kunde_adresse, $kunde_adresse_to, $kunde_telefonnummer, $kunde_by, $kunde_postnummer);
  $stmt->execute();
  $information = 'Din information er blevet opdateret';
};
?>
