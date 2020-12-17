<?php include_once '../../includes/head.php'; ?>

<?php

$user_id = $_GET['id']; // get the id in the URL of the post a user wants to like

$id = $_SESSION['user']['id']; // Who is the id using the session

echo $user_id;