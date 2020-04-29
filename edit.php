<?php

$bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=8889', 'root', 'root');
$request = "SELECT * FROM wf3zoo.ANIMAL WHERE id = :id";
$response = $bdd->prepare($request);
$response->execute([
    ':id' => $_GET['id']
]);
$animals = $response->fetch(PDO::FETCH_ASSOC);

include './partials/function.php';

?>

<!doctype html>
<html lang="fr">

<head>;
    <?php include './partials/head.php' ?>
</head>

<body>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="form-group">
                    <label for="">Modifier un animal</label>
                    <form action="./update.php?id=<?= $_GET['id'] ?>" method="POST">
                        <label id="espece" class="form-text text-muted">Espèce</label>
                        <input type="text" class="form-control" name="espece" aria-describedby="espece" value="<?= $animals['espece'] ?>" required>
                        <label id="nom" class="form-text text-muted">Nom</label>
                        <input type="text" class="form-control" name="nom" aria-describedby="nom" value="<?= $animals['nom'] ?>">
                        <label id="taille" class="form-text text-muted">Taille (en m)</label>
                        <input type="number" class="form-control" name="taille" aria-describedby="taille" value="<?= $animals['taille'] ?>">
                        <label id="poids" class="form-text text-muted">Poids (en kg)</label>
                        <input type="number" class="form-control" name="poids" aria-describedby="poids" value="<?= $animals['poids'] ?>">
                        <label id="date_de_naissance" class="form-text text-muted">Date de naissance</label>
                        <input type="date" class="form-control" name="date_de_naissance" aria-describedby="date de naissance" value="<?= date('Y-m-d', strtotime($animals['date_de_naissance']))  ?>">
                        <label id="pays_origine" class="form-text text-muted">Pays d'origine</label>
                        <input type="text" class="form-control" name="pays_origine" aria-describedby="pays d'origine" value="<?= $animals['pays_origine'] ?>">
                        <label id="sexe" class="form-text text-muted">Sexe</label>
                        <select class="form-control" name="sexe" aria-describedby="sexe" value="">
                                <option value=2 <?= ($animals['sexe'] == 2) ? 'selected' : '' ?>>Femelle</option>
                                <option value=1 <?= ($animals['sexe'] == 1) ? 'selected' : '' ?>>Male</option>
                                <option value=""<?= ($animals['sexe'] == '') ? 'selected' : '' ?>>--Please choose an option--</option>
                        </select>
                        <input class="btn btn-primary mt-4" type="submit" value="Modifier l'animal"> </form>
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