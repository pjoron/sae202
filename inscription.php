<?php
require 'debut_html.inc.php';
require 'menu.inc.php';
?>




<form action="inscription_validation.php" method="POST" enctype="multipart/form-data">
    Genre : <select name="genre" required>
        <option value="F">F</option>
        <option value="M">M</option>
    </select><br />
    Prénom : <input type="text" name="prenom" required /><br />
    Nom : <input type="text" name="nom" min="-5000" max="3000" required /><br />
    Numéro de telephone : <input type="tel" name="tel" required /><br />
    Date de naissance : <input type="date" name="naissance" required /><br />
    E-mail : <input type="mail" name="mail" required /> <br />
    Mot de passe : <input type="text" name="mdp" required /><br />

    <input type="submit" value="Créer le compte" />
</form>