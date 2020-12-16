<div class="card card-body mt-5 mx-auto p-5" style="max-width: 600px;">
    <h1 class="text-center m-2">Se connecter</h1>
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