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
            <div class="col-2 d-flex justify-content-around">
                <a href="./pages/account/login.php" class="btn btn-secondary"> Login </a>
                <a href="./pages/account/register.php" class="btn btn-outline-secondary"> Sign up </a>
            </div>
        </div>
    </nav>
</header>
<body>

<div class="fond">
    <div class="container">

        <div class="row" style="min-height: calc(100vh - 300px)">

            <div class="col-md-6 align-self-center">
                <?php  include_once './includes/forms_register_home.php' ?>
            </div>
            <div class="col-md-6 align-self-center">
                <div class="mockup">
                    <img src="https://placehold.it/10*30">
                </div>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="row" style="min-height: calc(100vh - 300px)">
        <div class="col-md-6 align-self-center">
            <div class="team">
                <img src="https://placehold.it/10*30">
                <img src="https://placehold.it/10*30">
                <img src="https://placehold.it/10*30">
                <img src="https://placehold.it/10*30">
                <img src="https://placehold.it/10*30">
                <img src="https://placehold.it/10*30">
            </div>
        </div>
        <div class="col-md-6 align-self-center">
            <h1 class="d-inline-block mb-0 p-3text-center">Mon titre</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam commodi, corporis dolorum laboriosam
                laudantium quibusdam ratione sint? Ab, ad adipisci aperiam consequatur dolorum et impedit ipsam labore
                magnam minima mollitia, natus nemo nostrum quaerat.</p>
        </div>
    </div>
</section>
<?php include_once 'includes/footer.php'; ?>
</body>
</html>