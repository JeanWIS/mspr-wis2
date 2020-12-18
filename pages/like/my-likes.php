<?php include_once '../../includes/head.php'; ?>
<?php include_once '../../includes/header.php'; ?>


    <main id="main">

        <?php include_once '../../includes/sidebar.php' ?>

        <section id="content" style="min-height: 400px">
            <div class="container">
                <div class="row">
                    <div class="col-10"><h1>Mes recettes ♥️</h1>
                        <div class="row">

                            <?php
                            // From my id
                            $_SESSION['user']['id'];

                            // find the id of the post that I liked
                            $myLikedPosts = getPostLiked($_SESSION['user']['id']);

                            //
                            foreach ($myLikedPosts

                            as $myLikedPost) {
                            // From the post id find the post info
                            $posts = getPosts($myLikedPost['post_id']);
                            foreach ($posts

                            as $post) {

                            ?>
                                <div class="col-4">
                                    <div class="card text-black-50 bg-light mb-3" style="max-width: 18rem;">
                                        <div class="card-header text-center"> Score Yuka :  <?php  echo $post['score_yuka']; ?> </div>
                                        <div class="card-body">
                                            <h5 class="card-title"><?php  echo $post['title']; ?></h5>
                                            <p class="card-text">

                                                    <?php
                                                    // show only 500 character on the feed.php
                                                    $TextMore500 = true;
                                                    $string = strip_tags($post['body']);
                                                    if (strlen($string) > 500) {

                                                        // truncate string
                                                        $stringCut = substr($string, 0, 500);
                                                        $endPoint = strrpos($stringCut, ' ');

                                                        //if the string doesn't contain any space then it will cut without word basis.
                                                        $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                                        $string .= ' ... <br>';
                                                        $TextMore500 = false;
                                                    }
                                                    echo $string;
                                                    if (strlen($string) > 500) :
                                                        ?> <a href="../post/post.php?id=<?php echo $post['id']; ?>" class="btn btn-primary mt-3">Voir plus</a><br> <?php
                                                    endif;
                                                    if ($TextMore500) { ?>  <br><a href="../post/post.php?id=<?php echo $post['id']; ?>" class="btn btn-primary mt-3" > Voir la recette</a> <?php
                                                    } ?>


                                                </p>
                                        </div>
                                </div>
                            </div>
            <?php

            }
            }

            // Select


            ?>
            </div>
            </div>
            </div>
            </div>
        </section>
    </main>

<?php include_once '../../includes/footer.php'; ?>