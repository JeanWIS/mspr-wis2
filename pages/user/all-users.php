<?php include_once '../../includes/head.php'; ?>
<?php include_once '../../includes/header.php'; ?>

<main id="main">

    <?php include_once '../../includes/sidebar.php' ?>

    <section id="content">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>Agrandissez votre monde de la cusine !</h1>
        </div>

    </div>
    <div class="container">
        <table class="table w-100">
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
                               href="user.php?id=<?php echo $friend['id']; ?>"> Voir son profil
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
        <a class="btn btn-primary bg-info mt-4">Ajouter un nouvel ami</a>
    </div>
</article>
<h1>TinyMCE Quick Start Guide</h1>
<form method="post">
    <textarea id="mytextarea">Hello, World!</textarea>
</form>

    </section>

</main>


<?php include_once '../../includes/footer.php'; ?>
