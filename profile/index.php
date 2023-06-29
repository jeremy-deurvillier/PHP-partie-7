<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PHP Partie 7 - Profil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="/profile" method="get">
        <label for="gender">Civilité :</label>
        <select name="gender">
            <option value="mr">Monsieur</option>
            <option value="mme" selected>Madame</option>
        </select>
        <label for="nom">Nom :</label>
        <input type="" name="nom">
        <label for="prenom">Prénom :</label>
        <input type="" name="prenom">
        <input type="submit" value="Envoyer">
    </form>
<?php
var_dump($_GET);
if (isset($_GET['gender']) && isset($_GET['prenom']) && isset($_GET['nom'])) {
    if (!empty($_GET['gender']) && !empty($_GET['prenom']) && !empty($_GET['nom'])) {
        echo 'Bounjour' . htmlspecialchars($_GET['gender']) . ' ' . htmlspecialchars($_GET['nom']) . ' ' . htmlspecialchars($_GET['prenom']) . '.';
    } else {
        echo 'Paramètres vides.';
    }
}

?>
</body>
</html>
