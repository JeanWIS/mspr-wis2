<?php include_once '../../includes/head.php'; ?>

<?php

echo $_SESSION['user']['first_name'] ;
$first_name = $_SESSION['user']['first_name'] = $_POST['first_name'];
$last_name = $_SESSION['user']['last_name'] = $_POST['last_name'];
$birthday = $_SESSION['user']['birthday'] = $_POST['birthday'];
$id = $_SESSION['user']['id'];
echo $id;

echo $first_name;

$data = [
'first_name' => $first_name,
'last_name' => $last_name,
'birthday' => $birthday,
    'id' => $id
];

$dbh = connectDB();
$query = $dbh->prepare('UPDATE users SET first_name = :first_name, last_name = :last_name, birthday = :birthday WHERE users.id = :id;');
$query->bindValue(':first_name', $data['first_name']);
$query->bindValue(':last_name', $data['last_name']);
$query->bindValue(':birthday', $data['birthday']);
$query->bindValue(':id', $data['id']);
$query->execute($data);


//header('');
