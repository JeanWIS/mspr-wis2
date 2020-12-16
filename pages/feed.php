<?php include_once '../includes/head.php'; ?>
<?php include_once '../includes/header.php'; ?>
<?php include_once '../includes/sidebar.php' ?>

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
                                    <img src="<?php echo $post['thumbnail'] ?>" alt="" class="img-fluid img-thumbnail ">
                                </div>
                                <div class="col-6"><p><?php echo $post['body'] ?></p>
                                    <a href="" class="btn btn-primary">See post</a>
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


<?php include_once '../includes/footer.php'; ?>


