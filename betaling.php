<?php include('includes/sessions.php');
include('backend/conn.php'); ?>
<?php include('config.php'); ?>
<?php include('backend/functions.php'); ?>
<?php include('includes/header.php'); ?>


<div class="wrapper">
  <div class="content-wrapper">
    <div class="uk-container">


      <?php
      $id_kunde = $_SESSION['id_kunde'];
      $sqlcheck = ("SELECT * FROM produkt WHERE kundeprodukt_id=$id_kunde;");
      $stmtcheck = $conn->prepare($sqlcheck);
      $stmtcheck->execute();
      $stmtcheck->bind_result($id_produkt, $produkt_navn, $produkt_storrelse, $produkt_farve, $produkt_bryst, $produkt_ryg, $produkt_skulder, $produkt_billede, $produkt_tryk, $produkt_antal, $produkt_pris, $_kundeprodukt_id);
      $result = $stmtcheck->get_result();

       foreach( $result as $row ) {
         $array[] = $row['produkt_pris'];
         '<br />';

       }
       $samledepris = array_sum($array);
       echo '<br />' . $samledepris . '<br />';

       ?>
       <div class="uk-width-1-1">

       </div>






    <form action="charge.php" method="post">
      <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-description="Access for a year"
          data-amount="<?= $samledepris; ?>"
          data-locale="auto"></script>
      </form>



    </div>
  </div>
</div>
<script type="text/javascript">
  $(".stripe-button-el").html("Betal med kort");
</script>

<?php include('includes/footer.php'); ?>
