<?php

include './partials/dbCall.php';
include './partials/function.php';

?>

<!doctype html>
<html lang="en">

<head>
    <?php include './partials/head.php' ?>
</head>

<body>
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="form-group">
                    <label for="">Ajouter un animal</label>
                    <form action="./create.php" method="POST">
                        <label id="espece" class="form-text text-muted">Espèce</label>
                        <input type="text" class="form-control" name="espece" aria-describedby="espece" value="" required>
                        <label id="nom" class="form-text text-muted">Nom</label>
                        <input type="text" class="form-control" name="nom" aria-describedby="nom" required>
                        <label id="taille" class="form-text text-muted">Taille (en m)</label>
                        <input type="number" class="form-control" name="taille" aria-describedby="taille">
                        <label id="poids" class="form-text text-muted">Poids (en kg)</label>
                        <input type="number" class="form-control" name="poids" aria-describedby="poids">
                        <label id="date_de_naissance" class="form-text text-muted">Date de naissance</label>
                        <input type="date" class="form-control" name="date_de_naissance" aria-describedby="date de naissance" required>
                        <label id="pays_origine" class="form-text text-muted">Pays d'origine</label>
                        <input type="text" class="form-control" name="pays_origine" aria-describedby="pays d'origine" required>
                        <label id="sexe" class="form-text text-muted">Sexe</label>
                        <select class="form-control" name="sexe" aria-describedby="sexe" required>
                            <option value="">--Please choose an option--</option>
                            <option value=2>Femelle</option>
                            <option value=1>Male</option>
                        </select>
                        <label for="image">Télécharger une photo de l'animal</label>
                        <input type="file" id="image" name="image" accept="image/png, image/jpeg" class="mt-4"><br>
                        <input class="btn btn-primary mt-4" type="submit" value="Créer un animal"> </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>