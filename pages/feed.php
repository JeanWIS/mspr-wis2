<?php include_once '../includes/head.php'; ?>
<?php include_once '../includes/header.php'; ?>

<main id="main">

    <?php include_once '../includes/sidebar.php' ?>

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-10">
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
                                            <div class="col-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        Created by <?php $user =  getUser($post['user_id']);
                                                        echo $user['first_name'] . " " . $user['last_name']; ?>
                                                    </div>
                                                </div>
                                                <div class="content-post mt-3">
                                                    <?php

                                                    // strip tags to avoid breaking any html
                                                    $TextMore500 = true;
                                                    $string = strip_tags($post['body']);
                                                    if (strlen($string) > 500) {

                                                        // truncate string
                                                        $stringCut = substr($string, 0, 500);
                                                        $endPoint = strrpos($stringCut, ' ');

                                                        //if the string doesn't contain any space then it will cut without word basis.
                                                        $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                                        $string .= '... <a href="" class="btn btn-primary">See more</a>';
                                                        $TextMore500 = false;
                                                    }
                                                    echo $string . "<br>";
                                                    if ($TextMore500) { ?>  <a href="" class="btn btn-primary">See
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
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>

</main>


<?php include_once '../includes/footer.php'; ?>


