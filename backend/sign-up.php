<?php include('conn.php'); ?>
<?php
  if (isset($_POST['submit'])) {
    // Først lytter vi efter et submit fra brugeren

    // Så samler vi variablerne, som han/hun har sendt.
    $admin_username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING) or die('Fejl i brugernavn eller manglende brugernavn');
    $user_password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING) or die('Fejl i password eller manglende password');
    $retypepassword = filter_input(INPUT_POST, 'retypepassword', FILTER_SANITIZE_STRING) or die('Fejl i password eller manglende password');

    if( empty($admin_username) || empty($user_password)) {
      Echo 'Indtast brugernavn eller password';
      exit;
    } elseif(!preg_match('/^[a-zA-z]*$/', $admin_username)) {
      Echo 'Ugyldige karaktere';
      exit;
    } elseif($user_password !== $retypepassword) {
      exit;
    } else {
      $sqlcheck = "SELECT admin_username, user_password FROM admins WHERE admin_username='$admin_username'";
      $stmt = $conn->prepare($sqlcheck);
      $stmt->execute();
      $stmt->store_result();
      $result = $stmt->num_rows;
      if($result > 0) {
        echo 'Findes allerede';
      } else {
        $user_password = password_hash($user_password, PASSWORD_DEFAULT);
        $stmt1 = $conn->prepare('INSERT INTO admins(admin_username, user_password) VALUES(?, ?)');
        $stmt1->bind_param('ss', $admin_username, $user_password);
        $stmt1->execute();
        header('Refresh: 5; URL=admin-login.php');
        Echo 'Oprettelsen af brugeren var en succes <br />';
        Echo 'Du kan nu logge ind';
        exit;
      }
    }
  }
 ?>
