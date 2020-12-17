<?php include_once '../../includes/head.php'; ?>

<?php
$id = $_GET['id'];


$dbh = connectDB();
$stmt = $dbh->prepare('DELETE FROM posts WHERE id = :id');
$stmt->bindValue(':id',$id);
$stmt->execute();


header("Location: /mspr-wis2/pages/feed.php");