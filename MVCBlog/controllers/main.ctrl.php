<?php

  $config = parse_ini_file("../config/config.ini");

//Page principale
require_once('../models/connection.php');

if (isset($_GET['controller']) && isset($_GET['action'])) {
    //On récupère les paramètres dans l'url...
    $controller = $_GET['controller'];
    $action = $_GET['action'];

} elseif (!isset($controller) && isset($_POST['action'])) {
  $controller = 'pages';
  $action = $_POST['action'];
}
 else {
    //... sinon on donne des valeurs par défaut
    $controller = 'pages';
    $action = 'home';
}

require_once('../views/layout.php');
?>
