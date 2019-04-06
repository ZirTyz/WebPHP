<?php
require_once('../models/connection.php');

// Un post d'un blog
class Post {

  // Un post a trois attributs
  // ils sont déclarés publiques pour éviter la lourdeur des accesseurs&mutateurs
  //  (et pouvoir utiliser $post->author directement)
  // C'est bien sûr à éviter dans un vrai projet
  public $author;
  public $content;
  public $id; //éventuellement NULL si pas encore d’id attribué

  // Creation d'un post
  public function __construct($author, $content, $id=NULL) {
    $this->author = $author;
    $this->content = $content;
    $this->id = $id;
  }

  // Retourne tous les posts dans un vecteur
  public static function all(): array {
    $list = [];
    $db = Db::getInstance();
    $req = $db->query('SELECT * FROM posts');
    // On créé le tableau des posts depuis la requête sur la base de données
    foreach ($req->fetchAll() as $post) {
      $list[] = new Post($post['author'], $post['content'], $post['id']);
    }
    return $list;
  }

  // Retourne un post connaissant son id
  public static function find(int $id): Post {
    $db = Db::getInstance();
    // On vérifie que $id est bien un entier
    $id = intval($id);
    $req = $db->prepare('SELECT * FROM posts WHERE id = :id');
    // La requête ayant été préparée, on remplace :id avec la valeur de $id
    $req->execute(array('id' => $id));
    $post = $req->fetch();
    return new Post($post['author'], $post['content'], $post['id']);
  }

  // Enregistre le post dans la base, et renvoie vrai si l'écriture a réussi
  public function write(): bool {
    ////////////////// QC05 : A COMPLETER ////////////////
    $db = Db::getInstance();
    $req = 'INSERT INTO posts(id,author,content)' .'VALUES(:id,:author,:content)';
    $ex = $db->prepare($req);
    $ex->execute([':id' => $this->id, ':author' => $this->author, ':content' => $this->content]);
    return TRUE;
  }

  // Fonction qui renvoie la dernière valeur d'id +1
  public function getNewId()
  {
    // code...
  }

}
// $config['path'] = 'sqlite:../models/blog.db';
// $po = new Post('singe','salutTest1',123);
// var_dump($po);
// $po->write();


?>
