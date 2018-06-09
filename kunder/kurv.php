<?php session_start();

if(isset($_POST['ikurv'])) {

  include('../backend/conn.php');
  $id_kunde = filter_input(INPUT_POST, 'id_kunde', FILTER_SANITIZE_NUMBER_INT) or die('Forkert INT');
  $produkt_navn = filter_input(INPUT_POST, 'produkt_navn', FILTER_SANITIZE_STRING) or die('Ikke en T-shirt');
  $produkt_storrelse = filter_input(INPUT_POST, 'radio1', FILTER_SANITIZE_STRING) or die('Forkert size');
  $produkt_farve = filter_input(INPUT_POST, 'radio2', FILTER_SANITIZE_STRING) or die('Forkert Color');
  $produkt_tryk = filter_input(INPUT_POST, 'tryk', FILTER_SANITIZE_STRING) or die('Forkert Folie');
  if(isset($_POST['bryst']) == '') {

  } else {
    $bryst = filter_input(INPUT_POST, 'bryst', FILTER_SANITIZE_STRING) or die('Forkert Bryst');
   };

  if(isset($_POST['ryg']) == '') {
    }
    else {
      $ryg = filter_input(INPUT_POST, 'ryg', FILTER_SANITIZE_STRING) or die('Forkert Ryg');
    };

    if(isset($_POST['skulder']) == '') {
      }
      else {
        $skulder = filter_input(INPUT_POST, 'skulder', FILTER_SANITIZE_STRING) or die('Forkert skulder');
      };

  $antal  = filter_input(INPUT_POST, 'antal', FILTER_SANITIZE_NUMBER_INT) or die('Forkert antal');


  /* https://www.w3schools.com/php/php_file_upload.asp sikker billede upload kilde */

  $uploadOk = 2;
  if(empty($_FILES['image']['name'])) { } else {
  $produkt_billede = basename($_FILES['image']['name']);
  $target = "../kunde_billeder/".basename($_FILES['image']['name']);
  $uploadOk = 1;

  $imageFileType = strtolower(pathinfo($produkt_billede, PATHINFO_EXTENSION));
  $checkImage = getimagesize($_FILES["image"]['tmp_name']);

  if ($_FILES["image"]["size"] > 2000000) {
    echo "Billedet må ikke være større end 2MB";
    $uploadOk = 0;
  }

  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
  echo "Kun JPG, JPEG, PNG, er tilladt";
  $uploadOk = 0;
  }

  if($checkImage !== false) {
    $uploadOk = 1;
  } else {
    echo "File er ikke et billede.";
    $uploadOk = 0;
  }
}

  if(empty($produkt_storrelse) || empty($produkt_farve) || empty($id_kunde)) {
    $ingenfarve = 'Ingen farve eller størrelse valgt';
  } elseif(!preg_match("%^[a-zA-Z \/]+$%", $produkt_storrelse) || !preg_match("%^[a-zA-Z \/]+$%", $produkt_farve)) {
    $dontdo = 'Don\'t do that';
  } elseif($antal > 10) {
    echo 'Det er flere end du må købe';
  } else {
    $sqlprodukt = ("INSERT INTO produkt(produkt_navn, produkt_storrelse, produkt_farve, produkt_bryst, produkt_ryg, produkt_skulder, produkt_billede, produkt_tryk, produkt_antal, kundeprodukt_id) VALUES(?,?,?,?,?,?,?,?,?,?)");
    $stmtprodukt = $conn->prepare($sqlprodukt);
    $stmtprodukt->bind_param('ssssssssii', $produkt_navn, $produkt_storrelse, $produkt_farve, $bryst, $ryg, $skulder, $produkt_billede, $produkt_tryk, $antal, $id_kunde);
    $stmtprodukt->execute();
    if ($uploadOk == 0) {
      echo 'fejl i billedet ellers er intet valgt';
    } elseif($uploadOk == 2) {
      header('Refresh: 1; URL=../min-side.php');
    } else {
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        header('Refresh: 0; URL=../min-side.php');
      } else {
        echo "Image uploading failed. ";
      }
    }
  }
  }
?>
