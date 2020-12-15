<?php include_once 'includes/header.php';?>
<?php include_once 'includes/helpers.php'; ?>

<?php

$posts = getPosts($_GET['id']);
?>

    <div class="card card-body mt-5 mx-auto" style="max-width: 600px;">
        <form id="form" action="data.php" method="POST">

            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="title"><?php echo['title']?></label>
                        <input class="form-control" name="title" id="title" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="score-yuka"><?php echo['score_yuka']?></label>
                        <input class="form-control" name="score-yuka" id="score-yuka" required>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="image"><?php echo['thumbnail']?></label>
                <input type="file" class="form-control" name="image" id="image" required>
            </div>

            <div class="mb-3">
                <label for="message"><?php echo['body']?></label>
                <textarea class="form-control" name="message" id="message" rows="5" required></textarea>
            </div>

            <div class="d-grid gap-2">
                <button id="form-submit" type="submit" class="btn btn-primary">
                    Mettre à jour
                </button>
            </div>

        </form>
    </div>

<?php include_once 'includes/footer.php'; ?>