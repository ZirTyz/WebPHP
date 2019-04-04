<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="../models/traitement.php" method="post">
        <div>
          <fieldset>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="user_name" placeholder="Ex: Dupont" required>
            <label for="prenom">Prenom :</label>
            <input type="text" id="prenom" name="user_pren" placeholder="Ex: Martine" required>
          </fieldset>

        </div>
        <div>
            <label for="pass"> Votre mot de passe :</label>
            <input type="password" name="user_psw" id="pass" required>

        </div>
        <div>
            <input type="submit" name="" value="S'inscrire">
        </div>
    </form>

  </body>
</html>
