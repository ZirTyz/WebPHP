<?php

//contrôleurs pour les pages statiques

function home() {
    //valeurs en dur pour les tests :
    $first_name = 'Jon';
    $last_name = 'Snow';
    require_once('views/pages/home.php');
}

function error() {
    require_once('views/pages/error.php');
}

function write() {
    require_once('views/pages/saisir.php'); // Rajouter une valeur "personne" pour spécialiser le nom.
    if(isset($_GET['action']))
      $act = $_GET['action'];
      if ($act == 'Enregistrer') {
        require_once('?controller=posts&action=write');
      }
      if ($act == 'Accueil') {
        require_once('.');
      }
}

function actor($action) {
    switch ($action) {
        case 'home':
            home();
            break;
        case 'write':
            write();
            break;
        case 'error':
            error();
            break;
        default:
            error();
            break;
    }
}

?>
