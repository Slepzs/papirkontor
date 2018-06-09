<?php include('conn.php'); ?>
<?php
  if (isset($_POST['submit'])) {
    // Først lytter vi efter et submit fra brugeren

    // Så samler vi variablerne, som han/hun har sendt.
    $kunde_email = filter_input(INPUT_POST, 'kunde_email', FILTER_SANITIZE_EMAIL) or die('Fejl i email eller manglende email');
    $kunde_kode = filter_input(INPUT_POST, 'kunde_kode', FILTER_SANITIZE_STRING) or die('Fejl i password eller manglende password');
    $retypekode = filter_input(INPUT_POST, 'retypekode', FILTER_SANITIZE_STRING) or die('Fejl i password eller manglende password');

    if( empty($kunde_email) || empty($kunde_kode)) {
      Echo 'Indtast brugernavn eller password';
      exit;
    } elseif($kunde_kode !== $retypekode) {
      exit;
    } else {
      $sqlcheck = "SELECT kunde_email, kunde_kode FROM kunde WHERE kunde_email='$kunde_email'";
      $stmt = $conn->prepare($sqlcheck);
      $stmt->execute();
      $stmt->store_result();
      $result = $stmt->num_rows;
      if($result > 0) {
        $userexist = 'Bruger findes allerede';
      } else {
        $kunde_kode = password_hash($kunde_kode, PASSWORD_DEFAULT);
        $stmt1 = $conn->prepare('INSERT INTO kunde(kunde_email, kunde_kode) VALUES(?, ?)');
        $stmt1->bind_param('ss', $kunde_email, $kunde_kode);
        $stmt1->execute();
        header('Refresh: 2; URL=index.php');
        exit;
      }
    }
  }
 ?>
