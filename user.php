<?php

/* ** Exercice 1 ** */

if (isset($_GET['prenom']) && isset($_GET['nom'])) {
    if (!empty($_GET['prenom']) && !empty($_GET['nom'])) {
        echo 'Bonjour ' . htmlspecialchars($_GET['prenom']) . ' ' . htmlspecialchars($_GET['nom']) . '<br>';
    } else {
        echo '[1] L\'un des paramètres est vide.<br>';
    }
} else {
    echo '[1] L\'un des paramètres est manquant.<br>';
}

/* ** Exercice 2 ** */

if (isset($_POST['prenom']) && isset($_POST['nom'])) {
    if (!empty($_POST['prenom']) && !empty($_POST['nom'])) {
        echo 'Bonjour ' . htmlspecialchars($_POST['prenom']) . ' ' . htmlspecialchars($_POST['nom']) . '<br>';
    } else {
        echo '[2] L\'un des paramètres est vide.<br>';
    }
} else {
    echo '[2] L\'un des paramètres est manquant.<br>';
}

/* ** Exercice 3 ** */

var_dump($_GET);

/* ** Exercice 4 ** */
echo '<br>';

var_dump($_POST);

?>
