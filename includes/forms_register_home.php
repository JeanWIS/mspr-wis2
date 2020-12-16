<div class="card card-body">
    <form action="pages/account/register-action.php" id="form" method="POST">
        <h1 class="d-inline-block text-center">Inscrivez-vous !</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label>Prénom</label>
                    <input class="form-control" name="first_name" id="first_name" placeholder="Ronan"
                           required>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label>Nom</label>
                    <input class="form-control" name="last_name" id="last_name" placeholder="Met un 20 !"
                           required>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label>Date de naissance</label>
            <input type="date" class="form-control" name="birthday" id="birthday"
                   required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" class="form-control" name="email" id="email"
                   required>
        </div>

        <button id="form-submit" type="submit" class="btn btn-primary w-100">
            Partir à l'aventure !
        </button>

        <div class="download d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-dark btn-sm">
                 Apple Store
            </button>
            <button type="button" class="btn btn-warning btn-sm">
                <strong>G</strong>  Play Store
            </button>
        </div>

    </form>
</div>