<p>Voici le post (billet) demandé :</p>

<p><b><?= $post->author ?></b></p>
<p><i><?= $post->content ?></i></p>

<br>
<form class="" action="main.ctrl.php?controller=posts&action=Edit&id=<?= $post->id ?>" method="post">
  <input type="submit" name="action" value="Delete"> <br>
  <input type="submit" name="action" value="Edit">
</form>
