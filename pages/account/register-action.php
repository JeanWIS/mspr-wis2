<?php include_once '../../includes/header.php';



$values = [
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'email' => $_POST['email'],
    'birthday' => $_POST['birthday'],
    'password' => md5($_POST['password']),
];

$dbh = connectDB();
$query = $dbh->prepare('INSERT INTO users (first_name, last_name, email, birthday, password) VALUES (:first_name, :last_name, :email, :birthday, :password) ');
$query->execute($values);

$id = getUser_id($values['email'], $values['password'])['id']; // find the id of the user just created

session_start();
$_SESSION['user']['email'] = $values['email'];
$_SESSION['user']['password'] = $values['password'];
$_SESSION['user']['first_name'] = $values['first_name'];
$_SESSION['user']['last_name'] = $values['last_name'];
$_SESSION['user']['birthday'] = $values['birthday'];
$_SESSION['user']['id'] = $id;
header("Location: /mspr-wis2/pages/feed.php?id=$id");
?>