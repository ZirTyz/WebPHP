<p>Modifier le post :</p> <br>
<?= $post->content  ?>
<br> <br>
<form class="" action="main.ctrl.php?id=<?= $post->id ?>" method="post">
  <textarea id="post" name="post" rows="5" cols="50" placeholder="Modifier votre post ici..."></textarea><br>
  <input type="submit" name="action" value="Annuler">
  <input type="submit" name="action" value="Modifier">
</form>
