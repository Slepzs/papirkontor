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
$pa = explode(',', $imploded);

for($i = 0; $i < $count; $i++) {
  echo $pa[$i] . '<br />';

  $sqlorder = ("INSERT INTO order, produkt_order ") 
}


?>

<?php include('includes/footer.php'); ?>
