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
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Recontrez-les !</th>

            </tr>
            </thead>
            <tbody>
            <?php if ($friends = getUsers()): ?>
                <?php foreach ($friends as $friend): ?>
                    <tr>
                        <td><?php echo $friend['first_name'] ?></td>
                        <td><?php echo $friend['last_name'] ?></td>
                        <td>
                            <a type="button" class="btn btn-outline-secondary"
                               href="user.php?id=<?php echo $friend['id']; ?>"> Voir son profil
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
        <a class="btn btn-primary mt-4">Ajouter un nouvel ami</a>
    </div>
</section>