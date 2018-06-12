<?php
include('includes/sessions.php');
include('backend/conn.php');
include('config.php');
include('backend/functions.php');
include('includes/header.php');
require_once('config.php');

?>
<?php
$id_kunde = $_SESSION['id_kunde'];
$sqlcheck = ("SELECT produkt_pris FROM produkt WHERE kundeprodukt_id=$id_kunde;");
$stmtcheck = $conn->prepare($sqlcheck);
$stmtcheck->execute();
$stmtcheck->bind_result($produkt_id, $produkt_pris);
$result = $stmtcheck->get_result();

 foreach( $result as $row ) {
   $array[] = $row['produkt_pris'];
  $samledepris = array_sum($array);
  };

  $token  = $_POST['stripeToken'];
  $email  = $_POST['stripeEmail'];

  $customer = \Stripe\Customer::create(array(
      'email' => $email,
      'source'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => $samledepris * 100,
      'currency' => 'DKK'
  ));
?>
<div class="wrapper">
  <div class="content-wrapper">
    <div class="uk-container">
<?php

  if($charge) {
    $sqlorder = ("INSERT INTO ");
    echo '<h1>Gennemført</h1>';
  }


?>
</div>
</div>
</div>
<?php include('includes/footer.php'); ?>
