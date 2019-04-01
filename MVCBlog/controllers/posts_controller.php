<?php
// Controleurs pour les post du blog

function index() {
    // On stocke les posts dans une variable tableau
    $posts = Post::all();
    require_once('views/posts/index.php');
}

function show() {
    // On s'attend à une url de la forme ?controller=posts&action=show&id=x
    // sans id, on redirige vers la page d'erreur puisqu'on ne peut rien faire sans
    if (!isset($_GET['id'])){
        require_once('views/pages/error.php');die();}

    // on utilise l'id fourni pour obtenir le post correspondant
    $post = Post::find($_GET['id']);
    require_once('views/posts/show.php');
}

function write() {
    //Méthode pour enregistrer le post courant
    // Appel du constructeur de post
  //////////////// A COMPLETER  ////////////////
}

function actor($action) {
    switch ($action) {
        case 'index':
            index();
            break;
        case 'show':
            show();
            break;
        case 'write':
            write();
            break;
        default:
            //On est obligé d'appeler directement error.php, si on appel call()
            // on créé un conflit sur actor() qui est présent dans les deux
            // sous-contrôleurs inclus
            require_once('views/pages/error.php');
            break;

    }
}

?>
