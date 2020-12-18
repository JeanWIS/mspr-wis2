<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/app.css">
    <title>Welcome</title>
</head>
<header>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <div class="col-2">
                <img class="img-fluid" style="height: 100px" src="assets/images/Logo-Ollakino.png"
                     alt="Logo du réseau social"></div>
            <div class="col-6">
            </div>
            <div class="col-3 d-flex justify-content-around">
                <a href="./pages/account/login.php" class="btn btn-secondary"> Se connecter </a>
                <a href="./pages/account/register.php" class="btn btn-outline-secondary"> S'inscrire </a>
            </div>
        </div>
    </nav>
</header>
<body>

<div class="fond">
    <div class="container">

        <div class="row" style="min-height: calc(100vh - 300px)">

            <div class="col-md-6 align-self-center p-5">
                <?php include_once './includes/forms_register_home.php' ?>
            </div>
            <div class="col-md-6 align-self-center">
                <img src="assets/images/mockuper.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</div>

<section>
    <div class="row" style="min-height: calc(100vh - 300px)">
        <div class="col-md-6 align-self-center">
            <div class="team">
                <img src="assets/images/lasagna.jpg">
                <img src="assets/images/cucumber.jpg">
                <img src="assets/images/cherries.jpg">
                <img src="assets/images/food.jpg">
            </div>
        </div>
        <div class="col-md-6 align-self-center p-5">
            <h1 class="d-inline-block mb-2 p-3text-center">Une App, une Passion, la Cuisine</h1>
            <p>Ollakino est le nouveau réseau social culinaire ! Vous avez beaucoup cuisiné en 2020 ou appris à cuisiner ? Alors suivez les recettes des plus grands chefs, mais aussi des particuliers du coin aux talents innombrables !</p>

            <a href="./pages/account/register.php" class="btn btn-secondary"> Se créer un compte </a>
        </div>
    </div>
</section>
<?php include_once 'includes/footer.php'; ?>
</body>
</html>