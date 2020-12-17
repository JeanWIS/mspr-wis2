<article>
    <div class="container p-5 mt-5">

        <?php
        if ($friendOrNotFriend):
            if ($friendOrNotFriend['status'] !== 1) :
                ?>
                <h2> <?php echo $user['first_name'] ?> </h2>
                <h4>Member since <?php echo $user['created_at'] ?> </h4>
                <a href="delete-friend.php?id=<?php echo $user['id']; ?>" class="btn btn-danger">UnFollow</a>
            <?php
            else :
                ?>
                <h2> <?php echo $user['first_name'] ?> </h2>
                <h4>Member since <?php echo $user['created_at'] ?> </h4>
                <a href="add-friend.php?id=<?php echo $user['id']; ?>" class="btn btn-primary">Follow</a>
            <?php
            endif;

        else:
            ?>
            <h2> <?php echo $user['first_name'] ?> </h2>
            <h4>Member since <?php echo $user['created_at'] ?> </h4>
            <a href="add-friend.php?id=<?php echo $user['id']; ?>" class="btn btn-primary">Follow</a>
        <?php
        endif;

        ?>

    </div>
</article>