<?php
  $config = parse_ini_file('../config/config.ini');
 ?>

<DOCTYPE html>
    <html>
        <head>
        </head>
        <body>
            <header>
                <a href='.'>Accueil</a>
                <a href='?controller=posts&action=index'>Posts</a>
                <a href='?controller=pages&action=write'>Saisir</a>
<!-- /////////// A COMPLETER //////////////// -->
            </header>

            <?php require_once('../controllers/routes.php'); ?>

            <footer>
              <?= $config['licence'] ?>

            </footer>

        <body>
        <html>
