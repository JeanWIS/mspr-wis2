<?php

include_once '../../includes/header.php'; ?>

<div class="bg-img">
    <div class="card card-body mt-5 mx-auto" style="max-width: 600px;">
        <h1>S'inscrire</h1>
        <form action="login-action.php" id="form" method="POST">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="first_name">Votre prénom</label>
                        <input type="text" id="first_name" name="first_name" class="form-control" value="" required>
                    </div>

                    <div class="form-group">
                        <label for="last_name">Votre nom</label>
                        <input type="text" id="last_name" name="last_name" class="form-control" value="" required>
                    </div>

                    <div class="form-group">
                        <label for="memail">Votre email</label>
                        <input type="email" id="email" name="email" class="form-control" value="" required>
                    </div>

                    <div class="form-group">
                        <label for="birthday">Votre date de naissance</label>
                        <input type="date" id="birthday" name="birthday" class="form-control" value="" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Votre mot de passe</label>
                        <input type="text" id=password name=password" class="form-control" value="" required>
                        <div id="passwordHelpBlock" class="form-text">
                            Your password must be 8-20 characters long, contain letters and numbers, and must not
                            contain spaces, special characters, or emoji.
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">
                            Commencer l'aventure
                        </button>
                    </div>
                </div>
        </form>
    </div>
</div>

<?php include_once('../../includes/footer.php'); ?>
