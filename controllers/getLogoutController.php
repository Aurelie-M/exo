<?php

$view = 'views/userLogin.php';

if (file_exists(DB_INI)) {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // erreur car non connecté
        die('Déconnexion de l\'utilisateur');
    }
}
