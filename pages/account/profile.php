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

                <div class="card card-body mt-5 mx-auto" style="max-width: 600px;">
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
        </div>
    </section>
    <div>
        <?php
        if ($friends_id = getMyFeed($_SESSION['user']['id'])) :
            foreach ($friends_id as $friend_id) :
                if ($posts = getMyFeedPosts($friend_id['friend_id'])) :
                    foreach ($posts as $post) :
                        ?>
                        <!-- Page Content -->
                        <div class="container p-5">
                            <h1> <?php echo $post['title'] ?> </h1>
                            <h6><?php echo $post['created_at'] ?> </h6>
                            <div class="row">
                                <div class="col-6">
                                    <img src="<?php echo $post['thumbnail'] ?>" alt=""
                                         class="img-fluid img-thumbnail ">
                                </div>
                                <div class="col-6"><p><?php

                                        // strip tags to avoid breaking any html
                                        $string = strip_tags($post['body']);
                                        if (strlen($string) > 500) {

                                            // truncate string
                                            $stringCut = substr($string, 0, 500);
                                            $endPoint = strrpos($stringCut, ' ');

                                            //if the string doesn't contain any space then it will cut without word basis.
                                            $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                            $string .= '... <a href="" class="btn btn-primary">See post</a>';
                                        }
                                        echo $string;
                                        ?> </p>
                                </div>
                            </div>
                            <hr/>
                        </div>
                        <!-- /#page-content -->
                    <?php
                    endforeach;
                endif;
            endforeach;
        endif;
        ?>
    </div>


</main>

<?php include_once '../../includes/footer.php'; ?>
