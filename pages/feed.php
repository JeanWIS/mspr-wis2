<?php include_once '../includes/head.php'; ?>
<?php include_once '../includes/header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <nav id="menu" class="col-2 bg-secondary">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true"> Feed </a>
                    <a href="#" class="list-group-item list-group-item-action">My friends</a>
                    <a href="./account/profile.php" class="list-group-item list-group-item-action">Profile</a>
                </div>
        </nav>
        <div class="col-lg-9 col-md-8 col-sm-7">
            <div class="article row">
                <h1>Mon titre</h1>
                <h6>Sous-titre, 9 septembre 2020</h6>
                <h6> <?php echo $_SESSION['user']['email']?> </h6>
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


            <div class="article">
                <h1>Mon titre</h1>
                <h6>Sous-titre, 9 septembre 2020</h6>
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
            </div>

        </div>
    </div>
</div>

<?php include_once '../includes/footer.php'; ?>


