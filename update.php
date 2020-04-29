<?php 

var_dump($_GET);

$bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=8889', 'root', 'root');

$request = "UPDATE ANIMAL SET   espece = :espece,
                                nom = :nom,
                                taille = :taille, 
                                poids = :poids, 
                                date_de_naissance = :date_de_naissance, 
                                pays_origine = :pays_origine, 
                                sexe = :sexe
                                WHERE (id = $_GET[id])";

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



header('Location: index.php');

?>