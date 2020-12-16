<?php include_once '../../includes/head.php'; ?>
<?php include_once '../../includes/header.php'; ?>
<?php include_once '../../includes/sidebar.php'; ?>

<!-- Friend_Status: 0 not_friend
                    1 friend
                    2 pending
-->

<article id="my-friend">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1>Connect with the world</h1>
            </div>

        </div>

        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Let's connect</th>

                </tr>
                </thead>
                <tbody>
                        <?php if ($friends = getUsers()): ?>
                            <?php foreach ($friends as $friend): ?>

                                <tr>

                                    <td><?php echo $friend['first_name'] ?></td>
                                    <td><?php echo $friend['last_name'] ?></td>


                                    <td>
                                        <a type="button" class="btn btn-outline-primary"
                                           href="user.php?id=<?php echo $friend['id']; ?>"> View profile
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>



                </tbody>
            </table>
            <a class="btn btn-primary bg-info mt-4">Add a new Friend</a>


</article>


<?php include_once '../../includes/footer.php'; ?>
