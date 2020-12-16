<?php include_once '../../includes/head.php'; ?>
<?php include_once '../../includes/header.php'; ?>
<?php include_once '../../includes/sidebar.php'; ?>

<!-- Friend_Status: 0 not_friend
                    1 friend
                    2 pending
-->

<article id="my-friend">
        <?php
        $id = $_SESSION['user']['id'];
        ?>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1>All Friends</h1>
            </div>

        </div>

        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">BirthDay</th>
                    <th scope="col">FriendZone</th>

                </tr>
                </thead>
                <tbody>
                <?php if ($id_friends = getFriend($id)): ?>
                    <?php foreach ($id_friends as $id_friend): ?>
                        <?php if ($friends = getUser($id_friend['friend_id'])): ?>
                            <?php foreach ($friends as $friend): ?>

                                <tr>

                                    <td><?php echo $friend['first_name'] ?></td>
                                    <td><?php echo $friend['last_name'] ?></td>
                                    <td><?php echo $friend['birthday'] ?></td>

                                    <td>
                                        <a type="button" class="btn btn-danger"
                                           href="assets/delete-friend.php?id=<?php echo $friend['id']; ?>">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash"
                                                 fill="currentColor"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd"
                                                      d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            </svg>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>


                </tbody>
            </table>
            <a class="btn btn-primary bg-info mt-4">Add a new Friend</a>


</article>


<?php include_once '../../includes/footer.php'; ?>
