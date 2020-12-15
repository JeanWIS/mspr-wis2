<?php require_once 'includes/helpers.php'; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php assetsPath(); ?>/css/app.css">
    <title>Document</title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <div class="col-2">
                <img class="img-fluid" style="height: 100px" src="assets/images/Logo-Ollakino.png"
                     alt="Logo du Réseau social"></div>
            <div class="col-6">
                <form class="d-flex">
                    <input id="search" class="form-control " type="search" placeholder="Search" aria-label="Search">
                    <button id="button" class="btn btn-outline-success" type="submit">Rechercher</button>
                </form>
            </div>
            <div class="col-4">
            </div>
        </div>
    </nav>
</header>

