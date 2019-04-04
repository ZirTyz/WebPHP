<?php

//Contrôleur frontal
//choix du contrôleur à appeler
function call(string $controller, string $action) {

    //On essaye d’inclure le sous-contrôleur
    $file =  $controller . '_controller.php';
    if (file_exists($file)) {
        require_once($file);
    } else {
        //Si on n’y arrive pas on redirige vers la page d'erreur
        require('../views/pages/error.php');
        die();
    }

    if ($controller === 'posts') {
        //on fait appel au modèle pour pouvoir accéder à la base de données plus tard
        require_once('../models/post.php');
    }

    //Appel de la fonction choisie, chaque sous-contrôleur doit avoir
    // une fonction actor() qui attend l'action en paramètre chaîne
    actor($action);
//     $control = $_GET['controller'];
//     $actio = $_GET['action'];
//     require_once('models/post.php');
//      $file = 'controllers/' . $controller . '_controller.php';
//      require_once($file);
//     // actor($actio);
    // var_dump($file);
}

//Appel principal
call($controller, $action);
?>
