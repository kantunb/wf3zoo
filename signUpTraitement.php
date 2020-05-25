<?php
require_once './config.php';

function addNewUser() {
    $bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=8889', 'root', 'root');
    $request = "INSERT INTO user (`email`, `password`) VALUES ('$_POST[email]', '$_POST[password]')";
    $response = $bdd->prepare($request);
    $response->execute();
    $result = "Votre compte a bien été créé !";
    return $result;
}

?>

<head>
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

                <?= ($_POST['password'] == $_POST['confirmPassword']) ? addNewUser() : 'Les mots de passe ne correspondent pas.' ?>

            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>