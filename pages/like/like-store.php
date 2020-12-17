<?php include_once '../../includes/head.php'; ?>

<?php

$post_id = $_GET['id']; // get the id in the URL of the post a user wants to like

$id = $_SESSION['user']['id']; // Who is the id using the session



$values = [
    'user_id' => $id ,
    'post_id' => $post_id,
    'status' => "1",
];

$dbh = connectDB();
$query = $dbh->prepare('INSERT INTO likes (user_id, post_id, status ) VALUES (:user_id, :post_id, :status ) ');
$query->execute($values);

header("Location: post.php?id=$id");