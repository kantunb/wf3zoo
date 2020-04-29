<?php 

var_dump($_POST);

$bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=8889', 'root', 'root');
// $request = "INSERT INTO ANIMAL (`espece`, `nom`, `taille`, `poids`, `date_de_naissance`, `pays_origine`, `sexe`) VALUES ('". $_POST['espece'] . "','" . $_POST['nom'] . "','" . $_POST['taille'] . "','" . $_POST['poids'] . "','" . $_POST['date_de_naissance'] . "','" . $_POST['pays_origine'] . "','" . $_POST['sexe'] . "')";

$request = "DELETE FROM ANIMAL WHERE (id = $_GET[id])";

$response = $bdd->prepare($request);

$response->execute();

header('Location: index.php');

?>