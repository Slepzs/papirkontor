<?php
include('../backend/conn.php');
if(isset($_POST['text']));

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT) or die('nope');
$post_text = $_POST['post_text'];

$sqltext = ("UPDATE posts SET post_text=? WHERE id_posts='$id'");
$stmttext = $conn->prepare($sqltext);
$stmttext->bind_param('s', $post_text);
$stmttext->execute();
header('Refresh: 1; URL=admin-area.php');
 ?>
