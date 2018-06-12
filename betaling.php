<?php include('includes/sessions.php');
include('backend/conn.php'); ?>
<?php include('config.php'); ?>
<?php include('backend/functions.php'); ?>
<?php include('includes/header.php'); ?>
<?php include('kunder/kunde_info.php'); ?>
<?php global $user_id; $user_id = $_SESSION['id_kunde'];
       ?>


<div class="wrapper">
  <div class="content-wrapper">
    <div class="uk-container">




      <div class="uk-text-center" uk-grid>
   <div class="uk-width-1-2">
       <div class="uk-card uk-card-default uk-card-body">
           <?php include('kunder/kunde_form.php'); ?>
       </div>
   </div>
   <div class="uk-width-1-2">
      <div class="uk-card uk-card-default uk-card-body">
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
          $samledepris = array_sum($array);

         ?>

          <p>Produkt: <?= $row['produkt_navn'] ?> </p>
          <ul class="produkt-liste">
            <li><strong>Antal:</strong> <?= $row['produkt_antal'] ?> </li>
            <li><strong>Pris:</strong> <?= $row['produkt_pris'] ?> Kr.- </li>
            <li><strong>Størrelse:</strong> <?= $row['produkt_storrelse'] ?> </li>
            <li><strong>Farve:</strong> <?= $row['produkt_farve'] ?> </li>
          </ul><br />
          <ul class="produkt-liste">
            <li><strong>Bryst:</strong> <?php if($row['produkt_bryst']) {echo 'Ja';} else { echo 'Nej'; } ?> </li>
            <li><strong>Ryg:</strong> <?php if($row['produkt_ryg']) {echo 'Ja';} else { echo 'Nej'; } ?> </li>
            <li><strong>Skulder:</strong> <?php if($row['produkt_skulder']) {echo 'Ja';} else { echo 'Nej'; } ?> </li>
          </ul><br />
          <?php if(empty($row['produkt_billede'])) { echo 'Intet tryk valgt'; } else { ?><img width="30%" src="kunde_billeder/<?= $row['produkt_billede']?>" alt="Dit Tryk"><?php } ?>
          <hr>


        <?php } ?>
        <?php $moms = (25 / 100) * $samledepris;  ?>
        <p> Moms.- <?= $moms ?> Kr.</p>
        <h3>Samlede Pris: <?= $samledepris ?> Kr.</h3>
          <form action="charge.php" method="post">
            <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="<?php echo $stripe['publishable_key']; ?>"
                data-description="Access for a year"
                data-amount="<?= $samledepris * 100; ?>"
                data-currency="DKK"
                data-locale="auto"></script>
            </form>
        </div>
    </div>
</div>











    </div>
  </div>
</div>
<script type="text/javascript">
  $(".stripe-button-el").html("Betal med kort");
</script>

<?php include('includes/footer.php'); ?>
