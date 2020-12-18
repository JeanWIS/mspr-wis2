<?php include_once '../../includes/head.php'; ?>

<?php
$friend_id = $_GET['id']; // get the id in the URL
$user_id = $_SESSION['user']['id'];

$values = [
    'user_id' => $user_id,
    'friend_id' => $friend_id
];

$dbh = connectDB();
$query = $dbh->prepare('INSERT INTO friends (user_id, friend_id, status) VALUES (:user_id, :friend_id, "1") ');
$query->execute($values);


header("Location: /mspr-wis2/pages/user/user.php?id=$friend_id");
//header("Location: ../user/user.php?id=$friend_id");

?>

<div class="container">
    <h2></h2>
</div>


<?php include_once '../../includes/footer.php'; ?>
