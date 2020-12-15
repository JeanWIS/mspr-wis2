<?php include_once '../../includes/head.php';

$id = $_SESSION['user']['id'];

$dbh = connectDB();
$stmt = $dbh->prepare('DELETE FROM users WHERE users.id = :id');
$stmt->bindValue(':id', $id);
$stmt->execute();
session_unset();


header("Location: /mspr-wis2/pages/feed.php");
