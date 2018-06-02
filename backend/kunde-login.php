<?php

if(isset($_POST['login'])) {


  $kunde_email = filter_input(INPUT_POST, 'kunde_email', FILTER_SANITIZE_EMAIL) or die('No can\'t do');
  $kunde_kode = filter_input(INPUT_POST, 'kunde_kode');

  if(empty($kunde_email) || empty($kunde_kode)) {
    echo 'Du skal udfylde felterne';
  } else {
    $sql = "SELECT * FROM kunde WHERE kunde_email=?";
    if (!$stmt = $conn->prepare($sql)) {
      echo 'Koden fejlede snak med en udvikler';
    } else {
      $stmt->bind_param('s', $kunde_email);
      $stmt->execute();
      $resultat = $stmt->get_result();
      if($row = $resultat->fetch_assoc()) {
        $hash = $row['kunde_kode'];
        if(password_verify($kunde_kode, $hash)) {
          $_SESSION['id_kunde'] = $row['id_kunde'];
          $_SESSION['kunde_email'] = $row['kunde_email'];
          $_SESSION['kunde_kode'] = $row['kunde_kode'];
          $loginSucess = 'Du har succesfult logget ind';
          header('Refresh: 1; URL=min-side.php');
          exit();
        } else {
          echo 'Du har dongoofed'; }
        } else {
          echo 'Blev ikke fundet i databasen';
        }
      }
    }
  }

 ?>
