<?php include_once('includes/header.php');?>
<?php include_once('includes/helpers.php');

session_start();

?>

    <div class="bg-img">
    <form action="login-action.php" method="post" class="form-example">
        <h1>Se connecter</h1>
        <div class="form-example">
            <label for="email">Votre email </label>
            <input type="text" name="email" id="username" required>
        </div>
        <div class="form-example">
            <label for="password">Votre mot de passe </label>
            <input type="text" name="password" id="password" required>
        </div>
        <div class="form-example">
            <button type="submit" value="connect!">Se connecter</button>
        </div>
    </form>
</div>

<?php include_once('includes/footer.php');?>