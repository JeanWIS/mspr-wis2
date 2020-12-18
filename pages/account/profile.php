<?php include_once '../../includes/head.php'; ?>
<?php include_once '../../includes/header.php'; ?>
<?php
$first_name = $_SESSION['user']['first_name'];
$last_name = $_SESSION['user']['last_name'];
?>


<main id="main">

    <?php include_once '../../includes/sidebar.php' ?>

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <h1><?php echo $first_name . ' ' . $last_name ?> </h1>
                    <div class="d-grid-sm gap-2 col-6">
                        <a href="edit.php" class="btn btn-primary">Editer mon profil</a>
                        <a href="delete-action.php" class="btn btn-secondary">Supprimer mon profil</a>
                    </div>

                </div>

                <div class="card card-body mt-5 mx-auto" style="max-width: 600px; z-index: 2;">
                    <form id="form" action="../post/store-post.php" method="POST">

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
                            <label>Image</label>
                            <input type="url" class="form-control" name="thumbnail" id="image" required>
                        </div>

                        <div class="mb-3">
                            <label>Contenu de la publication</label>
                            <textarea class="form-control" name="body" id="mytextarea" rows="5"></textarea>
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
    </section>
    <div>


        <?php

        // Based on my id
        $myId = $_SESSION['user']['id'];
        // find post that have user_id = my ID

        if ($posts = getMyFeedPosts($myId)):
            foreach ($posts as $post) :
                ?>
                <!-- Page Content -->
                <div class="container p-5">
                    <h1> <?php echo $post['title'] ?> </h1>
                    <h6><?php echo $post['created_at']; ?>
                         </h6>
                    <div class="row">
                        <div class="col-6">
                            <img src="<?php echo $post['thumbnail'] ?>" alt=""
                                 class="img-fluid img-thumbnail ">
                        </div>
                        <div class="col-6">
                            <div>
                                <div class="card-header">
                                    Created by ME
                                </div>
                            </div>
                            <div class="content-post mt-3">
                                <?php
                                // show only 500 character on the feed.php
                                $TextMore500 = true;
                                $string = strip_tags($post['body']);
                                if (strlen($string) > 500) {

                                    // truncate string
                                    $stringCut = substr($string, 0, 100);
                                    $endPoint = strrpos($stringCut, ' ');

                                    //if the string doesn't contain any space then it will cut without word basis.
                                    $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                    $string .= '... <br>';
                                    $TextMore500 = false;
                                }
                                echo $string;
                                if (strlen($string) > 500) :
                                    ?> <a href="post/post.php?id=<?php echo $post['id']; ?>" class="btn btn-primary mt-3">See more</a><br> <?php
                                endif;
                                if ($TextMore500) { ?>  <br><a href="post/post.php?id=<?php echo $post['id']; ?>" class="btn btn-primary mt-3" >See
                                    Post</a> <?php
                                } ?>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>
                <!-- /#page-content -->
            <?php
            endforeach;
        endif;
        ?>
    </div>

</main>

<?php include_once '../../includes/footer.php'; ?>
