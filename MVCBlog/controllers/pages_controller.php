<?php

//contrôleurs pour les pages statiques

function home() {
    //valeurs en dur pour les tests :
    $first_name = 'Jon';
    $last_name = 'Snow';
    require_once('../views/pages/home.php');
}

function error() {
    require_once('../views/pages/error.php');
}

function write() {
  if(isset($_GET['action']))
    $act = $_GET['action'];
    // if ($act == 'Valider') {
    //   require_once('main.ctrl.php?controller=posts&action=write');
    // }
    if ($act == 'Annuler') {
      require_once('main.ctrl.php');
    }
    else {
      require_once('../views/pages/saisir.php'); // Rajouter une valeur "personne" pour spécialiser le nom.
    }

}
////////////////////////////////////////////////////////////////////////////////
function saveP(){
  require_once('?controller=posts&action=write');
  // require_once('../views/pages/savePost.php');
}

function inscription(){
  require_once('../views/pages/formul-inscription.php');
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
        case 'Valider'
            saveP();
            break;
        case 'inscription':
            inscription();
            break;
        default:
            error();
            break;
    }
}

?>
