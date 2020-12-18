<?php include_once '../includes/head.php'; ?>
<?php include_once '../includes/header.php';



?>

<main id="main">

    <?php include_once '../includes/sidebar.php' ?>

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <?php
                    if ($friends_id = getMyFeed($_SESSION['user']['id'])) : // Find Id friend
                        foreach ($friends_id as $friend_id) : // Foreach friend
                            if ($posts = getMyFeedPosts($friend_id['friend_id'])) :
                                foreach ($posts as $post) :
                                    ?>
                                    <!-- Page Content -->
                                    <div class="container p-5">
                                        <h1> <?php echo $post['title'] ?> </h1>
                                        <h6><?php $created_at = $post['created_at'];
                                            include_once '../includes/time.php'
                                            ?> </h6>
                                        <div class="row">
                                            <div class="col-6">
                                                <img src="<?php echo $post['thumbnail'] ?>" alt=""
                                                     class="img-fluid img-thumbnail ">
                                            </div>
                                            <div class="col-6">
                                                <div>
                                                    <div class="card-header">
                                                        Created by <?php $user =  getUser($post['user_id']);
                                                        echo $user['first_name'] . " " . $user['last_name']; ?>
                                                    </div>
                                                </div>
                                                <div class="content-post mt-3">
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
                        endforeach;
                        else:
                            ?>
                    <div class="container p-5" style="min-height: 400px">
                        <h2>Nouveau sur Ollakino ? </h2>
                        <p>Première étape: se trouver un cuisinier qui te plaît</p>

                        <a href="user/all-users.php" class="btn btn-secondary"> Trouver un Ollakino Cooker </a>
                    </div>
                    <?php
                    endif;

                    ?>
                </div>
            </div>
        </div>
    </section>

</main>


<?php include_once '../includes/footer.php'; ?>


