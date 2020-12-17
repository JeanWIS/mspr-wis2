<?php include_once '../../includes/head.php'; ?>
<?php include_once '../../includes/header.php'; ?>
    <div class="bg-img" style="min-height: 500px">
        <a class="btn btn-secondary" href="../../pages/user/friends.php">Retour en arrière</a>
        <div class="card card-body mt-5 mx-auto" style="max-width: 600px;">
            <form id="form" action="store-post.php" method="POST">

                <div class="row">
                    <h1>Publier une recette</h1>
                    <div class="col">
                        <div class="mb-3">
                            <label>Titre</label>
                            <input class="form-control" name="title" id="title" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label>Score Yuka</label>
                            <input class="form-control" name="score_yuka" id="score-yuka">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label >Image</label>
                    <input type="url" class="form-control" name="thumbnail" id="image" required>
                </div>

                <div class="mb-3">
                    <label>Contenu de la publication</label>
                    <textarea class="form-control" name="body" id="mytextarea" rows="5" ></textarea>
                </div>

                <div class="d-grid gap-2">
                    <button id="form-submit" type="submit" class="btn btn-primary">
                        Publier le post
                    </button>
                </div>

            </form>
        </div>
    </div>


<?php include_once('../../includes/footer.php'); ?>