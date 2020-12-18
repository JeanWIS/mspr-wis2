<?php include_once '../../includes/head.php'; ?>

<?php

$post_id = $_GET['id']; // get the id in the URL of the post a user wants to like

$id = $_SESSION['user']['id']; // Who is the id using the session


$dbh = connectDB();
$stmt = $dbh->prepare('DELETE  FROM likes WHERE post_id = :post_id && user_id = :id');
$stmt->bindValue(':id',$id);
$stmt->bindValue(':post_id',$post_id);
$stmt->execute();


header("Location: ../post/post.php?id=$post_id");