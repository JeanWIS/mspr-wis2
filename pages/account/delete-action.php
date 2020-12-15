<?php include_once '../../includes/header.php';

$id = $_SESSION['user']['id'];

$dbh = connectDB();
$stmt = $dbh->prepare('DELETE FROM users WHERE users.id = :id');
$stmt->bindValue(':id', $id);
$stmt->execute();

header("Location: /mspr-wis2/pages/feed.php");
