<?php session_start();
if(isset($_POST['login'])) {
  $admin_username = filter_input(INPUT_POST, 'admin_username', FILTER_SANITIZE_STRING) or die('No can\'t do');
  $user_password = filter_input(INPUT_POST, 'user_password');
  if(empty($admin_username) || empty($user_password)) {
    echo 'Du skal udfylde felterne';
  } else {
    $sql = "SELECT * FROM admins WHERE admin_username=?";
    if (!$stmt = $conn->prepare($sql)) {
      echo 'Koden fejlede snak med en udvikler';
    } else {
      $stmt->bind_param('s', $admin_username);
      $stmt->execute();
      $resultat = $stmt->get_result();
      if($row = $resultat->fetch_assoc()) {
        $hash = $row['user_password'];
        if(password_verify($user_password, $hash)) {
          $_SESSION['id'] = $row['id'];
          $_SESSION['admin_username'] = $row['admin_username'];
          $_SESSION['user_password'] = $row['user_password'];
          $succes = '<p>Du har succesfult logget ind ' . $_SESSION['admin_username'] . '. Du vil nu blive redirected</p>';
          header('Refresh: 2; URL=adminarea/admin-area.php');
        } else {
          echo 'Du har dongoofed'; }
        } else {
          echo 'Blev ikke fundet i databasen';
        }
      }
    }
  }
 ?>
