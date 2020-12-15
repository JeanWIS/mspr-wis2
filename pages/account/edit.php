<?php include_once '../../includes/head.php'; ?>
<?php include_once '../../includes/header.php'; ?>

<?php $first_name = $_SESSION['user']['first_name']; ?>
<?php $last_name = $_SESSION['user']['last_name']; ?>
<?php $birthday = $_SESSION['user']['birthday']; ?>


<div class="fond">
    <div class="container">

        <div class="row" style="min-height: calc(100vh - 300px)">
            <div class="col-md-6 align-self-center">
                    <h1 class="d-inline-block mb-0 p-3 bg-light text-center">Modifier mon profil</h1>
            </div>

            <div class="col-md-6 align-self-center">
                <div class="card card-body">
                    <form id="form" action="update.php" method="POST">

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label >Prénom</label>
                                    <input class="form-control" name="first_name" id="first_name" value="<?php echo $first_name ?>" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label >Nom</label>
                                    <input class="form-control" name="last_name" id="last_name" value="<?php echo $last_name ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label >Date de naissance</label>
                            <input type="date" class="form-control" name="birthday" id="birthday" value="<?php echo $birthday ?>" required>
                        </div>

                            <button id="form-submit" type="submit" class="btn btn-primary w-100">
                                Mettre à jour
                            </button>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<?php include_once '../../includes/footer.php'; ?>
