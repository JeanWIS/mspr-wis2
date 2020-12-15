<?php include_once '../../includes/head.php'; ?>
<?php include_once '../../includes/header.php'; ?>
<?php include_once '../../includes/sidebar.php'; ?>

<?php
    $first_name = $_SESSION['user']['first_name'];
    $last_name = $_SESSION['user']['last_name'];
?>

<img src="https://placehold.it/1282x800">
<img src="https://placehold.it/180x180">
<button class="btn btn-primary">
    <a href="edit.php" class="btn btn-primary">Editer mon profil</a>
</button>
<button class="btn btn-secondary">
    <a href="delete-action.php">Supprimer mon profil</a>
</button>

<div class="container" style="min-height: 300px">
    <div class="mt-5">
        <h1><?php echo $first_name . ' ' . $last_name ?> </h1>
        <div class="card card-body mt-5 mx-auto" style="max-width: 600px;">
            <form id="form" action="store-post.php" method="POST">

                <div class="row">
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
                    <input type="file" class="form-control" name="thumbnail" id="image" required>
                </div>

                <div class="mb-3">
                    <label>Contenu de la publication</label>
                    <textarea class="form-control" name="body" id="message" rows="5" required></textarea>
                </div>

                <div class="d-grid gap-2">
                    <button id="form-submit" type="submit" class="btn btn-primary">
                        Publier le post
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>


<?php include_once '../../includes/footer.php'; ?>
