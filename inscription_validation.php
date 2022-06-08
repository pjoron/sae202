<?php
require 'debut_html.inc.php';
require 'menu.inc.php';
?>

<h1>Création de votre compte !</h1>

<?php

$genre = $_POST['genre'];
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$tel = $_POST['tel'];
$naissance = $_POST['naissance'];
$mail = $_POST['mail'];
$mdp = $_POST['mdp'];

$mdpcrypte = crypt($mdp, '$6$rounds=5000$usesomesillystringforsalt$');


strtolower($prenom);
ucfirst($prenom);
strtoupper($nom);


// var_dump($_POST);
// var_dump($_FILES);


$co = connexionBD();
ajouterBD(
    $co,
    $genre,
    $prenom,
    $nom,
    $tel,
    $naissance,
    $mail,
    $mdpcrypte
);
deconnexionBD($co);
?>


<?php
require 'fin_html.inc.php';
?>