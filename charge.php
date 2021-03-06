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
$sqlcheck = ("SELECT  id_produkt, produkt_pris FROM produkt WHERE kundeprodukt_id=$id_kunde;");
$stmtcheck = $conn->prepare($sqlcheck);
$stmtcheck->execute();
$stmtcheck->bind_result($produkt_id, $produkt_pris);
$result = $stmtcheck->get_result();

 foreach( $result as $row ) {
   $array[] = $row['produkt_pris'];
   $samledepris = array_sum($array);

    $id = $row['id_produkt'];
    $count = count($id);

    $pa[] = $row['id_produkt'];
    $count = count($pa);
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
    $produkt_id_bestilt = implode(',',$pa);
    date_default_timezone_set('UTC');
    $date = date('Y-m-d');

    $order_date = strtotime($date);
    echo $order_date;
    $sqlorder = ("INSERT INTO bestilt(produkt_id_bestilt, kunde_id_kunde) values(?, ?)");
    $stmtorder = $conn->prepare($sqlorder);
    $stmtorder->bind_param('si', $produkt_id_bestilt, $id_kunde);
    $stmtorder->execute();
    if($stmtorder->affected_rows > 0) {
      echo 'succes';
    }
  }


?>
</div>
</div>
</div>
<?php include('includes/footer.php'); ?>
