<?php include_once ('includes/header.php');?>
<?php include_once 'includes/helpers.php'; ?>

<?php

$posts = getPosts($_GET['id']);
?>

    <section id="post">
        <div class="container">
            <h1><?php echo['title']?></h1>
            <img src="<?php echo['thumbnail']?>"
            <p><?php echo['body']?></p>
            <span><?php echo['score_yuka']?></span>
        </div>
        <button  class="btn btn-primary" type="submit">
            Mettre à jour
        </button>
    </section>

<?php include_once 'includes/footer.php'; ?>