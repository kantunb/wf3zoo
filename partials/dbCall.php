<?php 

$bdd = new PDO('mysql:host=localhost;dbname=wf3zoo;charset=utf8;port=8889', 'root', 'root');
$request = "SELECT * FROM ANIMAL";
$response = $bdd->query($request);
$animals = $response->fetchAll(PDO::FETCH_ASSOC);

setlocale(LC_TIME, 'fr_FR.utf8','fra');

?>