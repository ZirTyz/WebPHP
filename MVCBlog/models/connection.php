<?php

// Classe représentant le lien avec la base de données, utilise le patron de conception "singleton"
class Db {
  // Instance unique de la classe
  private static $instance = NULL;
  // Chemin vers le fichier de la BD

  // const dbPath = $config['path'];

  // Acces à l'instance par une méthode de classe : utiliser la syntaxe Db::getInstance()
  public static function getInstance(): PDO {

    // Technique de "lazy initialization" qui crée un objet seulement à la première demande
    // Si l'objet est déjà crée, retourne simmplement sa valeur, sinon crée l'objet
    if (!isset(self::$instance)) {
      try {

        global $config;

        self::$instance = new PDO($config['path']);
        self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (Exception $e) {
        die("erreur de connexion '".$config['path']."' : ".$e->getMessage());
      }
    }
    return self::$instance;
  }
}

?>
