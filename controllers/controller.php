<?php

session_start();

if (file_exists(DB_INI)) {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if ((isset($_POST['email'])) && (isset($_POST['password']))) {

            // erreur car non connecté
            die('Il faut que vous soyez connecté pour accéder à vos tâches');

        } else {

            // vue quand on est connecté
            include 'controllers/postLoginController.php';
        }

    } elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {

        // vue pour donner un form de connexion
        include 'controllers/getLoginController.php';

    } else {

        header('Location: http://localhost/php/exo/errors/error_405.php');
        exit;
    }

} else {

    header('Location: http://localhost/php/exo/errors/error_main.php');
    exit;
}
