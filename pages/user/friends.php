<?php include_once '../../includes/head.php'; ?>
<?php include_once '../../includes/header.php'; ?>

<!-- Friend_Status: 0 not_friend
                    1 friend
                    2 pending
-->
<main id="main">

    <?php include_once '../../includes/sidebar.php'; ?>

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <?php
                    $id = $_SESSION['user']['id'];
                    ?>
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <h1>Tous mes amis</h1>
                        </div>
                    </div>

                    <div class="container">
                        <?php include_once '../../includes/table_friends.php'; ?>
                        <a class="btn btn-primary mt-4" href="all-users.php">Ajouter de nouveaux amis</a>

                    </div>
                </div>
            </div>
    </section>

</main>

<?php include_once '../../includes/footer.php'; ?>
