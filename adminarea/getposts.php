<?php
include('../backend/conn.php');

$q = intval($_GET['q']);
$sqlgettext = ("SELECT id_posts, post_text FROM posts WHERE id_posts='$q'");
$stmttext = $conn->prepare($sqlgettext);
$stmttext->execute();
$stmttext->bind_result($id_posts, $post_text);
while($stmttext->fetch()) {
  echo '<input type="hidden" name="id" value="'. $id_posts .'">';
  echo '<textarea name="post_text" class="uk-textarea" rows="5" >'. $post_text .'</textarea>';
}
 ?>
