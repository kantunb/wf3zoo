<?php 
require_once './config.php';
var_dump($_POST);

$bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=8889', 'root', 'root', [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
// $request = "INSERT INTO ANIMAL (`espece`, `nom`, `taille`, `poids`, `date_de_naissance`, `pays_origine`, `sexe`) VALUES ('". $_POST['espece'] . "','" . $_POST['nom'] . "','" . $_POST['taille'] . "','" . $_POST['poids'] . "','" . $_POST['date_de_naissance'] . "','" . $_POST['pays_origine'] . "','" . $_POST['sexe'] . "')";

$request = "INSERT INTO ANIMAL (espece, nom, taille, poids, date_de_naissance, pays_origine, sexe)
            VALUES (:espece, :nom, :taille, :poids, :date_de_naissance, :pays_origine, :sexe)";

$response = $bdd->prepare($request);

$response->execute([
    'espece'            =>  ucfirst(strtolower($_POST['espece'])),
    'nom'               =>  ucfirst(strtolower($_POST['nom'])),
    'taille'            =>  $_POST['taille'],
    'poids'             =>  $_POST['poids'],
    'date_de_naissance' =>  $_POST['date_de_naissance'],
    'pays_origine'      =>  ucfirst(strtolower($_POST['pays_origine'])),
    'sexe'              =>  $_POST['sexe']
]);

var_dump($response->debugDumpParams());


// header('Location: index.php');

?>