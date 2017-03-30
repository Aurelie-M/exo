<?php

session_start();

if(!file_exists(DB_INI)){

	header('Location: http://C:/wamp/www/PHP/exo/errors/error_main.php');

	exit;
}

require 'configs/routes.php';

$default_route = $routes["default"];

// recupere chaque elt séparément 
$default_parts = explode("/", $default_route);

// ce qu'on va récuperer
$method = $_SERVER['REQUEST_METHOD'];

$a = $_REQUEST['a']??$route_parts[2]; // action
$r = $REQUEST['r']??$route_parts[1]; // objet

// route permise ?
// ex: GET/auth/getLogin
if(!in_array($method . '/' . $r . '/' . $a, $routes)){

	die("Ce n'est pas la bonne route");
}

$controllerFile = $r .'Controller.php';

require 'controllers/' . $controllerFile;*/

$data = call_user_func($a);