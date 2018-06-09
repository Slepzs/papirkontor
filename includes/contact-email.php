 <?php ob_start();
  if(isset($_POST['send'])) {
  $navn = filter_input(INPUT_POST, 'navn', FILTER_SANITIZE_STRING) or die('Ikke tilladt');
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die('Ikke tilladt');
  $telefonnummer = filter_input(INPUT_POST, 'telefonnummer', FILTER_VALIDATE_INT) or die('Ikke tilladt');
  $kommentar =  filter_input(INPUT_POST, 'kommentar', FILTER_SANITIZE_STRING) or die('Ikke tilladt');
  $to = 'slepzs@heidework.com';
	$subject = "Kontakt fra $navn";
	$headers = "From: $email \r\n";
	$headers .=  'Reply-To: ' . $email . "\r\n";
	$headers .= "X-Mailer: PHP's mail() Function\r\n";
	$headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-Type: text/html; charset=utf-8\r\n";
	$authenticate = null;
  $message = $navn ."\r\n". "<br />". $email ."\r\n". "<br />". $telefonnummer ."\n\n". "<br />". ' Besked:' . $kommentar;
	$mailsent = mail($to, $subject, $message, $headers, $authenticate);
  header('Location: http://www.heidework.com/papir/tak.php');
}
 ?>
