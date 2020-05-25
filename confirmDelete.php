<?php
require_once './config.php';
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
<html lang="en">

<head>;
    <?php include './partials/head.php' ?>
</head>

<body>
    <header>
        <?php include './partials/navbar.php' ?>
    </header>

    <main role="main">

        <?php include './partials/jumbotron.php' ?>

        <div class="album py-5 bg-light">
            <div class="container">
                Êtes-vous sûr de vouloir supprimer l'animal <?= $animals['nom'] ?> de l'espèce <?= $animals['espece'] ?> ?

                <div class="d-flex align-items-center">
                    <div class="btn-group mr-2">
                        <a href="http://localhost:8888/wf3zoo/delete.php?id=<?=$animals['id'] ?>" <button type="button" class="btn btn-sm btn-outline-secondary">Oui</button></a>
                    </div>
                    <div class="btn-group">
                        <a href="http://localhost:8888/wf3zoo/index.php" <button type="button" class="btn btn-sm btn-outline-secondary">Non</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h2><?= $animals['nom'] ?></h2>
                            <p>
                                <strong>Espèce</strong><br>
                                <?= $animals['espece'] ?> (sexe: <?= gender($animals['sexe']) ?>)
                            </p>
                            <p>
                                <strong>Morphologie</strong>
                                <ul>
                                    <li>Poids: <?= $animals['poids'] ?> kg</li>
                                    <li>Taille: <?= $animals['taille'] ?> mètres</li>
                                </ul>
                            </p>
                            <p>
                                <strong>Origine</strong>
                                <ul>
                                    <li>Né le <?= DOB($animals['date_de_naissance']) ?></li>
                                    <li><strong>Pays de naissance: </strong><?= $animals['pays_origine'] ?></li>
                                </ul>
                            </p>
                            <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                            <!-- <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="http://localhost:8888/wf3zoo/show.php?id=<?= $animals['id'] ?>" <button type="button" class="btn btn-sm btn-outline-secondary">Voir la fiche de l'animal</button></a>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="text-muted">
        <?php include './partials/footer.php' ?>
    </footer>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>