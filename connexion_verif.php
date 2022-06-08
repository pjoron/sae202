<?php
require 'lib.inc.php';


$email = $_POST['email'];
$mdp = $_POST['mdp'];

$co = connexionBD();
$req = 'SELECT * FROM clients WHERE client_email LIKE "' . $email . '"';
// echo '<p>'.$req.'</p>';

// on lance la requête
$resultat = $co->query($req);

// on calcule le nombre de lignes renvoyées
$lignes_resultat = $resultat->rowCount();
if ($lignes_resultat > 0) { // y a-t-il des résultats ?
    // oui : pour chaque résultat : afficher
    $ligne = $resultat->fetch(PDO::FETCH_ASSOC);
    if (password_verify($mdp, $ligne['client_mdp'])) {
        // echo '<p>OK... :)</p>';
        $_SESSION['id_client'] = $ligne['client_code'];
        $_SESSION['prenom_client'] = $ligne['client_prenom'];
        $_SESSION['numero_client'] = $ligne['client_tel'];
        header('location:index.php');
    } else {
        // echo '<p>KO... :(</p>';
        $_SESSION['erreur'] = '<h2 class="erreur">Le mot de passe saisi est incorrect.</h2>';
        header('location:connexion.php');
    }
} else {
    // echo '<p>KO... :(</p>';
    $_SESSION['erreur'] = '<h2 class="erreur">>Désolé, le login saisi n\'existe pas !</h2>';
    header('location:connexion.php');
}
deconnexionBD($co);
