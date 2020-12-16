<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <h1>Prêt à partager vos recettes ?</h1>
            </div>
        </div>
    </div>
    <div class="col-md">
        <div class="card card-body mx-auto" style="max-width: 600px;">
            <h1>S'inscrire</h1>
            <form action="register-action.php" id="form" method="POST">
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
                            <input type="text" id="password" name="password" class="form-control" value="" required>
                            <div id="passwordHelpBlock" class="form-text">
                                Votre mot de passe doit être compris entre 8 et 20 caractères, doit contenir des lettres
                                et
                                des chiffres et ne doit pas contenir des espaces, des caractères spéciaux ou des émojis.
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">
                                Commencer l'aventure
                            </button>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-secondary" href="">
                                Déjà membre ?
                            </button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
