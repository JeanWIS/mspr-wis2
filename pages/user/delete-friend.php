<?php include_once '../../includes/head.php'; ?>

<?php
$friend_id = $_GET['id']; // get the id in the URL of the random user
$user = getUser($friend_id); // Execute the function that will find the user with the id from the URL

$id = $_SESSION['user']['id'];

$values = [
    'user_id' => $id,
    'friend_id' => $friend_id
];


$dbh = connectDB();
$stmt = $dbh->prepare('DELETE FROM friends WHERE user_id = :user_id && friend_id = :friend_id');
$stmt->bindValue(':user_id', $id);
$stmt->bindValue(':friend_id', $friend_id);
$stmt->execute();

header("Location: http://localhost:8888/mspr-wis2/pages/user/friends.php");

?>
<?php include_once '../../includes/footer.php'; ?>
