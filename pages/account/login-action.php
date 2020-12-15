<?php include_once '../../includes/head.php'; ?>


<?php

echo $_POST['email'];
echo $_POST['password'];


$email = $_POST['email'];
$password = md5($_POST['password']);
$correct_login_and_pw = False;
?>

<?php if ($users = getUsers()): ?>
    <?php foreach ($users as $user): ?>

        <?php if ($user['email'] == $email && $user['password'] == $password)

        {
            session_start();
            $id = getUser_id($email, $password)['id'];
            $_SESSION['user']['email'] = $email;
            $_SESSION['user']['password'] = $password;
            $_SESSION['user']['id'] = $id;

            $correct_login_and_pw = True; //tell php that the login & pw entered are correct
        }

        ?>

    <?php endforeach; ?>
<?php endif;


if ($correct_login_and_pw) { // if the password
    echo "success";
    header("Location: /mspr-wis2/pages/feed.php?id=$id");
} else {
    echo "wrong pw";
    //header('Location: /fish/index.php');
}

?>


