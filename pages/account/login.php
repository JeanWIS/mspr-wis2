<?php

include_once '../../includes/header.php'; ?>

<?php // session_start(); ?>

    <div class="bg-img">
    <div class="card card-body mt-5 mx-auto" style="max-width: 600px;">
        <h1>Se connecter</h1>
        <form action="login-action.php" id="form" method="POST">
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="email">Votre email</label>
                        <input class="form-control" name="email" id="email" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="password">Votre mot de passe</label>
                        <input class="form-control" name="password" id="password" required>
                    </div>
                </div>
            </div>

            <div class="d-grid gap-2">
                <button id="form-submit" type="submit" class="btn btn-primary">
                    Se connecter
                </button>
            </div>

        </form>
    </div>
    </div>

<?php include_once('../../includes/footer.php');?>
=======
    <div class="CONTAINER">
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

        <article>
        <form class="form-signin" action="login-action.php">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <label class="sr-only">Login</label>
            <input type="text" id="inputEmail" class="form-control" placeholder="login" name="login"
                   required
                   autofocus>
            <label class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password"
                   required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
        </article>

    </div>
<?php include_once('includes/footer.php'); ?>
>>>>>>> Stashed changes
