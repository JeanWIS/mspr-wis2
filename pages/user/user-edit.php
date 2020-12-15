<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/mspr-wis2/includes/head.php'; ?>

<div class="fond">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <div class="card-body">
                        <h1>Modifier mon profil</h1>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <?php

                $posts = getUsers($_GET['id']);
                ?>

                <div class="card card-body mt-5 mx-auto" style="max-width: 600px;">
                    <form id="form" action="data.php" method="POST">

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="first_name"><?php echo ['first_name'] ?></label>
                                    <input class="form-control" name="first_name" id="first_name" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="last_name"><?php echo ['last_name'] ?></label>
                                    <input class="form-control" name="last_name" id="last_name" required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="image"><?php echo ['thumbnail'] ?></label>
                            <input type="file" class="form-control" name="image" id="image" required>
                        </div>
                        <div class="mb-3">
                            <label for="birthday"><?php echo ['birthday'] ?></label>
                            <input type="date" class="form-control" name="birthday" id="birthday" required>
                        </div>

                        <div class="d-grid gap-2">
                            <button id="form-submit" type="submit" class="btn btn-primary">
                                Mettre à jour
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

