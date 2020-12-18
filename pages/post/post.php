<?php include_once '../../includes/head.php'; ?>
<?php include_once '../../includes/header.php'; ?>

<?php
$user_id = $_GET['id']; // get the id in the URL of the post
$post = getPost($user_id);// Execute the function that will find the post with the id from the URL


// Am I the creator of this post, Yes or No
$id = $_SESSION['user']['id'];


/*
// Like
//$isPostLikedByMe = false;

if ($isPostLikedByMe) {
    if ($isPostLikedByMe['status'] !== 1) {
        echo "this post is liked";
    }
}
*/
?>

    <main id="main">

        <?php include_once '../../includes/sidebar.php' ?>

        <section id="content">
            <div class="card m-auto" style=" width: 30rem; ">
                <div class="row p-1">
                    <img src="<?php echo $post['thumbnail']; ?>" class="img-fluid card-img-top" alt="" style="border-radius: 10px">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-8">

                                <div class="container mt-3">
                                    <?php if (isset($post['title'])): ?>
                                        <h5 class="card-title"><?php echo $post['title']; ?>  </h5>
                                    <?php endif; ?>
                                    <?php if (isset($post['score_yuka'])): ?>
                                        <h6 class="yuka"> Score Yuka : <?php echo $post['score_yuka']; ?>  </h6>
                                    <?php endif; ?>
                                    <?php if (isset($post['body'])): ?>
                                        <p class="card-text"> <?php echo $post['body']; ?>  </p>
                                    <?php endif; ?>
                                </div>
                            </div> <!-- Content -->
                            <div class="col-4 ">
                                <?php if ($post['user_id'] === $id): ?>
                                <?php else: ?>
                                    <div class=" p-5 ">
                                        <?php
                                        /* Code for the like button */

                                        $isPostLikedByMe = isPostLiked($user_id, $id);
                                        $notLiked = true; // default true this post is not liked

                                        if ($isPostLikedByMe) {
                                            if ($isPostLikedByMe['status'] == 1) {
                                                ?>
                                                <a href="../like/unlike-store.php?id=<?php echo $post['id']; ?>">
                                                    <i class="fas fa-bookmark fa-4x"></i>
                                                </a>
                                                <?php
                                                $notLiked = false;
                                            }
                                        } // the user already like the post
                                        if ($notLiked) {
                                            ?>
                                            <a href="../like/like-store.php?id=<?php echo $post['id']; ?>">
                                                <i class="far fa-bookmark fa-4x"></i>
                                            </a>
                                            <?php
                                        } // The user didn't like the post
                                        ?>

                                    </div>
                                <?php endif; ?>
                            </div><!-- SAVE -->
                        </div>

                        <div class="card-header">
                            <a type="button" class="btn btn btn-danger w-100 mb-3"
                               href="delete.php?id=<?php echo $post['id']; ?>">
                                <i class="fas fa-trash text-white"></i>
                                <span>Supprimer mon post</span>
                            </a>
                            <a href="" class="btn btn-secondary d-grid gap-2 ">Mettre à jour mon post</a>
                        </div> <!-- BTN -->



                    </div>
                </div>
            </div>
        </section>
    </main>


<?php include_once '../../includes/footer.php'; ?>