<?php

include_once 'includes/helpers.php';

session_start();

$dbh = connectDB();

$stmt = $dbh->prepare('SELECT*FROM clients WHERE email = :email AND password = :password');
$stmt->bindValue(':email', $_POST['email']);
$stmt->bindValue(':password', $_POST['password']);

$stmt->execute();

$client = $stmt->fetch();

if ($client == false) {
    header("Location: login.php?id=$id");
} else {
    $_SESSION['client'] = $client['id_client'];
    header("Location: index.php?id=$id");
}

?>