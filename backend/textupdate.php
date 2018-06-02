<?php
include('../backend/conn.php');
if(isset($_POST['text']));

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT) or die('nope');
$user_id = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_NUMBER_INT) or die('nope');
$text = $_POST['text'];

$sqltext = ("INSERT INTO posts(id_posts, posts_text, $users_id) VALUES(?, ?, ?)");
$stmttext = $conn->prepare($sqltext);
$stmttext->bind_param('isi', $id_posts, $posts_text, $users_id);
$stmttext->execute();
 ?>
