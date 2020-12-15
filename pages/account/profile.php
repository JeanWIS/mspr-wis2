<?php include_once '../../includes/head.php'; ?>
<?php include_once '../../includes/header.php'; ?>

<div class="container" style="min-height: 300px">
    <div class="mt-5">
        <h1> Hey <?php echo $_SESSION['user']['first_name'] ?> </h1>

        <a href="edit.php" class="btn btn-primary"> Edit my Profile</a>
        <a href="delete-action.php" class="btn btn-warning"> Remove my profile!!!</a>
    </div>
</div>

<?php include_once '../../includes/footer.php'; ?>
