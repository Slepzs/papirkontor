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
$sqlcheck = ("SELECT id_produkt, produkt_pris FROM produkt WHERE kundeprodukt_id=$id_kunde;");
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

}


$imploded = implode(',',$pa);
echo $imploded. '<br />';
date_default_timezone_set('UTC');
$order_date = date('Y-m-d H:i:s');
echo $order_date;
$sqlorder = ("INSERT INTO bestilt(order_date, produkt_id_bestilt, kunde_id_kunde) values(?, ?, ?)");
$stmtorder = $conn->prepare($sqlorder);
$stmtorder->bind_param('isi', $order_date, $imploded, $id_kunde);
$stmtorder->execute();
if($stmtorder->affected_rows > 0) {
  echo 'succes';
}

/* for($i = 0; $i < $count; $i++) {
  echo $pa[$i] . '<br />';
} */


?>

<?php include('includes/footer.php'); ?>
