<?php include_once ('includes/header.php');?>
<?php include_once ('includes/helpers.php');?>

    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputTitle4">Titre</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Nom de la publication">
            </div>
            <div class="form-group col-md-6">
                <label for="inputScoreYuka4">Score Yuka</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Quel est le score Yuka de l'aliment principal ?">
            </div>
        </div>
        <div class="form-group">
            <label for="inputImage">Image</label>
            <input type="image" class="form-control" id="inputImage" placeholder="Importer une image">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Contenu</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Ecrivez votre recette">
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>

<?php include_once ('includes/footer.php');?>