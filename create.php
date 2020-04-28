<?php 

$bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=8889', 'root', 'root');
$insert = "INSERT INTO ANIMAL (`espece`, `nom`, `taille`, `poids`, `date_de_naissance`, `pays_origine`, `sexe`) VALUES ('". $_POST['espece'] . "','" . $_POST['nom'] . "','" . $_POST['taille'] . "','" . $_POST['poids'] . "','" . $_POST['date_de_naissance'] . "','" . $_POST['pays_origine'] . "','" . $_POST['sexe'] . "')";
var_dump($insert);
$request = "SELECT * FROM ANIMAL";
$response1 = $bdd->query($insert);
$response2 = $bdd->query($request);
$animals = $response2->fetchAll(PDO::FETCH_ASSOC);


?>