<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PHP Partie 7 - Profil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php

function form() {
    return '<form action="/about" method="get" enctype="multipart/form-data">
        <label for="gender">Civilité :</label>
        <select name="gender">
            <option value="mr">Monsieur</option>
            <option value="mme" selected>Madame</option>
        </select>
        <label for="nom">Nom :</label>
        <input type="" name="nom">
        <label for="prenom">Prénom :</label>
        <input type="" name="prenom">
        <label for="identity">Pièce d\'identité :</label>
        <input type="file" name="identity">
        <input type="submit" value="Envoyer">
    </form>';
}


if (isset($_GET['gender']) && isset($_GET['prenom']) && isset($_GET['nom']) && isset($_GET['identity'])) {
    if (!empty($_GET['gender']) && !empty($_GET['prenom']) && !empty($_GET['nom']) && !empty($_GET['identity'])) {
        echo 'Bounjour ' . htmlspecialchars($_GET['gender']) . ' ' . htmlspecialchars($_GET['nom']) . ' ' . htmlspecialchars($_GET['prenom']) . '.<br>';

        if (explode('.', $_GET['identity'])[1] === 'pdf') {
            echo 'Votre fichier ' . $_GET['identity'];
        } else {
            echo 'Vous devez fournir un fichier au format .pdf.<br>';
        }
    } else {
        echo 'Paramètres vides.<br>';
        echo form();
    }
} else {
    echo form();
}
?>
</body>
</html>
