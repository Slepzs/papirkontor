<?php include('../backend/conn.php') ?>
<?php include('../includes/sessions.php'); ?>
<?php include('../backend/functions.php'); ?>
<?php if(isset($_SESSION['id'])): ?>
<?php include('headeradmin.php') ?>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("post_text").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("post_text").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getposts.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
<div class="wrapper">
  <div class="content-wrapper">
    <div class="uk-container">
<?php echo '<h1>Velkommen ' . $_SESSION['admin_username'] . '</h1>'; ?>


<h1>Brugere som er oprettet</h1>
<table class="uk-table uk-table-striped">
   <thead>
       <tr>
           <th>Kunde ID</th>
           <th>Kunde E-mail</th>
           <th>Kunde Navn</th>
           <th>Kunde Efternavn</th>
           <th>Kunde Adresse</th>
           <th>Kunde Telefonnummer</th>
       </tr>
   </thead>
<tbody>

<?php usertable() ?>
</tbody>
</table>


<form class="" action="" method="post">
  <h2>Vælg Tekst</h2>
  <select class="uk-select" name="users" onchange="showUser(this.value)">
  echo '<option value="Ingen">Ingen</option>';
<?php
$user_id = $_SESSION['id'];
$sqlgettext = ("SELECT id_posts, post_text FROM posts WHERE users_id='$user_id'");
$stmttext = $conn->prepare($sqlgettext);
$stmttext->execute();
$stmttext->bind_result($id_posts, $post_text);
while( $stmttext->fetch() ) {

  echo '<option value="'. $id_posts .'">'. $id_posts .'</option>';
}; ?>

    </select>
</form>
<h1>Ændre teksten</h1>
  <form action="textupdate.php"  method="post">
    <input type="hidden" name="user_id" value="<?= $user_id ?>">
    <div id="post_text"></div>
    <button type="submit" name="text">Updater teksten</button>
  </form>


    </div>
  </div>
</div>
<?php include('footeradmin.php') ?>
<?php endif; ?>
