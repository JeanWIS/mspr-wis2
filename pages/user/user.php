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

echo $id;
print_r(areWeFriends($id, $user_id));
//$friendOrNotFriend = areWeFriends($id, $user_id);
//echo $friendOrNotFriend;

?>


<article>
    <div class="container p-5 mt-5">
        <h2> <?php echo $user['first_name'] ?> </h2>
        <h4>Member since <?php echo $user['created_at'] ?> </h4>
        <a href="add-friend.php?id=<?php echo $user['id']; ?>" class="btn btn-primary">Follow</a>
    </div>
</article>


<?php include_once '../../includes/footer.php'; ?>
