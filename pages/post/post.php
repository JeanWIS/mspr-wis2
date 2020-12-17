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
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <img src="<?php echo $post['thumbnail']; ?>" class="img-fluid" alt="">
                        <h2> <?php echo $post['title']; ?>  </h2>
                        <h2> Yuka ==> <?php echo $post['score_yuka']; ?>  </h2>
                        <p> <?php echo $post['body']; ?>  </p>

                        <?php if ($post['user_id'] === $id):
                            ?>
                            <a type="button" class="btn btn-danger"
                               href="delete.php?id=<?php echo $post['id']; ?>">
                                <svg width="1em" height="1em" viewBox="0 0 16 16"
                                     class="bi bi-trash"
                                     fill="currentColor"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd"
                                          d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                                Delete my Post </a>
                            <a href="" class="btn btn-secondary">Update My post</a>
                        <?php

                        else:
                            ?>
                            <div class="d-flex align-content-end">
                                <?php
                                /* Code for the like button */

                                $isPostLikedByMe = isPostLiked($user_id, $id);
                                $notLiked = true; // default true this post is not liked

                                if ($isPostLikedByMe) {
                                    if ($isPostLikedByMe['status'] == 1) {
                                        ?>
                                        <a href="../like/like-store.php?id=<?php echo $post['id']; ?>">
                                            <i class="fas fa-bookmark fa-10x"></i>
                                        </a>
                                        <?php
                                        $notLiked = false;
                                    }
                                } // the user already like the post
                                if ($notLiked) {
                                    ?>
                                    <i class="far fa-bookmark fa-10x"></i>
                                    <?php
                                } // The user didn't like the post
                                ?>

                            </div>
                        <?php
                        endif;
                        ?>

                    </div>
                </div>
            </div>
        </section>
    </main>


<?php include_once '../../includes/footer.php'; ?>