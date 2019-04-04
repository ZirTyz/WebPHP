<p>Voici la liste de tous les posts (seul l’auteur s’affiche, cliquez pour lire le contenu) :</p>

<?php
foreach ($posts as $post) {
    echo "<p>";
    echo "<a href='?controller=posts&action=show&id=$post->id'>$post->author</a>";
    echo "</p>";
}
?>
