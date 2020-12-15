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
                     alt="Logo du Réseau social"></div>
            <div class="col-6">
            </div>
            <div class="col-2 d-flex justify-content-around">
                <a href="./pages/account/login.php" class="btn btn-secondary"> Login </a>
                <a href="./pages/account/register.php" class="btn btn-secondary"> Sign up </a>
            </div>
        </div>
    </nav>
</header>
<body>

<div class="fond">
    <div class="container">

        <div class="row" style="min-height: calc(100vh - 300px)">

            <div class="col-md-6 align-self-center">
                <div class="card card-body">
                    <form id="form" action="update.php" method="POST">

                        <div class="row">
                            <div class="col-lg-6">
                                <h1 class="d-inline-block mb-0 p-3 bg-light text-center">Mon titre</h1>
                                <div class="mb-3">
                                    <label>Prénom</label>
                                    <input class="form-control" name="first_name" id="first_name"
                                           required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label>Nom</label>
                                    <input class="form-control" name="last_name" id="last_name"
                                           required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label>Date de naissance</label>
                            <input type="date" class="form-control" name="birthday" id="birthday"
                                   required>
                        </div>

                        <button id="form-submit" type="submit" class="btn btn-primary w-100">
                            Partir à l'aventure !
                        </button>

                    </form>
                </div>

            </div>
            <div class="col-md-6 align-self-center">
                <div class="mockup">
                    <img src="https://placehold.it/10*30">
                </div>
            </div>

        </div>
    </div>
</div>
<?php include_once '../../includes/footer.php'; ?>
</body>
</html>