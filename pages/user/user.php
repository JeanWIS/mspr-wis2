<?php include_once '../../includes/head.php'; ?>
<?php include_once '../../includes/header.php'; ?>
<?php include_once '../../includes/sidebar.php'; ?>

<!-- Friend_Status: 0 not_friend
                    1 friend
                    2 pending
-->

<?php

$user_id = $_GET['id']; // get the id in the URL of the random user
$user = getUser($user_id); // Execute the function that will find the user with the id from the URL

$id = $_SESSION['user']['id'];

$friendOrNotFriend = areWeFriends($id, $user_id);

?>

<?php include_once '../../includes/user-profil.php'; ?>

<?php include_once '../../includes/footer.php'; ?>
