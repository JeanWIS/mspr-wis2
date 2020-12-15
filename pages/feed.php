<?php include_once '../includes/head.php'; ?>
<?php include_once '../includes/header.php'; ?>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Start Bootstrap</div>
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div class="container p-5">
        <h1>Mon titre</h1>
        <h6>Sous-titre, 9 septembre 2020</h6>
        <h6> <?php echo $_SESSION['user']['email'] ?> </h6>
        <img src="exo.jpg" alt="">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deserunt dolor, eius ipsam iusto
            nihil
            numquam possimus quod reiciendis similique. Asperiores autem culpa dolores nemo nostrum quaerat
            suscipit
            voluptatum! Accusamus ad aliquam animi blanditiis, cum cumque cupiditate debitis deleniti deserunt
            dolorum
            eligendi error facilis itaque iure modi molestias nam officiis pariatur quibusdam ratione reiciendis
            reprehenderit repudiandae saepe sit soluta totam voluptatem voluptatibus? Architecto, aspernatur
            commodi
            consequatur debitis dicta dignissimos ea eaque eius facilis in nobis possimus quasi reprehenderit
            saepe sunt
            ullam vero voluptatum. Aperiam commodi delectus dignissimos dolorum necessitatibus omnis placeat,
            porro,
            possimus quia ratione voluptatem voluptatibus. At, quam voluptate!</p>
        <hr/>
    </div>
    <!-- /#page-content-wrapper -->

</div>

<?php include_once '../includes/footer.php'; ?>


