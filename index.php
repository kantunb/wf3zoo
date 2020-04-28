<?php
$bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=8889', 'root', 'root');
$request = "SELECT * FROM ANIMAL";
$response = $bdd->query($request);
$animals = $response->fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>WF3 Zoo</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <header>
        <?php include './partials/navbar.php' ?>
    </header>

    <main role="main">

        <?php include './partials/jumbotron.php' ?>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">

                    <?php
                    foreach ($animals as $animal) : ?>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <div class="card-body">
                                    <h2><?= $animal['nom'] ?></h2>
                                    <p>
                                        <strong>Espèce</strong><br>
                                        <?= $animal['espece'] ?> (sexe: <?= $animal['sexe'] ?>)
                                    </p>
                                    <p>
                                        <strong>Morphologie</strong>
                                        <ul>
                                            <li>Poids: <?= $animal['poids'] ?></li>
                                            <li>Taille: <?= $animal['taille'] ?></li>
                                        </ul>
                                    </p>
                                    <p>
                                        <strong>Origine</strong>
                                        <ul>
                                            <li>Né le <?= $animal['date_de_naissance'] ?></li>
                                            <li><strong>Pays de naissance: </strong><?= $animal['pays_origine'] ?></li>
                                        </ul>
                                    </p>
                                    <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Voir la fiche de l'animal</button>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>

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