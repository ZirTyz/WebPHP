
<DOCTYPE html>
    <html>
        <head>
          <link rel="stylesheet" href="../views/css/menu.css">
        </head>
        <body>
            <header>

              <nav>
                <ul>
                  <li><a href='../controllers/main.ctrl.php'>Accueil</a></li>
                  <li><a href='?controller=posts&action=index'>Posts</a></li>
                  <li><a href='?controller=pages&action=write'>Saisir</a></li>
                  <li> <a href='?controller=pages&action=inscription'>S'inscrire</a></li>
                </ul>
              </nav>


            </header>

            <?php // var_dump($controller); var_dump($action);
          //  require_once("../controllers/routes.php"); ?>

            <footer>
              <?= $config['licence'] ?>

            </footer>

        <body>
        <html>
